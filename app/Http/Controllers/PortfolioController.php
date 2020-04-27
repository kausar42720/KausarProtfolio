<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\abouts;
use DB;

class PortfolioController extends Controller
{
    
    public function aboutDataFetch()
    {
        //
        // $data = abouts::all();
        // return view('admin.about',compact(['data']));

        $data=abouts::all();
        // dd($data);
        return view('admin.about')->with('data', $data);
        // return response()->json(array('status'=>'success', 'data'=>$data));


    }
}
