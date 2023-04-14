<?php
  $dictionary = array(
    "りんご" => "apple",
    "バナナ" => "banana",
    "チェリー" => "cherry",
    "ドラゴンフルーツ" => "dragon fruit",
    "エッグフルーツ" => "egg fruit",
    "フィグ" => "fig",
    "グレープフルーツ" => "grapefruit",
    "ハニーデュー" => "honeydew",
    "アイスクリームビーン" => "ice cream bean",
    "ジャックフルーツ" => "jackfruit"
  );

  $search_word = $_GET["word"];

  if (array_key_exists($search_word, $dictionary)) {
    $result = "<p>" . $search_word . "の英語は「" . $dictionary[$search_word] . "」です。</p>";
  } else {
    $result = "<p>「" . $search_word . "」は辞書にありません。</p>";
  }

  echo $result;
?>
