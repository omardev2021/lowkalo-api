<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Video;
use App\Models\Part;
use App\Models\View;
use App\Models\Comment;
use Storage;
use Illuminate\Support\Str;
use App\Jobs\ConvertVideoForStreaming;
use App\Models\Convertedvideo;
use Illuminate\Support\Facades\Auth;
use FFMpeg\Coordinate\Dimension;
use FFMpeg\Format\Video\X264;
use FFMpeg;

class VideoController extends Controller
{

    public function __construct() 
    {
        // $this->middleware('auth')->except(['show', 'addView']); 

        $this->middleware('auth'); 
        $this->middleware('client')->except(['create', 'edit','store']); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Part::orderBy('id','asc')->get();;
        return view('frontend.course.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parts = Part::all();
        return view('admin.videos.uploader',compact('parts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|required',
            'video' => 'required',
        ]);


        $randomPath = Str::random(16);
        $videoPath = $randomPath . '.' . $request->video->getClientOriginalExtension();
        $imagePath = $randomPath . '.' . $request->image->getClientOriginalExtension();

        $image = Image::make($request->image)->resize(320, 180);

        $path = Storage::put($imagePath, $image->stream());

        $request->video->storeAs('/', $videoPath, 'public');
        // dd($request->video);
        $video = Video::create([
            'disk'        => 'public',
            'video_path'  => $videoPath,
            'image_path'  => $imagePath,
            'title'       => $request->title,
            'user_id'     => auth()->id(),
            'part_id'     => $request->part_id,
        ]);
        
        ConvertVideoForStreaming::dispatch($video);
        // $low = (new X264('aac', 'libx264'))->setKiloBitrate(500);
        // $low2 = (new X264('aac', 'libx264'))->setKiloBitrate(900);
        // $low3 = (new X264('aac', 'libx264'))->setKiloBitrate(1500);
        // $low4 = (new X264('aac', 'libx264'))->setKiloBitrate(3000);

        // $name = '240-' . $video->video_path;
        // $name2 = '360-' . $video->video_path;
        // $name3 = '480-' . $video->video_path;
        // $name4 = '720-' . $video->video_path;

        // FFMpeg::fromDisk($video->disk)
        //     ->open($video->video_path)
        //     ->addFilter(function ($filters) {
        //         $filters->resize(new Dimension(426, 240));
        //     })
        //     ->export()
        //     ->toDisk(env('public'))
        //     ->inFormat($low)

        //     ->save($name)

        //     ->addFilter(function ($filters) {
        //         $filters->resize(new Dimension(640, 360));
        //     })
        //     ->export()
        //     ->toDisk(env('public'))
        //     ->inFormat($low2)

        //     ->save($name2)

        //     ->addFilter(function ($filters) {
        //         $filters->resize(new Dimension(1280, 720));
        //     })
        //     ->export()
        //     ->toDisk(env('public'))
        //     ->inFormat($low3)

        //     ->save($name3)

        //     ->addFilter(function ($filters) {
        //         $filters->resize(new Dimension(426, 240));
        //     })
        //     ->export()
        //     ->toDisk(env('public'))
        //     ->inFormat($low4)

        //     ->save($name4);


        // $view = View::create([
        //     'video_id' => $video->id,
        //     'user_id' => auth()->id(),
        //     'views_number' => 0
        // ]);

        // ConvertVideoForStreaming::dispatch($video);

        return redirect()->back()->with(
            'success',
            'سيكون مقطع الفيديو متوفر في أقصر وقت عندما ننتهي من معالجته'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        $c = auth()->user()->views;
        $count = count($c);
   
        $per = $count / 14 * 100 ;
        $percen = (int) $per;
        // dd($percen);
        $comments = Comment::all();
        $videos = Video::all();
        $id = $video->id + 1;
        $idp = $video->id - 1;
    
        return view('admin.videos.show-video', compact('video','comments','videos','id','idp','percen'));
    }

    public function showPart(Part $part)
    {
        return view('frontend.course.show-parts', compact('part'));
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

    public function view(Request $request)
    {
        $id = auth()->user()->id;
    
        $vid =(int) $request->video_id;
    //     // dd($vid);
    //    $view =  View::where('user_id',$id)->where('video_id',$vid)->exists();
        // dd($view);
        if (View::where('user_id',$id)->where('video_id',$vid)->exists()) {
            return;
        } else {
            View::create([
                'user_id'=>$id,
                'video_id'=>$request->video_id,
                'count'=>1
            ]);
        }
    //    if(!$view) {
 
    //    }
    //    else{
    //     return;
    //    }
       
    }
}
