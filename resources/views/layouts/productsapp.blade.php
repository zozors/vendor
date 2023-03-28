<html>
<head>
    <title>***自動販売機ツール***</title>
    <style>
        body { font-family:Arial; font-size:16pt; color:#555555; background-color:#f5f5f5; margin:5px;}
        hr { margin:5px 20px; border-top:1px dashed #555555; }
        .title-area { position:relative; background-color:#333333; height:100px; width:100%; }
        .title-area span { position:absolute; top:10px; left:15px; color:#eeeeee; font-size:45pt; text-align:left; letter-spacing:-4pt; }
        .message-area { position:relative; height:50px; width:100%; font-size:13pt; overflow-y: scroll; }
        .message-area .msg { position:absolute; left:15px; }
        .message-area .err_msg { position:absolute; left:15px; color:red; }
        .footer { text-align:left; font-size:10pt; margin:10px; border-top:solid 1px #ccc; color:#ccc; }
        .product-table th { background-color:#999; color:#fff; padding:5px 10px; }
        .product-table td { vertical-align:top; border: solid 1px #aaa; color:#999; padding:5px 5px; }
        .product-table .image_path { width:70px; }
        .product-table .buttun-area { background-color:none; border:none; display:table-cell; vertical-align:middle; }
        .product-table .ins_button { background-color:#333333; height:45px; width:80px; border-radius:7%; color:#eee; font-size:15px; cursor:pointer; }
        .product-table .upd_button { background-color:#0066FF; height:45px; width:80px; border-radius:7%; color:#eee; font-size:15px; cursor:pointer; }
        .product-table .del_button { background-color:#FF3333; height:45px; width:80px; border-radius:7%; color:#eee; font-size:15px; cursor:pointer; }
        .image-table td { border:none; }
        .product-table-title { font-size:18px; margin:15px 0px 0px 0px; }

        .money-area { height:70px; }
        .money-area .money-text-area { vertical-align:center; text-align:right; }
        .money-area .money-text { background-color:#333333; color:#eee; height:30px; width:120px; padding: 5px; font-size:20px; }
        .money-area .money-10 { background-color:#d2b48c; border-radius:50%; width:50px; height:50px; margin: 0px 5px 5px 5px; font-size: 18px; cursor:pointer; }
        .money-area .money-100 { background-color:#dcdcdc; border-radius:50%; width:50px; height:50px; margin: 0px 5px 5px 5px; font-size: 18px; cursor:pointer; }
        .money-area .money-500 { background-color:#f5f5dc; border-radius:50%; width:50px; height:50px; margin: 0px 5px 5px 5px;  font-size: 18px; cursor:pointer; }
        .money-area .money-1000 { background-color:#fff8dc; border-radius:5%; width:80px; height:45px; margin: 0px 5px 5px 5px;  font-size: 20px; cursor:pointer; }
        .money-area .money-oturi { background-color:#eee; border-radius:5%; width:42px; height:42px; font-size:15px; text-align:center; cursor:pointer; }
        .product-container { display:flex; justify-content:flex-start; flex-wrap:wrap; width:100%; list-style:none; margin:0; padding:0; }
        .product-container li { display:flex; flex-flow:column; width:300px; border:1px solid #ccc }
        .product-container .image_path { width:300px; height:300px; }
        .product-container .product-name { width:300px; text-align:center; }
        .product-container .cold-msg { background-color:blue; color:#eee; width:300px; text-align:center; }
        .product-container .product-price { background-color:#333333; color:#eee; width:300px; text-align:right; }
        .product-container .push-button-area { width:300px; text-align:center; margin: 10px; }
        .product-container .push-button { background-color:#666666; color:#eee; border-radius:100vh; width:200px; font-size:30px; cursor:pointer; }
        .product-container .push-button-disabled { background-color:#ccc; color:#eee; border-radius:100vh; width:200px; font-size:30px; }
        .product-container .product-stock { width:300px; text-align:right; }
    </style>
    </style>
</head>
<body>
    <div class="title-area">
        <span>@yield('title')</span>
    </div>
    <div class="message-area">
        @yield('message')
    </div>
    <hr size="1">
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>