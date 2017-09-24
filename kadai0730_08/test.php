<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/testphp.css">
    <link rel="stylesheet" href="css/reset.css">
  </head>
  <body>

  <div class="wrap">

    <div id="header">
      <h1 class="h1doko">DOKOTABI</h1>
      <p>for Japan</p>
      <img src="images.hikouki.png" alt="飛行機" class="hikouki">
    </div>

    <!-- <div class="rest">
      <div class="back-mainimg">
          <h1 class="h1">REST<h1>
            <div class="placeimg">
              <img src="img/kuma.jpg" alt="熊" class="img3">
            </div>
          <div class="ppp">
            <p>お出かけしすぎて疲れちゃいましたね</p>
            <br><p>今度の週末は家でゆっくりまったり</p>
          </div>
        </div>
      </div> -->

      <!-- <div class="kyoto">
         <div class="back-mainimg">
             <h1 class="h1">KYOTO</h1>
               <div class="placeimg">
                 <img src="img/kinkakuzi_0_800.jpg" alt="京都1" class="img1">
                 <img src="img/torii.jpg" alt="京都2" class="img2">
               </div>
             <div class="ppp">
               <p>金閣寺、伏見稲荷、清水寺・・・日本の美が感じられる美しい土地です。</p>
               <br><p>今度の週末はここに行ってみませんか？</p>
             </div>
           </div>
         </div> -->

<?php
$kyoto = 1;
$hokkaido = 2;
$osaka = 3;
$kochi = 4;
$okinawa = 5;
$tokyo = 6;
$fukuoka = 7;
$hazure = 8;

$rand = mt_rand(1,8);

if ($rand == 1){
  echo '    <div class="kyoto">
        <div class="back-mainimg">
            <h1 class="h1">KYOTO</h1>
              <div class="placeimg">
                <img src="img/kinkakuzi_0_800.jpg" alt="京都1" class="img1">
                <img src="img/torii.jpg" alt="京都2" class="img2">
              </div>
            <div class="ppp">
              <p>金閣寺、伏見稲荷、清水寺・・・日本の美が感じられる美しい土地です。</p>
              <br><p>今度の週末はここに行ってみませんか？</p>
            </div>
          </div>
        </div>';
}else if($rand == 2){
  echo '    <div class="hokkai">
        <div class="back-mainimg">
            <h1 class="h1">HOKKAIDO</h1>
              <div class="placeimg">
                <img src="img/hokkaido02.jpg" alt="北海道1" class="img1">
                <img src="img/sushi.jpg" alt="北海道2" class="img2">
              </div>
            <div class="ppp">
              <p>広大な土地。見渡しても見渡しきれない美しい景色に加えて、美味しい海鮮。</p>
              <br><p>今度の週末はここに行ってみませんか？</p>
            </div>
          </div>
        </div>';
}else if($rand == 3){
  echo '  <div class="osaka">
      <div class="back-mainimg">
          <h1 class="h1">OSAKA</h1>
            <div class="placeimg">
              <img src="img/osaka02.jpg" alt="大阪1" class="img1">
              <img src="img/osaka3.jpg" alt="大阪2" class="img2">
            </div>
          <div class="ppp">
            <p>どこに訪れても賑やか、活気が溢れる元気な街。</p>
            <br><p>今度の週末はここに行ってみませんか？</p>
          </div>
        </div>
      </div>';
}else if($rand == 4){
  echo '  <div class="kochi">
      <div class="back-mainimg">
          <h1 class="h1">KO-CHI</h1>
            <div class="placeimg">
              <img src="img/kochi02.jpg" alt="高知1" class="img1">
              <img src="img/kochi03.jpg" alt="高知2" class="img2">
            </div>
          <div class="ppp">
            <p>坂本龍馬の地、力強い海があるかと思えば秘境。かつおのたたきがかかせない。</p>
            <br><p>今度の週末はここに行ってみませんか？</p>
          </div>
        </div>
      </div>';
}else if($rand == 5){
  echo '    <div class="okinawa">
        <div class="back-mainimg">
            <h1 class="h1">OKINAWA<h1>
              <div class="placeimg">
                <img src="img/okinawa4.jpg" alt="沖縄1" class="img1">
                <img src="img/okinawa5.jpg" alt="沖縄2" class="img2">
              </div>
            <div class="ppp">
              <p>説明なんていらない程の綺麗な海、ゆったりとした時が流れる街並み・・・</p>
              <br><p>今度の週末はここに行ってみませんか？</p>
            </div>
          </div>
        </div>';
}else if($rand == 6){
  echo '  <div class="tokyo">
      <div class="back-mainimg">
          <h1 class="h1">TOKYO<h1>
            <div class="placeimg">
              <img src="img/tokyo03.jpg" alt="東京1" class="img1">
              <img src="img/tokyo01.jpg" alt="東京2" class="img2">
            </div>
          <div class="ppp">
            <p>めまぐるしい都会と趣漂う下町。2つの世界が混在する不思議な町。</p>
            <br><p>今度の週末はここに行ってみませんか？</p>
          </div>
        </div>
      </div>';
}else if($rand == 7){
  echo '    <div class="fukuoka">
        <div class="back-mainimg">
            <h1 class="h1">FUKUOKA<h1>
              <div class="placeimg">
                <img src="img/fukuoka02.jpg" alt="福岡1" class="img1">
                <img src="img/fukuoka4.jpg" alt="福岡2" class="img2">
              </div>
            <div class="ppp">
              <p>過去の景色が残る街並みの中に、何日いればおいしい料理を食べ尽くせられる？</p>
              <br><p>今度の週末はここに行ってみませんか？</p>
            </div>
          </div>
        </div>';
}else if($rand == 8){
  echo '    <div class="rest">
        <div class="back-mainimg">
            <h1 class="h1">REST<h1>
              <div class="placeimg">
                <img src="img/kuma.jpg" alt="熊" class="img3">
              </div>
            <div class="ppp">
              <p>お出かけしすぎて疲れちゃいましたね</p>
              <br><p>今度の週末は家でゆっくりまったり</p>
            </div>
          </div>
        </div>';
}
?>


<div class="buttondiv">
  <div class="kokobutton">
    <a href="test.php"  class="button">もういちど</a>
   </div>
</div>

  <div id="fotter"><a href="kadai.php" class="foth1">
    <div class="fot">
    <h1.saigo>RETURN TOP</h1></div></a>
  </div>


</div>

</body>
</html>
