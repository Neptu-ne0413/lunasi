<?php
// データベース接続情報
$dbname = '辞書DB名';
$host = 'ホスト名';
$user = 'ユーザー名';
$pass = 'パスワード';

// データベース接続
try {
	$pdo = new PDO("mysql:dbname={$dbname};host={$host};charset=utf8mb4", $user, $pass);
} catch (PDOException $e) {
	exit('データベース接続エラー：' . $e->getMessage());
}

// 検索ワードを取得
$word = $_POST['
