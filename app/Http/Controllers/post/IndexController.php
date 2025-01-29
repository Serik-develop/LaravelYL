<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends \App\Http\Controllers\Post\BaseController
{
    public function __invoke(FilterRequest $request){
        $data = $request->validated();

        $filter = app()->make(PostFilter::class,['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->get();
        //return PostResource::collection($posts); Postman
        return view("post.index",compact("posts"));
    }

}
