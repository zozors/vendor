@extends('layouts.productsapp')

@section('title', '自動販売機ツール')

@section('message')
    @if (count($errors) > 0)
        <span class="err_msg">
            @foreach ($errors->all() as $error)
                <div>・{{$error}}</div>
            @endforeach
        </span>
    @else
        <span class="msg">
            <div>・メンテナンス画面</div>
        </span>
        @endif
@endsection

@section('content')
    <div class="product-table-title">■新規追加</div>
    <table class="product-table">
        <tr><th>会社ID</th><th>商品名</th><th>価格</th><th>在庫</th><th>コメント</th><th>画像</th><td class="buttun-area"></td></tr>
        <form action="/edit" method="post" enctype="multipart/form-data">
            @csrf
            <tr>
                <!-- <td><input type="number" name="id" value="{{old('id')}}" min="1" max="100"></td> -->
                <td><input type="number" name="company_id" value="{{old('company_id')}}" min="1" max="100"></td>
                <td><input type="text" name="product_name" value="{{old('product_name')}}"></td>
                <td><input type="number" name="price" value="{{old('price')}}" min="1" max="1000">円</td>
                <td><input type="number" name="stock" value="{{old('stock')}}" min="0" max="100">個</td>
                <td><input type="text" name="comment" value="{{old('comment')}}"></td>
                <td><input id="image" type="file" name="img_path" value="{{old('img_path')}}"></td>
                <td class="buttun-area">
                    <input type="submit" class="ins_button" name="insert_product" value="登録">
                </td>
            </tr>
        </form>
    </table>
    <hr size="1">
    <div class="product-table-title">■テーブル情報</div>
    <table class="product-table">
        <tr><th>ID</th><th>会社ID</th><th>ジュース名</th><th>価格</th><th>在庫</th><th>コメント</th><th>画像</th><td class="buttun-area"></td><td class="buttun-area"></td></tr>
        @if (isset($product_list))
            @foreach ($product_list as $product)
                <form action="/edit" method="post" enctype="multipart/form-data">
                    @csrf
                    <tr>
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <td>{{$product->id}}</td>
                        <!-- <td><input type="number" name="id" value="{{$product->id}}"></td> -->
                        <td><input type="number" name="company_id" value="{{$product->company_id}}"></td>
                        <td><input type="text" name="product_name" value="{{$product->product_name}}"></td>
                        <td><input type="number" name="price" value="{{$product->price}}">円</td>
                        <td><input type="number" name="stock" value="{{$product->stock}}">個</td>
                        <td><input type="text" name="comment" value="{{$product->comment}}"></td>
                        <td>
                            <table class="image-table">
                                <tr>
                                    <td><img name="img_path" class="img_path" src="data:image/jpeg;base64,{{$product->img_path}}" alt="image"></td>
                                    <td><input id="image" type="file" name="image"></td>
                                </tr>
                            </table>
                        </td>
                        <td class="buttun-area">
                            <input type="submit" class="upd_button" name="update_product" value="更新">
                        </td>
                        <td class="buttun-area">
                            <input type="submit" class="del_button" name="delete_product" value="削除">
                        </td>
                    </tr>
                </form>
            @endforeach
        @endif
    </table>
@endsection

@section('footer')
    copyright 自動販売機ツール
@endsection