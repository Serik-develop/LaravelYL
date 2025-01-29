<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends \App\Http\Controllers\Controller
{
    public function __invoke($id){
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        $categories = Category::all();
        return view('post.edit',compact('post','categories','tags'));
    }

}
