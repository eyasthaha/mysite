<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
use App\Models\Postview;
use DB;
class HomepageController extends Controller
{

    public function index(Request $request){

        $posts = posts::where('status','!=','deleted')->get();

        Postview::create([
            'post_id' => 'home',
            'ip'      => $request->ip()
        ]);

        return view('content',compact('posts'));
    }

    public function adminLogin(){
        return view('admin.login');
    }


    public function singlePage(Request $request,$id){


        $data = Postview::create([
            'post_id' => $id,
            'ip'      => $request->ip()
        ]);

        $post = posts::where('id',$id)->first();

        return view('single-post',compact('post'));
    }

    public function aboutus(){
        
        return view('about');
    }
}
