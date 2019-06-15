<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
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
        return view('admin.editNotice');
    }

}
