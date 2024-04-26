<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'connect.php';

        $pname=$_POST['pname'];
        $price=$_POST['price'];
        $company=$_POST['company'];

        


        $sql="INSERT INTO `products` (pname,price,company) VALUES ('$pname','$price','$company')";


        $result=mysqli_query($conn,$sql);

        if($result)
        {
            echo "product added ";
            header('location:allProducts.php');
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
    
<form action="addPost.php" method="POST">

<div>

   product name:
    <input type="text" name="pname">
    Price:
    <input type="number" name="price" >
    company:
    <input type="text" name="company">

    <button type="submit">Create</button>

</div>
<div>

</div>
<div>

</div>
</form>
</body>
</html>