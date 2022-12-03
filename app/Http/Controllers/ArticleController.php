<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Cart;
use App\Models\Info;
use App\Models\User;
use App\Models\Image;
use App\Models\Banner;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as IMG;


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
            'slug' => 'required'
            // 'user_id' => 'required',
            // 'src' => 'required'
        ]);

        IMG::make(request()->file('src'))->resize(300, 200)->save('src/articles/' . $request->file('src')->hashName());
        // $img->save();

        $store = new Article();
        $store->src = $request->file('src')->hashName();
        $store->title = $request->title;
        $store->content = $request->content;
        $store->user_id = $request->user_id;
        $store->slug = $request->slug;
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
        $update->slug = $request->slug;
        $update->content = $request->content;
        // $update->src = $request->src;
        // $update->user_id = $request->user_id;
        $update->save();
        return redirect()->back();
    }


    // view sing blog
    public function viewPost(string $article_slug, $id)
    {

        $banners = Banner::all();
        $infos = Info::all();
        $images = Image::all();

        $numberPost = Comment::where('article_id', $id)->count();
        $slug = Article::where('slug', $article_slug)->get();

        $cart = Cart::all();

        // Mail::to('Image')->send(new HelloMail);
        if (Auth::check()) {

            $authUser = auth()->user();
            $cart = Cart::where('name', $authUser->name)->get();

            $countCart = Cart::where('name', $authUser->name)->count();
        }
        if ($slug) {
            $post = Article::where('slug', $article_slug)->first();

            return view('pages.single-blog', compact('slug', 'images', 'post', 'countCart', 'cart', 'numberPost', 'banners', 'infos'));
        } else {
            return redirect()->back();
        }
    }
}
