<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
//use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        //$post = DB::table('post')->get();
        //$post = Post::all()->last();
        $posts = Post::get();
        //dd($post);  //dump and die
        return view('welcome', ['posts'=>$posts]);
    }

    public function detailPost(Post $post)
    {
        //route model binding
        return view('detail', ['post'=>$post]);
    }
}
//if in view folder contains a sob folder you must call as return view('subfolder.detailPost')