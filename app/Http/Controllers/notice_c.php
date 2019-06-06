<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class notice_c extends Controller
{
    public $successStatus = 200;
    function getPostFromAjax(Request $request){
        $categoryID = $request->categoryID;
        
        if ($categoryID != "all") {
            $data = DB::table('notice_tab')
                    ->select('title','post',DB::raw('date_format(updated_at, "%l:%i %p %D %M %Y") as post_date'))
                    ->where('post_type',$categoryID)
                    ->limit(30)
                    ->get();
        }else{
            $data = DB::table('notice_tab')
                    ->select('title','post',DB::raw('date_format(updated_at, "%l:%i %p %D %M %Y") as post_date'))
                    ->limit(30)
                    ->get();
        }
        

        
        return response()->json([
            'received'=>true,
            'data'=>$data,
            'categoryID'=>$categoryID,
        ],$this->successStatus);
    }
}
