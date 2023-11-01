@extends('layouts.hello')

@section('title', 'index')

@section('menuber','表示ページ')

@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>著者</th>
            <th>値段</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->other}}</td>
                <td>{{$item->price}}円</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')

@endsection
