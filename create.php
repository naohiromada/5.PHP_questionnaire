<?php
// データの取り込み確認をするコマンド
// var_dump($_POST);
// exit();


// ファイル書き込み操作の流れ
$name = $_POST["name"]; // データ受け取り
$e_mail = $_POST["e_mail"];
$date = $_POST["date"];
$no = $_POST["no"];
// アンケート問１－５
$Level_of_satisfaction = $_POST["Level_of_satisfaction"];
$Ingenuity = $_POST["Ingenuity"];
$Hardship = $_POST["Hardship"];
$Production_time = $_POST["Production_time"];
$Impressions = $_POST["Impressions"];

// CSV　書き込み
// $write_data = "{$name},{$e_mail},{$date},{$no},{$date},{$Level_of_satisfaction},{$Ingenuity},{$Hardship},{$Production_time},{$Impressions}\n";


$write_data = "{$name}{$e_mail}{$date}{$no}{$date}{$Level_of_satisfaction}{$Ingenuity}{$Hardship}{$Production_time}{$Impressions}\n";

var_dump($write_data);

// ファイルを書き込み用に開きます。
$file = fopen("data/questionnaire.csv", "a");

// ---------------------------------

flock($file, LOCK_EX); // ファイルをロック
fwrite($file, $write_data); // データに書き込み，
// fputcsv($file, $write_data);
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイルを閉じる
header("Location:index.php"); // 入力画面に移動
