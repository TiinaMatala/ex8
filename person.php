<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Person info</h1>
    <p>Post array: </p>
    <form class="" action="person.html" method="POST">
    <?php
     echo 'First name is '.$_POST['fname'];
     echo '<br>';
     echo 'Last name is '.$_POST['lname'];
      ?>
    </form>
  </body>
</html>
