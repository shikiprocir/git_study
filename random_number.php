<?php
$random_number = rand(1, 10000);
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
<a href="https://procir-study.site/shiki402/maintask/task20/git_study/link.php">Home</a>
</body>
</html>
