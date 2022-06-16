<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert');
    }
    // public function getData(Request $req)
    // {
    //     $req->validate([
    //         'title'=>'required',
    //         'title'=>'required'
    //     ]);
    //     return $req->input();
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'title'=>'required|max:255|regex:/^[\pL\s\-]+$/u|',
            'author'=>'required|max:255',
            'mobile'=>'required|max:10',
            'pass'=>'required',
            'cpass'=>'required|same:pass'

        ]);
        $post=new Post;
        $post->post_title=$request->get('title');
        $post->post_author=$request->get('author');
        $post->post_mobile=$request->get('mobile');
        // $post->post_password=bcrypt($request->get('pass'));
        // $post->post_comfirm=bcrypt($request->get('cpass'));
        $post->post_password=$request->get('pass');
        $post->post_confirm=$request->get('cpass');


        

        // $password = Input::get('post_password');
        // $encrypt=Hash::make($password);

/* 
where post_title database column and title is the form input id

*/
        $post->save();//save is a function
        return redirect('show');
        // echo "<h1>data send successfuly</h>";
        // echo "<script>window.location.href='show.blade.php'</script>";


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        $posts=Post::all();
        return view('show',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post,$id=null)
    {
        $posts=Post::find($id);
        return view('edit',['posts'=>$posts]);//here we create 'posts' new key
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post,$id)
    {
        $posts=Post::find($id);
        $posts->post_title=$request->get('title');
        $posts->post_author=$request->get('author');
        $posts->post_mobile=$request->get('mobile');
        $posts->post_password=$request->get('pass');

        $posts->save();
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post,$id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('show');
    }
}
