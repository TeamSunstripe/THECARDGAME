<?php
    ?>
<?php $profile["profileName"] = $_POST["profileName"]; ?>
<?php $profile["profileID"] = $_POST["profileID"]; ?>
<?php $profile["cardTitle"] = $_POST["cardTitle"]; ?>
<?php $profile["cardKind"] = $_POST["cardKind"]; ?>
<?php $profile["cardMessage"] = $_POST["cardMessage"]; ?>
<?php $profile["cardActivePower"] = $_POST["cardActivePower"]; ?>
<?php $profile["cardOffensivePower"] = $_POST["cardOffensivePower"]; ?>
<?php $profile["cardDefensivePower"] = $_POST["cardDefensivePower"]; ?>
<?php $profile["cardaddActivePower"] = $_POST["cardaddActivePower"]; ?>
<?php $profile["cardaddOffensivePower"] = $_POST["cardaddOffensivePower"]; ?>
<?php $profile["cardaddDefensivePower"] = $_POST["cardaddDefensivePower"]; ?>
<?php $profile["cardDetailsAbility"] = $_POST["cardDetailsAbility"]; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="robots" content="noindex, nofollow" />
<title>THE CARD GAME -<?php echo($profile["profileName"]); ?>- 推しカード</title>
<meta charset="utf-8" />
<meta name="description" content='<?php echo($profile["profileName"]); ?>- 推しカード | THE CARD GAME / カードゲームで遊ぼう！' />
<meta name="author" content="SUNSTRIPE"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="../css/sns.css"/>
<link rel="stylesheet" href="../css/styles.css"/>
<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Audiowide|Black+Ops+One|Cabin+Sketch|Fredericka+the+Great|Poiret+One|Press+Start+2P|VT323|Josefin+Slab" rel="stylesheet"/>
<link rel="shortcut icon" href=""/>
</head>
<style>
header {
height:899px;
    background-color:black;
    /*background-image: url("../images/card-bg.jpg");*/
    background-position: right bottom;
}
#movie {
position:absolute;
top:-200px;
left:10px;
width:100%;
min-width:1200px;
height:1200px;
}

@media screen and ( min-width:400px ) {
    header {
    width:100%;
    position:relative;
    overflow:scroll;
    }
}

</style>
<body>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121197913-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-121197913-1');
</script>

<script type="text/javascript" src="../js/sns.js"></script>
<script type="text/javascript" src="../js/cardgame.js"></script>

<style>
body {
color:black;
    background-color:rgba(200,200,255,0.5);
    font-family: 'Josefin Slab', serif;
}
a {
color:white;
    text-decoration:none;
}
</style>

<header class="stagecard">
<video autoplay muted controls loop poster="../images/card-bg.jpg" id="movie" name="cyber" controls="controls" preload="none">
<source src="../movie/cyber.mp4" type="video/mp4" />
<img src="../images/card-bg.jpg" />
</video>

<script>
var movie = document.getElementById("movie");
movie.controls = false;
</script>
</header>

<div id="flipcard_div" class="flip-boards">
<div class="board left">
<div class="front">
<a href='./<?php echo($profile["profileID"]); ?>.html'>
<img src='../images/card/<?php echo($profile["profileID"]); ?>.png' style="width:350px;padding:30px;background-color:rgba(255,255,255,0.5);border-radius:6px;" />
</a>
</div>
<div class="flipped" style="text-align:center;width:100%;">
<a href='./<?php echo($profile["profileID"]); ?>.html'>
<img src='../images/card/<?php echo($profile["profileID"]); ?>.png' style="width:350px;padding:30px;background-color:rgba(255,255,255,0.5);border-radius:6px;" />
</a>
</div>
</div>
<a href="../card.html"><h1 style="text-align:center;width:100%;height:600px;">THE CARD GAME</h1></a>
</div>

<div id="thisLikes_div" class="flip-heart">
<div class="board left">
<div class="front">
<img src="../images/likes/icon_heart.png" style="width:50px;border-radius:6px;" />
</div>
<div class="flipped">
<img src="../images/likes/icon_heart.png" style="width:50px;border-radius:6px;" />
</div>
</div>
</div>

<div id="left-buuton" style="position:absolute;top:300px;left:30px;width:100px;height:100px;">
<img src="../img/left-button.png" style="width:100%"/>
</div>
<div id="right-buuton" style="position:absolute;top:300px;right:30px;width:100px;height:100px;">
<img src="../img/right-button.png" style="width:100%"/>
</div>

<script>

var screen = {
width:document.body.clientWidth,
height:document.body.clientHeight,
}

var flipcard = {
top:60,
left:(screen.width/2.0) - 320,
};

var flipcardDiv = document.getElementById("flipcard_div");
var thisLikesDiv = document.getElementById("thisLikes_div");
flipcardDiv.style.position = 'absolute';
flipcardDiv.style.top = flipcard.top + 'px';
flipcardDiv.style.left = flipcard.left + 'px';

if ( flipcard ) {
    changeFlipCard( flipcard );
    changeFlipHeart( flipcard );
}

function changeFlipCard ( _flipcard ) {
    flipcardDiv.style.position = 'absolute';
    flipcardDiv.style.top = _flipcard.top + 'px';
    flipcardDiv.style.left = _flipcard.left + 'px';
}
function changeFlipHeart ( _flipcard ) {
    thisLikesDiv.style.position = 'absolute';
    thisLikesDiv.style.top = (_flipcard.top + 560) + 'px';
    thisLikesDiv.style.left = _flipcard.left + 'px';
}
//読み込み時の表示
window_load();

//ウィンドウサイズ変更時に更新
window.onresize = window_load;

//サイズの表示
function window_load() {
    screen.width = document.body.clientWidth;
    screen.height = document.body.clientHeight;
    flipcard.left = (screen.width/2.0) - 320;
    changeFlipCard( flipcard );
    changeFlipHeart( flipcard );
}

</script>

<hr class="clearfix" noshade/>

<div id="myWallet" hidden>
<div class="mywallet">
<span id="myWalletYen">
<span id="mywallet_yen">0</span> <img src="../images/wallet/icon_en.png" class="icons" style="width:30px;" />
</span>
<br />
<span id="myWalletPoint">
<img src="../images/wallet/icon_point.png" class="icons" style="width:10px;" /><span id="mywallet_point">5</span> ポイント
</span>
<span id="myWalletCoin">
<img src="../images/wallet/icon_coin.png" class="icons" style="width:10px;" /> <span id="mywallet_coin">0</span> コイン
</span>
</div>
<div class="add_button" hidden>
<img id="addButton" class="icons" src="../images/wallet/icon_add_button.png" class="icons" style="width:50px;" />
</div>
<hr class="clearfix" noshade/>
</div>

<script type="text/javascript" src="../js/myWallet.js"></script>
<script>
thisLikes_div.onclick = function () {
    mywallet_point.innerHTML = (mywallet_point.innerHTML - 1);
    var event_label = "thisLikes?" + location.href;
    gtag('event', "thisLikesOnClick", {
         'event_category': "thisLikes",
         'event_label': event_label,
         'value': 1
         });
    cyberSePlay();
}
</script>
<hr class="clearfix" noshade/>

<style>

#<?php echo($profile["profileID"]); ?>Profile
{
    border-radius:3px;
    margin-top:10px;
width:97%;
}

</style>

<div id='<?php echo($profile["profileID"]); ?>Profile' class="card_title">
<h3 style="padding:20px;">プロフィール</h3>
</div>

<div style="width:100%;overflow:scroll;">

<table class="card stagecard" style="width:97%;background-color:rgba(255,255,255,0.5);">
<tr style="background-color:rgba(255,255,255,0.5);">
<th style="min-width:50px;width:20%">項目</th>
<th style="min-width:100px;width:40%">内容 <a name="nomal"> </a></th>
<th>カード</th>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>種類</th>
<td><?php echo($profile["cardKind"]); ?></td>
<td rowspan="10" style="overflow:scroll;">
<div style="text-align:center;max-width:300px;width:100%;">
<blockquote class="twitter-tweet"><p lang="ja" dir="ltr"><a href="https://twitter.com/hrn_666?ref_src=twsrc%5Etfw">@hrn_666</a> <br>はい、カード化してみました。<br>配信頑張ってください＾＾<a href="https://twitter.com/hashtag/%E3%81%AF%E3%82%8B%E3%81%AA%E3%81%82%E3%81%AF%E3%82%8B?src=hash&amp;ref_src=twsrc%5Etfw">#<?php echo($_GET["profileName"]);?></a><a href="https://twitter.com/hashtag/SHOWROOM?src=hash&amp;ref_src=twsrc%5Etfw">#SHOWROOM</a><a href="https://twitter.com/hashtag/%E3%82%AB%E3%83%BC%E3%83%89%E3%82%B2%E3%83%BC%E3%83%A0%E3%82%92%E4%BD%9C%E3%82%8D%E3%81%86?src=hash&amp;ref_src=twsrc%5Etfw">#カードゲームを作ろう</a><a href="https://twitter.com/hashtag/THECARDGAME?src=hash&amp;ref_src=twsrc%5Etfw">#THECARDGAME</a><a href="https://t.co/LZy3jGZFBy">https://t.co/LZy3jGZFBy</a><br>SHOWROOMのリンク用のカードを作ってみました。 <a href="https://t.co/o0GplUAbmN">pic.twitter.com/o0GplUAbmN</a></p>&mdash; きゃらあげ素敵曜日チャンネル (@karaage1112) <a href="https://twitter.com/karaage1112/status/1024751026824347648?ref_src=twsrc%5Etfw">August 1, 2018</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
</td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>カードID</th>
<td><a href='./<?php echo($profile["profileID"]); ?>.html#nomal'><?php echo($profile["profileID"]); ?></a></td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>タイトル</th>
<td><?php echo($profile["cardTitle"]); ?></td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>セリフ</th>
<td><?php echo($profile["cardMessage"]); ?></td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>行動力</th>
<td><?php echo($profile["cardActivePower"]); ?></td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>攻撃力</th>
<td><?php echo($profile["cardOffensivePower"]); ?></td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>守備力</th>
<td><?php echo($profile["cardDefensivePower"]); ?></td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>詳細</th>
<td><?php echo($profile["cardDetailsAbility"]); ?></td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>ハート数</th>
<td><spna id='<?php echo($profile["profileID"]); ?>NomalCardHearts'></span></td>
</tr>

<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<th>NEXT</th>
<td><spna id='<?php echo($profile["profileID"]); ?>NomalCardNext'></span></td>
</tr>

</table>

</div>

<script>
var <?php echo($profile["profileID"]); ?>NomalCardHearts = document.getElementById('<?php echo($profile["profileID"]); ?>NomalCardHearts');
countHearts(<?php echo($profile["profileID"]); ?>NomalCardHearts,69);
var <?php echo($profile["profileID"]); ?>NomalCardNext = document.getElementById('<?php echo($profile["profileID"]); ?>NomalCardNext');
nextLevel(<?php echo($profile["profileID"]); ?>NomalCardNext,0);
</script>

<script>
var card_no = 0;
var cardList = [
{
    "name":"nomal",
    "img":'<?php echo($profile["profileID"]); ?>.png',
},
];


var leftButtonDiv = document.getElementById("left-buuton");
var rightButtonDiv = document.getElementById("right-buuton");
leftButtonDiv.onclick = function leftButton () {
    card_no--;
    if (card_no < 0) {
        card_no = cardList.length - 1;
    }
    flipcardDiv.innerHTML = '<div class="board left"><div class="front"><a href="'
    + './<?php echo($profile["profileID"]); ?>.html#' + cardList[card_no].name + '"><img src="' + "../images/card/" + cardList[card_no].img + '" style="width:350px;padding:30px;background-color:rgba(255,255,255,0.5);border-radius:6px;" /></a></div><div class="flipped" style="text-align:center;width:100%;"><a href="' + './<?php echo($profile["profileID"]); ?>.html#' + cardList[card_no].name + '"><img src="' + "../images/card/" + cardList[card_no].img +  '" style="width:350px;padding:30px;background-color:rgba(255,255,255,0.5);border-radius:6px;" /></a></div></div><a href="../card.html"><h1 style="text-align:center;width:100%;height:600px;">THE CARD GAME</h1></a>';
}
rightButtonDiv.onclick = function rightButton () {
    card_no++;
    if (cardList.length - 1 < card_no) {
        card_no = 0;
    }
    flipcardDiv.innerHTML = '<div class="board left"><div class="front"><a href="'
    + './<?php echo($profile["profileID"]); ?>.html#' + cardList[card_no].name + '"><img src="' + "../images/card/" + cardList[card_no].img + '" style="width:350px;padding:30px;background-color:rgba(255,255,255,0.5);border-radius:6px;" /></a></div><div class="flipped" style="text-align:center;width:100%;"><a href="' + './<?php echo($profile["profileID"]); ?>.html#' + cardList[card_no].name + '"><img src="' + "../images/card/" + cardList[card_no].img + '" style="width:350px;padding:30px;background-color:rgba(255,255,255,0.5);border-radius:6px;" /></a></div></div><a href="../card.html"><h1 style="text-align:center;width:100%;height:600px;">THE CARD GAME</h1></a>';
}
</script>


<hr class="clearfix" noshade/>

<style>

#<?php echo($profile["profileID"]); ?>History
{
    border-radius:3px;
    margin-top:10px;
width:97%;
}

</style>

<div id='<?php echo($profile["profileID"]); ?>History' class="card_title">
<h3 style="padding:20px;">履歴</h3>
</div>
<table class="card stagecard" style="width:97%;background-color:rgba(255,255,255,0.5);">
<tr style="background-color:rgba(255,255,255,0.5);">
<th hidden>履歴ID</th>
<th>カードID</th>
<th>詳細を見る</th>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<td hidden><?php echo($profile["profileID"]); ?>00001</td>
<td><a href='./<?php echo($profile["profileID"]); ?>.html'><?php echo($profile["profileID"]); ?></a></td>
<td>ページが更新されました</td>
</tr>
</table>

<hr class="clearfix" noshade/>

<style>

#<?php echo($profile["profileID"]); ?>Service {
border-radius:3px;
margin-top:10px;
width:97%;
}

</style>

<div id='<?php echo($profile["profileID"]); ?>Service'  class="card_title" hidden>
<h3 style="padding-top:20px;padding-left:20px;">関連グッズ</h3>
<table class="stagecard" style="width:100%;text-align:center;">
<tr>
<td style="width:50%">
<iframe frameborder="0" style="height:480px;width:320px;" src="https://thecardgame.base.shop/items/11885096/widget/large" ></iframe>
<div style="padding:20px;">
<span style="color:red;">NEW</span> 入荷されました
</div>

</td>
<td style="width:50%">
<iframe frameborder="0" style="height:480px;width:320px;" src="https://thecardgame.base.shop/items/12037606/widget/large" ></iframe>
<div style="padding:20px;">
<span style="color:red;">NEW</span> 入荷されました
</div>
</td>
</tr>
</table>
</div>

<hr class="clearfix" noshade/>

<div id="myService">
<h3 style="padding-top:20px;padding-left:20px;">関連サービス</h3>
<table class="stagecard" style="width:100%;text-align:center;">
<tr>
<td style="width:50%">
<a href="../card.html">
<h2 class="list_button marginLeft20" style="width:80%;height:25px;">公式サイト</h2>
</a>
</td>
<td style="width:50%">
<a href="../card.html">
<h2 class="list_button marginLeft20" style="width:80%;height:25px;">THE CARD GAME</h2>
</a>
</td>
</tr>
<tr>
<td style="width:50%">
<a href="../memory/index.html">
<h2 class="list_button marginLeft20" style="width:80%;height:25px;">MEMORY</h2>
</a>
</td>
<td style="width:50%">
<a href="../rulebook.html">
<h2 class="list_button marginLeft20" style="width:80%;height:25px;">RULEBOOK</h2>
</a>
</td>
</tr>
</table>
</div>

<hr class="clearfix" noshade/>

<div style="padding:10px;" class="stagecard">

<h2>THE CARD GAME</h2>
<h2>(仮)THE カードゲーム </h2>
<h3 class="stagecard">■カード■  <a href='../card.html'>CARD</a> | <a href='../memory/index.html'>MEMORY</a> | <a href='../rulebook.html'>RULEBOOK</a></h3>
<div class="card" style="clear:both;background-color:rgba(255,255,255,0.5);max-width:500px;width:100%;">

<!--div class="flip-boards">
　<div class="board left">
　　<div class="front"><h2>パネル：表</h2></div>
　　<div class="flipped"><h2>パネル：裏</h2></div>
　</div>
</div-->
＊ 閲覧するたびに改善ポイントなどもいただきたいので予期せぬ変更・削除などはございます、<br />
＊ 本人・団体の許可を得て、掲載させていただいております。<br />
＊ このシステムは、AI機能を採用しており、徐々に学習して成長していきます。<br />
＊ 「いいね」の数、「リツイート」の数、「閲覧」の数、「ハート」を押す回数、「プロデューサー」の応援数、「ダウンロード」の数などの情報により変動いたします。<br />
</div>
</div>
<style>
body {
    background-image: url("../img/bg.png");
    background-repeat: repeat;
    background-attachment: fixed;
    background-position: right bottom
}
</style>

<div class="card_title">
<h3 style="padding:20px;">カード一覧</h3>
</div>

<div id="card_list">
<h2><span style="font-size:0.5em;" hidden> ー 管理者のみに表示されます</span></h2>
<table class="card stagecard" style="width:97%;background-color:rgba(255,255,255,0.5);">
<tr style="background-color:rgba(255,255,255,0.5);">
<th hidden>カードID</th>
<th>カード名</th>
<th>詳細を見る</th>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<td hidden><?php echo($profile["profileID"]); ?></td>
<td><?php echo($_GET["profileName"]);?></td>
<td><a href='./<?php echo($profile["profileID"]); ?>.html'>詳細を見る</a></td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<td hidden>soubistudio</td>
<td>装美スタジオ</td>
<td><a href="./soubistudio.html">詳細を見る</a></td>
</tr>
<tr style="background-color:rgba(255,255,255,0.5);height:50px;">
<td hidden>mokuseigekijo</td>
<td>木星劇場</td>
<td><a href="./mokuseigekijo.html">詳細を見る</a></td>
</tr>

</table>
</div>
<br />
<hr class="clearfix" noshade/>
<!-- シェアボタン [ここからコピー] -->
<script>
snsDocument();
</script>
<!-- シェアボタン [ここまでコピー] -->

<hr class="clearfix" noshade/>

<div id="stage" style="background-color:white;color:black;padding:10px;width:97%;text-align:center;">
<h4>PR</h4>
<div id="cardgameproject">
<a href="http://stage-card.karaage.site/card.html" target="_blank">
<img src="http://stage-card.karaage.site/images/link/card-game_pr.png" alt="カードゲーム化プロジェクト" title="カードゲーム化プロジェクト" style="width:100%;"/>
</a>
</div>
宣伝協力
<h3 id="cardgameprojectButton" class="reserve_button">コピーする</h3>
</div>

<script>
function execCopy(string){
    var temp = document.createElement('div');
    
    temp.appendChild(document.createElement('pre')).textContent = string;
    
    var s = temp.style;
    s.position = 'fixed';
    s.left = '-100%';
    
    document.body.appendChild(temp);
    document.getSelection().selectAllChildren(temp);
    
    var result = document.execCommand('copy');
    
    document.body.removeChild(temp);
    // true なら実行できている falseなら失敗か対応していないか
    return result;
}
var cardgameproject = document.getElementById('cardgameproject');
var cardgameprojectButton = document.getElementById('cardgameprojectButton');
cardgameprojectButton.onclick = function()
{
    var succeeded = execCopy(cardgameproject.innerHTML);
    
    if(succeeded){
        alert('コピーできました');
    }
    else {
        alert('このブラウザでは対応していません');
    }
};
</script>

<hr class="clearfix" noshade/>

<div id="stage" style="background-color:white;color:black;padding:10px;">
<div class="event_box" style="width:97%;">
<div class="text_left" style="float:left;width:50%;">
<a name="soubistudio"><h4>【　会　場　】</h4></a>
装美スタジオ<br />
ソウビスタジオ<br />
<br />
〒150-0011<br />
東京都東京都渋谷区東2-23-6 装美スタジオ（現、忍者茶房内）<br />
<br />
TEL： 03-5778-4419<br />
<h5>【H  P】</h5>
<a href="http://oedo.club/" target="_blank">http://soubi.studio/</a><br />
<h5>【アクセス】</h5>
JR渋谷南口16b（恵比寿方面）出口　徒歩10分<br />
</div>
<div class="text_center" style="float:right;width:50%;">
<a href="./soubistudio.html">
<img src="../images/card/soubistudio.png" style="max-width:400px;width:100%;"/>
</a><br />
<span style="color:red">NEW</span>カード化しました！
</div>
<hr class="clearfix" noshade/>
</div>
</div>

<hr class="clearfix" noshade/>

<div id="stage" style="background-color:white;color:black;padding:10px;">
<div class="event_box" style="width:97%;">
<div class="text_left" style="float:right;width:50%;">
<a name="mokuseigekijo"><h4>【　会　場　】</h4></a>
cafe＆bar 木星劇場<br />
モクセイゲキジョウ<br />
<br />
〒171-0021<br />
東京都豊島区西池袋5-1-5 第二春谷ビルB1<br />
TEL： 03-5927-8998<br />
<a href="http://mokusei-cafe.com/access/" target="_blank">http://mokusei-cafe.com/</a><br />
<h5>【アクセス】</h5>
池袋駅西口側 C3出口から徒歩約10秒。<br />
</div>
<div class="text_center" style="float:left;width:50%;">
<a href="./mokuseigekijo.html">
<img src="../images/card/mokuseigekijo.png" style="max-width:400px;width:100%;"/>
</a><br />
<span style="color:red">NEW</span>カード化しました！
</div>
<hr class="clearfix" noshade/>
</div>


</div>

<hr class="clearfix" noshade/>

<div id="stage" style="background-color:white;color:black;padding:10px;">
<h4>PR</h4>
<div>
<a href="http://assignpromotion.sunstripe-main.jp/" target="_blank">
<img src="../images/link/assingpromotion_pr.png" alt="和DE撮影会モデル募集中！" title="和DE撮影会モデル募集中！" style="width:100%;background-color:black"/>
</a>
</div>
</div>

<hr class="clearfix" noshade/>

<div id="stage"  class="event_box" style="background-color:white;color:black;padding:10px;">
<h3>協力</h3>
<div style="float:left;">
<h4>会場</h4>
<a href="http://oedo.club/" target="_blank">
<h3>お江戸倶楽部</h3>
<img src="../images/link/oedoclub_logo.png" alt="お江戸倶楽部" title="お江戸倶楽部" style="max-width:300px;width:100%;background-color:black"/>
</a>
</div>
<div style="float:left;">
<h4>番組</h4>
<a href="http://welkome.sunstripe-main.jp/" target="_blank">
<h3>下北FM「ライストゥーミートユー」</h3>
<img src="../images/link/welkome_logo.png" alt="ライストゥーミートユー" title="ライストゥーミートユー" style="max-width:300px;width:100%;background-color:black"/>
</a>
</div>
<hr class="clearfix" noshade/>
</div>

<hr class="clearfix" noshade/>

<div id="sitemap">
<a href="../card.html">TOP</a> <br />
<a href="../rulebook.html">RULEBOOK</a> <br />
<a href="../ad.html">広告掲載して見ませんか？</a> <br />
</div>

<div style="background-color:rgba(255,255,255,0.8);color:black;padding:10px;">
<table style="max-width:500px;width:90%;margin:auto;">
<tr>
<td></td><td colspan="2">みなさんの「こうしてほしい」をお聞かせください。<br />
<br />
この投稿にお返事はしておりません、ご了承ください。<br />
サイト改善に役立てさせていただきます。<br /></td>
</tr>
<tr>
<td>ご意見</td><td></td><td></td>
</tr>
<tr>
<td colspan="3"><input type="text" id="send-comment" name="send-comment" size="10" maxlength="200" style="width:100%;height:120px;" /></td>
</tr>
<tr>
<td>名前</td><td>*</td><td><input type="text" id="send-nama" name="send-nama" size="40" maxlength="30" style="width:100%;height:30px;font-size:1.2em;" required/></td>
</tr>
<tr>
<td>メールアドレス</td><td>*</td><td><input type="text" id="send-mailaddress" name="send-mail" style="width:100%;height:30px;font-size:1.2em;" required/></td>
</tr>
<tr>
<td>サイト</td><td></td><td></td>
</tr>
<tr>
<td colspan="3"><input type="text" id="send-site" name="send-site" size="10" style="width:100%;height:30px;font-size:1.2em;" /></td>
</tr>

<tr hidden>
<td colspan="3"><input type="checkbox" id="send-checkbox-notification" name="send-checkbox-notification" size="10" /> 新しいコメントをメールで通知</td>
</tr>
<tr>
<td colspan="3"><input type="checkbox" id="send-checkbox-mail" name="send-checkbox-mail" size="10" /> 新しい投稿をメールで受け取る</td>
</tr>
<tr>
<td colspan="3" style="text-align:center;"><button style="width:50%;height:50px;background-color:rgba(100,100,255,0.8);color:white;font-size:1.0em;" class="button-styles" onclick="sendtoMail();"/>意見を送る</button></td>
</tr>
</table>
</div>
<div id="friend-qr">
<a href="https://line.me/R/ti/p/%40dqv6292a"><img height="36" border="0" alt="友だち追加" src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png"></a><br />
<img src="http://qr-official.line.me/L/viofM09uGU.png" />
</div>


<footer>
<p>このホームページに記載の画像・文章の著作権は「(仮)THE カードゲーム」もしくは、作品・情報の提供者に帰属します。無断転載・利用を禁じます。</p>
Copyright(C)2018-<span class="stagecard"><a href="../card.html">THE CARD GAME</a></span>. All rihts Reserved .
</footer>
</body>
</html>
