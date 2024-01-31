<!-- <!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h2>Login</h2>
     <form action="" method="post">
          <label for="">Username</label>
          <input type="text" name="username" autocomplete="off">
          <br>
          <label for="">Password</label>
          <input type="password" name="password">
          <br>
          <input type="submit" value="login" name="loginButton">
     </form>
</body>

<?php
     // if(isset($_POST['loginButton'])){
     //      session_start();
     //      $_SESSION['username'] = $_POST['username'];
     //      $_SESSION['login'] = true;
          
     //      header("location:proses.php");
     // }
?>
</html> -->

<?php
require 'Model/Robot.php';

$robot1 = new Robot();
$robot1->setName('optimus prime');
$robot1->setColor('blue white red');
$robot1->setSize('large');

$robot2 = new Robot();
$robot2->setName('bumblebee');
$robot2->setColor('yellow');
$robot2->setSize('medium');

var_dump($robot1);
echo '<br>';
var_dump($robot2);
echo '<br>';
echo $robot1->getName();