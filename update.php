<?php
    // include db 
    include 'db.php';
?>


<?php
    // include navabr 
    include 'navbar.php';
?>



<?php

// Update Query 
$sql = "UPDATE employees 
        SET fname = 'Ali', lname = 'Saeed', salary = 50000, city = 'karachi' 
        WHERE id = 1;";


// Execute Query 

$result = mysqli_query($conn, $sql);


// if/else condition

if($result){
    echo '<script>alert("your Data Updated successfully ! already updated ");</script>';
}

else{
    echo '<script>alert("your data not updated successfully"'.mysqli_error($conn).');</script>';
}


// close 

mysqli_close($conn);




?>