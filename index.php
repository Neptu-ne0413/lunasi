<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>検索結果</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
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
        echo "<p>" . $search_word . "の英語は「" . $dictionary[$search_word] . "」です。</p>";
      } else {
        echo "<p>「" . $search_word . "」は辞書にありません。</p>";
      }
    ?>
  </body>
</html>
