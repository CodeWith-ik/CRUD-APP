<?php
    // include db 
    include 'db.php';
?>


<?php
    // include navabr 
    include 'navbar.php';
?>


<?php
// Insert Query 

$sql = "INSERT INTO employees(id, fname, lname, salary, city)
VALUES
(1, 'Ali', 'Saeed', 34000, 'karachi'),
(2, 'Akbar', 'jawaid', 24000, 'lahore')
ON DUPLICATE KEY UPDATE 
fname = VALUES(fname), 
lname = VALUES(lname), 
salary = VALUES(salary), 
city = VALUES(city);";


// Execute Query 

$result = mysqli_query($conn, $sql);


// if/else condition

if($result){
    echo '<script>alert("your Data inserted successfully ! already inserted ");</script>';
}

else{
    echo '<script>alert("your data not inserted successfully"'.mysqli_error($conn).');</script>';
}


// close 

mysqli_close($conn);


?>