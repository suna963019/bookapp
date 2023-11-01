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
}
