<?php

  include 'database.php';

  $sql = "DELETE FROM `test` WHERE `id` = " .$_REQUEST['user_id'];
  mysqli_query($link, $sql);
?>
