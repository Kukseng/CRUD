<?php
    //conect to dbphpmyadmin

//set varible
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="test2col";//name database in lh
    //connect to db
    $conn = mysqli_connect($severname,$username,$password,$dbname);
    if(!$conn){
        echo"Not found";
    }else{
        echo"db was connected";
    }
?>