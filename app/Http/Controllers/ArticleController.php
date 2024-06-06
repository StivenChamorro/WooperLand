<?php

namespace App\Http\Controllers;
use App\Models\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){

        return view('articulos.article');

    }

    public function store(Request $request){
        $article = new article();
        $article->nombre_articulo=$request->nombre_articulo;
        $article->tipo_articulo=$request->tipo_articulo;
        $article->costo=$request->costo;
        $article->desc_art=$request->desc_art;
        $article->save();
        return $request;
     }

    public function index(){

        $articles = article::orderBy('id', 'desc')->get();
        return view('articulos/listar', compact('articles'));
    }
     public Function show (article $article){

        return view('articulos/show', compact('article'));

    }
    public function destroy(article $article) {
        $article->delete();
        return redirect()->route('article.index');
    }
    
    public function edit(Article $article)
    {
        return view('articulos.editar', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $article->nombre_articulo = $request->nombre_articulo;
        $article->tipo_articulo = $request->tipo_articulo;
        $article->costo = $request->costo;
        $article->desc_art = $request->desc_art;
        $article->save();

        return redirect()->route('article.index');
    }

}
