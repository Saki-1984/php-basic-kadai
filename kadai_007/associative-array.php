<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       //変数に値を代入
       $vegetables = ['name' => 'onion', 'price' => 200, 'weight' =>160];

       //変数の配列の値を出力する
       print_r($vegetables);
       
       ?>
   </p>
</body>

</html>