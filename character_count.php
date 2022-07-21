<?php
if (isset($_POST['text'])) {
	$character_count = mb_strlen($_POST['text']);
} else {
	$character_count = 0;
	$_POST['text'] = '';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>文字数カウント</title>
</head>
<body>
<h1>文字数カウント</h1>
<h2><?php echo $character_count; ?>文字</h2>
<form action="" method="post">
<p><textarea name="text" rows="10" cols="75"><?php echo $_POST['text']; ?></textarea></p>
<p><input type="submit" name="count_button" value="カウントする"></p>
</form>
<a href="https://procir-study.site/shiki402/maintask/task20/git_study/link.php">Home</a>
</body>
</html>
