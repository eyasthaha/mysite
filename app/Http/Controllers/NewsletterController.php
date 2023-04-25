<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\posts;
use Mail;
use App\Mail\NewsletterMail;


class NewsletterController extends Controller
{
    public function addSubs(Request $request){
        
        $email = Newsletter::where('email',$request->newsletter_email)->first();

        if($email){

            return redirect()->back()->with('success',$request->newsletter_email.' already subscribed');

        }

        Newsletter::create([
            'email' => $request->newsletter_email,
            'status' => $request->status
        ]);

        return redirect()->back()->with('success',$request->newsletter_email.' subscribed');

    }

    public function SendMail(){

        $post = posts::where('id',1)->first();

        $mailData = [
            'id' => 1,
            'title' => $post->title,
            'content' => $post->content,
            'featured' => $post->featured_image
        ];

        $email = 'eyasthaha@gmail.com';

        // Mail::send('reusable.mail_template', $data, function($message)use ($mail_to){
        //     $message->to($mail_to);
        //     $message->subject('Newsletter');
        // });

        Mail::to('eyasthaha@gmail.com')->send(new NewsletterMail($mailData));

        return 'done';
    }
}
