<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $articles = Article::where('is_accepted', true)->orderBy( 'created_at', 'desc')->paginate(6);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        Article::all();
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function notice ()
    {
    $categories = Category::all();
    $articles = Article::where('is_accepted', true)->get();
    return view ('notice', compact('categories', 'articles'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles->where('is_accepted', true);
        return view('article.byCategory', compact('articles', 'category'));
    }

    public function paginaProva(Article $article){
        $articles = Article::all();
        return view('article.paginaprova', compact('articles'));
    }

    public function filtroScout(){

        return view('article.filtroscout');
    }

}
