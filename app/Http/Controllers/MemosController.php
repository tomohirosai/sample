<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memo;
use App\User;

class MemosController extends Controller
{
    public function index(Request $request)
    {
        $memos = Memo::searchTitle(request('word'))
           ->get(); //結果を取得
        return view('memos.index', compact('memos'));
    }
}
