<?php
if (isset($_POST['sub'])) {
	include('connn.php');
    $id=$_POST['cat'];
   
    $sql="INSERT INTO `categories`(`category_name`) VALUES ('$id')";
    
    $result=mysqli_query($connn,$sql);
    //  $row=mysqli_num_rows($result);
    if($result){
        echo "<script> alert('form submitted') </script>";
    }
    else{
        echo "<script> alert('error') </script>";
    }


}?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="cat" placeholder="category">
        <input type="button" name="sub" value="submit">
    </form>
</body>
</html>