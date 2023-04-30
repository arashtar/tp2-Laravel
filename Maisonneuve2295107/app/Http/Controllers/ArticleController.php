<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('article.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::categorySelect();

        return view('article.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'title_fr' => $request->title_fr,
            'body' => $request->body,
            'body_fr' => $request->body_fr,
            'user_id' => Auth::user()->id,
            'categories_id' => $request->categories_id
       ]);

       return redirect(route('article.show', $article->id))->withSuccess('Article Post inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::categorySelect();
        
        return view('article.edit', ['article' => $article, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        // if (Auth::id() !== $article->user_id) {
        //     abort(403, 'Unauthorized action.');
        // }

        $article->update([
            'title' => $request->title,
            'title_fr' => $request->title_fr,
            'body' => $request->body,
            'body_fr' => $request->body_fr,
            'categories_id' => $request->categories_id
        ]);

        return redirect(route('article.show', $article->id))->withSuccess('Article updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {

        $article->delete();
        return redirect(route('article.index'))->withSuccess('Article Deleted');
    }

    public function page(){
        $articles = Article::select()
        ->paginate(5);

        return view('article.page', ['articles' => $articles ]);

    }
}
