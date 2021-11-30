{{-- これはヘッダーです --}}
<!DOCTYPE html>
<lang="en">
    {{-- インポート --}}

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
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!-- style -->
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- responsive -->
        <link href="css/responsive.css" rel="stylesheet" type="text/css">
        <!-- font-awesome -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- font-awesome -->
        <link href="css/effects/set2.css" rel="stylesheet" type="text/css">
        <link href="css/effects/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/effects/component.css" rel="stylesheet" type="text/css">
        {{-- インポート --}}
        <title>@yield('header')</title>
    </head>
    {{-- ヘッダー --}}
    {{-- ボディ --}}
    <body>
        <header role="header">
            <div class="container">
                <!-- logo -->
                <h1>
                    <a href="/" title=""><img src="image/apple.png" style="width: 1.25em"></a>
                </h1>
                <!-- logo -->
                <!-- nav -->
                <nav role="header-nav" class="navy">
                    <ul>
                        <li><a href="/addtodo" title="About" class="normal">－タスクを追加－</a></li>
                        <li><a href="/addbook" title="Blog" class="normal">－本を追加－</a></li>
                        <li><a href="/viewtasks" title="Work" class="normal">－タスク一覧－</a></li>
                        <li><a href="/viewbooks" title="Work" class="normal">－本棚－</a></li>
                        <li><a href="/viewall" title="Work" class="normal">－達成状況－</li>
                        <li><a href="/viewstatus" title="Work" class="normal">－ステータス－</a></li>
                        <li><a href="/viewunderstand" title="Work" class="normal">－理解度－</a></li>
                        {{-- <li><a href="/viewstatus" title="Work" class="hover">タスクのステータスを見る</a></li> --}}
                        {{-- <li><a href="/viewall" title="Work" class="hover">タスクの進捗を見る</a></li> --}}
                        <!-- <li><a href="contact.html" title="Contact">Contact</a></li> -->
                    </ul>
                </nav>
                <!-- nav -->
            </div>
        </header>

