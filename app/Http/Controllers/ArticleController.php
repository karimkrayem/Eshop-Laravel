<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{


    public function index()
    {

        $articles = Article::all();
        $users = User::all();
        $tags = Tag::all();
        return view('backoffice.pages.articlesForm', compact('tags', 'articles', 'users'));
    }

    public function edit($id)
    {
        $articles = Article::find($id);
        return view('backoffice.pages.editarticle', compact('articles'));
    }

    public function destroy($id)
    {
        $delete = Article::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        // Storage::put('public/img/', $request->file('src'));
        $request->validate([
            // 'User_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            // 'user_id' => 'required',
            // 'src' => 'required'
        ]);

        Image::make(request()->file('src'))->resize(300, 200)->save('src/articles/' . $request->file('src')->hashName());
        // $img->save();

        $store = new Article();
        $store->src = $request->file('src')->hashName();
        $store->title = $request->title;
        $store->content = $request->content;
        $store->user_id = $request->user_id;
        $store->save();
        foreach ($request->tag as $tag) {

            $store->tag()->attach($tag);
        }
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $update = Article::find($id);
        $update->title = $request->title;
        $update->content = $request->content;
        // $update->src = $request->src;
        // $update->user_id = $request->user_id;
        $update->save();
        return redirect()->back();
    }
}
