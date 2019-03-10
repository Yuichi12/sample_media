<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="">
  <link rel="icon" href="" sizes="" type="image/png">
  <!-- スマホ用アイコン画像 -->
  <link rel="apple-touch-icon-precomposed" href="">
  <title>メディア投稿サイト -@yield('title')-</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
</head>
<body>

<div class="c-load js-load-bg">
  <img src="{{ asset('/storage/uploads/gif-load.gif') }}" alt="" class="c-load-img">
</div>

@if(Session::has('message'))
<div class="c-session-msg js-show-msg">
  {{ session('message') }}
</div>
@endif

  <header class="p-header" id="header">
    <div class="p-header__title">
    <a href="{{ route('home') }}" style="color:#fff"><!-- リファクタリング -->
      MEDIA
    </a>
    </div>

    <div class="c-menu-trigger js-toggle-sp-menu">
      <span class="c-menu-trigger__bar"></span>
      <span class="c-menu-trigger__bar"></span>
      <span class="c-menu-trigger__bar"></span>
    </div>

    <div class="p-header__overray js-toggle-bg"></div>
    
    <nav class="p-header__nav js-toggle-bg">
      <ul class="p-menu">
        <li class="p-menu-item"><a href="#modal01" class="p-menu-link js-modal modalOpen">このサイトについて</a></li>
        @if(!Auth::check())
        <li class="p-menu-item"><a href="{{ route('user.signup') }}" class="p-menu-link">サインイン</a></li>
        <li class="p-menu-item"><a href="{{ route('user.login') }}" class="p-menu-link">ログイン</a></li>
        @else
        <li class="p-menu-item"><a href="{{ route('user.mypage') }}" class="p-menu-link">マイページ</a></li>
        <li class="p-menu-item"><a href="{{ route('user.logout') }}" class="p-menu-link">ログアウト</a></li>

        <li class="p-menu-item p-menu-item-sp"><a href="{{ route('user.post_article') }}" class="p-menu-link">記事を投稿する</a></li>
        <li class="p-menu-item p-menu-item-sp"><a href="{{ route('user.prof_edit') }}" class="p-menu-link">プロフィール編集</a></li>
        <li class="p-menu-item p-menu-item-sp"><a href="{{ route('user.pass_edit') }}" class="p-menu-link">パスワード変更</a></li>
        <li class="p-menu-item p-menu-item-sp"><a href="{{ route('user.contact') }}" class="p-menu-link">管理者へお問い合わせ</a></li>
        <li class="p-menu-item p-menu-item-sp"><a href="{{ route('user.with_draw') }}" class="p-menu-link">退会する</a></li>
        @endif
      </ul>
    </nav>
  </header>

  <div id="modal01" class="js-modal modal" style="">
  <div class="overLay modalClose"></div>
  <div class="inner">
  <a href="" class="modalClose"><i class="far fa-times-circle"></i></a>
  <section class="p-hero">
  <h2 class="p-hero-title">ポートフォリオ用に作成したシンプルな記事投稿サービスです。</h2>

  <p class="p-hero-text">フレームワークはLaravel5.5、CSSプリプロセッサはSassを使用しています。</p>
  <p class="p-hero-text">ローカルでの開発環境はDocker、本番環境はさくらのVPS、LAMP環境です。</p>
  
  <p class="p-hero-text">未ログインでも、記事一覧と記事詳細画面は閲覧可能です。その他の機能は会員のみ可能です。</p>
  <p class="p-hero-text">主な機能は下記になります。</p>
  <div class="p-hero-list-wrapper">
  <ul class="p-hero-list">
    <li class="p-hero-item">新規ユーザー登録機能</li>
    <li class="p-hero-item">退会機能</li>
    <li class="p-hero-item">ログイン機能</li>
    <li class="p-hero-item">ログアウト機能</li>
    <li class="p-hero-item">記事一覧画面</li>
    <li class="p-hero-item">記事詳細画面</li>
    <li class="p-hero-item">記事投稿機能</li>
  </ul>
  <ul class="p-hero-list">
    <li class="p-hero-item">マイページ画面</li>
    <li class="p-hero-item">プロフィール編集機能</li>
    <li class="p-hero-item">パスワード変更機能</li>
    <li class="p-hero-item">パスワードリマインダー</li>
    <li class="p-hero-item">管理ユーザーログイン機能</li>
    <li class="p-hero-item">管理ユーザーによる一般会員アクセス制限機能</li>
    <li class="p-hero-item">管理ユーザーによる記事削除機能</li>
  </ul>
  </div>
  <p class="p-hero-text">管理ユーザーには新規登録画面は用意しておりません。下記メールアドレスとパスワードでリンク先から管理ユーザーとしてログイン出来ます。</p>
  <p class="p-hero-text">メールアドレス:example100@gmail.com<br>パスワード:secret</p>
  <a href="{{ route('admin.login') }}" class="p-hero-link">管理ユーザーログインはこちら</a>
</section>

</div>
  </div>

  @yield('content')

  <footer class="p-footer js-footer" id="footer">
    &copy;All Rights Reserve.
  </footer>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
