<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {

            $validator = Validator::make($request->all(), [
                'comment_body' => 'required |string',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('message', 'comment area is mandetory');
            }
            $post = Article::where('slug', $request->article_slug)->first();
            // dd($post);

            if ($post) {
                Comment::create([
                    'article_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body,
                ]);
                return  redirect()->back()->with('message', 'Comment posted');
            } else {
                return  redirect()->back()->with('message', 'No such post found');
            }
        } else {
            return redirect('/login.html')->with('message', 'login first to comment ');
        }
    }



    // public function store(Request $request)
    // {
    //     if (Auth::check()) {

    //         $validator = Validator::make($request->all(), [
    //             'comment_body' => 'required |string',
    //         ]);

    //         if ($validator->fails()) {
    //             return redirect()->back()->with('message', 'comment area is mandetory');
    //         }
    //         $post = Product::where('slug', $request->product_slug)->first();
    //         // dd($post);

    //         if ($post) {
    //             Product::create([
    //                 'product_id' => $post->id,
    //                 'user_id' => Auth::user()->id,
    //                 'comment_body' => $request->comment_body,
    //             ]);
    //             return  redirect()->back()->with('message', 'Comment posted');
    //         } else {
    //             return  redirect()->back()->with('message', 'No such post found');
    //         }
    //     } else {
    //         return redirect('/login.html')->with('message', 'login first to comment ');
    //     }
    // }
}
