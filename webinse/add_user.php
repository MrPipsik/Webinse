<?php

  include 'database.php';

  $sql = "INSERT INTO `test` SET";
  $sql .= " first = '" . $_REQUEST['first'] . "',";
  $sql .= " second = '" . $_REQUEST['second'] . "',";
  $sql .= " email = '" . $_REQUEST['email'] . "'";

  mysqli_query($link, $sql);

?>
