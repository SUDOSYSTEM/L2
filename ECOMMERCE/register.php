<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'connect.php';

        $name=$_POST['name'];
        $email=$_POST['email'];

        $password=$_POST['password'];

        


        $sql="SELECT * FROM `auth` where email='$email' ";

        $result=mysqli_query($conn,$sql);

        if($result)
        {
            $num=mysqli_num_rows($result);

            if($num>0)
            {
                echo "already exist";
            }
            else
            {
                $sql="INSERT INTO `auth` (name,email,password) VALUES ('$name','$email','$password')";

                $result=mysqli_query($conn,$sql);

                if($result)
                {
                    echo "registered";
                }
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
    
    <form action="register.php" method="POST">

    <div>

        name:
        <input type="text" name="name">
        email:
        <input type="email" name="email" >
        password:
        <input type="password" name="password">

        <button type="submit">Register</button>

    </div>
    <div>

    </div>
    <div>

    </div>
    </form>
</body>
</html>