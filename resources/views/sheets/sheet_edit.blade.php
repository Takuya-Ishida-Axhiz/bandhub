<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Bandhub Sheet_Edit</title>
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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <div class="btn-toolbar mb-2 mb-md-0"> 
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="band"></span>
                        band->name sheet->date @sheet->place
                    </button>
                </div>
            </div>

            <div class="container　my-10 card ">
                <div class = "row">
                    <div class="card-body">
                        <h5 class="card-title px-2">夏ライブアニソンバンド　18:15~</h5>
                        <p class="card-text px-2">7/13(水) @四ツ谷アウトブレイク</p>
                    </div>
                
                </div>

                <div class = "row">   
                    <div class="col-sm-12 col-md-6 ">
                    <img  src="{{ asset('assets/images/src/setting_sample.jpg') }}" class="card-img-top img-thumbnail img-responsive" width="100%" height="50%" alt="...">
                    </div>

                    <div class="col-sm-12 col-md-6 ">
                        <div class="card-body">
                            <h3 class="card-title">SetList</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                        <th>曲順</th>
                                        <th>曲名</th>
                                        <th>時間</th>
                                        <th>ジャンル</th>
                                        <th>リハ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>影踏み</td>
                                        <td>04:32</td>
                                        <td>Rock</td>
                                        <td>１サビ前〜２サビ後</td>
                                        
                                        </tr>
                                        <tr>
                                        <td>2</td>
                                        <td>面影ワープ</td>
                                        <td>04:02</td>
                                        <td>Rock</td>
                                        <td>なし</td>
                                        </tr>

                                        <tr>
                                        <td>3</td>
                                        <td>RisingHope</td>
                                        <td>04:53</td>
                                        <td>Rock</td>
                                        <td>なし</td>
                                        </tr>

                                        <tr>
                                        <td>4</td>
                                        <td>オリオンをなぞる</td>
                                        <td>04:02</td>
                                        <td>Rock</td>
                                        <td>なし</td>
                                        </tr>

                                        <tr>
                                        <td>5</td>
                                        <td>Only my railgun</td>
                                        <td>03:54</td>
                                        <td>POP</td>
                                        <td>ソロ前</td>
                                        </tr>
                                    
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div>
                    </div>

                </div>
                    

                <div class = "row"> 
                    <div class="col-sm-12 col-md-6 card-body">
                        <h3>持ち込み機材</h3>
                        <h5 class="card-title">Helix</h5>
                        <p class="card-text">キャノンケーブルで卓へステレオ出力します。</p>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 card-body">
                        <h3>照明希望</h3>
                        <p class="card-text">全体的にオレンジや赤など暖色系でお願いします。</p>
                    </div>
                </div>
            </div>

        </main>
    


        
    <!-- <div class="card border-primary mt-3 mb-3" style="max-width: 18rem;">
        <div class="card-header">ヘッダ</div>
        <div class="card-body text-primary">
            <h5 class="card-title">Primaryカードタイトル</h5>
            <p class="card-text">カードのタイトルに基づいてカードの内容の大部分を占める簡単なサンプルテキスト。</p>
        </div>
    </div> -->


    @yield('scripts')
</body>
</html>