<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class main_c extends Controller
{
    function getMainPageData(){

        $slider_pics = DB::table('slider_pic_tab')
                        ->select('title','subtitle','pic','short_desc')
                        ->get();

        $galary_pics = DB::table('galary_pic_tab')
                        ->select('pic','title','short_desc')
                        ->get();

        $testimonials = DB::table('testimonials_tab')
                        ->select('pic','name','degination','message')
                        ->get();

        $team = DB::table('team_tab')
                    ->select('pic','name','degination')
                    ->get();
        
        return view('main',[
            'slider_pics' => $slider_pics,
            'galary_pics' => $galary_pics,
            'testimonials' => $testimonials,
            'team' => $team,
        ]);
    }

}
