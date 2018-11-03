/***
 actioncard.js
 ***/
var actioncardData = [
                     {
                      infomation : '<a name="produce"><h4>【　アクションカード　】</h4></a>'
                      + 'QRコード<br />'
                      + 'コメント：「QRコード。」<br />'
                      + '主な能力：普及カード<br />'
                      + 'カードの能力：このアクションカードが発動される時、山札から１枚ドローする。<br />'
                      + '<hr />'
                      + 'このカードは、物販や通販にて購入することが可能です。<br />'
                      + '手に入れた際は、様々なところでQRコードを読んでもらって「THE CARD GAME」普及活動にご協力ください。<br />'
                      + '一緒にカードをプロデュースして行きましょう<br />'
                      + '<br />',
                      imagefile : './images/card/action/qrcode.png',
                     url : 'http://stage-card.karaage.site/card.html',
                     isPushCard : true,
                     isNew : false,
                     },
                     {
                     infomation : '<a name="produce"><h4>【　アクションカード　】</h4></a>'
                      + 'プロデュース prodeced by ・・・<br />'
                      + 'コメント：「○○○をプロデュース。」<br />'
                      + '主な能力：プロデュースカード<br />'
                      + 'カードの能力：このアクションカードが発動される時、山札から３枚ドローする。<br />'
                      + '<hr />'
                      + 'このカードは、物販や通販にて購入することが可能です。<br />'
                      + '上の枠には、プロデューサー名<br />'
                      + '下の枠には、プロデュースされる方のお名前<br />'
                      + '手に入れた際は、右のカードの画像をタップしてプロデュースフォームからご記入ください。<br />'
                      + '一緒にカードをプロデュースして行きましょう<br />'
                      + 'さらにこのカードは、様々な形でイベントに参加することが可能です！！<br />'
                      + '<br />',
                     imagefile : './images/card/action/produce.ver1.png',
                     url : 'https://goo.gl/forms/2yAdqEgTXWACYvm92',
                     isPushCard : true,
                     isNew : false,
                     },
];


function actionCardList(data,s)
{
    document.write('<div id="stage" class="StageCard">');
    document.write('<div class="event_box" style="width:97%;">');
    document.write('<div class="<div class="text_left" style="float:right;width:50%;">');
    document.write(data[ s ].infomation);
    document.write('</div>');
    document.write('<div class="text_center" style="float:right;width:50%;">');
    document.write('<a href="' + data[ s ].url + '" target="_blank">');
    document.write('<img src="' + data[ s ].imagefile + '" style="max-width:400px;width:100%;"/>');
    document.write('</a><br />');
    if (data[ s ].isPushCard) {
        document.write('<span style="color:red">');
        if (data[ s ].isNew) {
            document.write('NEW');
        }
        document.write('</span>カード化しました！');
    }
    document.write('</div>');
    document.write('<hr class="clearfix" noshade/>');
    document.write('</div>');
    document.write('</div>');
}
