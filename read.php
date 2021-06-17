<?php

// ファイル読み込み操作の流れ
$str = ''; // 出力用の空の文字列
$file = fopen('data/questionnaire.csv', 'r'); // ファイルを開く（読み取り専用）
flock($file, LOCK_EX); // ファイルをロック
if ($file) {
  while ($line = fgets($file)) { // fgets()で1行ずつ取得→$lineに格納
    $str .= "<tr><td>{$line}</td></tr>"; // 取得したデータを$strに入れる
  }
}
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイル閉じる
// （$strに全部の情報が入る！）

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ｇ’Ｓ課題制作　提出後アンケートリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>Ｇ’Ｓ課題制作　提出後アンケートリスト（一覧画面）</legend>
    <a href="index.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>氏名</th>
          <th>メールアドレス</th>
          <th>回答日</th>
          <th>課題番号</th>
          <th>満足度</th>
          <th>工夫した点</th>
          <th>苦労した点</th>
          <th>制作時間</th>
          <th>感想</th>
        </tr>
      </thead>
      <tbody>
        <?= $str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>