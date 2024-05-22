@extends('layouts.app')

@section('content')
<div class="container">
  <h1>商品情報一覧</h1>

  <form id="searchForm" action="{{ route('products.index') }}" method="GET">
    <input type="text" name="productName" placeholder="商品名" value="{{ request('productName') }}">
    <select name="companyName">
      <option value="">全て</option>
      @foreach($companies as $company)
        <option value="{{ $company->name }}" @if(request('companyName') == $company->name) selected @endif>{{ $company->name }}</option>
      @endforeach
    </select>
    <button type="submit">検索</button>
  </form>

  <table class="table">
    <thead>
      <tr>
        <th>商品ID</th>
        <th>商品名</th>
        <th>価格</th>
        <th>企業名</th>
        <th>削除</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->company_name }}</td>
          <td>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">削除</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection