<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function getAllArticles()
    {
        $articles = Article::get();

        return response()->json([
            'status'=> true,
            'errors'=> [],
            'data' => $articles
        ]);
    }

    public function getOneArticle($id)
    {
        $article = Article::find($id);
        if ($article) {
            return response()->json([
                'status'=> true,
                'errors'=> [],
                'data' => $article
                ]);
        }
        return response()->json([
                'status'=> true,
                'errors'=> "article_not_found",
                ]);
    }
}