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
}