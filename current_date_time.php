<?php
$date_time = new DateTime();
$current_date_time = $date_time->format('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>現在日時</title>
</head>
<body>
<h1>現在日時</h1>
<h2><?php echo $current_date_time; ?></h2>
<form action="" method="post">
<p><input type="submit" name="update_button" value="更新する"></p>
</form>
</body>
</html>
