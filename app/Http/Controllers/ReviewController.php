<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {

            $validator = Validator::make($request->all(), [
                'comment_body' => 'required |string',
                'name' => 'required|string',
                'subject' => 'required|string',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('message', 'comment area is mandetory');
            }
            $posty = true;
            $post = Product::where('slug', $request->product_slug)->first();

            if ($posty) {
                // dd($request);
                Review::create([
                    'product_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'name' => $request->name,
                    'subject' => $request->subject,
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
}
