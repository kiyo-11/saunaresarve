<?php

session_start();
session_regenerate_id(true);

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サウナ</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    
    <div id="header">
      <div class="inner">
      
        <div class="logo">
          <a href="index.php">SAUNA RESERVE<br><span>予約するならここ！</span></a>
        </div>
          <nav id="mainNav">
            <a class="menu" id="menu"><span>MENU</span></a>
            <div class="panel">
              <ul>
                <li><a href="index.php">トップページ<br><span>Top</span></a></li>
                <li><a href="../menber_login/menber_login.html">ログインページ<br><span>login</span></a></li>
                <li><a href="../menber_login/menber_login_db.php">会員登録<br><span>registration</span></a></li>
                
              </ul>
            </div>
          </nav>
      </div>
    </div>
    
    <div id="wrapper">
    
    
    <?php
    try {
      
      if(isset($_SESSION["menber_login"]) === false) {
        print "ログインしてく下さい。<br><br>";
        print "<a href='../menber_login/menber_login.html'>ログイン画面へ<br><br></a>";
        print "<a href='shop_list.php'>TOP画面へ</a>";
      }
      if(isset($_SESSION["menber_login"]) === true) {
        print "ようこそ";
        print $_SESSION["menber_name"];
        print "様　";
        print "<a href='../menber_login/menber_logout.php'>ログアウト</a>";
        print "<br><br>";
        
            print "<aside id='sub' class='gridWrapper'>";
            
            print"<section class='gridd'>";
            
        $menber_code = $_SESSION["menber_code"];
        $cart = $_SESSION["cart"];
        $kazu = $_SESSION["kazu"];
        $max = count($kazu);
        
        $dsn = "mysql:host=localhost;dbname=shop;charset=utf8";
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT name, email, address, tel FROM menber WHERE code=?";
        $stmt = $dbh -> prepare($sql);
        $data[] = $menber_code;
        $stmt -> execute($data);
        
        $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
        
        print "<section class='content'>";
        print "下記内容でよろしいでしょうか？<br><br>";
        print "【宛先】<br>";
          
         print "<table class='table'>";
         print "<tr>";
         print "<th>";
          
          
        print "お名前";
          print "</th>";
          print "<td>";
         print $rec['name'];
          print "</td>";
       
          print "</tr>";
          print "<th>";
        print "mail";
          print "</th>";
          print "<td>";
         print $rec['email'];
          print "</td>";
          print "</tr>";
          print "<th>";
        print "ご住所";
          print "</th>";
          print "<td>";
         print $rec['address'];
          print "</td>";
          print "</tr>";
          print "<th>";
        print "ご連絡先";
          print "</th>";
          print "<td>";
          print $rec['tel'];
          print "</td>";
          print "</tr>";
        $name = $rec["name"];
        $email = $rec["email"];
        $address = $rec["address"];
        $tel = $rec["tel"];
          
          print "</table>";
        
        print "【ご注文内容】<br>";
        for($i = 0; $i < $max; $i++) {
          $sql = "SELECT name, price, gazou FROM sauna WHERE code=?";
          $stmt = $dbh -> prepare($sql);
          $data = array();
          $data[] = $cart[$i];
          $stmt -> execute($data);
          
          $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
          
          if(empty($rec["gazou"]) === true) {
            $disp_gazou = "";
          } else {
            $disp_gazou = "<img src='../product/gazou/".$rec['gazou']."'>";
          }
          print "<div class='box'>";
          print "<div class='list'>";
          print "<div class='img'>";
          print $disp_gazou;
          print "</div>";
          print "<div class='npe'>";
            print "<table class='table'>";
            print "<tr>";
            print "<th>";
          print "店名";
            print "</th>";
            print "<td>";
            print $rec['name'];
            print "</td>";
            print "</tr>";
            print "<th>";
          print "価格";
            print "</th>";
            print "<td>";
            print $rec['price'];
            print "円";
            print "</td>";
            print "</tr>";
            print "<th>";
          print "数量";
            print "</th>";
            print "<td>";
           print $kazu[$i];
            print "</td>";
            print "</tr>";
            print "<th>";
          print "合計価格";
            print "</th>";
            print "<td>";
           print $rec['price'] * $kazu[$i];
           print "円";
            print "</td>";
            print "</tr>";
          $goukei[] = $rec['price'] * $kazu[$i];
          print "</div></div></div><br>";
           print "</table>";
        }
        $dbh = null; 
        print "【ご請求金額】---".array_sum($goukei)."円<br><br>";
        print "<form action='shop_form_done.php' method='post'>";
        print "<input type='hidden' name='name' value='".$name."'>";
        print "<input type='hidden' name='email' value='".$email."'>";
        print "<input type='hidden' name='address' value='".$address."'>";
        print "<input type='hidden' name='tel' value='".$tel."'>";
        print "<input type='button' onclick='history.back()' value='戻る'>";
        print "<input type='submit' value='OK'>";
        print "</form>";
      }
    }
    catch(Exception $e) {
      print "只今障害が発生しております。<br><br>";
      print "<a href='index.php'>ログイン画面へ</a>";
    }
    ?>
    <br><br>
  </section>
  </div>
  <div id="wrapper">
    <section class="content">
      <h3 class="heading">写真ギャラリー(外部リンク）</h3>
      <article class="gridWrapper" id="gallery">
        <figure class="grid"><a href="https://sauna-ikitai.com/saunas/2779"><img src="../product/gazou/sikiji.jpg" width="210" height="140" alt=""></a></figure>
        <figure class="grid"><a href="https://sauna-ikitai.com/saunas/88"><img src="../product/gazou/hokuou.jpg" width="210" height="140" alt=""></a></figure>
        <figure class="grid"><a href="https://sauna-ikitai.com/saunas/6656"><img src="../product/gazou/karumaru.jpg" width="210" height="140" alt=""></a></figure>
        <figure class="grid"><a href="https://sauna-ikitai.com/saunas/1523"><img src="../product/gazou/kusaka.jpg" width="210" height="140" alt=""></a></figure>
        <figure class="grid"><a href="https://sauna-ikitai.com/saunas/2215"><img src="../product/gazou/sukaisupa.jpg" width="210" height="140" alt=""></a></figure>
        <figure class="grid"><a href="https://sauna-ikitai.com/saunas/4044"><img src="../product/gazou/yurakkusu.jpg" width="210" height="140" alt=""></a></figure>
        <figure class="grid"><a href="https://sauna-ikitai.com/saunas/5357"><img src="../product/gazou/thesauna.jpg" width="210" height="140" alt=""></a></figure>
        <figure class="grid"><a href="https://sauna-ikitai.com/saunas/3140"><img src="../product/gazou/koubesauna.jpg" width="210" height="140" alt=""></a></figure>
      </article>
    </section>
    
    
    <aside id="sub" class="gridWrapper">
      
      <section class="grid">
        <h3>検索</h3>
        <ul class="list">
        <form action="shop_list_book.php" method="post">
          
          <label for="price">入浴料</label>
          <select name="price">
            <option value="2000">〜2000円</option>
            <option value="1500">〜1500円</option>
            <option value="1000">〜1000円</option>
            <option value="500">〜500円</option>
          </select>
          <br><br>
          <label for="sauna">サウナ</label>
          <select name="sauna">
            <option value="125">100º〜</option>
            <option value="100">~100º</option>
            <option value="90">~90º</option>
            <option value="80">~80º</option>
          </select>
          <br><br>
          <label for="water">水風呂</label>
          <select name="water">
            <option value="20">~20º</option>
            <option value="15">~15º</option>
            <option value="10">~10º</option>
            <option value="5">~5º</option>
          </select>
          <br><br>
          <label for="gaiki">外気浴</label>
          <input type="radio" name="gaiki" value="0" checked=checked>有
          <input type="radio" name="gaiki" value="1">無
          <br><br>
          <label for="rouryu">ロウリュ</label>
          <input type="radio" name="rouryu" value="0" checked=checked>有
          <input type="radio" name="rouryu" value="1">無
          <br><br>
          <input type="submit" value="検索">
        </form>
      </section>  
      
      <section class="grid">
        <h3>おすすめサウナ（外部リンク）</h3>
        <ul>
          <li><a href="https://sauna-ikitai.com/saunas/1873">天空のアジトマルシンスパ</a></li>
          <li><a href="https://sauna-ikitai.com/saunas/2509">ウェルビー栄</a></li>
          <li><a href="https://sauna-ikitai.com/saunas/9134">黄金湯</a></li>
          <li><a href="https://sauna-ikitai.com/saunas/1706">サウナセンター</a></li>
          <li><a href="https://sauna-ikitai.com/saunas/6060">御船山楽園ホテル　らかんの湯</a></li>
          <li><a href="https://sauna-ikitai.com/saunas/1757">東京ドーム天然温泉　スパ　ラクーア</a></li>
        </ul>
      </section>
      
      <section class="grid">
        <h3>もっとサウナを知りたい人へ（外部リンク）</h3>
        <ul>
          <li><a href="https://saunatime.jp">日本最大級のサウナ専門口コミメディアサイト</a></li>
          <li><a href="https://www.yukaisoukai.com/chi/sauna-totonou/">整うサウナの入り方</a></li>
          <li><a href="https://suisyun.jp/sauna/">サウナの効果と楽しみ方</a></li>
          <li><a href="https://www.sauna.or.jp">公益社団法人日本サウナ・スパ協会のホームページ</a></li>
          <li><a href="https://www.saunachelin.com">SAUNACHELIN</a></li>
          <li><a href="https://saunatime.jp/sauna-wiki/">これで全てがわかる！サウナ用語集【サウナWiki】</a></li>
        </ul>
      </section>   
    </div>
    <div id="footer">
      <div class="inner">
        
       
        <section class="gridWrapper">
          
          <article class="grid">
           
            <p class="logo"><a href="index.php">SAUNA RESERVE<br /><span>予約するならここ！</span></a></p>
             
            </article>
            
            <article class="grid">
             
              <p class="tel">電話: <strong>012-3456-7890</strong></p>
              <p>受付時間: 平日 AM 10:00 〜 PM 5:00</p>
             
            </article>
            
            <article class="grid copyright">
            create by saunadaisuki</a>
          </article>
            
          </section>
        
          
        </div>
      </div>
      
  </body>
</html>