<?php
require('config.php');
$id=$_GET['id'];
$sql="DELETE from services where id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    header('location:display_services.php');
}else{
    echo "error".$conn->error;
}
?>
?>