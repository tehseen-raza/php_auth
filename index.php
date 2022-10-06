<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Registration Form</title>
</head>

<body>

    <!-- Inspired By: TJ Webdev  -->

    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        echo "
        <div style='display:flex; flex-direction:column; align-items:center; justify-content:center; height:100vh;'>
        <h1>WELCOME $_SESSION[username] TO OUR SITE.🙂</h1>
        <a style='width:fit-content; margin-top:20px; text-decoration:none;' class='Btn' href='logout.php'>Logout</a>
        </div>
        ";
        
    } else {
        echo " <div class='container'>
        <div class='wrapper'>
            <h2 class='h2'>Login</h2>
            <form action='login-signup.php' method='POST'>
                <div class='input__Wrapper d-flex'>
                    <label hidden for='userName'>Username:</label>
                    <input type='text' required name='username' id='userName' placeholder='Email OR Username'>
                </div> 
                <div style='margin-top: 20px;' class='input__Wrapper d-flex'>
                    <label hidden for='password'>Password:</label>
                    <input type='password' required name='password' id='password' placeholder='Password'>
                </div>
                <div class='flex marginTop-30'>
                    <button name='login' class='loginBtn Btn' type='submit'>Login</button>
                </div>
            </form>
            <div class='createAcoount marginTop-30'>
                <p>Don't Have An Account? <a href='signup.php'>Sign up</a></p>
            </div>
        </div>
    </div> ";
    }
    ?>


</body>

</html>
