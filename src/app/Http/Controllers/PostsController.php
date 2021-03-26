<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Post[]|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\
     */
    public function index()
    {
        return view('posts')->with(array(
            'posts' => Post::all()
        ));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\\Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return $post;
    }
}
