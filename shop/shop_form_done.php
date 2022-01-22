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
                
                    print "<section class='content'>";
                require_once("../common/common.php");
                
                $post = sanitize($_POST);
                
                $oname = $post["name"];
                $email = $post["email"];
                $address = $post["address"];
                $tel = $post["tel"];
                    print "<aside id='sub' class='gridWrapper'>";
                    
                    print"<section class='gridd'>";
                print $oname."様<br>";
                print "ご注文ありがとうございました。<br>";
                print $email."にメールを送りましたのでご確認下さい。<br>";
                print "商品は入金を確認次第、下記の住所に発送させて頂きます。<br>";
                    print "<table class='table'>";
                    print "<tr>";
                    print "<th>";
                    print "住所";
                    print "</th>";
                    print "<td>";
                print $address;
                    print "</td>";
                    print "</tr>";
                    print "<th>";
                    print "電話番号";
                    print "</th>";
                    print "<td>";
                print $tel;
                    print "</td>";
                    print "</tr>";
                    print "</table>";
                
                if (mail("$email", "商品ご購入ありがとうございます。", "入金が確認取れ次第、商品を発送させていただきます。", "From:
superchisey@gmail.com")) {
                    echo "メールが送信されました。";
                } else {
                    echo "メールの送信に失敗しました。";
                }

                
            }
        }
        catch(Exception $e) {
            print "只今障害により大変ご迷惑をおかけしております。";
            print "<a href='../shop/index.php'>トップへ戻る</a>";
            exit();
        }
        
        ?>
        
        <br>
        <?php $_SESSION["cart"] = array();?>
        <?php $_SESSION["kazu"] = array();?>
            <br>
        <a href="index.php">商品画面へ</a>
        <br>
        
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
            </ul>
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
                    <li><a href="https://saunatime.jp">日本最大級のサウナ専門口コミメディアサイト【サウナタイム】</a></li>
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
