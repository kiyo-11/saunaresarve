<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ログイン</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    
    <body>
        <main>
        <div id="header">
            <div class="inner">
                
                <div class="logo">
                    <a href="../staff_login/staff_login.html">SAUNA RESERVE<br><span>（管理者専用画面）</span></a>
                </div>
            </div>
        </div>

<?php

session_start();
$_SESSION = array();
if(isset($_COOKIE[session_name()]) === true) {
    setcookie(session_name(), "", time()-42000, "/");
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ログアウト</title>
<link rel="stylesheet" href="../style.css">
</head>
    
<body>
                <section id="main">
                    <div id="wrapper">
                        <section class="ontent">
                            
                            <aside id="sub" class="gridWrapper">
                                
                                <section class="gridd">
                                    <section class='content2'>
                                    ログアウトしました。 </section><br>
<a href="staff_login.html">ログイン画面へ</a>
                                </section>
                            </section>
                            
                            <section class="content">
                                <h3 class="heading">写真ギャラリー(外部リンク）</h3>
                                <article class="gridWrapper" id="gallery">
                                    <figure class="grid"><a href="https://sauna-ikitai.com/magazine/ogaki-sauna/"><img src="../product/gazou/oashisu.jpg" width="200" height="140" alt="">夫婦二人三脚で営んできた奇跡のオアシス大垣サウナを訪ねて</a></figure>
                                    <figure class="grid"><a href="https://sauna-ikitai.com/magazine/sauna_genshi/"><img src="../product/gazou/genshi.jpg" width="200" height="140" alt="">労働式石焼サウナ『原始』制作の全記録</a></figure>
                                    <figure class="grid"><a href="https://sauna-ikitai.com/magazine/interview-kobayashi-ayana/"><img src="../product/gazou/honba.jpg" width="200" height="140" alt="">フィンランド人はととのい知らず!?サウナ文化研究家に聞いた「本場のサ道」
                                            
                                    </a></figure>
                                    <figure class="grid"><a href="https://sauna-ikitai.com/magazine/sound-designer-atk/"><img src="../product/gazou/ongaku.jpg" width="200" height="140" alt="">サウナにとって最高の音楽とは？ サウンドデザイナーatkさんに聞いてみた</a></figure>
                                    </article>
                                </section>
                                </div>
                                </main>
                                <div id="footer">
                                    <div class="inner">
                                        
                                        
                                        <section class="gridWrapper">
                                            
                                            <article class="grid">
                                                
                                                <p class="logo"><a href="../staff_login/staff_login.html">SAUNA RESERVE<br /><span>（管理者専用画面）</span></a></p>
                                                
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