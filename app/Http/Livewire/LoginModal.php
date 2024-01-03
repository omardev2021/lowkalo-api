<?php

namespace App\Http\Livewire;


use App\Mail\OtpMail;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use function Symfony\Component\Translation\t;

//use Mailjet\Resources;

class LoginModal extends Component
{
    public $showModal;

    public $selectedOption;
    public $email;
    public $name;
    public $emailad;
    public $phoneno;

    public $def = true;
    public $phoneNumber;
    public $mode;
    public $otp;
    public $req = false;

    public $otpMessage = '';
    public $submitDisabled = false;
//    protected $rules = [
//        'email' => 'required|email|exists:users,email',
//        'phoneNumber' => 'required|min:3|exists:users,phone',
//        'otp' => 'required',
//        'name' => 'required|min:3',
//        'phoneno' => 'required|min:3|unique:users,phone',
//        'emailad' => 'required|email|unique:users,email'
//
//    ];



//    public function updated($propertyName)
//    {
//        $this->validateOnly($propertyName);
//
//
//    }

    public function sendSMS($phone,$msg) {

        $url = "http://sms.connectsaudi.com/sendurl.aspx";
        $user = "Tamrattr";
        $pwd = "jmbm44p6";
        $senderid = "Advance Dig"; // Include whitespace in the senderid value
        $countryCode = "966";
        $mobileno = $phone;
        $msgtext = $msg;


        $senderid = urlencode($senderid);
        $msgtext = urlencode($msgtext);
        $fullUrl = "$url?user=$user&pwd=$pwd&senderid=$senderid&CountryCode=$countryCode&mobileno=$mobileno&msgtext=$msgtext";

        $ch = curl_init($fullUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $curl_scraped_page = curl_exec($ch);
        curl_close($ch);

    }

    public function submitEmailForm()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email', // 1MB Max
        ]);

        // Insert OTP record into the database
        $otp = Otp::create([
            'email' => $this->email,
            'otp' => rand(1000, 9999), // Generate a random OTP
        ]);

        $data = [
            'otp' => $otp->otp,

        ];
//       return Mail::to('omaros2021@gmail.com')->send(new Confirm($data));

        $message = "<h3>رمز التحقق الخاص بك في تمرات هو ".$otp->otp."</h3>";
        $mail = $this->email;

      Mail::to($mail)->send(new OtpMail($data));
//        $this->sendMail($message,$mail);
//$response->success() && var_dump($response->getData());

        if (config('app.locale') == 'en') {
            $mail =  $this->email;
            $this->otpMessage = 'Your verification code has been sent to '.$mail;
        } elseif (config('app.locale') == 'ar') {
            $mail =  $this->email;
            $this->otpMessage = '
تم ارسال رمز التحقق الخاص بك الى
 '.$mail;
        }
        $this->req = true;
        // Additional logic (e.g., send email with OTP)

        // Reset properties
        $this->email = '';

        // Show OTP form
        $this->showModal = true;
        $this->showInputForm = 'otp';
        $this->otpRecordId = $otp->id;
        $this->def = false;
    }

    public function sendMail ($message,$mail) {

        $mj = new \Mailjet\Client('0f2691fc2f219fbd06b37f24c25ba639', '18133e418df9bfe5df35ab7b3f5d5416');
        $body = [
            'FromEmail' => "info@tamratdates.com",
            'FromName' => "تمرات",
            'Subject' => "رمز التحقق",
            'Text-part' => "رمز التحقق الخاص بك في تمرات",
            'Html-part' => $message,
            'Recipients' => [
                [
                    'Email' => $mail
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);

    }

    public function submitSMSForm()
    {
        $this->validate([
            'phoneNumber' => 'required|min:3|exists:users,phone',
        ]);

        // Insert OTP record into the database
        $otp = Otp::create([
            'phone' => $this->phoneNumber,
            'otp' => rand(1000, 9999), // Generate a random OTP
        ]);

        $msgtext = "رمز التحقق الخاص بك في تمرات هو ".$otp->otp;

        $this->sendSMS($this->phoneNumber,$msgtext);

        // Additional logic (e.g., send SMS with OTP)

        if (config('app.locale') == 'en') {
            $phone =  $this->phoneNumber;
            $this->otpMessage = 'Your verification code has been sent to '.$phone;
        } elseif (config('app.locale') == 'ar') {
            $phone =  $this->phoneNumber;
            $this->otpMessage = '
تم ارسال رمز التحقق الخاص بك الى
 '.$phone;
        }

        // Reset properties
        $this->phoneNumber = '';
        $this->req = true;
        // Show OTP form
        $this->showModal = true;
        $this->showInputForm = 'otp';
        $this->otpRecordId = $otp->id;
    }

    public function resend() {

        $otpRecord = Otp::find($this->otpRecordId);
        if ($otpRecord) {

            if ($otpRecord->email) {
                $data = [
                    'otp' => $otpRecord->otp,

                ];
                Mail::to($otpRecord->email)->send(new Confirm($data));

            } elseif ($otpRecord->phone) {



            }


        }


    }

    public function submitOTPForm()
    {
        // Check if the entered OTP matches the stored OTP record
        $otpRecord = Otp::find($this->otpRecordId);
        if ($otpRecord && $otpRecord->otp == $this->otp) {
            // OTP is valid, perform additional login logic

            // Reset properties
            $this->email = '';
            $this->phoneNumber = '';
            $this->otp = '';
            $this->showModal = false;

            // Find user by email or phone number
            $user = null;
            if ($otpRecord->email) {
                $user = User::where('email', $otpRecord->email)->first();


            } elseif ($otpRecord->phone) {
                $user = User::where('phone', $otpRecord->phone)->first();


            }

            if ($user) {
                // Log the user in
                auth()->login($user);
                $this->emit('userLoggedIn');

                // Redirect or perform additional actions
                return redirect()->route('home');
            } else {
                // User not found, show error message or perform additional actions
                $this->addError('otp', 'User not found. Please try again.');
            }
        } else {
            // Invalid OTP, show error message or perform additional actions
            $this->addError('otp', 'Invalid OTP. Please try again.');
        }
    }

    public function register()
    {
        $this->validate([
            'email' => 'required|email|unique:users,email',
            'phoneNumber' => 'required|min:9|unique:users,phone',
            'name' => 'required|min:3',
        ]);


        // Insert OTP record into the database
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phoneNumber,
            'password' => '123223244345'
        ]);


        $otp = Otp::create([
            'phone' => $user->phone,
            'otp' => rand(1000, 9999), // Generate a random OTP
        ]);
        $msgtext = "رمز التحقق الخاص بك في تمرات هو ".$otp->otp;

        $this->sendSMS($otp->phone,$msgtext);

        if (config('app.locale') == 'en') {
            $phone =  $otp->phone;
            $this->otpMessage = 'Your verification code has been sent to '.$phone;
        } elseif (config('app.locale') == 'ar') {
            $phone =  $otp->phone;
            $this->otpMessage = '
تم ارسال رمز التحقق الخاص بك الى
 '.$phone;
        }
        $this->req = true;
        // Additional logic (e.g., send SMS with OTP)

        // Reset properties
        $this->phoneNumber = '';
        $this->email = '';
        $this->name = '';
        // Show OTP form
        $this->showModal = true;
        $this->showInputForm = 'otp';
        $this->otpRecordId = $otp->id;
    }

    public function resetall()

    {

        $this->email = '';

        $this->req = false;
        $this->otp = '';
        $this->def = true;
    }


    public function render()
    {
        return view('livewire.login-modal');
    }
}
