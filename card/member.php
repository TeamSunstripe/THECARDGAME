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


▼ プロデューサーDEメンバーズカード　ポイントプログラム規定
<div>
　「プロデューサーDEメンバーズカード・ポイント・プログラム」に参加した個人（以下'会員'とする）は、下記に定められた規定や条件に従うものとします。
</div>
<div>
「プロデューサーDEメンバーズカード・ポイント・プログラム」は、THE CARD GAME直営店およびパートナーショップで実施しているプログラムです。実施店舗はTHE CARD GAME HP(www.stage-card.kataage.site/) の店舗一覧や店頭などで確認下さい。
</div>
<div>
「プロデューサーDEメンバーズカード・ポイント・プログラム」の会員資格およびその特典は、事前の通知や予告なしに変更あるいは中止をすることがありますので、予めご承知おき下さい。
</div>
<div>
１． プロデューサーDEメンバーズカード（以下、'会員カード'とする）の会員は入会金、年会費無料です。1,000円（税込み）以上の商品を購入、もしくはお売りいただく際に実施店舗の店員に、お申しつけください。
</div>
<div>
２． 会員カードは、会員本人以外は使用できません。会員は実施店舗にて商品購入もしくは、お売りいただく際は、会員カードをご提示ください。商品のご購入及びお売りいただく金額1,000円（税込み）あたり1ポイントが加算（店舗でスタンプを押印します）され、商品購入及びお売りいただく度に累積されていきます。
</div>
<div>
３． 加算されたポイントが20ポイントになれば、次回以降の商品購入時に500円の商品券としてご利用いただけます。（但し、商品購入合計500円未満の場合、つり銭は出ません。また、商品券１枚の金額を分割しての使用はできません。）ポイント特典利用ご希望の会員は、会計時にポイント利用の旨を店員に申し付けのうえ、会員カードをご提示下さい。
</div>
<div>
４． 会員カードの有効期間は発行日より１年間とします。この期間が過ぎた累積ポイントおよび特典の利用はすべて無効となります。
</div>
<div>
５． 会員が有効期間内に2枚目以降のカードに移行する場合のそのカードの有効期間は、その時点でさらにそこから1年間とします。
</div>
<div>
６． 実施店舗であれば、どこの店舗でもポイントの加算や特典の利用が受けられます。
</div>
<div>
７． 店舗によって、一部ポイント加算のできない商品がありますので、ご承知おき下さい。
</div>
<div>
８． 会員カードを10枚更新された会員には、11枚目からはVIPプロデューサーDEメンバーズカード（以下、'VIPカード'とする）を発行します。
</div>
<div>
９． VIPカードを持つ会員（以下、VIP会員とする）は、特別な会員として商品購入の際にVIPカードを提示すれば、ご購入金額1,000円（税込み）あたり1ポイントが加算され、ポイントが20ポイントになれば、次回以降の商品購入時に1,000円の商品券としてご利用いただけます。（但し、商品購入合計1,000円未満の場合、つり銭は出ません。また、商品券1枚の金額を分割しての使用はできません。）
</div>
<div>
10．VIPカードの有効期間は発行日より１年間とします。VIP会員が１年以内にVIPカード更新すると、新たなVIPカードの発行日から1年間有効期限が延長されます。
</div>
<div>
11． このプログラムへの参加資格は個人のみとし、各会員は１人1枚に限り会員カードまたはVIPカードを所有できることとし、会員が複数の会員カードを登録することを禁止します。
</div>
<div>
12． 会員が複数の会員カードを所持したとしても、異なるカードにおいて獲得された積算ポイントをあわせての利用はできません。
</div>
<div>
13． 会員が複数の会員カードを所持していることが判明した場合は、もっとも新しい発行日の会員カードのみを有効として、他の会員カードの会員権は停止され、その累積ポイントはすべて無効となります。
</div>
<div>
14． 店舗の閉店や移転などの情報については、事前に店頭告知やミントHPなどを活用して会員へ通達および連絡できるように努めます。
</div>
<div>
15． 会員カードの紛失や盗難については、ミントは一切の責任を負いません。いかなる場合でも、会員・VIPカードの再発行、およびポイントの再加算はできません。
</div>
<div>
16． 拾得物としてミントの店舗や本部へ届けられた会員カードは、発行店舗店頭やミントＨＰなどでお知らせしますが、掲示告知後1カ月以内に会員の引取りがない場合、その会員カードの会員権は停止され、その累積ポイントはすべて無効となります。
</div>
<div>
17．　ポイントの加算や利用を申請する際に詐欺や詐称などの不正行為を行うことは、本規定に違反するものです。このような場合ポイントはすべて無効となり、ポイント特典の利用は一切できません。さらに、ポイントの加算や利用に関し、このような不正行為が認められた場合は、しかるべき行政処分あるいは法的処置を取る場合があります。
</div>
<div>
18．　ミントは「ミントメンバーズカード・ポイント・プログラム」運営にあたり、会員から提出された個人情報の扱いについては、ミントの個人情報保護方針（プライバシーポリシー）に従って細心の注意を払い、管理しています。
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
