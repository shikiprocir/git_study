<?php
$random_number = rand();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>乱数計算</title>
</head>
<body>
<h1>乱数計算</h1>
<h2><?php echo $random_number; ?></h2>
<form action="" method="post">
<p><input type="submit" name="calculate_button" value="計算する"></p>
</form>
</body>
</html>
