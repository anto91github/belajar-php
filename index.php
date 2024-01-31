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
// require 'Model/Robot.php';

// $robot1 = new Robot('optimus prime', 'blue white red', 'large');
// var_dump($robot1);
// echo('<br>');
// unset($robot1); // destroy object
// echo('<br>');
// echo('next line ...');
// echo('<br>');
// echo $robot1->test;

require 'Model/Guru.php';

$guru1 = New Guru('Budi', 39);
echo $guru1->sayaStatic();





