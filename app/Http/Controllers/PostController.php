<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::all();
        // foreach ($posts as $post){
        // dump(json_encode($post));
        // }
        // $posts = Post::where('name','serik')->get();
        // foreach ($posts as $post){
        // dump($post->toJson());
        // }
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    public function create(){

        return view('post.create');
    }

    public function store(){
         $data = request()->validate([
            'name'=> 'string',
            'email'=>'string',
            'password'=>'string',
         ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('post.show',compact('post'));
   }

   public function edit($id){
    $post = Post::findOrFail($id);
    return view('post.edit',compact('post'));
   }

   public function update(Post $post){
         $data = request()->validate([
            'name'=> 'string',
            'email'=> 'string',
            'password'=> 'string',
         ]);
         $post->update($data);
         return redirect()->route('post.show', $post->id);
   }

   public function delete(Post $post){
         $post->delete();
         return redirect()->route('post.index');
   }

}
