<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowController extends \App\Http\Controllers\Controller
{
    public function __invoke($id){
        $post = Post::findOrFail($id);
        return view('post.show',compact('post'));
    }

}
