<?php
  $model = $_GET["model"];
  $maker = $_GET["maker"];
  $year = $_GET["year"];
  $price = $_GET["price"];
  $engine = $_GET["engine"];
  $add = $_GET["add"];
  $old = 2019 - $year;
  $adds = ["Tax payed","Technical check passed","Doesn't recure investment"];

  function Check($list,$val){
    foreach ($list as $value) {
      if($value == $val){
        return "<strong>Yes</strong>";
      }
    }
    return "<strong>No</strong>";
  }

  echo "You added new item: <strong>$maker $model</strong><br>";
  echo "produced in $year ($old years old)with $engine engine<br>";

  foreach ($adds as $value) {
    echo $value;echo ": "; echo Check($add,$value);echo "<br>";
  }
  echo "$price $";
 ?>
