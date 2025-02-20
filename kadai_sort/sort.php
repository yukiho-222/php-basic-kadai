<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <?php
        $nums = [15, 4, 18, 23, 10];
        function sort_2way($array, $order) {
            if ($order) { // $order が true（昇順）なら
                echo "昇順にソートします。<br>";
                sort($array); // 昇順ソート
            } else { // $order が false（降順）なら
                echo "降順にソートします。<br>";
                rsort($array); // 降順ソート
            }

            // ソートした配列のデータを1行ずつ表示
            foreach ($array as $nums) {
                echo "$nums<br>";
            }
        }
        sort_2way($nums, true);  // 昇順でソート
        echo "<br>";  
        sort_2way($nums, false); // 降順でソート
        ?>
    </p>
</body>
</html>
