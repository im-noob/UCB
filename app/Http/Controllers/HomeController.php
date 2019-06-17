<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $successStatus = 200;
    /**
     * Create a new controller instance.
     * ADMIN Section only
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // edit section 
    public function funeditGalary(){
        return view('admin.editGalary');
    }

    public function funeditSlider(){
        return view('admin.editSlider');
    }

    public function funeditTeamMembers(){
        return view('admin.editTeamMembers');
    }

    public function funeditTestimonials(){
        return view('admin.editTestimonials');
    }

    public function funeditNotice(){

        $data = DB::table('notice_tab')
                        ->select('title',DB::raw('date_format(updated_at, "%l:%i %p %D %M %Y") as post_date'))
                        ->orderBy('updated_at','DESC')
                        ->paginate(50);

        
        return view('admin.editNotice',[
            'data' => $data,
        ]);
    }
    public function savePost(Request $request){

        $title = $request->title;
        $post = $request->post;
        $post_type = $request->post_type;

        // inserting to DB
        
        DB::table('notice_tab')
                ->insert([
                    'title' => $title,
                    'post' => $post,
                    'post_type' => $post_type
                ]);
        
        return response()->json(['received'=>true,'successStatus'=>true],$this->successStatus);
    }

}
