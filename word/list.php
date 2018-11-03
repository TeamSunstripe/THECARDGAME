<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>(仮)THE カードゲーム</title>
<meta charset="utf-8" />
<!--meta name="robots" content="noindex, nofollow" /-->
<meta name="description" content="(仮)THE カードゲーム / カードで遊ぼう！">
<meta name="author" content="SUNSTRIPE"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="../css/sns.css"/>
<link rel="stylesheet" href="../css/styles.css"/>
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Audiowide|Black+Ops+One|Cabin+Sketch|Fredericka+the+Great|Poiret+One|Press+Start+2P|VT323|Josefin+Slab" rel="stylesheet">
<link rel="shortcut icon" href=""/>
</head>
<body>
<script type="text/javascript" src="../js/sns.js"></script>
<style>
body {
    background-color:rgba(200,200,255,0.5);
    font-family: 'Josefin Slab', serif;
}
</style>
<!-- Place your content here -->
<!-- SCRIPTS -->
<!-- Example: <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<header class="stagecard">
<h1><a href="../card.html">(仮)THE カードゲーム OFFICIAL WEB SITE</a></h1>
<p><span>(仮)THE カードゲーム 公式サイト</p>
<div id="snsnav"><script>snsDocumentNav()</script></div>
<nav>
<!--a href='./index.html'>TOP</a> |
<!--a href='./news/'>NEWS</a> |
<!--a href='./event/'>EVENT</a> |
<!--a href='./introduction.html'>INTRODUCTION</a> |
<!--a href='./member/'>MEMBER</a> |
<!--a href='./link.html'>LINK</a> |
<!--a href='./blog.html'>BLOG</a> |
<!--a href='./about.html'>ABOUT</a> <br //-->
<a href='../card.html'>CARD</a> |
<a href='../memory/index.html'>MEMORY</a> |
<a href='../rulebook.html'>RULEBOOK</a>
<!--a href='./system.html'>SYSTEM</a> |
<!--a href='./shop.html'>SHOP</a> <br />
<!--a href='./sitemap.html'>SITEMAP</a> |
<!--a href='./contact.html'>CONTACT</a/-->
</nav>
</header>

<!--video autoplay muted controls poster="./images/flyer.jpg" id="movie" name="flyer" controls="controls">
<source src="./movie/flyer.mp4" type="video/mp4" />
<img src="./images/flyer.jpg" />
</video>
<script>
var movie = document.getElementById("movie");
movie.controls = false;
</script-->

<!--div>
<h3>PICKUP</h3>
</div-->

<!-- div>
<div style="float:left;width:30%">
<h3>NEWS</h3>
</div>
<div style="float:left;width:30%">
<h3>GOODS</h3>
</div>
<div style="float:left;width:30%">
<h3>TWITTER</h3>
</div>
</div -->
<hr  style="clear:both;"/>
<div style="padding:10px;" class="stagecard">

<h2>THE CARD GAME</h2>
<h2>(仮)THE カードゲーム </h2>
<h3 class="stagecard">■カード■  <a href='../card.html'>CARD</a> | <a href='../memory/index.html'>MEMORY</a> | <a href='../rulebook.html'>RULEBOOK</a></h3>
<div class="card" style="clear:both;background-color:rgba(255,255,255,0.5);max-width:500px;width:100%;">

<?php
    $dir    = '../word';
    $file   = 'word.csv';
    $word_file_dir = $dir.'/'.$file;
    // var_dump($word_file_dir);
    $word_file = file($word_file_dir);
    // var_dump($word_file);

    echo '<table style="width:100%">';
    echo '<caption>';
    echo '<h3>'.$word_file_dir.'</h3>';
    echo '2018.06.06'.'<br />';
    echo '<br />';
    echo '<form action = "index.php" method = "get">';
    echo '</caption>';
    foreach ($word_file as $key => $table_list) {
        echo '<tr>';
        $table_list = explode(',',$table_list);
        foreach ($table_list as $val => $item) {
            echo '<td>'.$item.'</td><td>';
            echo '<input type = "text" name ="'.$item.'" value="'.$item.'">';
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    echo '<input type = "submit" value ="'.$card_title.'">';
    echo '</tr>';
    
    echo '</table>';
?>

ゲームで遊ぼう！<br />
<br />
オリジナルカードを作成してゲームで遊ぼう！<br />
<table>
<tr>
<td>▶︎</td><td><strong>キャラクターを作ろう！</strong></td>
</tr>
<tr>
<td></td><td>シーンを作ろう！</td>
</tr>
<tr>
<td></td><td>アイテムを作ろう！</td>
</tr>
<tr>
<td></td><td>アクションを作ろう！</td>
</tr>
<tr>
<td></td><td>ストーリーを考えよう！</td>
</tr>
<tr>
<td></td><td>シナリオを作ろう！</td>
</tr>
<tr>
<td></td><td>ゲームのルールを作ろう！</td>
</tr>
<tr>
<td></td><td>新しいルールでゲームをプレイしてみよう！</td>
</tr>
</table>
</div>
<br />
<div class="card" style="clear:both;background-color:rgba(255,255,255,0.5);float:right;max-width:500px;width:100%;">
<ul>
<li>対象：アナログゲームを楽しんでくれる方</li>
<li>日付：２０１８年 ６月 ４日</li>
<li>時間：１８時 ー ２１時</li>
<li>会場：<a href="https://t.livepocket.jp/e/vzuyl/map" target="_blank">装美スタジオ</a></li>
<li>料金：１、０００円　１h１オーダー制</li>
<li>予約特典：１時間分　オーダーパス券</li>
<li>定員：２０名</li>
<li>持ち物：筆記用具 / 飲食類</li>
<li>申し込み入力要項：お名前 / 学校・会社・事務所・劇団など / 性別 / 緊急連絡先</li>
<a href="https://tiget.net/events/30197" target="_blank">予約フォーム</a>
</ul>
</div>

<hr style="clear:both;"/>
<style>
body {
    background-image: url("../img/bg.png");
    background-repeat: repeat;
    background-attachment: fixed;
    background-position: right bottom
}
.profile_left {
    float:left;
}
.profile_right {
    float:right;
}
.profile_text{
}
.profile_img{
    max-width:300px;
margin: 30px auto;
background: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px #ccc;
}
.memory_left {
    float:left;
}
.memory_img {
    max-width:300px;
margin: 30px auto;
background: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px #ccc;
}
</style>

<h3>参加者</h3>
<div class="profile_text profile_left">
<h1>にしかわちなみ</h1>
TWITTER<br />
<a href="https://twitter.com/chamy235318731" target="_blank">@chamy235318731</a><br />
</div>
<div class="profile_right">
<img src="../images/card/chinamiishikawa.png" alt="にしかわちなみ" title="にしかわちなみ" class="profile_img" />
</div>
<hr style="clear:both;"/>
<div class="profile_text profile_right">
<h1>古澤菜奈美</h1>
TWITTER<br />
<a href="https://twitter.com/_milky_073/media" target="_blank">@_milky_073/media</a><br />
SHOWROOM<br />
<a href="https://www.showroom-live.com/room/profile?room_id=177772" target="_blank">「なーみのほしぐみさんルーム」</a><br />
</div>
<div class="profile_left">
<img src="../images/card/nanamifurusawa.png" alt="古澤菜奈美" title="古澤菜奈美" class="profile_img" />
</div>
<hr style="clear:both;"/>
<div class="profile_text profile_left">
<h1>青桐亜子</h1>
TWITTER<br />
<a href="https://twitter.com/ako_vater" target="_blank">@ako_vater</a><br />
SHOWROOM<br />
<a href="https://www.showroom-live.com/room/profile?room_id=140293" target="_blank">「あこ語りたいっす！」</a><br />
</div>
<div class="profile_right">
<img src="../images/card/aogiriako.png" alt="内田麻友" title="内田麻友" class="profile_img"/>
</div>
<hr style="clear:both;"/>
<div class="profile_text profile_right">
<h1>内田麻友</h1>
〔showroom申請中〕<br />
<div>
TWITTER<br />
<a href="https://twitter.com/mayuchida_1129" target="_blank">@mayuchida_1129</a><br />
</div>
</div>
<div class="profile_left">
<img src="../images/card/uchidamayu.png" alt="内田麻友" title="内田麻友" class="profile_img"/>
</div>

<hr style="clear:both;"/>
<div class="memory_left">
<img src="../images/memory/event2018060419000001.jpg" alt="イベントの様子（１）" title="イベントの様子（１）" class="memory_img"/>
</div>
<div class="memory_left">
<img src="../images/memory/event2018060419000002.jpg" alt="イベントの様子（２）" title="イベントの様子（２）" class="memory_img"/>
</div>
<!--div class="memory_left">
<img src="./images/card/uchidamayu.png" alt="内田麻友" title="内田麻友" class="profile_img"/>
</div-->
<hr style="clear:both;"/>

<!--hr  style="clear:both;"/>
スマホDEカード
<br />
連動サービス
<br />
QRコードを用いて、カードの情報を共有し、サイトのサービスを使いこなそう！
<br />
<br /-->
＊ 回を追うごとに改善ポイントなどもいただきたいので予期せぬ変更などはございます<br />
＊ タイトルなどに関しては、公的なものができるまでは外部に出さないようにお願いいたします。<br />
</div>

<!-- シェアボタン [ここからコピー] -->
<script>
snsDocument();
</script>
<!-- シェアボタン [ここまでコピー] -->

<div id="sitemap">
<a href="../card.html">TOP</a> <br />
<a href="../rulebook.html">RULEBOOK</a> <br />
<a href="../ad.html">広告掲載して見ませんか？</a> <br />
</div>

<footer>
<p>このホームページに記載の画像・文章の著作権は「(仮)THE カードゲーム」もしくは、作品・情報の提供者に帰属します。無断転載・利用を禁じます。</p>
Copyright(C)2018-<span class="stagecard"><a href="../card.html">(仮)THE カードゲーム</a></span>. All rihts Reserved .
</footer>
</body>
</html>
