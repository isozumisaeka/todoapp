<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <!-- List group -->
      <div class="container-fuild border">
        <div class="row">
          <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="tab-menu-1"
                  data-toggle="list" href="#tab-content-1"
                  role="tab" aria-controls="tab-content-1">Menu #1</a>
              <a class="list-group-item list-group-item-action" id="tab-menu-2"
                  data-toggle="list" href="#tab-content-2"
                  role="tab" aria-controls="tab-content-2">Menu #2</a>
              <a class="list-group-item list-group-item-action" id="tab-menu-3"
                  data-toggle="list" href="#tab-content-3"
                  role="tab" aria-controls="tab-content-3">Menu #3</a>
            </div>
          </div>
          <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="tab-content-1"
                  role="tabpanel" aria-labelledby="tab-menu-1">Content #1...</div>
              <div class="tab-pane fade" id="tab-content-2"
                  role="tabpanel" aria-labelledby="tab-menu-2">Content #2...</div>
              <div class="tab-pane fade" id="tab-content-3"
                  role="tabpanel" aria-labelledby="tab-menu-3">Content #3...</div>
            </div>
          </div>
        </div>
      </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
                    <a href="#" class="btn btn-outline-primary">枠ボタン Primary</a>
                    <a href="https://laravel.com/docs"><button class='btn btn-default'>Docs</button></a>
                    <a href="https://laracasts.com"><button class='btn btn-primary'>Laracasts</button></a>
                    <a href="https://laravel-news.com"><button class='btn btn-success'>News</button></a>
                    <a href="https://blog.laravel.com"><button class='btn btn-info'>Blog</button></a>
                    <a href="https://nova.laravel.com"><button class='btn btn-warning'>Nova</button></a>
                    <a href="https://forge.laravel.com"><button class='btn btn-danger'>Forge</button></a>
                    <a href="https://vapor.laravel.com"><button class='btn btn-link'>Vapor</button></a>
                    <a href="https://github.com/laravel/laravel"><button class='btn btn-primary'>GitHub</button></a>
                
                    <div>
                      <table border="1">
                        <tr><td>A1</td><td>B1</td><td>C1</td></tr>
                        <tr><td>A2</td><td>B2</td><td>C2</td></tr>
                        <tr><td>A3</td><td>B3</td><td>C3</td></tr>
                     </table>
                    </div>
                
                  </div>
            </div>
        </div>
        
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!-- Scripts（bootstrapのjavascript） -->
    </body>
</html>
