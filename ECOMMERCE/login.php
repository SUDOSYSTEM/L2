<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'connect.php';

        $email=$_POST['email'];
        $password=$_POST['password'];

        


        $sql="SELECT * FROM `auth` where email='$email' AND BINARY password='$password' ";

        $result=mysqli_query($conn,$sql);

        if($result)
        {
            $num=mysqli_num_rows($result);

            if($num>0)
            {
                session_start();
                $_SESSION['email']=$email;
                header('location:home.php');

            }
            else
            {
                echo "invalid credentials";
            }
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="login.php" method="POST">

    <div>

        email:
        <input type="email" name="email" >
        password:
        <input type="password" name="password">

        <button type="submit">Login</button>

    </div>
    <div>

    </div>
    <div>

    </div>
    </form>
</body>
</html>