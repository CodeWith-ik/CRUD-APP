<?php
    // include db 
    include 'db.php';
?>


<?php
    // include navabr 
    include 'navbar.php';
?>


<?php
// create table query 

$sql = "create table if not exists employees(
        id int not null unique,
        fname varchar(255) not null,
        lname varchar(255) not null,
        salary integer not null,
        city varchar(255) not null
    );";


    // Execute query 

    $result = mysqli_query($conn,$sql);


    // Condition apply if/else

    if($result){
        echo '<script>alert("your Table create successfully ! already created ");</script>';
    }

    else{
        echo '<script>alert("your Table not create successfully"'.mysqli_error($conn).');</script>';
    }


    // close 

    mysqli_close($conn);

?>