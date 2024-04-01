<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login"; 

    $connection = new mysql($servername,$username,$password,$database); 


    if(!$conn){
        die("Connection Failed" . mysql_connect_error());
    }


    if(isset($_POST['save']))
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];

        $sql_query = "INSERT INTO `signup` (`name`, `email`, `password`, `re_password`) VALUES ('$name', '$email', '$password', '$re_password')";

        if(mysqli_query($conn,$sql_query))
        {
            echo "Account create successfully";

        }

        else
        {
            echo "Error:" . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="wrapper">
        <form action="signup" method="post" class="signup">
            <h1>Signup</h1>
            <input type="text" placeholder="user name" value="<?php echo $name; ?> ">
            <input type="text" placeholder="phone or email address" value="<?php echo $email; ?> ">
            <input type="text" placeholder="Password" value="<?php echo $password; ?> ">
            <input type="text" placeholder="Re-enter password" value="<?php echo $re_password; ?> ">
        </form>
        <div class="terms">
            <input type="checkbox" id="checkbox">
            <label for="checkbox">I agree to these <a href="#">Terms & condition</a></label>
        </div>
        <button  name="save">Sign up</button>
        <div class="member">Already a member?<a href="./login.html">Log in Here</a></div>
    </div>
</body>

</html> 