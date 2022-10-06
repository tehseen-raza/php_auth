<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>

<body>

    <div class="container">
        <div class="wrapper signupWrapper">
            <h2 class="h2">Register</h2>
            <form action="login-signup.php" method="POST">
                <div class="input__Wrapper d-flex">
                    <label hidden for="userName">Username:</label>
                    <input type="text" name="username" id="userName" placeholder="Username">
                </div>
                <div style="margin-top: 20px;" class="input__Wrapper d-flex">
                    <label hidden for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Email Address">
                </div>
                <div style="margin-top: 20px;" class="input__Wrapper d-flex">
                    <label hidden for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="flex marginTop-30">
                    <button name="register" class="loginBtn Btn" type="submit">Register</button>
                </div>
            </form>
            <div style="margin-top: 10px;" class="createAcoount">
                <p>Have An Account? <a href="index.php">Login</a></p>
            </div>
        </div>
    </div>


</body>

</html>