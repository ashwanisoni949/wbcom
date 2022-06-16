<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function index(Request $req) //eme request aapka user se aaaya hai 
    {
        // return "hello controller";
        return $req->file('file')->store('img');//store method use      //choose file krnee par file type ka requet aata hai

    }
}
