<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request){
        $items=
        return view('book.index',['items'=>$items]);
    }
}
