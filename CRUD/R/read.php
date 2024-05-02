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
        $sql="SELECT * FROM readdata";
        $result=mysqli_query($conn,$sql);
    
    ?>
    <?php
        while($row=mysqli_fetch_assoc($result))
        {
    ?>
    <?php echo $row['id']; ?>
    <?php echo $row['name']; ?>
    <?php echo $row['gender']; ?>
    <?php echo $row['age']; ?><br>
    <?php
        }
    ?>
</body>
</html>