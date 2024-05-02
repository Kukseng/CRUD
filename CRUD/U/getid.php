
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form action="?" method="POST">
     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      Name  :<input type="text" name="username" value="   <?php echo $row['name']; ?>"><br>
      Gender  :<input type="text" name="gender" value=" <?php echo $row['gender']; ?>"><br>
      Age  :<input type="text" name="age" value="  <?php echo $row['age']; ?>"><br>
      <button type="submit" name="submit" value="upadte">Submit</button><br>
    </form>

    
    
</body>
</html>