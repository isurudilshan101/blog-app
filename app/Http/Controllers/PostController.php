<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function store(Request $request){
        Post::create([
            'user_id'=>auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return back();
        
   }

   public function show($postId){

    $post=Post::findOrFail($postId);

        return view('posts.show',compact('post'));
   }

   public function edit($postId){
       $post=Post::findOrFail($postId);

       return view('posts.edit',compact('post'));
   }

   public function update($postId,Request $request){
        Post::findOrFail($postId)->update($request->all());

        return redirect()->route('post.all');
   }

   public function delete($postId){
       Post::findOrFail($postId)->delete();

       return redirect()->route('post.all');
   }
}
