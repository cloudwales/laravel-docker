<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\\Illuminate\Http\Response
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
