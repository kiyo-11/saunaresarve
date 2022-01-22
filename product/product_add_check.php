

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>商品追加チェック</title>
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
        <section id="main">
            <div id="wrapper">
                <section class="ontent">
                    
                    <aside id="sub" class="gridWrapper">
                        
                        <section class="gridd">
                            <h3 class="heading">商品追加</h3>
        <?php
                            session_start();
                            session_regenerate_id(true);
                            if(isset($_SESSION["login"]) === false) {
                                print "ログインしていません。<br><br>";
                                print "<a href='../staff_login/staff_login.html'>ログイン画面へ</a>";
                                exit();
                            } else {
                                print $_SESSION["name"]."さんログイン中";
                                print "<br><br>";
                            }
        require_once("../common/common.php");
        
        $post = sanitize($_POST);
        $name = $post["name"];
        $price = $post["price"];
        $gazou = $_FILES["gazou"];
        $comments = $post["comments"];
        //$cate = $post["cate"];
        $sauna = $post["sauna"];
        $water = $post["water"];
        $gaiki = $post["gaiki"];
        $rouryu = $post["rouryu"];
        
        //print $cate."<br><br>";
        
        if(empty($name) === true) {
            print "店名が入力されていません。<br><br>";
        } else {
                                print "<table class='table'>";
                                print "<tr>";
                                print "<th>";
                                print "名前";
                                print "</th>";
                                print "<td>";
            print $name;
                                print "</td>";
                                print "</tr>";
                                //print "</table>";
            //print "<br><br>";
        }
        
        if(preg_match("/\A[0-9]+\z/", $price) === 0) {
            print "正しい値を入力してください。<br><br>";
        } else {
                                print "<th>";
                                print "価格";
                                print "</th>";
                                print "<td>";
            print $price."円";
                                print "</td>";
                                print "</tr>";
            //print "<br><br>";
        }
        
        if($gazou["size"] > 0) {
            if($gazou["size"] > 1000000) {
                print "ファイルのサイズが大きすぎます。<br><br>";
            } else {
                                    print "<th>";
                                    print "画像";
                                    print "</th>";
                                    print "<td>";
                move_uploaded_file($gazou["tmp_name"],"./gazou/".$gazou["name"]);
                print "<img src='./gazou/".$gazou['name']."'>";
                                    print "</td>";
                                    print "</tr>";
                //print "<br><br>";
            }
        }
        if(empty($comments) === true) {
            print "詳細が入力されていません。";
            print "<br><br>";
        } 
        if(mb_strlen($comments) > 100) {
            print "文字数は100文字が上限です。";
            print "<br><br>";
        } else {
                                print "<th>";
                                print "詳細";
                                print "</th>";
                                print "<td>";
            print $comments;
                                print "</td>";
                                print "</tr>";
                               
           // print "<br><br>";
        }
        
                            
                            
                            
                            print "</table>";
                            
        if(empty($name) or preg_match("/\A[0-9]+\z/", $price) === 0 or $gazou["size"] > 1000000 or empty($comments) or mb_strlen($comments) > 100) {
        print "<form>";
        print "<input type='button' onclick='history.back()' value='戻る'>";
        print "</form>";
    } else {
        print "上記商品を追加しますか？<br><br>";
        print "<form action='product_add_done.php' method='post'>";
        print "<input type='hidden' name='name' value='".$name."'>";
        print "<input type='hidden' name='price' value='".$price."'>";
        print "<input type='hidden' name='gazou' value='".$gazou['name']."'>";
            print "<input type='hidden' name='sauna' value='".$sauna."'>";
            print "<input type='hidden' name='water' value='".$water."'>";
            print "<input type='hidden' name='rouryu' value='".$rouryu."'>";
            print "<input type='hidden' name='gaiki' value='".$gaiki."'>";
        print "<input type='hidden' name='comments' value='".$comments."'>"; 
        print "<input type='button' onclick='history.back()' value='戻る'>";
        print "<input type='submit' value='OK'>";
        print "</form>";
    }
    ?>
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