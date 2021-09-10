<?php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::with('tags')->latest()->get();
        return view('welcome', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::where('symbol_code', $id)->first();
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('articles.create', compact('article'));
    }

    public function store()
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

    public function edit($id)
    {
        $article = Article::where('symbol_code', $id)->first();
        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        $attributes = request()->validate([
            'title' => 'required|min:5|max:100',
            'body' => 'required',
            'shot_description' => 'required|max:255',
            'symbol_code' => 'required|exists:articles',
        ]);

        $article = Article::where('id', $id)->first();
        $article->update($attributes);

        $articleTags = $article->tags->keyBy('name');
        $tags = collect(explode(',', request('tags')))->keyBy(function ($item) { return $item; });
        $syncIDs = $articleTags->intersectByKeys($tags)->pluck('id')->toArray();
        $tagsToAttach = $tags->diffKeys($articleTags);

        foreach ($tagsToAttach as $tag) {
            $tag = Tag::firstOrCreate(['name' => $tag]);
            $syncIDs[] = $tag->id;
        }

        $article->tags()->sync($syncIDs);

        return redirect('/');
    }

    public function destroy($id)
    {
        $article = Article::where('id', $id)->first();
        $article->delete();
        return redirect('/');
    }
}
