<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\ConfirmMail;
use App\Models\Category;
use App\Models\Client;
use App\Models\Review;
use App\Models\Soluation;
use App\Models\User;
use App\Models\Coupon;
use App\Models\Reference;
use Illuminate\Http\Request;
use App\Services\PaymentService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Payment;
use App\Models\Date;
use App\Models\Time;
use App\Models\Reservation;
use Barryvdh\DomPDF\Facade\Pdf;
use App;

class FrontendController extends Controller
{


    private PaymentService $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }


    public function index()
    {
   
        return view('welcome');



    }

    public function premium()
    {
//        $dates = Date::all();
//        return view('frontend.index',compact('dates'));
        return view('frontend.services.premium');



    }

    public function course()
    {
//        if(request('ref')) {
//            $re = request('ref');
//            Session::put('ref',$re);
//        }
        if (Session::get('locale') == 'en') {
            return view('frontend.course_en');

        } else if (Session::get('locale') == 'ar') {

            return view('frontend.course');
        } else {
            Session::put('locale','ar');
            return view('frontend.course');
        }

    }
    public function  confirm_booking() {
    // $booking =    Reservation::where('id',$id)->first();
    // $booking    = Reservation::with('date')->where('id',$id)->first();
    $dates = Date::all();
        return view('frontend.booking',compact('dates'));
    }

    public function book(Request $request) {
        $user = auth()->user()->id;
    $booking =     Reservation::create([
            'name' => $request->name,
            'time_id' => $request->time,
            'date_id' => $request->date,
            'subject' => $request->subject,
            'user_id' =>    $user
        ]);
        $total = 250;
        // return redirect()->route('frontend.booking',$booking->id);
        $url = "https://www.lowkalo.com/status-feedback";
        Session::put('booking_id',$booking->id);
        return  $this->paymentService->payment($request,$total,$url);
        // return redirect()->view('frontend.booking',compact('booking'));
        // return  $this->paymentService->payment($request,$total);
    }



    public function purchaseConsult(Request $request)

    {
        $total = 250;
        return  $this->paymentService->payment($request,$total);
    }

    public function purchase(Request $request)

    {

        $url = "https://www.lowkalo.com/status";
//        $url =   "http://127.0.0.1:8000/status";
        $dis = 0;
        $total = 0;
        $sub = 0;
        if (Session::has('coupon')) {
            $cou = session()->get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name', $cou)->first();
            $total = round(75 - 75 * $coupon->coupon_discount / 100);
            $dis = round(75 * $coupon->coupon_discount / 100);
            $sub = 75;
            // dd( $total);


        } else {


            $total = 75;
            $sub = 75;
            $dis = 0;
            // dd( $total);
        }

        return  $this->paymentService->payment($request,$total,$url);
    }


    public function purchase_guest(Request $request)

    {

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',

        ]);


        return  $this->paymentService->payment_guest($request);
    }

    public function lessons()
    {
        return view('frontend.course.index');
    }

    public function video()
    {
        return view('frontend.course.video');
    }

    public function status()
    {

        if (request('Result') == 'Successful' && request('ResponseCode') == 000) {
            if (Session::has('payment_id')) {
                $co = session()->get('payment_id');
                $payment = Payment::where('id',  $co)->update(['status' => 2]);

            }
        //  $ref =    Session::get('ref');
        //  User::where('ref',$ref)->increment('points', 1);
    //   $user =    User::where('ref',$ref)->get();
            $userId = Auth::id();
            User::where('id',$userId)->update(['subscribed'=>5]);
$id = Auth::id();
            // Reference::create([
            //     'ref'=>$ref,
            //     'ref_email'=> $user[0]['email'],
            //     'customer_email'=> auth()->user()->email,
            // ]);
//            Session()->forget('coupon');
            return view('frontend.status.success',compact('id'));
        } else  if (request('Result') == 'Failure') {
            if (Session::has('payment_id')) {
                $co = session()->get('payment_id');
                $payment = Payment::where('id',  $co)->update(['status' => 3]);

            }

            return view('frontend.status.failure');
        } else {
            return redirect()->route('home');
        }
    }

    public function status_guest()
    {

        if (request('Result') == 'Successful' && request('ResponseCode') == 000) {

//            $userId = session()->get('user_data')['id'];
//            $email = session()->get('user_data')['email'];
//            $name = session()->get('user_data')['name'];
//            $phone = session()->get('user_data')['phone'];
//            $total = session()->get('total');

            $userId = request('urid');
            $email = request('uremail');
            $name = request('name');
            $phone = request('phone');
            $total = request('urtotal');

            $password = str_random(8);
            $hashed_random_password = Hash::make($password);
            $user =  User::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => $hashed_random_password ,
                'subscribed'=>5
            ]);
            $id = $user->id;
//            $details = [
//                'email' => $user->email,
//                'password' => $password
//            ];
//            dispatch(new SendEmailJob($details));
            if (request('coupon')) {
                $co = request('coupon');
                $coupon = Coupon::where('coupon_name',  $co)->first();

                $payment =     Payment::create([
                    'user_id' => $user->id,
                    'coupon_id' =>  $coupon->id,
                    'amount'=>$total,
                    'status' => 2

                ]);
//                Session::put('payment_id',$payment->id);
            } else {
                $payment =       Payment::create([
                    'user_id' => $user->id,
                    'amount'=>$total,
                    'status' => 2

                ]);
            }

            $data = [
                'email' => $email,
                'password' => $password
            ];
            Mail::to($email)->send(new ConfirmMail($data));

            Client::where('id',$userId)->delete();
//            Session()->forget('coupon');
            return view('frontend.status.success_guest',compact('email','id'));

        } else  if (request('Result') == 'Failure') {


            return view('frontend.status.failure_guest');
        } else {
            return redirect()->route('home');
        }
    }




    public function feedback()
    {

        if (request('Result') == 'Successful' && request('ResponseCode') == 000) {
            if (Session::has('payment_id')) {
                $co = session()->get('payment_id');
                $payment = Payment::where('id',  $co)->update(['status' => 2]);

            }
            if (Session::has('booking_id')) {
                $co2 = session()->get('booking_id');
                $booking = Reservation::where('id',  $co2)->update(['status' => 2]);
                $booking2 = Reservation::where('id',  $co2)->get();
                // dd(  $booking2);
                Time::whereId($booking2[0]->time_id)->update(['status' => 2]);

            }

            return view('frontend.status.success_consult');
        } else  if (request('Result') == 'Failure') {
            if (Session::has('payment_id')) {
                $co = session()->get('payment_id');
                $payment = Payment::where('id',  $co)->update(['status' => 3]);

            }
            return view('frontend.status.failure');
        } else {
            return redirect()->route('home');
        }
    }

    public function invoice($order_id)
    {
        $dis = 0;
        $total = 0;
        $sub = 0;
        if (Session::has('coupon')) {
            $cou = session()->get('coupon')['coupon_name'];
            $coupon = Coupon::where('coupon_name', $cou)->first();
            $total = round(250 - 250 * $coupon->coupon_discount / 100);
            $dis = round(250 * $coupon->coupon_discount / 100);
            $sub = 250;
            // dd( $total);
        } else {
            $total = 250;
            $sub = 250;
            $dis = 0;
            // dd( $total);
        }

        $user = User::where('id', $order_id)->first();



        $tax = $total * 15 /100;
        $subtotal = $sub - $tax;
        // $pdf = PDF::loadView('admin.invoice', compact('order', 'orderItem'))->setPaper('a4')->setOptions([
        //     'tempDir' => public_path(),
        //     'chroot' => public_path(),
        // ]);
        // $data = ['order' => $order];
        $pdf = Pdf::loadView('invoice', compact('user','subtotal','tax','dis','total'));
        // dd($pdf);
        Session()->forget('coupon');
        return $pdf->download('invoice.pdf');
    }

public function services() {
        $services = Category::all();
    return view('frontend.services.index',compact('services'));

}
    public function services_details($type, $slug) {
        $category = Category::where('slug',$slug)->first();
//        return $category;
        return view('frontend.services.show',compact('category'));


    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }





    public function Arabic()
    {

        Session()->get('locale');
        Session()->forget('locale');
        Session::put('locale', 'ar');
        return redirect()->back();
    }


    public function English()
    {

        Session()->get('locale');
        Session()->forget('locale');
        Session::put('locale', 'en');
        return redirect()->back();
    }
    public function soluation_show($type, $slug,Soluation $soluation) {
        $rated = false;
        $soluation = Soluation::where('name',$soluation->name)->first();
//        dd($soluation);
//        return $soluation;
        if (Auth::check()) {
            $user  = Auth::user();
            $review = Review::where('user_id',$user->id)->where('soluation_id',$soluation->id)->first();
            if ($review) {
                $rated = true;
                if (Session::get('locale') == 'en') {
                    return view('frontend.soluation',compact('soluation','rated'));


                } else if (Session::get('locale') == 'ar') {

                    return view('frontend.soluation_ar',compact('soluation','rated'));

                } else {
                    Session::put('locale','ar');
                    return view('frontend.soluation_ar',compact('soluation','rated'));

                }

            } else {
                if (Session::get('locale') == 'en') {
                    return view('frontend.soluation',compact('soluation','rated'));


                } else if (Session::get('locale') == 'ar') {

                    return view('frontend.soluation_ar',compact('soluation','rated'));

                } else {
                    Session::put('locale','ar');
                    return view('frontend.soluation_ar',compact('soluation','rated'));

                }

            }
        }
        if (Session::get('locale') == 'en') {
            return view('frontend.soluation',compact('soluation','rated'));


        } else if (Session::get('locale') == 'ar') {

            return view('frontend.soluation_ar',compact('soluation','rated'));

        } else {
            Session::put('locale','ar');
            return view('frontend.soluation_ar',compact('soluation','rated'));

        }

    }

    public function search(Request $request)
    {
        $services = Category::where('name', 'like', "%{$request->term}%")
            ->orWhere('name_ar', 'like', "%{$request->term}%")
            ->get();

        if (Session::get('locale') == 'en') {
            $term = ' search results of : ' . $request->term;
            return view('frontend.services', compact('services','term' ));

        } else if (Session::get('locale') == 'ar') {
            $term = ' نتائج البحث عن: ' . $request->term;
            return view('frontend.services_ar', compact('services','term' ));
        } else {
            Session::put('locale','ar');
            $term = ' نتائج البحث عن: ' . $request->term;
            return view('frontend.services_ar', compact('services','term' ));
        }
        return view('frontend.services', compact('services','term' ));


    }
}




