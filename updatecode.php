<?php
$conn = mysqli_connect("localhost", "root", "", "user_info", 3306);

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $college = $_POST['college'];
    $university = $_POST['university'];

    $sql2 = "UPDATE general SET 
    name='$name',
    age='$age',
    address='$address',
    education='$education',
    course='$course',
    semester='$semester',
    college='$college',
    university='$university'

    WHERE id='$id' ";

    $query2 = mysqli_query($conn, $sql2);
    if ($query2) {
        echo '<script> alert("Data updated successfully.");</script>';
        header("location:index.php");
    } else {
        echo '<script> alert("Error!! Please try again later.");</script>';
    }
}
