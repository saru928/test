<!DOCTYPE html>
<html lang = "ja">

    <head>
    
        <meta charset = "UTF-8">
        <title>diworksblog 掲示板</title>
        <link rel = "stylesheet" type = "text/css" href = "style2.css">
        
    </head>

    <body>
        
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
        $stmt = $pdo -> query("select * from diworks_keijiban");
        ?>
    
        <header>
            <img src ="diblog_logo.jpg">
            <ul class = "menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
    
        <main>
            <div class = "main-cintainer">
                <div class = "left">
                    <h1>プログラミングに役立つ掲示板</h1>
                    <div class = "graybox1">
                        <h2>入力フォーム</h2>
                        <form method = "post" action = "insert.php">
                            <div>
                                <label>ハンドルネーム</label><br>
                                <input type = "text" class = "handlname" name = "handlname" required><br><br>
                                <label>タイトル</label><br>
                                <input type = "text" class = "title" name = "title" required><br><br>
                                <label>コメント</label><br>
                                <textarea name = "comments" rows = "4" cols ="40" required = "required"></textarea><br><br>
                                <input type = "submit" class = "submit" value = "投稿する">
                            </div><br>
                        </form>
                    </div><br>
                    
                    <?php
                    
                    while($row = $stmt -> fetch()){
                        
                        echo "<div class = 'graybox2'>";
                        echo "<h2>".$row['title']."</h2>";
                        echo "<div class = 'contents'>";
                        echo $row['comments']."</div>";
                        echo "<div class = 'handlname'>posted by".$row['handlname']."</div>";
                        echo "</div>";
                    }
                    
                    ?>
                    
                    
                </div>
            
                <div class = "right">
                    <br><br><br>
                    <div class = "kizi">人気の記事</div>
                    <ul class = "migi">
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>いま人気のエディタTop5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                    <div class = "link">オススメリンク</div>
                    <ul class = "migi">
                        <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Braketsのダウンロード</li>
                    </ul>
                    <div class = "kategori">カテゴリ</div>
                    <ul class = "migi">
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul><br>
                </div>
            </div>
        </main>
    
        <footer>
            Copyright D.I.Works|D.I.blog is the one which provides A to Z about programming
        </footer>
    
    </body>
</html>