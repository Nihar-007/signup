<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $na=$_POST['name'];
    $un=$_POST['uname'];
    $p=$_POST['pass'];
    $cp=$_POST['cpass'];
    $c=$_POST['city'];
    if($p===$cp){
        $servername="localhost";
        $username="root";
        $password="";
        $database="phpdb";

        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
            die("Connection failed : ".mysqli_connection_error());
        }
        $sql="INSERT into `sign_up` (`name`,`username`,`password`,`c_password`,`city`) values ('$na','$un','$p','$cp','$c');";
        $result=mysqli_query($conn,$sql);
        
        if($result){
            echo "Data inserted successful";
        }
        else{
            echo "Data insertion was unsuccessful. This error occurred: " . mysqli_error($conn);
        }
    }
    else{
        echo "Incorrect Password. Please enter the same password in confirm password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>Welcome to our sign up page!</center></h1>
    <form method="POST" onsubmit="auth()">
    <fieldset>    
    <legend>Sign Up Form</legend>
        <label for="Name">Name : </label>
        <input type="text" placeholder="Enter your name" name="name" required><br><br>
        <label for="username">Username : </label>
        <input type="text" placeholder="enter username" name="uname" id="un" required><br><br>
        <label for="password">Password : </label>
        <input type="password" placeholder="enter password" name="pass" id="pass" required><br><br>
        <label for="c_password">confirm Password : </label>
        <input type="password" placeholder="enter password" name="cpass" id="c_pass" required><br><br>
        <label for="cit">City : </label>
        <input type="text" placeholder="enter city" name="city" id="city" required><br><br>
        <button type="submit">Submit</button>
    </fieldset>
    </form>
    <p>Already have an account <a href="login-form.html">click here.</a></p>
    <!-- <script>
        function auth(){
            var pass1=document.getElementById("pass").value;
            var pass2=document.getElementById("c_pass").value;
            if(pass1===pass2){
                alert("Sign up successful");
            }
            else{
                alert("Incorrect Password . Please enter the same password in confirm password");
            }
        }
    </script> -->
</body>
</html>