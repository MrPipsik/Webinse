<?php

  include 'database.php';

  $sql = "SELECT * FROM `test`";
  $result = mysqli_query($link, $sql);

?>
  <tr>
    <th>First name</th>
    <th>Second name</th>
    <th>E-mail</th>
    <th>Remove</th>
  </tr>
<?php while($row=mysqli_fetch_array($result)):?>
  <tr>
    <td><?=$row['first']?></td>
    <td><?=$row['second']?></td>
    <td><?=$row['email']?></td>
    <td><button onclick="remove(<?=$row['id']?>)" class="button" type="button" name="button" value="<?=$row['id']?>">remove</button> </td>
  </tr>
<?php endwhile;?>
