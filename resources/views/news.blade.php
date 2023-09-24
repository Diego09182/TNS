<!DOCTYPE html>
<html>
<head>
  <title>Taiwan News</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SwiftFox</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('images/TNS.ico') }}" type="image/x-icon" />
</head>
<body>

  <nav class="lighten-1 black" role="navigation">
    <div class="nav-wrapper container">
        <a class="brand-logo center white-text">Taiwan News</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>
    </div>
  </nav>
  <ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
            <div class="responsive-img" class="background">
                <img class="responsive-img" src="{{ asset('images/TAIWAN NEWS.png') }}">
            </div>
        </div>
    </li>
    <li><a class="waves-effect"><i class="material-icons">info_outline</i>開發者資訊</a></li>
    <li><a class="waves-effect">開發者:SSSS</a></li>
    <li><a class="waves-effect">信箱:ssss.gladmasy@gmail.com</a></li>
  </ul>
  
  <div class="container">
      <h1 class="center-align">Taiwan News</h1>
      <ul class="collection">
          @foreach ($news as $article)
              <li class="collection-item">
                  <h4>{{ $article['title'] }}</h4>
                  <br>
                  <div class="row">
                      <p class="left">作者:{{ $article['author'] }}</p>
                      <p class="right">時間:{{ $article['publishedAt'] }}</p>
                      <br><br><br>
                  </div>
                  <hr>
                  <br>
                  <a href="{{ $article['url'] }}" target="_blank" class="btn right black">閱讀</a>
                  <br><br>
              </li>
          @endforeach
      </ul>
  </div>
  
  <footer class="page-footer black">
    <div class="container">
        <div class="row">
          <div class="col m6 s12">
            <h5 class="white-text">Taiwan News</h5>
            <p class="grey-text text-lighten-4">
              台灣新聞資料
            </p>
          </div>
        </div>
    </div>
    <div class="footer-copyright center">
      <div class="container">
        <a class="white-text">© 2023 TNS</a>
      </div>
    </div>
  </footer>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.14/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.1/vue-router.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>
<script type="text/javascript"></script>
</html>
