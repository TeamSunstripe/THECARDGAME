<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>STAGE CARD</title>
<meta charset="utf-8" />
<meta name="robots" content="noindex, nofollow" />
<meta name="description" content="STAGE CARD">
<meta name="author" content=""/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="../css/sns.css"/>
<link rel="stylesheet" href="../css/styles.css"/>
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href=""/>
</head>
<body>
<script type="text/javascript" src="../js/sns.js"></script>
<style>


</style>
<!-- Place your content here -->
<!-- SCRIPTS -->
<!-- Example: <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<header class="stagecard">
<h1><a href="../index.html">STAGE CARD OFFICIAL WEB SITE</a></h1>
<p><span>STAGE CARD 公式サイト</p>
<div id="snsnav"><script>snsDocumentNav()</script></div>
<nav>
<a href='../index.html'>TOP</a> |
<a href='../news/'>NEWS</a> |
<a href='../event/'>EVENT</a> |
<a href='../introduction.html'>INTRODUCTION</a> |
<a href='../member/'>MEMBER</a> |
<a href='../link.html'>LINK</a> |
<a href='../blog.html'>BLOG</a> |
<a href='../about.html'>ABOUT</a> <br />
<a href='../card.html'>CARD</a> |
<a href='../rulebook.html'>RULEBOOK</a> <br />
<a href='../sitemap.html'>SITEMAP</a> |
<a href='../contact.html'>CONTACT</a>
</nav>
</header>

<video autoplay muted controls poster="./images/flyer.jpg" id="movie" name="flyer" controls="controls">
<source src="./movie/flyer.mp4" type="video/mp4" />
<img src="./images/flyer.jpg" />
</video>
<script>
var movie = document.getElementById("movie");
movie.controls = false;
</script>

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

<!--h1>浅草六区ゆめまち劇場主催公演</h1-->
<h2>STAGE CARD</h2>
<h2>舞台カード</h2>
<h3 class="stagecard">■メンバー■ <a href='./list'>CARD</a></h3>
<?php
    $card_kind = array("character" => "キャラクターカード","career" => "キャリアカード","item" => "アイテムカード","action" => "アクションカード","scene" => "シーンカード","scenario" => "シナリオカード");
    $dir    = './story';
    $story_files = scandir($dir);
    // var_dump($story_files);
    foreach($story_files as $story_no => $story_title) {
        if ( $story_no > 2) {
            echo '<hr  style="clear:both;"/>';
            echo '<h3>'. $story_title .'</h3>';
            foreach($card_kind as $card_key => $cardkind_title){
                echo '<hr  style="clear:both;"/>';
                echo '<h3>'.$cardkind_title.'</h3>';
                echo '2018.06.04'.'<br />';
                
                $card_dir    = '../card/story/'.$story_title.'/'.$card_key;
                $card_files = scandir($card_dir);
                // var_dump($card_files);
                foreach($card_files as $card_no => $card_title) {
                    if ( $card_no > 1) {
                        $card_file_dir = $card_dir.'/'.$card_title;
                        $card_file = file($card_file_dir);
                        echo '<table style="width:100%">';
                        echo '<caption>';
                        echo '<h3>'.$card_title.'</h3>';
                        echo '2018.06.04'.'<br />';
                        echo '<br />';
                        echo '<form action = "index.php" method = "get">';
                        echo '</caption>';
                        foreach ($card_file as $key => $table_list) {
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
                        echo '<br />';

                        echo '<br />';
                    }
                    
                }
            }
        }
    }
    ?>
<hr  style="clear:both;"/>
</div>


<!-- シェアボタン [ここからコピー] -->
<script>
snsDocument();
</script>
<!-- シェアボタン [ここまでコピー] -->

<hr  style="clear:both;"/>
<footer>
<p>このホームページに記載の画像・文章の著作権は「THE 舞台」もしくは、作品・情報の提供者に帰属します。無断転載・利用を禁じます。</p>
Copyright(C)2018-<span class="typec"><a href="./index.html">THE 舞台</a></span>. All rihts Reserved .
</footer>
</body>
</html>
