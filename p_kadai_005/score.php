<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_課題</title>
</head>

<body>
    <p>
        <?php
        // 変数に値を代入する
        $score1 = '80';
        $score2 = '60';
        $score3 = '55';
        $score4 = '40';
        $score5 = '100';
        $score6 = '25';
        $score7 = '80';
        $score8 = '95';
        $score9 = '30';
        $score10 = '60';

        // 改行する
        echo '<br>';

        // 変数score1〜score10の合計点を出力する
        echo 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60;
        
        // 改行する
        echo '<br>';
        
        // 変数score1〜score10の平均点を出力する
        echo ( 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60) / 10;
        ?>
    </p>
</body>
</html>

