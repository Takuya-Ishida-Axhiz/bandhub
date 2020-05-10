<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- <script src="{{ asset('/js/profile.js') }}" ></script> -->
    
    <link href="{{ asset('/css/profile.css') }}" rel="stylesheet">

    <title>Bandhub MainMenu</title>
</head>
<body>
    <header>
        
            <nav class="navbar navbar-expand-md shadow-sm mb-5　navbar-prim  ">
                    <a href=#><img class="navbar-brand img-responsive " width="70" height="70" src = "{{ asset('assets/images/src/logo.png') }}"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sheet</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Sound</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    </ul>

                    <form class="form-inline">
                    <button class="btn btn-primary" type="submit">ログイン</button>
                </div>
            </nav>
    </header>






    
        <main role="main" class=" ml-sm-auto px-4">


                <aside class="profile-card">
                <header>
                    <!-- here’s the avatar -->
                    <a target="_blank" href="#">
                    <img src="http://lorempixel.com/150/150/people/" class="hoverZoomLink">
                    </a>

                    <!-- the username -->
                    <h1>
                        
                        {{ Auth::user()->name }}    
                        </h1>

                    <!-- and role or location -->
                    <h2>
                            Guitar @ Bandname
                        </h2>

                </header>

                <!-- bit of a bio; who are you? -->
                <div class="profile-bio">
                    <p>
                        age:{{ Auth::user()->age }} /  {{ Auth::user()->gender }}   
                    </p>
                    
                    <p>
                        使用機材：{{ Auth::user()->instruments }}
                    </p>

                    <p>
                        {{ Auth::user()->comments }}
                    </p>

                </div>

                <!-- some social links to show off -->
                <ul class="profile-social-links">
                    <li>
                    <a target="_blank" href="https://www.facebook.com/creativedonut">
                        <i class="fa fa-facebook"></i>
                    </a>
                    </li>
                    <li>
                    <a target="_blank" href="https://twitter.com/dropyourbass">
                        <i class="fa fa-twitter"></i>
                    </a>
                    </li>
                    <li>
                    <a target="_blank" href="https://github.com/vipulsaxena">
                        <i class="fa fa-github"></i>
                    </a>
                    </li>
                    <li>
                    <a target="_blank" href="https://www.behance.net/vipulsaxena">
                    
                        <i class="fa fa-behance"></i>
                    </a>
                    </li>
                </ul>
                </aside>





                <!-- エラーメッセージ。なければ表示しない -->
                @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <!-- フォーム -->
                <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">

                    <!-- アップロードした画像。なければ表示しない -->
                    @isset ($filename)
                    <div>
                        <img src="{{ asset('storage/' . $filename) }}">
                    </div>
                    @endisset

                    <label for="photo">画像ファイル:</label>
                    <input type="file" class="form-control" name="file">
                    <br>
                    <hr>
                    {{ csrf_field() }}
                    <button class="btn btn-success"> Upload </button>
                </form>
        </main>
    


    @yield('scripts')
</body>
</html>