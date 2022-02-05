<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class PostController extends Controller
{
   public function store(Request $request){
       $validator = FacadesValidator::make($request->all(),[
                'title' => 'required',
                'description' => 'required',
       ]);

       if($validator->Fails()){
           return back()->with('status','Something Wrong !');
       }else{
        Post::create([
            'user_id'=>auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
        ]);
            
       
       }
       
       return redirect()->route('post.all')->with('status','Post create Successful !');
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

        return redirect()->route('post.all')->with('status','Post Updated !');
   }

   public function delete($postId){
       Post::findOrFail($postId)->delete();

       return redirect()->route('post.all');
   }
}
