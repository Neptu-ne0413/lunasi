<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>英和辞書</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>検索結果</h1>
		<?php
		if (isset($_GET['word'])) {
			$search_word = $_GET['word'];
			include 'words.php';
			if (array_key_exists($search_word, $words)) {
				echo "<p><strong>{$search_word}</strong> : {$words[$search_word]}</p>";
			} else {
				echo "<p>該当する単語がありません。</p>";
			}
		}
		?>
		<a href="index.php">戻る</a>
	</div>
</body>
</html>
