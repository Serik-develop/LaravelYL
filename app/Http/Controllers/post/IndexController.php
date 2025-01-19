<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends \App\Http\Controllers\Controller
{
    public function index(){
        $posts = Post::all();
        // foreach ($posts as $post){
        // dump(json_encode($post));
        // }
        // $posts = Post::where('name','serik')->get();
        // foreach ($posts as $post){
        // dump($post->toJson());
        // }
        return view("post.index",compact("posts"));
    }

    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create',compact('categories','tags'));
    }

    public function store(){
         $data = request()->validate([
            'name'=> 'required|string',
            'email'=>'string',
            'password'=>'string',
            'category_id'=>'',
            'tags'=>'',
         ]);
         $tags = $data['tags'];
         unset($data['tags']);
         $post = Post::create($data);
         $post->tags()->attach($tags);

         return redirect()->route('post.index');
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('post.show',compact('post'));
   }

   public function edit($id){
    $post = Post::findOrFail($id);
    $tags = Tag::all();
    $categories = Category::all();
    return view('post.edit',compact('post','categories','tags'));
   }

   public function update(Post $post){
         $data = request()->validate([
            'name'=> 'string',
            'email'=> 'string',
            'password'=> 'string',
            'category_id' => '',
            'tags' => '',
         ]);
         $tags = $data['tags'];
         unset($data['tags']);

         $post->update($data);
         $post->tags()->sync($tags);
         return redirect()->route('post.show', $post->id);
   }

   public function delete(Post $post){
         $postag = PostTag::where('post_id',$post->id)->get();
         foreach($postag as $tag){
            $tag->delete();
         }
         $post->delete();
         return redirect()->route('post.index');
   }

}
