

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/a7779cc3f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <span>
                <a href="main.html">Home</a>
              
            </span>
            <span>
                <a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                <a href=""><i class="fa-solid fa-user"></i></a>
            </span>
        </nav>
    </header>

    <div class="wrapper">
        <form action=""method="post" class="signup">
           

            <h1>Login</h1>
            <input type="text" placeholder="phone or email address">
            <input type="text" placeholder="Password">
            <div class="recover">
                <a href="#">Forgot password?</a>
            </div>
        </form>
        <button>Login </button>
        <div class="member">Not a member?<a href="./signup.php">Register Now</a></div>
    </div>

</body>

</html>
<?php if(isset($_Get['error'])){ ?>

                <p class="error"> <?php echo $_Get["error"];?> </p>
            <?php } ?> 


             ?>