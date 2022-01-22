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
        <section id="main">
        <div id="wrapper">
                <section class="cntent">
                    <aside id="sub" class="gridWrapper">
                        
                        <section class="gridd">
                                <h3 class="heading">新規会員登録画面</h3>
                            <table class="table">
                                <tr>
                                    <th>お名前</th>
        
        <br>
        <form action="menber_login_db_check.php" method="post">
                                        <td><input type="text" name="name" value=""placeholder="山田太郎"></td>
                                    </tr>
                                        <th>email</th>
            
                                        <td><input type="text" name="email" value=""placeholder="xxx@xxx.xxx"></td>
                                    </tr>
                                        <th>住所</th>
            
                                        <td><input type="text" name="address" value=""placeholder="住所"></td>
                                    </tr>
                                    <th>tel</th>
            
                                    <td><input type="text" name="tel" value=""placeholder="12345678900"></td>
                            </tr>
                                <th>パスワード</th>
                            
                                <td><input type="password" name="pass" value=""placeholder="半角英数字"></td>
                        </tr>
                        <th>パスワード再入力</th>
            
                        <td><input type="password" name="pass2" value=""placeholder="もう一度入力してください"></td>
                    </tr>
                                    </table>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="OK">
            
            <br><br> ログインされる方はこちらからお願いします。
            <br>
            <a href="../menber_login/menber_login.html">ログインページ</a>
            <br>
            <a href="../staff_login/staff_login.html">スタッフログイン</a>
            
        </form>
        </div>
                    </section>
</section>
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
                </div>
               
    </body>
</html>