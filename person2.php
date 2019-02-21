<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Person info</h1>
    <p>Get array: </p>
    <form class="" action="person2.html" method="GET">
    <?php
     echo 'First name is '.$_GET['fname'];
     echo '<br>';
     echo 'Last name is '.$_GET['lname'];
      ?>
    </form>
  </body>
</html>
