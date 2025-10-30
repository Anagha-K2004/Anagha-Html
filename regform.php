<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body bgcolor="bisque">
        <center><h2>REGISTRATION FORM</h2>
        <?php
        $name=$email=$password=$phone="";
        $nameErr=$emailErr=$passwordErr=$phoneErr="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr="Name is required";
                
            }elseif(!preg_match("/^[A-Z][a-z]{26}$/", $_POST["name"])){
                $nameErr="Name must start with a capital letter and contain only letters";

            }
            else{
               $name=$_POST["name"];
            }
            if(empty($_POST["email"])){
                $emailErr="Email is required";
            }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $emailErr="Invalid email format";
            }else{
                $email=$_POST["email"];
            }
            if(empty($_POST["password"])){
                $passwordErr="Password is required";
            }elseif(strlen($_POST["password"])<6){
                $passwordErr="Password must be at least 6 characters long";

            }else{
                $password=$_POST["password"];

            }
            if(empty($_POST["phone"])){
                $phoneErr="Phone number is required";
            }elseif(!preg_match("/^[0-9]{10}$/", $_POST["phone"])){
                $phoneErr="phone number must be 10 digits";
        }else{
            $phone=$_POST["phone"];
            if($nameErr=="" && $emailErr=="" && $passwordErr=="" && $phoneErr==""){
                echo "<h3 style='color:green;'>Registration Successful!</h3>";
                echo "Name: ".$name."<br><br>";
                echo "Email: ".$email."<br><br>";
                echo "Phone: ".$phone."<br><br>";
            }
        }
    }
        ?>
        <form method="post" action="">
            Name:<input type="text" name="name" value="<?php echo $name;?>"><br><br>
            <span style="color:red"><?php echo $nameErr;?></span><br><br>
            Email:<input type="text" name="email" value="<?php echo $email;?>"><br><br>
            <span style="color:red"><?php echo $emailErr;?></span><br>
            Password:<input type="password" name="password" value="<?php echo $password;?>"><br><br>
            <span style="color:red"><?php echo $passwordErr;?></span><br><br>
            Phone:<input type="text" name="phone" value="<?php echo $phone;?>"><br><br>
            <span style="color:red"><?php echo $phoneErr;?></span><br><br>
            <input type="submit" value="Register">
        </form>
</center>
    </body>
</html>

        