<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        var_dump('должно');
        $articles = $tag->articles()->with('tags')->get();
        return view('welcome', compact('articles'));
    }
}
