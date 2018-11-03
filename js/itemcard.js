/***
 itemcard.js
 ***/
var itemcardData = [
                    /*
                     {
                     infomation : '<a name="soubistudio"><h4>【　会　場　】</h4></a>'
                     + '装美スタジオ<br />'
                     + 'ソウビスタジオ<br />'
                     + '<br />'
                     + '〒150-0011<br />'
                     + '東京都東京都渋谷区東2-23-6 装美スタジオ（現、忍者茶房内）<br />'
                     + '<br />'
                     + 'TEL： 03-5778-4419<br />'
                     + '<h5>【H  P】</h5>'
                     + '<a href="http://oedo.club/" target="_blank">http://soubi.studio/</a><br />'
                     + '<h5>【アクセス】</h5>'
                     + 'JR渋谷南口16b（恵比寿方面）出口　徒歩10分<br />',
                     imagefile : './images/card/soubistudio.png',
                     url : 'http://oedo.club/',
                     isPushCard : true,
                     isNew : false,
                     },
                     {
                     infomation : '<a name="mokuseigekijo"><h4>【　会　場　】</h4></a>'
                     + 'cafe＆bar 木星劇場<br />'
                     + 'モクセイゲキジョウ<br />'
                     + '<br />'
                     + '〒171-0021<br />'
                     + '東京都豊島区西池袋5-1-5 第二春谷ビルB1<br />'
                     + 'TEL： 03-5927-8998<br />'
                     + '<a href="http://mokusei-cafe.com/access/" target="_blank">http://mokusei-cafe.com/</a><br />'
                     + '<h5>【アクセス】</h5>'
                     + '池袋駅西口側 C3出口から徒歩約10秒。<br />',
                     imagefile : './images/card/mokuseigekijo.png',
                     url : 'http://mokusei-cafe.com/',
                     isPushCard : true,
                     isNew : false,
                     },
                     */
];


function itemCardList(data,s)
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
