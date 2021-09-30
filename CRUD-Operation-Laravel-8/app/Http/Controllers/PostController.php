<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Session;


class PostController extends Controller
{
    public function getAllPost()
    {
        $post = DB::table('post')->get();
        return view('post',compact('post'));
    }
    public function addPost()
    {
        return view('add-post');
    }
    public function AddPostSubmit(Request $request)
    {
        DB::table('post')->insert([
            'post_title'=>$request->title,
            //arrow ke phle sql me jo diya hai vo aur badme html me jo name rehta hai vo
            'post_description'=>$request->description
        ]);
        return back()->with('post_created','Post has been sucessfully Inserted!');
    }
    public function getPostById($post)
    {
        $post = DB::table('post')->where('post_id',$post)->first();
        return view('single-post',compact('post'));//compact ke andar $post jo declear liya hai vo lihkna hota hai
    }
    public function deletePost($id)
    {
        DB::table('post')->where('post_id',$id)->delete();
        return back()->with('post_deleted','Post has been Deleted Sucessfully!');
    }
    public function EditPost($id)
    {
        $post = DB::table('post')->where('post_id',$id)->first();
        return view('edit_post',compact('post'));
    }

    public function updatePost(Request $request)
    {
         DB::table('post')->where('post_id',$request->post_id)->update([
            'post_title'=>$request->title,
            //arrow ke phle sql me jo diya hai vo aur badme html me jo name rehta hai vo
            'post_description'=>$request->description
        ]);
            return back()->with('post_updated','Post has been sucessfully updated!');
    }

    
}
