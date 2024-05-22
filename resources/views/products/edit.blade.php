@extends('layouts.app')

@section('content')
<div class="container">
    <h1>商品情報編集</h1>
    <form action="{{ route('商品情報.update', $商品情報->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="商品名">商品名<span class="text-danger">*</span></label>
            <input type="text" name="商品名" id="商品名" class="form-control" value="{{ $商品情報->商品名 }}" required>
        </div>
        <div class="form-group">
            <label for="メーカー名">メーカー名<span class="text-danger">*</span></label>
            <input type="text" name="メーカー名" id="メーカー名" class="form-control" value="{{ $商品情報->メーカー名 }}" required>
        </div>
        <div class="form-group">
            <label for="価格">価格<span class="text-danger">*</span></label>
            <input type="number" name="価格" id="価格" class="form-control" value="{{ $商品情報->価格 }}" required>
        </div>
        <div class="form-group">
            <label for="在庫数">在庫数<span class="text-danger">*</span></label>
            <input type="number" name="在庫数" id="在庫数" class="form-control" value="{{ $商品情報->在庫数 }}" required>
        </div>
        <div class="form-group">
            <label for="コメント">コメント</label>
            <textarea name="コメント" id="コメント" class="form-control">{{ $商品情報->コメント }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
@endsection