<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ArticleUserController extends Controller
{
    public function show($userId)
    {
        $articles = User::find($userId)->articles;

        return view('articles.show', compact('articles'));
    }
}
