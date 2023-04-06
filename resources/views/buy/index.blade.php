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
            @if (isset($sale))
                <div>・自販機シミュレータです。</div>
            @else
                <div>・対象の自動販売機がありません。</div>
            @endif
        </span>
        @endif
@endsection

@section('content')
    @if (isset($sale))
    <!-- <table class="money-area">
        <tr>
            <form action="/buy/money" id="moneyform" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$sale->id}}">
                <td class="money-text-area"><div class="money-text">￥{{$sale->money}}</div></td>
                <td><input class="money-oturi" type="submit" name="oturi" value="返却"></td>
                <td><input class="money-10" type="submit" name="10button" value="10"></td>
                <td><input class="money-100" type="submit" name="100button" value="100"></td>
                <td><input class="money-500" type="submit" name="500button" value="500"></td>
                <td><input class="money-1000" type="submit" name="1000button" value="1000"></td>
            </form>
        </tr>
    </table> -->
<br>
    @if ($sales->products != null)
        <ul class="product-container">
            @foreach ($sales->products as $product)
                <li>
                    <form action="/buy" id="buyform_{{$product->id}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$produts->id}}">
                        <input type="hidden" name="company_id" value="{{$product->company_id}}">
                        <input type="hidden" name="product_name" value="{{$product->product_name}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <!-- <input type="hidden" name="money" value="{{$sale->money}}"> -->
                        <img class="img_path" src="data:image/jpeg;base64,{{$products->img_path}}" alt="image">
                        <div class="product-name">{{$product->name}}</div>
                        <div class="cold-msg">つめた〜い</div>
                        <div class="product-price">{{$product->price}}円</div>
                        <div class="push-button-area">
                        @if (0 < $product->stock)
                            <input class="push-button" type="submit" value="PUSH">
                        @else
                            <input class="push-button-disabled" type="submit" value="SOLD" disabled>
                        @endif
                        </div>
                        <div class="product-stock">在庫：{{$product->stock}}個</div>
                    </form>
                </li>
            @endforeach
        </table>
    @endif
    @endif
@endsection

@section('footer')
    copyright 自動販売機ツール
@endsection