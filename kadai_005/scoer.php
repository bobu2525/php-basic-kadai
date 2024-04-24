<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
  <!-- PHPの埋め込み -->
  <?php
// 生徒の点数を配列に代入
$scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

// 初期値設定
$total = 0;
$max_score = PHP_INT_MIN;
$min_score = PHP_INT_MAX;

// 合計、最高点、最低点を計算
foreach ($scores as $score) {
    $total += $score; // 合計点の計算
    if ($score > $max_score) {
        $max_score = $score; // 最高点の更新
    }
    if ($score < $min_score) {
        $min_score = $score; // 最低点の更新
    }
}

// 平均点の計算
$average = $total / count($scores);

// 点差の計算
$score_difference = $max_score - $min_score;

// 結果の出力
echo "合計点: $total<br>";
echo "平均点: $average<br>";
echo "最高点: $max_score<br>";
echo "最低点: $min_score<br>";
echo "点差: $score_difference<br>";
?>
</body>

</html>