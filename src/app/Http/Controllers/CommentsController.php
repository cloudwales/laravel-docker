<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\\Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return $post->comments;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\\Illuminate\Http\Response
     */
    public function show(Post $post, Comment $comment)
    {
        return $comment;
    }
}
