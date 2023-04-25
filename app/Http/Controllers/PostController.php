<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;

class PostController extends Controller
{
    public function index(){

        $editData = false;

        return view('admin.posts.add_post',compact('editData'));

    }

    public function addPost(Request $request){

        if($request->featured_image){

            // return $img = Image::make($request->featured_image);


            $filename = time().'.'.$request->featured_image->getClientOriginalExtension();
            $request->featured_image->move(public_path('storage/featured_images'), $filename);
            
        }else{
            $filename = $request->old_image;
        }

        posts::UpdateOrCreate([
            'id' => $request->id
        ],  
        [
            
            'title' => $request->title,
            'content' => $request->editor,
            'featured_image' => $filename,
            'status' => ''
            
        ]);

        return redirect()->back()->with('success','Post has been added!');

    }

    public function editPost($id){

        $editData = posts::where('id',$id)->first();

        return view('admin.posts.add_post',compact('editData'));

    }

    public function deletePost($id){

        posts::where('id',$id)->update([
            'status' => 'deleted'
        ]);

        return redirect()->back();

    }

    public function getPosts(Request $request){

        $posts = posts::all();

        return view('admin.posts.all_posts',compact('posts'));

    }
}
