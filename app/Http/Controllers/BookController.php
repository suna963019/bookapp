<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request){
        $items=Book::all();
        return view('book.index',['items'=>$items]);
    }

    // 人魚姫
    // ハンス・クリスチャン・アンデルセン
    // 300
    public function add(Request $request){
        return view('book.add');
    }
    public function create(Request $request){
        $this->validate($request,Book::$rules);
        $books=new Book();
        $form=$request->all();
        unset($form['_token']);
        $books->fill($form)->save();
        return redirect('/book');
    }


    public function edit(Request $request){
        $item=Book::find($request->id);
        return view('book.edit',['item'=>$item]);
    }
    public function update(Request $request){
        $this->validate($request,Book::$rules);
        $books=Book::find($request->id);
        $form=$request->all();
        unset($form['_token']);
        $books->fill($form)->save();
        return redirect('/book');
    }


    public function delete(Request $request){
        $books=Book::find($request->id);
        return view('book.del',['item'=>$books]);
    }
    public function remove(Request $request){
        Book::find($request->id)->delete();
        return redirect('/book');
    }
}
