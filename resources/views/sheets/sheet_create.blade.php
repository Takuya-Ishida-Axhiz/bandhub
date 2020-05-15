<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
                <a class="nav-link" href="/profile">Profile</a>
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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <!-- ここにパンくず作ろう -->
                <nav aria-label="パンくずリスト">
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/sheets">Sheet</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create sheet</li>
                    </ol>
                </nav>
            </div>
    
            <form method="post" action="{{ url('/sheets) }}" class="was-validated">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="exampleFormControlInput1">ライブ＋バンド名</label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：7月ライブ アニソンバンド" value= "{{ old('name') }}"> 
                    @if($errors->has('title'))
                    <span class="error">{{ $error->first('name') }}</span>
                    @endif

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">ライブハウス名</label>
                    <input name="place" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：吉祥寺シルバーエレファント">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1">開始時間</label>
                    <input name="time" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：20:00~">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">日程</label>
                    <input name="date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="例：2020-7-13">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">バンドID</label>
                    <input name="band_id" type="int" class="form-control" id="exampleFormControlInput1" placeholder="例：12">
                </div>

                <input type="submit" class="btn btn-success" value="新規作成">
            </form>
    
    </main>


    @yield('scripts')
</body>
</html>
