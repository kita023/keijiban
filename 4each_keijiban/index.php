<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>
            4eachblog 掲示板
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

    <?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmr = $pdo->query("select * from 4each_keijiban");

    ?>

    <div class="logo">
        <img src="4eachblog_logo.jpg">
    </div>

    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>eachについて</li>
            <li>登録フォーム</li>
            <li>お問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <main>
        <div class="left">
            <h2>
                プログラミングに役立つ書籍
            </h2>
            <form method="post" action="insert.php">
                <h3>
                    入力フォーム
                </h3>
                <div>
                    <label>
                        ハンドルネーム
                    </label>
                    <br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>

                <div>
                    <label>
                        タイトル
                    </label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>

                <div>
                    <label>
                        コメント
                    </label>
                    <br>
                    <textarea cols="50" rows="7" name="comments"></textarea>
                </div>

                <div>
                    <input type="submit" class="submit" value="送信する">
                </div>
            </form>

            <?php

                while ($row = $stmr->fetch()) {
                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
                }

            ?>

        </div>

        <div class="right">
            <h3>
                人気の記事
            </h3>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>

            <h3>
                オススメリンク
            </h3>
            <ul>
                <Li>インターノウス株式会社</Li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
                    
            <h3>
                カテゴリ
            </h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </main>

    </body>

    <footer>
        copyright © internous | 4each blog the which provides A to Z about programming.
    </footer>

</html>