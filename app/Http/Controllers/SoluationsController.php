<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Soluation;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SoluationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soluations = Soluation::all();

        return view('admin.soluations.index',compact('soluations',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.soluations.add',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cat = new Soluation();
        $cat->name = $request->name;
        $cat->name_ar = $request->name_ar;

        $cat->origin = $request->origin;
        $cat->body = $request->body;
        $cat->body_ar = $request->body_ar;
        $cat->category_id = $request->category_id;

        if ($request->file('image_path')) {

            $file = $request->file('image_path');
            $filename ='/images/'. date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $cat->image_path = $filename;
        }
        $cat->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function aff($id)
    {
//        Session::forget('items');
//        return 1;
        $soluation = Soluation::where('id',$id)->first();
       $items =  Session::get('items');

        if ($items) {
            if (in_array($soluation->id,$items)) {
                return Redirect::to($soluation->link);
            }
        }
        $visit = new Visit();
        $visit->soluation_id = $id;
        $visit->save();
        Session::push('items', $soluation->id);
        return Redirect::to($soluation->link);

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
}
