<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head> 
<body>
  <p>
    <?php
      // 連想配列に値を代入する
      $product = ['name' => 'onion', 'price' => 200, 'weight' => 160];

      // 連想配列の値を出力する
      print_r($product);
    ?>

  </p>
</body>

</html>