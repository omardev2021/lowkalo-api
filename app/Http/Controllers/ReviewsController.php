<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Soluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function rate(Request $request,Soluation $soluation)
    {
        $user = Auth::user();
        $review = new Review();
        $review->soluation_id = $soluation->id;
        $review->user_id = $user->id;
        $review->notes = $request->notes;
        $review->rate = $request->rate;
        if ($request->file('image_path')) {

            $file = $request->file('image_path');
            $filename ='/images/'. date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $review->image_path = $filename;
        }
        $review->save();
        return redirect()->route('service.details',['type' => $soluation->category->type, 'slug' => $soluation->category->slug,'category'=>$soluation->category])->with('right','success');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
