var corichData =
{
    "003":
    {
        title : "DangerousBox",
    },
    "002":
    {
        title : "CHO",
    },
    "003":
    {
        title : "森ひであき",
    },
    "004":
    {
        title : "佐藤慶子",group : "dancer",
    },
    "005":
    {
        title : "神山 賢士",group : "male",
    },
    "006":
    {
        title : "永岡みゆき",group : "female",
    },
    "007":
    {
        title : "金渕琴音",group : "female",
    },
    "008":
    {
        title : "小柳 夏海",group : "female",
    },
    "009":
    {
        title : "齋藤 哲",group : "male",
    },
    "010":
    {
        title : "eMiRi",group : "dancer",
    },
    "011":
    {
        title : "宮岡志衣",group : "female",
    },
    "012":
    {
        title : "松本 渚",group : "dancer",
    },
    "014":
    {
        title : "REON",group : "female",
    },
    "015":
    {
        title : "林里容",group : "male",
    },
    "016":
    {
        title : "土田あかり",group : "female",
    },
    "017":
    {
        title : "岩間 健太",group : "male",
    },
    "018":
    {
        title : "叶江 透",group : "female",
    },
    "019":
    {
        title : "明音",group : "dancer",
    },
    "020":
    {
        title : "金田一 彩歌",group : "female",
    },
    "021":
    {
        title : "河内櫻子",group : "dancer",
    },
    "022":
    {
        title : "なかまり",group : "female",
    },
    "023":
    {
        title : "加來真有",group : "dancer",
    },
    "024":
    {
        title : "宮本 朋実",group : "female",
    },
    "025":
    {
        title : "倉持春花",group : "dancer",
    },
    "026":
    {
        title : "小花衣美悠",group : "dancer",
    },
    "027":
    {
        title : "山内里紗",group : "female",
    },
    "028":
    {
        title : "夢",group : "dancer",
    },
    "029":
    {
        title : "染谷未来",group : "dancer",
    },
    "030":
    {
        title : "柚希かおり",group : "dancer",
    },
    "031":
    {
        title : "清水龍平",group : "male",
    },
    "032":
    {
        title : "名桐舞",group : "female",
    },
    "033":
    {
        title : "良峰 由香",group : "female",
    },
    "034":
    {
        title : "野崎聡史",group : "male",
    },
    "035":
    {
        title : "鈴木優志",group : "male",
    },
    "036":
    {
        title : "高市美波",group : "female",
    },
    "037":
    {
        title : "高橋拓也",group : "male",
    },
    "038":
    {
        title : "井上 翔太",group : "male",
    },
    "039":
    {
        title : "日向 葵衣",group : "female",
    },
    "040":
    {
        title : "紅桜ゆと",group : "music",
    },
    "041":
    {
        title : "神井大治",group : "music",
    },


}

function timetable(number) {
    document.write('<p class="mobile typec"><a href="https://ticket.corich.jp/apply/92323/' + number + '/" target="_blank">携帯からの予約はこちらをクリック！</a></p><br />');
    document.write('<iframe src="https://ticket.corich.jp/stage/bp/timetable.php?sid=92323&ad=24%2C18%2C16%2C41&aid=' + number + '&view=10&body=&color=&td_bo=&td_co=&th_bo=&th_co=&t_bo=&t_co=&link=&border=" width="300px" height="200px" border="0" frameborder="no"></iframe>');
}
