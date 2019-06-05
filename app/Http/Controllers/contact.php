<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contact extends Controller
{
    function submitContactForm(Request $request){
        
        $request->validate([
            'name' => 'required|max:150',
            'email' => 'required|email|max:150',
            'subject' => 'required|max:150',
            'message' => 'required|max:1000'
        ]);
        
        DB::table('contact_us_tab')->insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message
        ]);
        return back()->with('success','Request successfully submitted!');

        
    }
}
