<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <?php
    
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt=$pdo->query("select * from diworks_keijiban");
    
    ?>
    
    <div class="wrapper">
    <img src="diblog_logo.jpg">
        
        <header>
            <div class="logo">トップ</div>
            <ul>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>

<main>
    <div class="main-container">
        
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
                
                <div>
                    <h3>入力フォーム</h3>
                </div>
                    
                <div>
                    <label>ハンドルネーム</label><br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>
                
                <div>
                    <label>タイトル</label><br>
                    <input type="text" class="text" size="35" name="title">
                </div>
                
                <div>
                    <label>コメント</label><br>
                    <textarea cols="80" rows="7" name="comments"></textarea>
                </div>
                
                <div>
                    <input type="submit" class="submit" value="投稿する">
 
                </div>                
            </form>
            
            <div class="kijis">
            <?php
            
            while($row=$stmt->fetch()){
                echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                echo"<div class='contents'>";
                echo $row['comments'];
                echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                echo"</div>";
                echo"</div>";
            }
            
            ?>
                
            </div>
            
        </div>
        
        <div class="right">
            
            <b class="taitl1">人気の記事</b>
                <div class="box_menu">
                PHPオススメ本<br>
                PHP MyAdminの使い方<br>
                いま人気のエディタTops<br>
                HTMLの基礎
                </div>
            
            <b class="taitl2">オススメリンク</b>
                <div class="box_menu">
                ﾃﾞｨｰｱｲﾜｰｸｽ株式会社<br>
                XAMPPのダウンロード<br>
                Eclipseのダウンロード<br>
                Bracketsのダウンロード
                </div>
            
             <b class="taitl3">カテゴリ</b>
                <div class="box_menu">
                HTML<br>
                PHP<br>
                MySQL<br>
                JavaScript
                </div>
        </div>
        
    </div>
</main>


        
    </div>
</body>
</html>