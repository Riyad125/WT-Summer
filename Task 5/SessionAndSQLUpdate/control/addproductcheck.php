<?php
include('../model/db.php');


 $error="";

if (isset($_POST['add'])) {
if (empty($_POST['pname']) || empty($_POST['pdesc']) || empty($_POST['pcate'])|| empty($_POST['pprice'])|| empty($_FILES['pimage']['name'])) {
$error = "Please give valid Input";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
$imageLocation="../files/".time().".jpg";


$userQuery=$connection->AddProduct($conobj,"product",$_POST['pname'],$_POST['pdesc'],$_POST['pcate'],$_POST["pprice"],$imageLocation);
if($userQuery==TRUE)
{
    if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $imageLocation)) {
       echo "data Succesfully uploaded.";
    } else {
        echo "data is not uploaded.";
    }
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>