<?php
session_start();
$_SESSION = array();
if(isset($_Cookie[session_name()]) === true) {
    setcookie(session_name(), "", time()-42000, "/");
}
session_destroy();
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
        <main>
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
            
                <section class="content">
                    <aside id="sub" class="gridWrapper">
                        
                        <section class="gridd">
        ログアウトしました。
        
                        <br><br><br><br><br><br><br><br>
        <a href="../shop/index.php">TOPへ</a>
        <br><br>
                        </section>
                
                
              
        
                </div>
                </main>
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