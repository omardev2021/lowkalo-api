<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Visit;
use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Video;
use App\Models\User;
use App\Models\Payment;
use App\Models\Date;
use App\Models\Time;
use App\Models\Reservation;


class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['show', 'addView']);

        $this->middleware('auth');
        $this->middleware('admin')->except(['checkTimes']);

    }

    public function visits() {
        $visits = Visit::with('soluation')->get();
//        return $visits;
        return view('admin.visits',compact('visits'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users =   User::all();
    //   dd($users);
        return view('admin.index',compact('users'));
    }
    public function videos()
    {
        $videos = Video::all();
        return view('admin.videos.index',compact('videos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createPart()
    {
        return view('admin.parts.create');
    }

    public function allParts()
    {
        $parts = Part::all();
        return view('admin.parts.index' , compact('parts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function payments()
    {
       $payments =  Payment::all();
       return view('admin.payments.index',compact('payments'));
    }

    public function bookings()
    {
       $bookings =  Reservation::where('status',2)->get();
       return view('admin.payments.bookings',compact('bookings'));
    }

    public function storePart(Request $request)
    {
        $part = Part::create($request->all());
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rev()
    {
        $reviews  = Review::all();
        return view('admin.reviews',compact('reviews'));
    }

    public function confirm_review(Review $review) {
        $review->status = 1;
        $review->save();
        return redirect()->back();
    }

    public function reject_review(Review $review) {
        $review->status = 5;
        $review->save();
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function datesIndex()
    {
        // $myappointments = Appointment::latest()->where('user_id', auth()->user()->id)->get();
        $dates = Date::latest()->get();


        return view('admin.dates.index', compact('dates'));
    }


    public function check(Request $request)
    {

        $date = $request->date;
        $appointment = Date::where('date', $date)->first();
        if (!$appointment) {
            return redirect()->to('/appointment')->with('errmessage', 'Appointment time not available for this date');
        }
        $appointmentId = $appointment->id;
        $times = Time::where('date_id', $appointmentId)->get();


        return view('admin.dates.index', compact('times', 'appointmentId', 'date'));
    }

    public function updateTime(Request $request)
    {
        $appointmentId = $request->appoinmentId;
        $appointment = Time::where('date_id', $appointmentId)->delete();
        foreach ($request->time as $time) {
            Time::create([
                'date_id' => $appointmentId,
                'time' => $time,
                'status' => 0,
                'exp' => Carbon::now()
            ]);
        }
        return redirect()->route('appointment.index')->with('message', 'Appointment time updated!!');
    }


    public function createDates()
    {
        return view('admin.dates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDates(Request $request)
    {
        // $this->validate($request, [
        //     'date' => 'required|unique:appointments,date,NULL,id,user_id,' . \Auth::id(),
        //     'time' => 'required'
        // ]);
        $this->validate($request, [

            'time' => 'required',
            'date' => 'required|unique:dates'
        ]);
        // $appointment = Appointment::create([
        //     'user_id' => auth()->user()->id,
        //     'date' => $request->date
        // ]);
        $appointment = Date::create([
            'date' => $request->date
        ]);

        foreach ($request->time as $time) {
            Time::create([
                'date_id' => $appointment->id,
                'time' => $time,
                // 'exp' => Carbon::now()
                //'stauts'=>0
            ]);
        }
        return redirect()->back()->with('message', 'Appointment created for' . $request->date);
    }



    public function checkTimes(Request $request)
    {

        $date = $request->date;
        $appointment = Date::where('date', $date)->first();
        if (!$appointment) {
            return response()->json(['error' => 'Invalid Coupon']);

        }
        $appointmentId = $appointment->id;
        $times = Time::where('date_id', $appointmentId)->where('status',0)->get();

        return response()->json(array(
            'validity' => true,
            'times' => $times
        ));
        // return view('admin.dates.index', compact('times', 'appointmentId', 'date'));
    }

}
