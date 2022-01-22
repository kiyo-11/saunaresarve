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
                    <a href="../shop/index.php">SAUNA RESERVE<br><span>予約するならここ！</span></a>
                </div>
                    <nav id="mainNav">
                        <a class="menu" id="menu"><span>MENU</span></a>
                        <div class="panel">
                            <ul>
                                <li><a href="../shop/index.php">トップページ<br><span>Top</span></a></li>
                                <li><a href="../menber_login/menber_login.html">ログインページ<br><span>login</span></a></li>
                                <li><a href="../menber_login/menber_login_db.php">会員登録<br><span>registration</span></a></li>
                                
                            </ul>
                        </div>
                    </nav>
            </div>
        </div>
        
            <div id="wrapper">
        <div id="wrapper">
                <section class="content">
                    <aside id="sub" class="gridWrapper">
                        
                        <section class="gridd">
        
        <?php
        try{
            
            require_once("../common/common.php");
            
            $post = sanitize($_POST);
            
            $name = $post["name"];
            $address = $post["address"];
            $tel = $post["tel"];
            $email = $post["email"];
            $pass = $post["pass"];
            
            $pass = md5($pass);
            
            $dsn = "mysql:host=localhost;dbname=shop;charset=utf8";
            $user = "root";
            $password = "";
            $dbh = new PDO($dsn, $user, $password);
            $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "SELECT email FROM menber WHERE1";
            $stmt = $dbh -> prepare($sql);
            $stmt -> execute();
            
            while(true) {
                $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
                if(empty($rec) === true) {
                    break;
                }
                $mail[] = $rec["email"];
            }
            
            if(in_array($email, $mail) === true) {
                print "すでに使われているmailアドレスです。<br><br>";
                print "<a href='../shop/index.php'>トップへ戻る</a>";
                $dbh = null;
            } else {   
                $sql = "INSERT INTO menber(name, email, address, tel, password) VALUES(?,?,?,?,?)";
                $stmt = $dbh -> prepare($sql);
                $data[] = $name;
                $data[] = $email;
                $data[] = $address;
                $data[] = $tel;
                $data[] = $pass;
                $stmt -> execute($data);
                
                $dbh = null;
                
                
                print "登録完了しました。<br><br>";
                print "<a href='../shop/index.php'>トップへ戻る</a>";
            }
        }
        catch(Exception $e) {
            print "只今障害が発生しております。";
            print "<a href='../shop/index.php'>トップへ戻る</a>";
            exit();
        }
        ?>
        <br><br>
                        </section>
        </div>
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
            
            
            
            </div>
            <div id="footer">
                <div class="inner">
                    
                  
                    <section class="gridWrapper">
                        
                        <article class="grid">
                           
                            <p class="logo"><a href="../shop/index.php">SAUNA RESERVE<br /><span>予約するならここ！</span></a></p>
                               
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