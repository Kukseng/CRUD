<?php
    require_once("./connectdb.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
</head>
<body>
    <h2>read</h2>
    <?php
          $sql = "SELECT * FROM readdata";
          $result = mysqli_query($conn, $sql);
      
          // Check if there are any records
          if (mysqli_num_rows($result) ) {
              while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  
                      <?php echo "ID: " . $row['id']; ?>
                      <?php echo "Name: " . $row['name']; ?>
                      <?php echo "Gender: " . $row['gender']; ?>
                      <?php echo "Age: " . $row['age']; ?>
                      <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a><br>
                  
                  <?php
              }
          } else {
              echo "No records found";
          }
      
          // Close the connection
          mysqli_close($conn);
      ?>
   
</body>
</html>