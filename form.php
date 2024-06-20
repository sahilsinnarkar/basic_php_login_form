<?php
    if(isset($_POST)){
        $username = $_POST['uname'];
        $password=$_POST['pass'];

        $conn=mysqli_connect('localhost','PhpClassUser','sahil13504','sahildb');
        $query=mysqli_query($conn,"insert into loginform values('$username','$password');");
        if($query){
            header("location:index.html");
        }
    }
?>
