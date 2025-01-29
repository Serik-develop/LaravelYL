<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class DeleteController extends \App\Http\Controllers\Controller
{
    public function __invoke(Post $post){
        $postag = PostTag::where('post_id',$post->id)->get();
         foreach($postag as $tag){
            $tag->delete();
         }
         $post->delete();
         return redirect()->route('post.index');
    }

}
