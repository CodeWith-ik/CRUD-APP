<?php
    // include db 
    include 'db.php';
?>


<?php
    // include navabr 
    include 'navbar.php';
?>



<?php

$sql = "DROP TABLE IF EXISTS employees;";

// Execute Query 

$result = mysqli_query($conn, $sql);


// if/else condition

if($result){
    echo '<script>alert("your Table Drop successfully ! already Table Drop");</script>';
}

else{
    echo '<script>alert("your table not drop successfully"'.mysqli_error($conn).');</script>';
}


// close 

mysqli_close($conn);

?>