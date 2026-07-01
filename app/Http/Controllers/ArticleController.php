<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $articles = Article::latest()->get();
        return view('backend.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $request->validate([
    'title' => 'required|string|max:255',
    'content' => 'required|string'
]);

       Article::create($request->only([
    'title',
    'content'
]));

        return redirect()
        ->route('admin.articles.index')
        ->with('success', 'Məqalə uğurla əlavə edildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
    return view('backend.articles.show', compact('article'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
       return view('backend.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Article $article)
    {
    $request->validate([
    'title' => 'required|string|max:255',
    'content' => 'required|string'
]);

     $article->update($request->only([
    'title',
    'content'
]));

        return redirect()
        ->route('admin.articles.index')
        ->with('success', 'Məqalə uğurla yeniləndi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
   {
        $article->delete();
        return redirect()
    ->route('admin.articles.index')
    ->with('success', 'Məqalə silindi!');
    }
    

    public function allArticles()
{
    $articles = Article::latest()->paginate(6);

    return view(
        'frontend.articles',
        compact('articles')
    );
}

public function showFrontend(Article $article)
{
    return view(
        'frontend.article-detail',
        compact('article')
    );
}
}
