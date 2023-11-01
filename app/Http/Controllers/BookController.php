<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(Request $request){
        $items=Books::all();
        return view('book.index',['items'=>$items]);
    }

    // 人魚姫
    // ハンス・クリスチャン・アンデルセン
    // 300
    public function add(Request $request){
        return view('book.add');
    }
    public function create(Request $request){
        $this->validate($request,Books::$rules);
        $books=new Books();
        $form=$request->all();
        unset($form['_token']);
        $books->fill($form)->save();
        return redirect('/book');
    }


    public function edit(Request $request){
        $items=Books::all();
        return view('book.index',['items'=>$items]);
    }
    public function update(Request $request){
        $items=Books::all();
        return view('book.index',['items'=>$items]);
    }


    public function delete(Request $request){
        $items=Books::all();
        return view('book.index',['items'=>$items]);
    }
    public function remove(Request $request){
        $items=Books::all();
        return view('book.index',['items'=>$items]);
    }
}
