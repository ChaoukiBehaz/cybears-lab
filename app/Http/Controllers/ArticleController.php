<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use PDO;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $db = DB::getPdo();
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        if ($request->has('title')) {
            $title = $request->input('title');
            $query = "SELECT * FROM articles WHERE title like '$title%'";
        } else {
            $query = "SELECT * FROM articles";
        }
        $query .= " ORDER BY created_at DESC";
        $statement = $db->query($query);
        $articles = $statement->fetchAll(PDO::FETCH_OBJ);

        return view('welcome', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function store()
    {
        return view('articles.store');
    }

    public function create(Request $request)
    {
        $article = Article::create($request->all());
        return redirect()->route('articles.show', $article->id);
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
