function snsDocument() {
    var snsLink = document.location;
    var snsTitle = document.title;
    document.write('<div class="social-area-syncer">');
    document.write('<ul class="social-button-syncer">');
    document.write('<!-- Twitter ([Tweet]の部分を[ツイート]にすると日本語にできます) -->');
    document.write('<li class="sc-tw"><a data-url="' + snsTitle + '" href="https://twitter.com/share?text=' + + '&url=' + snsLink + '" class="twitter-share-button" data-lang="ja" data-count="vertical" data-dnt="true" target="_blank"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.375-1.337.648-2.085.795-.598-.638-1.45-1.036-2.396-1.036-1.812 0-3.282 1.468-3.282 3.28 0 .258.03.51.085.75C5.152 5.39 2.733 4.084 1.114 2.1.83 2.583.67 3.147.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.416-.02-.617-.058.418 1.304 1.63 2.253 3.067 2.28-1.124.88-2.54 1.404-4.077 1.404-.265 0-.526-.015-.783-.045 1.453.93 3.178 1.474 5.032 1.474 6.038 0 9.34-5 9.34-9.338 0-.143-.004-.284-.01-.425.64-.463 1.198-1.04 1.638-1.7z" fill="#fff" fill-rule="nonzero"/></svg><span>ツイート</span></a></li>');
    
    document.write('<!-- Facebook -->');
    document.write('<li class="sc-fb"><div class="fb-like" data-href="' + snsLink + '" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div></li>');
    
    document.write('<!-- Google+ -->');
    document.write('<li><div data-href="' + snsLink + '" class="g-plusone" data-size="tall"></div></li>');
    
    document.write('<!-- はてなブックマーク -->');
    document.write('<li><a href="http://b.hatena.ne.jp/entry/' + snsLink + '" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border:none;" /></a></li>');
    
    document.write('<!-- pocket -->');
    document.write('<li><a data-save-url="' + snsLink + '" data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en"></a></li>');
    
    document.write('<!-- LINE [画像は公式ウェブサイトからダウンロードして下さい] -->');
    document.write('<li class="sc-li"><a href="http://line.me/R/msg/text/?' + snsLink + '"><img src="/img/shareline.png" width="160px" height="40px" alt="LINEに送る" class="sc-li-img"></a></li>');
    document.write('</ul>');
    
    document.write('<!-- Facebook用 -->');
    document.write('<div id="fb-root"></div>');
    
    document.write('</div>');
}

function snsDocumentNav(){
    var snsLink = document.location;
    var snsTitle = "#" + document.title;
    document.write('<!-- Twitter //-->');
    document.write('<a href="http://twitter.com/share?url=' + snsLink + '&text=' + snsTitle + '" target="_blank"><img src="/img/sheretwitter.png" alt="Twitter"  style="width:33%;max-width:200px;"/></a>');
    document.write('<!-- Facebook //-->');
    document.write('<a href="https://www.facebook.com/sharer/sharer.php?u=' + snsLink + '" target="_blank"><img src="/img/sherefacebook.png" alt="Facebook<"  style="width:33%;max-width:200px;"/></a>');
    document.write('<!-- Line //-->');
    document.write('<a href="http://line.me/R/msg/text/?' + snsLink + '" target="_blank"><img src="/img/shereline.png" alst="LINE"  style="width:33%;max-width:200px;"/></a>');
}


/* DOMの読み込み完了後に処理 */
if(window.addEventListener) {
    window.addEventListener( "load" , shareButtonReadSyncer, false );
}else{
    window.attachEvent( "onload", shareButtonReadSyncer );
}

/* シェアボタンを読み込む関数 */
function shareButtonReadSyncer(){
    
    // 遅延ロードする場合は次の行と、終わりの方にある行のコメント(//)を外す
    // setTimeout(function(){
    
    // Twitter (オリジナルボタンを使用するので、コメントアウトして無効化)
    // window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
    
    // Facebook
    (function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
     fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
    
    // Google+
    var scriptTag = document.createElement("script");
    scriptTag.type = "text/javascript"
    scriptTag.src = "https://apis.google.com/js/platform.js";
    scriptTag.async = true;
    document.getElementsByTagName("head")[0].appendChild(scriptTag);
    
    // はてなブックマーク
    var scriptTag = document.createElement("script");
    scriptTag.type = "text/javascript"
    scriptTag.src = "https://b.st-hatena.com/js/bookmark_button.js";
    scriptTag.async = true;
    document.getElementsByTagName("head")[0].appendChild(scriptTag);
    
    // pocket
    (!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js"));
    
    //},5000);	//ページを開いて5秒後(5,000ミリ秒後)にシェアボタンを読み込む
    
}

function sendtoMail() {
    var sendNama = document.getElementById("send-nama");
    var sendMailAddress = document.getElementById("send-mailaddress");
    if (sendNama.value == "" || sendMailAddress.value == "") {
        alert("お名前とメールアドレスは必須項目です。");
        return;
    }
    
    var sendComment = document.getElementById("send-comment");
    var sendSite = document.getElementById("send-site");
    var sendCheckboxNotification = document.getElementById("send-checkbox-notification");
    var sendCheckboxMail = document.getElementById("send-checkbox-mail");
    var sendMail = "";
    sendMail = "名前 : " + sendNama.value + "%0d%0aメールアドレス : " + sendMailAddress.value + " %0d%0aコメント : " + sendComment.value + "%0d%0a%0d%0a新しいコメントをメールで通知 : " + sendCheckboxNotification.checked + "%0d%0a新しい投稿をメールで受け取る : " + sendCheckboxMail.checked;
    address = 'stage-card@karaage.site';
    subject = 'お問い合わせ';
    body = '本文' + sendMail;
    
    location.href = 'mailto:' + address + '?subject=' + subject + '&body=' + body;
    
    }
