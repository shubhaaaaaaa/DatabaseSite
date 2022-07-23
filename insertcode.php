<?php
$conn = mysqli_connect("localhost","root","","info",3306);

if(isset($_POST['insert'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $college = $_POST['college'];
    $university = $_POST['university'];
    
    $sql = "INSERT INTO general(`id`,`name`,`age`,`address`,`education`,`course`,`semester`,`college`,`university`) 
    VALUES ('$id','$name','$age','$address','$education','$course','$semester','$college','$university' )";
    
    $query = mysqli_query($conn,$sql);

    if($query){
        echo '<script> alert("Data stored successfully.");</script>';
        header("location:index.php");
    }else{
        echo '<script> alert("Error!! Please try again later.");</script>';
        
    }
}

?>