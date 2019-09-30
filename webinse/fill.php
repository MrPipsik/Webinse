<?php

  include 'database.php';

  $sql = "INSERT INTO `test` SET first = 'Serhii', second = 'Lazebniy', email = 'sfc.serj@gmail.com'";

  for($i = 0; $i < 10; $i++){
    mysqli_query($link, $sql);
  }

?>
