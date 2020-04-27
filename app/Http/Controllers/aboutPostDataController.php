<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\abouts;
use DB;


class aboutPostDataController extends Controller
{
    //
    public function aboutPostData(Request $request ){


        $aboutPostData = new abouts;
        $aboutPostData->first_name =$request->input('first_name');
        $aboutPostData->last_name = $request->input('last_name');
        $aboutPostData->full_address = $request->input('full_address');
        $aboutPostData->contact_no = $request->input('contact_no');
        $aboutPostData->email_no = $request->input('email_no');
        $aboutPostData->details = $request->input('details');
        $aboutPostData->social_media_links = $request->input('social_media_links');
        $aboutPostData->save();
        return redirect('aboutDataFetch');

    }

    





}
