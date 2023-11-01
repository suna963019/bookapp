@extends('layouts.hello')

@section('title', 'edit')

@section('menuber', '更新ページ')

@section('content')
    <div>
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    <form action="/book/edit" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $item->id }}">
        <input type="hidden" name="check" value="true">
        <table>
            <tr>
                <th>ID</th>
                <td>{{ $item->id }}</td>
            </tr>
            <tr>
                <th>名前</th>
                <td><input type="text" name="name" value="{{ $item->name }}"></td>
            </tr>
            <tr>
                <th>著者</th>
                <td><input type="text" name="other" value="{{ $item->other }}"></td>
            </tr>
            <tr>
                <th>値段</th>
                <td><input type="text" name="price" value="{{ $item->price }}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="更新"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')

@endsection
