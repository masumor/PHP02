<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ブックマーク</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bm.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header><div class="header">入力画面</div>



        </div>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="bminsert.php">
        <div class="jumbotron">
            <fieldset>
                <div class="title"><legend>書籍</legend></div>
                <label>書籍名：<input type="text" name="bookname"></label><br>
                <label>書籍URL：<input type="text" name="bookurl"></label><br>
                <label>作者：<input type="text" name="author"></label><br>
                <label><textArea name="comment" rows="4" cols="40" placeholder="コメントを書いてね"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
    <nav class="navbar navbar-default">
            <div class="container-fluid">
            <button><a href="./select.php">一覧を見る</a></button>
        </nav>

        
<footer class='footer'>
      <small class='copy'>&copy;My BOOK LIST</small>
    </footer>


</body>

</html>
