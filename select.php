<?php
//1.  DB接続します
try {
  //ID:'root', Password: 'root'
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM bookmark_table");
$status = $stmt->execute();

//３．データ表示
$view="";


if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .='<p>';
    $view .= $result["indate"] ." : ". $result["bookname"]." : ". $result["author"]." : ". $result["comment"];
    $view .='</p>';
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="select.css">
    <title>ブック一覧</title>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <div class="header">
    <h1>リスト一覧</h1>
  </div>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <p>                 日時　　　　　　　　　
      書籍名　　　　　
      作者　　　　　　
      ｺﾒﾝﾄ　　　　　</p>  
    <div class="container jumbotron"><?= $view ?></div>
</div>

<!-- Main[End] -->

<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <button><a href="./bm.php">入力に戻る</a></button>
      </div>
    </div>
  </nav>

</body>
</html>


