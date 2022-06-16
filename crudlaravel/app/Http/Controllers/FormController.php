<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use DataTables;
use Validator;

class FormController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' =>'required',
            'description'=> 'required'
        ]);
        if($validator->passes()){
            
        }
    }
}
