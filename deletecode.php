<?php
$conn = mysqli_connect("localhost","user_info","","info",3306);

if(isset($_POST['yes'])){
$id=$_POST['delete_id'];

$sql = "DELETE FROM general WHERE id = '$id'; ";
$query=mysqli_query($conn,$sql);

    if($query){
        echo '<script> alert("Data deleted successfully.");</script>';
        header("location:index.php");
    }else{
        echo '<script> alert("Error!! Please try again later.");</script>';
    }
}
?>