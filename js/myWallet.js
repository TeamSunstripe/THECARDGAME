var myWalletData = {
Yen:5000,
Point:500,
Coin:1000,
}

// 縁
var myWalletYen = document.getElementById("myWalletYen");
var mywallet_yen = document.getElementById("mywallet_yen");
myWalletYen.onclick = function () {
    // ここに#mywallet_yenをクリックしたら発生させる処理を記述する
    alert(mywallet_yen.innerHTML);
}
mywallet_yen.innerHTML = myWalletData.Yen;
// POINT
var myWalletPoint = document.getElementById("myWalletPoint");
var mywallet_point = document.getElementById("mywallet_point");
myWalletPoint.onclick = function () {
    // ここに#mywallet_yenをクリックしたら発生させる処理を記述する
    alert(mywallet_point.innerHTML);
}
mywallet_point.innerHTML = myWalletData.Point;
// COIN
var myWalletCoin = document.getElementById("myWalletCoin");
var mywallet_coin = document.getElementById("mywallet_coin");
myWalletCoin.onclick = function () {
    // ここに#mywallet_coinをクリックしたら発生させる処理を記述する
    alert(mywallet_coin.innerHTML);
}
mywallet_coin.innerHTML = myWalletData.Coin;

// AddButton
var addButton = document.getElementById("addButton");
addButton.onclick = function () {
    // ここに#mywallet_coinをクリックしたら発生させる処理を記述する
    alert(addButton.innerHTML);
}

