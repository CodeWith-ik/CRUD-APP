<?php
    // include db 
    include 'db.php';
?>


<?php
    // include navabr 
    include 'navbar.php';
?>

<div class="container" style="margin-top:100px;">
    <h1 class="text-center text-success mb-5">Table Data Fetch Records</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FName</th>
      <th scope="col">LName</th>
      <th scope="col">Salary</th>
      <th scope="col">City</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    // Fetch record from employee table 
    $sql = "SELECT * FROM employees;";

    // Execute query 
    $result = mysqli_query($conn,$sql);

    // condition apply if/else
    if ($result && mysqli_num_rows($result) > 0) { 
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                    <tr>
                    <th scope='row'>".$row['id']."</th>
                    <td>".$row['fname']."</td>
                    <td>".$row['lname']."</td>
                    <td>".$row['salary']."</td>
                    <td>".$row['city']."</td>
                    </tr>   
            ";
        }
    }

    else{  
        echo "<tr><td colspan='5'><p class='text-danger'>No records display</p></td></tr>";
    }
    
    
    ?>
    
    
  </tbody>
</table>

</div>