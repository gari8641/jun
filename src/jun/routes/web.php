<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'JunController@index');
Route::get('/result/', 'JunController@result');

Route::get('/addroom/', 'JunController@addRoom');
Route::post('/addroom/', 'JunController@createRoom');

//Route::get('/maptest/', function() use ($str) {
Route::get('/maptest/', function(){
echo <<<EOD
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>位置情報取得サンプル2</title>
<!-- 動作処理 -->
<script>
// 現在地取得処理
function initMap() {
// Geolocation APIに対応している navigator.geolocation.getCurrentPosition();
      if (navigator.geolocation) {
        // 現在地を取得
        navigator.geolocation.getCurrentPosition(
          // 取得成功した場合
          function(position) {
            // 緯度・経度を変数に格納
            var mapLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            // マップオプションを変数に格納
            var mapOptions = {
              zoom : 15,          // 拡大倍率
              center : mapLatLng  // 緯度・経度
            };
            // マップオブジェクト作成
            var map = new google.maps.Map(
              document.getElementById("map"), // マップを表示する要素
              mapOptions         // マップオプション
            );
            //　マップにマーカーを表示する
            var marker = new google.maps.Marker({
              map : map,             // 対象の地図オブジェクト
              position : mapLatLng   // 緯度・経度
            });
          },
          // 取得失敗した場合
          function(error) {
            // エラーメッセージを表示
            switch(error.code) {
              case 1: // PERMISSION_DENIED
                alert("位置情報の利用が許可されていません");
                break;
              case 2: // POSITION_UNAVAILABLE
                alert("現在位置が取得できませんでした");
                break;
              case 3: // TIMEOUT
                alert("タイムアウトになりました");
                break;
              default:
                alert("その他のエラー(エラーコード:"+error.code+")");
                break;
            }
          }
        );
      // Geolocation APIに対応していない
      } else {
        alert("この端末では位置情報が取得できません");
      }
    }
  </script>
</head>
<body>
  <h1>位置情報取得サンプル2</h1>
  <div id="map" style="width:400px; height:300px"></div>
	<script src="//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDFjBO45AsEAQUZvU04RdJ7GilfMjUbEjE&callback=initMap"></script>
</body>
</html>

EOD;
});
