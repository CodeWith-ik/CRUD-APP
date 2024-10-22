<?php
    // include db 
    include 'db.php';
?>


<?php
    // include navabr 
    include 'navbar.php';
?>


<?php
// Delete record query 
$sql = "DELETE FROM employees WHERE id = 1;";

// Execute Query 

$result = mysqli_query($conn, $sql);


// if/else condition

if($result){
    echo '<script>alert("your Data Record Deleted successfully ! already data record deleted ");</script>';
}

else{
    echo '<script>alert("your data record not delete successfully"'.mysqli_error($conn).');</script>';
}


// close 

mysqli_close($conn);



?>