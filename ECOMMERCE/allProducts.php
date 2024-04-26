<?php

include 'connect.php';

$sql="SELECT * FROM `products`";

$result=mysqli_query($conn,$sql);

if($result)
{
    $num=mysqli_num_rows($result);

    if($num>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo $row['pname'];
            echo $row['price'];
            echo $row['company'];
            echo "<hr>";
            echo "<br>";

        }
    }
    else
    {
        echo "no data";
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
    
<?php





?>
</body>
</html>