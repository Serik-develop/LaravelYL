<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends \App\Http\Controllers\Controller
{
    public function __invoke(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create',compact('categories','tags'));
    }

}
