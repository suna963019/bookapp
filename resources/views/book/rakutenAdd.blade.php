@extends('layouts.hello')

@section('title', 'rakutenAdd')

@section('menuber', '楽天追加ページ')

@section('content')
<div>
    <ul>
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>
    <form action="/book/add" method="post">
        @csrf
        <table>
            <tr>
                <th>名前</th>
                <td>{{ $item->name }}</td>
            </tr>
            <tr>
                <th>著者</th>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <th>値段</th>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="send" value="追加"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')

@endsection
