<?php
$conn = mysqli_connect("localhost", "root", "", "user_info", 3306);

$sql = " CREATE DATABASE user_info;
    USE user_info;
    CREATE TABLE general(
        id INT,
        name VARCHAR(50),
        age INT,
        address VARCHAR(100),
        education VARCHAR(100), 
        course VARCHAR(100),
        semester VARCHAR(10),
        college VARCHAR(50),
        university VARCHAR(100),
        PRIMARY KEY(id)
        );
     INSERT INTO general(id,name,age,address,education,course,semester,college,university)
     VALUES
     (1622,'Shubha',21,'Gyaneshowr','Bachelors','BIM','5th','KIST College','TU'),
     (1623,'Aniraj',23,'Nakkhu','Bachelors','BCIS','6th','Apex College','PU'),
     (5425,'Bella',27,'Ratopul','Masters','BIT','1st','Orchid College','KU'),
     (4343,'Ram',31,'Bagbazar','Bachelors','BCS','2nd','Herald College','TU'),
     (4684,'Jacob',29,'Anamnagar','Bachelors','BCA','3rd','Softwarica','PU'),
     (5633,'Ada',22,'Balaju','Bachelors','BBA','4th','St. Xaviers','TU'),
     (8696,'Jake',18,'Shantinagar','Masters','BBS','7th','Shankerdev','KU'),
     (2523,'Rohan',19,'Putalisadak','Bachelors','BKS','8th','Trinity','TU'),
     (9221,'Sam',20,'Gokarna','Masters','BCT','7th','Prime College','PU'),
     (5363,'Kate',25,'Tripureshwor','Bachelors','BKU','8th','Asian','TU');";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Database created successfully. Your code is now ready to run.";
} else {

    echo mysqli_error($conn);
}
