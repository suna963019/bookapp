@extends('layouts.hello')

@section('title', 'edit')

@section('menuber', '更新ページ')

@section('content')
    <form action="/book/edit" method="post">
        @csrf
        <table>
            <tr>
                <th>ID</th>
                <td>{{ $item->id }}</td>
            </tr>
            <tr>
                <th>名前</th>
                <td>{{ $item->id }}</td>
            </tr>
            <tr>
                <th>著者</th>
                <td>{{ $item->other }}</td>
            </tr>
            <tr>
                <th>値段</th>
                <td>{{ $item->price }}円</td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')

@endsection
