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
            
                <section class="content">
                    <aside id="sub" class="gridWrapper">
                        
                        <section class="gridd">
        <?php
        
        require_once("../common/common.php");
        
        $post = sanitize($_POST);
        
        $email = $post["email"];
        $pass = $post["pass"];
        $pass2 = $post["pass2"];
        $okflag = true;
        
        if(empty($email) === true) {
            print "emailを入力してください。<br>";
            $okflag = false;
        }
        if(preg_match("/\A[\w\-\.]+\@[\w\-\.]+\.([a-z]+)\z/", $email) === 0) {
            print "正しいemailを入力してください。<br>";
            $okflag = false;
        }
        if(empty($pass) === true) {
            print "パスワードを入力してください。<br>";
            $okflag = false;
        }
        if($pass != $pass2) {
            print "パスワードが異なります<br>";
            $okflag = false;
        }
        if($okflag === false) {
            print "<form><br>";
            print "<input type='button' onclick='history.back()' value='戻る'>";
        } else {
            print "下記mailアドレスでログインしますか？<br><br>";
                            print "<table class='table'>";
                            print "<tr>";
                            print "<th>";
                            print "email";
                            print "</th>";
                            print "<td>";
            print $email;
                            print "</td>";
                            print "</tr>";
                            print "</table>";
            print "<form action='menber_login_done.php' method='post'>";
            print "<input type='hidden' name='email' value='".$email."'>";
            print "<input type='hidden' name='pass' value='".$pass."'>";
            print "<input type='button' onclick='history.back()' value='戻る'>";
            print "<input type='submit' value='ログイン'>";
        }
        ?>
                        </section>
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
            
           
    </body>
</html>