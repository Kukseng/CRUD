<?php
    require_once("./connectdb.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        #submit{
            color: black;
            background-color: yellowgreen;
            border-radius: 15px;
            margin-left: 45px;
            margin-top: 20px;
        }
        #id{
            border: 10px solid yellow;
        }
    </style>
    <h2>Delete Database from phpmyadmin</h2>
    <form action="?" method="POST">
        <input id="id" type="text" name="id"><br>
        <input id="submit" type="submit" name="submit" value="delete"><br>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $id=$_POST["id"];
            $sql="DELETE FROM readdata WHERE id='$id'";
            if(mysqli_query($conn,$sql)){
                echo"yeyeye delete ban";
            }else{
                echo"ot der";
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>