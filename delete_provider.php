<?php
require('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM provider WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if($result)
{
    header('location:display_provider.php');
}
?>