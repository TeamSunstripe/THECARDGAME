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
body {
    background-image: url("../img/bg.png");
    background-repeat: repeat;
    background-attachment: fixed;
    background-position: right bottom
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
<h1>THE CARD GAME リファレンス</h1>
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
    echo '更新日：'.'2018.06.06'.'<br />';
    echo '</caption>';
    $list = array('行','ワード','説明','関連画像','関連用語');
    $l = 0;
    foreach ($word_file as $key => $table_list) {
        echo '<tr>';
        $table_list = explode(',',$table_list);
        foreach ($table_list as $val => $item) {
            $list[$l];
            if ($list[$l] == '関連画像') {
                
            } else if ($list[$l] == '関連用語') {
                echo '<th style="width:100px;">'.$list[$l].'</th>';
                $items = explode('/',$item);
                echo '<td>';
                foreach ($items as $i => $object) {
                    echo '<a href="#'.$object.'">'.$object.'</a>';
                    echo '<br />';
                }
                echo '</td>';
                
                echo '</tr>';
            }
            else {
                echo '<th style="width:100px;">'.$list[$l].'</th>';
                echo '<td>'.$item.'</td>';
                echo '</tr>';
            }
            $l++;
        }
        echo '</tr>';
    }
    echo '</table>';
?>
</div>
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
