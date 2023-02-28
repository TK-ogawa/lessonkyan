<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Lesson8</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
<div class="container">
  <h1>Lesson8</h1>
  <h2>test</h2>
  <?php
    // echo "test";
    // echo "<br>";
    $names = ["太郎", "次郎", "三郎"];
    $ages = [10, 13, 15];
    // echo $names[0];
    for ($i=0; $i < count($names); $i++) {
      echo "名前：" . $names[$i] . '<br>';
      echo "年齢：" . $ages[$i] . '<br>';
      echo '<br>';
    }
    // foreach ($names as $k => $v) {
    //   echo $v . '<br>';
    // }
  ?>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>