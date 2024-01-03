<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class AccountController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['show', 'addView']);

        $this->middleware('auth');


    }

    public function index() {
        $current_user = auth()->user();
        $email = $current_user->email;
        $name = $current_user->name;




        return view('frontend.account.index',compact('email','name'));
    }

    public function courses() {
        return view('frontend.account.my-courses');

}

public function bookings() {
    $id = auth()->user()->id;
  $bookings =   Reservation::where('user_id',$id)->where('status',2)->get();
    return view('frontend.account.my-bookings',compact('bookings'));

}
public function login() {
        return view('frontend.auth.login');
}

    public function register() {
        return view('frontend.auth.register');
    }



}
