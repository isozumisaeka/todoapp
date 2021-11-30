<!DOCTYPE HTML>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="utf-8">
    <!-- Description, Keywords and Author -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- style -->
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <!-- style -->
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- font-awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- font-awesome -->
    <link href="css/effects/set2.css" rel="stylesheet" type="text/css">
    <link href="css/effects/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/effects/component.css" rel="stylesheet" type="text/css">
</head>

<body>
    {{-- これはヘッダーのコンポーネント --}}
    @component('components.header')
    @endcomponent
    {{-- ヘッダーのコンポーネント終わり --}}
    <!-- main -->
    <main role="main-home-wrapper" class="container">
        <div class="row">
            {{-- <div class="clearfix"></div> --}}
            <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">
                <ul class="grid-lod effect-2" id="grid" style="padding-left:0px">

                    <li>
                        <figure class="effect-oscar">
                            <img src="image/home-images/image-2.png" alt="" class="img-responsive" >
                            <figcaption>
                                <h2><span>Add Tasks</span></h2>
                                <p>タスクを追加</p>
                                <a href="/addtodo">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="effect-oscar">
                            <img src="image/home-images/image-3.png" alt="" class="img-responsive" />
                            <figcaption>
                                <h2><span>Add Books</span></h2>
                                <p>本を追加</p>
                                <a href="/addbook">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </section>
            {{-- <div class="clearfix"></div> --}}
            <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">
                <ul class="grid-lod effect-2" id="grid">
                        <h1 style="padding-top: 75px"><span>FYT</span></h1>
                        <p style="padding-bottom: 75px">▶　▶　▶　Finish Your TEXT　◀　◀　◀</p>
                    </li>
                    <li>
                        <figure class="effect-oscar">
                            <img src="image/home-images/image-5.png" alt="" class="img-responsive" />
                            <figcaption>
                                <h2><span>View Tasks</span></h2>
                                <p><span>タスク一覧</span></p>
                                <a href="/viewtasks">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                    
                </ul>
            </section>
            <div class="clearfix"></div>
        </div>
    </main>
    <!-- main -->
    <!-- footer -->
    {{-- これはフッターのコンポーネント --}}
    @component('components.footer')
    @endcomponent
    {{-- フッターのコンポーネント終わり --}}
