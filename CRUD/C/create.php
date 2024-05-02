<?php
    require_once("./connect.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="?" method="POST">
      Name  :<input type="text" name="username"><br>
      Gender  :<input type="text" name="gender"><br>
      Age  :<input type="text" name="age"><br>
      <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        //set var by $name.... etc
        $name=$_POST['username'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $sql="INSERT INTO readdata(name,gender,age) VALUES('$name','$gender','$age')";
        if(mysqli_query($conn,$sql)){
            echo"connect";
        }else{
            echo"wasn't connect";
        }
        $conn->close();
    }
    ?>
</body>
</html>