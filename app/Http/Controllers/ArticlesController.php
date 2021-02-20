<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $articles = Article::latest()->where('published', 1)->get();

        return view('welcome', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required|min:5',
            'slug' => 'required|unique:articles|regex:/^[a-z0-9-_]+$/i',
            'preview_text' => 'required',
            'text' => 'required',
        ]);

        Article::create(request()->all());

        return redirect('/');
    }
}
