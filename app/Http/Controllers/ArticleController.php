<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function article()
    {
        $article = Article::all();
        return view('article', compact('article'));
    }
    public function softDelete($id)
    {
        Article::find($id)->delete();
        return back();
    }
    public function trashed()
    {
        $article = Article::onlyTrashed()->get();
        return view('trashed', compact('article'));
    }
    public function restore($id)
    {
        Article::whereId($id)->restore();
        return back();
    }
    public function restoreAll()
    {
        Article::onlyTrashed()->restore();
        return back();
    }
    public function forceDelete($id)
    {
        Article::find($id)->forceDelete();
        return back();
    }
    //Pagination function
    public function home()
    {
        $article = Article::paginate(2);
        return view('article', compact('article'));

        //simple paginate
        //$article = DB::table('articles')->simplePaginate(2);
    }
}
