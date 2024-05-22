@extends('layouts.app')

@section('content')
    <h1>商品情報詳細</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <th>商品名</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>メーカー</th>
            <td>{{ $product->maker }}</td>
        </tr>
        <tr>
            <th>価格</th>
            <td>{{ $product->price }}</td>
        </tr>
        <tr>
            <th>在庫数</th>
            <td>{{ $product->stock }}</td>
        </tr>
        <tr>
            <th>コメント</th>
            <td>{{ $product->comment }}</td>
        </tr>
    </table>
@endsection