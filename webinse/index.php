<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Webinse test</title>
  </head>
  <body>
    <div class="content">
      <div class="table">
        <table id="content" border="1">
        </table>
      </div>
      <span id="show-modal" class="button">Add User</span>
      <div class="new-user-modal">
        <span class="label">First name*</span><br>
        <span class="error-first error">First name length should be between 4 and 16 symbols!</span><br>
        <input type="text" name="first" required><br>
        <span class="label">Second name*</span><br>
        <span class="error-second error">Second name length should be between 4 and 16 symbols!</span><br>
        <input type="text" name="second" required><br>
        <span class="label">Email*</span><br>
        <input type="text" name="email" required><br>
        <button onclick="add_user()" class="button submit">Submit</button>
      </div>
    </div>
  </body>
</html>
