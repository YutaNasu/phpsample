<?php
    $ans=0;
    if($_POST["select"] === "+") $ans=$_POST["left"]+$_POST["right"];
    if($_POST["select"] === "-") $ans=$_POST["left"]-$_POST["right"];
    if($_POST["select"] === "x") $ans=$_POST["left"]*$_POST["right"];
    if($_POST["select"] === "÷") $ans=$_POST["left"]/$_POST["right"];
    if($_POST["select"] === "%") $ans=$_POST["left"]%$_POST["right"];

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>calc-form-php</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
    <form class="row row-cols-lg-auto g-3 align-items-center" action="index.php" method="post">
    <div class="col-12">
        <label for="inlineFormInputGroupUsername" class="visually-hidden">左辺</label>
        <div class="input-group">
            <div class="input-group-text"></div>
            <input type="text" class="form-control" name="left" id="InputLeft" placeholder="左辺">
        </div>
    </div>
    <div class="col-12">
          <label class="visually-hidden">計算式</label>
          <select class="form-select" name="select">
            <option>+</option>
            <option>-</option>
            <option>x</option>
            <option>÷</option>
            <option>%</option>
          </select>
    </div>
    <div class="col-12">
        <label for="inlineFormInputGroupUsername" class="visually-hidden">右辺</label>
        <div class="input-group">
            <div class="input-group-text"></div>
            <input type="text" class="form-control" name="right" id="InputRight" placeholder="右辺">
        </div>
    </div>
    <div class="col-12">
        <button type="=" class="btn btn-primary">=</button>
    </div>
    <?php
        echo $ans;
    ?>
    </form>
    </body>
</html>