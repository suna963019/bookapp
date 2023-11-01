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
        $item=Books::find($request->id);
        return view('book.edit',['item'=>$item]);
    }
    public function update(Request $request){
        $this->validate($request,Books::$rules);
        $books=Books::find($request->id);
        $form=$request->all();
        unset($form['_token']);
        $books->fill($form)->save();
        return redirect('/book');
    }


    public function delete(Request $request){
        $books=Books::find($request->id);
        return view('book.del',['item'=>$books]);
    }
    public function remove(Request $request){
        $books=Books::find($request->id)->delete();
        return redirect('/book');
    }
}
