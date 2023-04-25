<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;


class CommentsController extends Controller
{
    public function create(Request $request){

        // return $request;

        Comments::create([
            'post_id' => $request->post_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' =>$request->comment
        ]);

        return redirect()->back();

    }
}
