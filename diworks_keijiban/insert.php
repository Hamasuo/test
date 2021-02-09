<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into diworks_keijiban(handlename,title,comments)values
    ('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/diworks_keijiban/index.php");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>diworksblog 掲示板</title>
</head>

<body>
    <form action=“index.php” method=“post”>
        <input type="hidden" value="<?php echo $_POST['handlename'];?>" name="handlename">
        <input type="hidden" value="<?php echo $_POST['title'];?>" name="title">
        <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
    </form>
</body>
</html>