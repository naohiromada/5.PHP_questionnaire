<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ｇ’Ｓ課題制作　提出後アンケート調査（入力画面）</title>
  <link rel="stylesheet" href="css/style-auberge.css">


</head>

<body>
  <div class="contents">
    <div class="contents-container">
      <!-- アンケート入力 -->
      <form action="create.php" method="post">
        <fieldset>
          <legend>Ｇ’Ｓ課題制作　提出後アンケート調査（入力画面）</legend>
          <a href="read.php">一覧画面</a>
          <p><label for="name" class="textfield_label">氏名</label><input type="text" name="name"></p>
          <p>
            <label for="mail" class="textfield_label">メールアドレス</label><input type="mail" name="e_mail">
          </p>
          <p><label for="date" class="textfield_label">回答日</label><input type="date" name="date"></p>
          <p><label for="no" class="textfield_label">課題番号</label><input type="text" name="no"></p>
          <!-- 問１ -->
          <p><label for="level_of_sat">満足度</label></p>
          <select name="Level_of_satisfaction" id="level_of_sat">
            <option value="1">大満足</option>
            <option value="2">やや満足</option>
            <option value="3">ふつう</option>
            <option value="4">不満</option>
            <option value="5">大不満</option>
          </select>

          <!-- 問２ -->
          <p>工夫した点（複数選択可）</p>
          <ul class="Ingenuity_point">
            <li><label><input type="checkbox" name="Ingenuity" vslue="code">コード</label></li>
            <li><label><input type="checkbox" name="Ingenuity" vslue="design">デザイン</label></li>
            <li><label><input type="checkbox" name="Ingenuity" vslue="function">機能</label></li>
          </ul>
          <!-- 問３ -->
          <p>苦労した点（複数選択可）</p>
          <ul class="Hardship_point" class="textfield_label">
            <li><label><input type="checkbox" name="Hardship" vslue="Get_ideas">アイデア出し</label></li>
            <li><label><input type="checkbox" name="Hardship" vslue="Code_description">コード記述</label></li>
            <li><label><input type="checkbox" name="Hardship" vslue="Error_improvement">エラー改善</label></li>
          </ul>
          <!-- 問４ -->
          <p><label for="Production_time" class="textfield_label">制作時間</label><input type="text" name="Production_time"></p>

          <!-- 問５ -->
          <p><label for="Impressions">感想</label"><br>
              <textarea placeholder="具体的にお書きください" name="Impressions" id="Impressions"></textarea>
              <!--  -->
              <!-- データ送信 -->
              <div>
                <button>submit</button>
              </div>
        </fieldset>
      </form>
    </div>
  </div>
  <footer>
    <div class="footer-container">
      <p>©G's 福岡dev8 naohiro.mada</p>
    </div>
  </footer>
</body>

</html>