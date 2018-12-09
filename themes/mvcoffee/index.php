<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Maverick Coffee</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="./img/touch-icon.png" />
  <link rel="shortcut icon" href="./favicon.ico" />
  <link rel="stylesheet" href="./css/bootstrap-custom.css"/>
  <link rel="stylesheet" href="./css/app.css"/>

  <!--[if lt IE 9]>
  <meta http-equiv="Imagetoolbar" content="no" />
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
  <![endif]-->

</head>
<body>
<div id="wrapper">

  <header id="header" class="header">

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
          <h1 class="header-logo text-hide"><a href="/">Maverick Coffee</a></h1>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 xs-no-gutter">
          <nav class="global-nav" role="navigation">
            <button type="button" class="global-nav__toggle text-left visible-xs-block" data-toggle="collapse" data-target="#globalnav-collapse">
              <span class="sr-only">メニューを開閉</span>
              <span class="glyphicon glyphicon-menu-hamburger"></span>MENU
            </button>
            <div class="collapse" id="globalnav-collapse">
              <ul class="global-nav__list clearfix">

                <li><a href="./"><span class="icon icon-home"></span>HOME</a></li>
                <li><a href="./news.html"><span class="icon icon-news"></span>NEWS</a></li>
                <li><a href="./menu.html"><span class="icon icon-menu"></span>MENU</a></li>
                <li><a href="./access.html"><span class="icon icon-access"></span>ACCESS</a></li>
                <li><a href="./gallery.html"><span class="icon icon-gallery"></span>GALLERY</a></li>
                <li><a href="./blog.html"><span class="icon icon-blog"></span>BLOG</a></li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="mainvisual ">
      <div class="container page-title">

        <h2 class="font-serif text-right"><img src="./img/img-home-mainvisual-effect.png" alt="HOME VISUAL" /></h2>

      </div>
    </div>

  </header>


  <main id="wrap-container" role="main">

    <nav id="home-nav" class="home-nav">
      <div class="home-nav__title">
        <h2 class="text-center font-serif">MENU</h2>
      </div>

      <div class="container">
        <ul class="home-nav__list row list-unstyled">
          <li class="home-nav__cafe col-xs-12 col-sm-4">
            <div class="home-nav__thumbnail">
              <a href="./menu.html#menu-cafe"><img src="./img/nav-cafe.jpg" alt="" class="img-responsive img-thumbnail"/></a>
            </div>
            <div class="home-nav__text">
              <h2><a href="./menu.html#menu-cafe" class="text-hide">CAFE</a></h2>
              <p>シェフの焼く絶品のパンと、バリスタの入れるコーヒーでリフレッシュする贅沢をお楽しみください。</p>
            </div>
          </li>
          <li class="home-nav__lunch col-xs-12 col-sm-4">
            <div class="home-nav__thumbnail">
              <a href="./menu.html#menu-lunch"><img src="./img/nav-lunch.jpg" alt="" class="img-responsive img-thumbnail"/></a>
            </div>
            <div class="home-nav__text">
              <h2><a href="./menu.html#menu-lunch" class="text-hide">LUNCH</a></h2>
              <p>おいしい野菜を使った、元気になれるメニューがいっぱい！平日のランチはもちろん、お休みの日にも美味しいランチタイムをお楽しみください。</p>
            </div>
          </li>
          <li class="home-nav__dinner col-xs-12 col-sm-4">
            <div class="home-nav__thumbnail">
              <a href="./menu.html#menu-dinner"><img src="./img/nav-dinner.jpg" alt="" class="img-responsive img-thumbnail"/></a>
            </div>
            <div class="home-nav__text">
              <h2><a href="./menu.html#menu-dinner" class="text-hide">DINNER</a></h2>
              <p>すべて直送で新鮮な食材で、四季折々の旬の味をお楽しみいただけます。本格的なお料理をゆっくりとご堪能ください。</p>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <article id="home-postlist" class="home-postlist">
      <div class="home-postlist__title">
        <h2 class="text-center font-serif">BLOG</h2>
      </div>

      <div class="container">
        <div class="row">

          <section class="entry entry--simple entry--excerpt col-xs-12 col-sm-6">
            <div class="entry-thumbnail">
              <a href="#"><span class="entry__new-mark">NEW</span><img src="./img/demo/img-postlist-000.jpg" alt="" class="img-thumbnail"/></a>
            </div>
            <div class="entry-meta">
              <div class="entry-meta__time">
                <span class="glyphicon glyphicon-time"></span><time datetime="2015-09-01">2015/09/01</time>
              </div>
            </div>
            <h2 class="entry-title"><a href="#">パニーニとエスプレッソ</a></h2>
            <div class="entry-content">
              <p>こんにちわ、MAVERICK CAFEです！今回は新たにイタリアンハムとレタスのパニーニをご紹介します！　パニーニセット　800yen　イタリアンハムとしゃきしゃきのレタスがアクセントになって美味しいくお召し上がり頂けます。ぜひ一度…</p>
            </div>
            <div class="entry-more"><a href="#"><span class="text-hide">続きを読む</span></a></div>
          </section>

          <section class="entry entry--simple entry--excerpt col-xs-12 col-sm-6">
            <div class="entry-thumbnail">
              <a href="#"><img src="./img/demo/img-postlist-008.jpg" alt="" class="img-thumbnail"/></a>
            </div>
            <div class="entry-meta">
              <div class="entry-meta__time">
                <span class="glyphicon glyphicon-time"></span><time datetime="2015-08-02">2015/08/02</time>
              </div>
            </div>
            <h2 class="entry-title"><a href="#">暑い夏の特製デザートゼリー</a></h2>
            <div class="entry-content">
              <p>こんにちわ、MAVERICK CAFEです！とても暑い日が続いておりますが、夏バテなどはしていませんか？そんな暑い夏にピッタリの、夏限定・冷たくてサッパリな特製デザートゼリーがおすすめです！</p>
            </div>
            <div class="entry-more"><a href="#"><span class="text-hide">続きを読む</span></a></div>
          </section>

          <section class="entry entry--simple entry--excerpt col-xs-12 col-sm-6">
            <div class="entry-thumbnail">
              <a href="#"><img src="./img/demo/img-postlist-003.jpg" alt="" class="img-thumbnail"/></a>
            </div>
            <div class="entry-meta">
              <div class="entry-meta__time">
                <span class="glyphicon glyphicon-time"></span><time datetime="2015-04-12">2015/04/20</time>
              </div>
            </div>
            <h2 class="entry-title"><a href="#">ＧＷの過ごし方</a></h2>
            <div class="entry-content">
              <p>とうとうやってきました、ゴールデンウィーク！待ちに待った連休で、遠出のご予定もあるのではないでしょうか？私はちょっと遅いゴールデンウィークを過ごす予定ですが、雑誌などで組まれている特集を見るとみてるだけで…</p>
            </div>
            <div class="entry-more"><a href="#"><span class="text-hide">続きを読む</span></a></div>
          </section>

          <section class="entry entry--simple entry--excerpt col-xs-12 col-sm-6">
            <div class="entry-thumbnail">
              <a href="#"><img src="./img/demo/img-postlist-004.jpg" alt="" class="img-thumbnail"/></a>
            </div>
            <div class="entry-meta">
              <div class="entry-meta__time">
                <span class="glyphicon glyphicon-time"></span><time datetime="2015-04-01">2015/04/01</time>
              </div>
            </div>
            <h2 class="entry-title"><a href="#">歓迎会とパーティとワインと</a></h2>
            <div class="entry-content">
              <p>就職シーズンも過ぎ、歓迎会の季節がやってきましたね(^^) MAVERICK CAFEではディナータイムのお料理やお飲み物もご用意しておりますので、色んなシーンにご利用いただけます♪</p>
            </div>
            <div class="entry-more"><a href="#"><span class="text-hide">続きを読む</span></a></div>
          </section>

        </div>
      </div>

    </article>

    <div id="home-utilities" class="home-utilities">
      <div class="container">
        <div class="row">

          <article class="home-news col-xs-12 col-md-6">
            <div class="home-utilities__title">
              <h3 class="text-center font-serif">NEWS</h3>
            </div>
            <ul class="list-unstyled">
              <li class="clearfix">
                <div class="home-news__meta pull-left"><time datetime="2015-08-01">2015/08/01</time><span class="label label-warning"><a
                        href="#">メニュー</a></span><span class="label label-warning"><a
                        href="#">新商品</a></span></div>
                <div class="home-news__content pull-right"><a href="#">８月の新メニューが登場しました！ランチタイムには季節の野菜をふんだんに揃えたＡセットが…</a></div>
              </li>
              <li class="clearfix">
                <div class="home-news__meta pull-left"><time datetime="2015-07-08">2015/07/08</time><span class="label label-warning"><a
                        href="#">お知らせ</a></span></div>
                <div class="home-news__content pull-right"><a href="#">７月の定休日のお知らせです。第２水曜日を定休日とさせていただいております。</a></div>
              </li>
              <li class="clearfix">
                <div class="home-news__meta pull-left"><time datetime="2015-07-04">2015/07/04</time><span class="label label-warning"><a
                        href="#">メニュー</a></span><span class="label label-warning"><a
                        href="#">新商品</a></span></div>
                <div class="home-news__content pull-right"><a href="#">７月の新メニューが登場しました！中でも３種トマトの卵炒めはおすすめです！</a></div>
              </li>
              <li class="clearfix">
                <div class="home-news__meta pull-left"><time datetime="2015-01-01">2015/06/06</time><span class="label label-warning"><a
                        href="#">お知らせ</a></span></div>
                <div class="home-news__content pull-right"><a href="#">６月の定休日のお知らせです。第２水曜日を定休日とさせていただいております。</a></div>
              </li>
              <li class="clearfix">
                <div class="home-news__meta pull-left"><time datetime="2015-05-27">2015/05/27</time><span class="label label-warning"><a
                        href="#">メニュー</a></span><span class="label label-warning"><a
                        href="#">新商品</a></span></div>
                <div class="home-news__content pull-right"><a href="#">ムーを使用したフレンチトーストの販売を開始しました！ぜひ出来たてをお召し上がりください。</a></div>
              </li>
            </ul>
          </article>

          <article class="home-map col-xs-12 col-md-6">
            <div class="home-utilities__title">
              <h3 class="text-center font-serif">ACCESS</h3>
            </div>
            <div class="home-map__img">
              <img src="./img/img-home-utilities__map.png" alt="" class="img-responsive" />
            </div>
            <address class="home-map__address address">
              <p class="address__name">Maverick Coffee</p>
              <p>東京都表参道１－１－１ <br/>
                03-2382-2392</p>
              <p><span class="label label-default">営業時間</span><br/>
                10:00～21:00</p>
              <p><span class="label label-default">定休日</span><br/>
                毎週水曜日</p>
            </address>
          </article>

        </div>
      </div>

    </div>

  </main>

  <footer id="footer" class="footer">

    <div class="footer__pagetop-btn">
      <a href="#wrapper" onclick="scrollup(); return false;" class="img-circle text-hide">TOP</a>
    </div>

    <div class="footer__social">
      <ul class="text-center clearfix">
        <li><a href="https://www.facebook.com/wp.business.book" target="_blank"><img src="./img/btn-facebook.png" alt="Facebook"/></a></li>
        <li><a href="#" target="_blank"><img src="./img/btn-twitter.png" alt="Twitter"/></a></li>
        <li><a href="#" target="_blank"><img src="./img/btn-instagram.png" alt="instagram"/></a></li>
      </ul>
    </div>

    <div class="footer__copyright">
      <p class="text-center"><small>Copyright &copy; MaverickCoffee</small></p>
    </div>

  </footer>

</div>

<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>