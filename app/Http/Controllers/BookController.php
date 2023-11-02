<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $items = Book::all();
        return view('book.index', ['items' => $items]);
    }

    public function rakuten(Request $request)
    {
        $client = new Client();
        if(empty($request->page)){
            $request->page=1;
        }
        try {
            $count = $request->page;
            $crawler = $client->request('GET', 'https://app.rakuten.co.jp/services/api/BooksTotal/Search/20170404?format=json&keyword=java&booksGenreId=000&applicationId=1061760652970954311&hits=30&page=' . $count);
            $crawler = $crawler->getBody();
            $text = json_decode($crawler, true);
            $text = $text['Items'];
            // dd($text);
        } catch (\Throwable $th) {
            $text = 'ERROR';
        }
        return view('book.rakuten', ['items' => $text,'count'=>$count]);
    }
    public function rakutenAdd(Request $request)
    {
        return view('book.rakutenAdd',['item'=>$request]);
    }
    public function rakutenCreate(Request $request)
    {
        $this->validate($request, Book::$rules);
        $books = new Book();
        $form = $request->all();
        unset($form['_token']);
        $books->fill($form)->save();
        return redirect('/book');
    }

    // 人魚姫
    // ハンス・クリスチャン・アンデルセン
    // 300
    public function add(Request $request)
    {
        return view('book.add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Book::$rules);
        $books = new Book();
        $form = $request->all();
        unset($form['_token']);
        $books->fill($form)->save();
        return redirect('/book');
    }


    public function edit(Request $request)
    {
        $item = Book::find($request->id);
        return view('book.edit', ['item' => $item]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Book::$rules);
        $books = Book::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $books->fill($form)->save();
        return redirect('/book');
    }


    public function delete(Request $request)
    {
        $books = Book::find($request->id);
        return view('book.del', ['item' => $books]);
    }
    public function remove(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/book');
    }

    public function search(Request $request)
    {

        $name = Book::where('name', 'like', '%' . $request->word . '%')->get();
        $author = Book::where('author', 'like', '%' . $request->word . '%')->where('name', 'not like', '%' . $request->word . '%')->get();
        $items = [$name, $author];
        return view('book.search', [
            'check' => true,
            'items' => $items,
            'word' => $request->word,
        ]);
    }
}
