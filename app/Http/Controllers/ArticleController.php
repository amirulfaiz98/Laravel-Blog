<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        $articles = Article::orderBy('created_at','DESC')->get();
        return view('articles.index')->with(compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Method 1
        // $article = new Article();
        // $article->title = $request->get('title');
        // $article->body = $request->get('body');
        // $article->published = $request->get('published');
        // $article->save();
        //Method 2
        $article = Article::create($request->only('title','body','published'));
        //Method 1
        // $user = auth()->user();
        // $article->user()->associate($user);
        // $article->save();
        //Method 2
        // $user = auth()->user();
        // $article = $user->articles()->create($request->only('title','body','published'));
        // $article->categories()->sync($request->get('categories'));
        // $article->save();
        //return redirect('/articles');
        return redirect()->route('articles:index')->with(['alert-type' => 'alert-success','alert'=> 'Your article saved']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
