<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// フォームリクエストの読み込み
use App\Http\Requests\AuthorRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function error(AuthorRequest $request)
    {
        return view('index');
    }
}
