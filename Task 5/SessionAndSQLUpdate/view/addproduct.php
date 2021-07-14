<?php
include ('../control/addproductcheck.php');
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Add Product</h2>
<form action="" method="post" enctype="multipart/form-data">
Product Name 
<input type="text" name="pname"><br><br>
Product Description 
<input type="text" name="pdesc"><br><br>
Product Category 
<input type="text" name="pcate"><br><br>
Product price 
<input type="text" name="pprice"><br><br>
Product Image 
<input type="file" name="pimage"  width="50" height="30"><br><br>

<input type="submit" name="add" value="ADD Product">

</form>

</body>
</html>