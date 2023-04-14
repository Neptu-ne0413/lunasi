<?php
$words = array(
	'apple' => 'りんご',
	'banana' => 'バナナ',
	'cat' => '猫',
	'dog' => '犬',
	'elephant' => '象',
	'fish' => '魚',
	'grape' => 'ぶどう',
	'horse' => '馬',
	'ice cream' => 'アイスクリーム',
	'jellyfish' => 'クラゲ'
);

foreach ($words as $key => $value) {
	echo "<li><strong>{$key}</strong> : {$value}</li>";
}
?>
