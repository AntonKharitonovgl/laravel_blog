<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function Index()
    {
        $articles = Article::latest()->get();
        return view('welcome', compact('articles'));
    }

    public function Show($id)
    {
        $article = Article::where('symbol_code', $id)->first();
        return view('articles.show', compact('article'));
    }

    public function Create()
    {
        return view('articles.create');
    }

    public function Store()
    {
        $this->validate(request(), [
            'title' => 'required|min:5|max:100',
            'body' => 'required',
            'shot_description' => 'required|max:255',
            'symbol_code' => 'required|unique:articles|',
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->body = request('body');
        $article->shot_description = request('shot_description');
        $article->symbol_code = request('symbol_code');

        $article->save();
        return redirect('/');
    }
}
