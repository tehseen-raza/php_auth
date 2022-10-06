<?php
include 'connection.php';
session_start();


// <== For User Login ==>
if (isset($_POST['login'])) {
    $query = "SELECT * from `registration` WHERE `Email`='$_POST[username]' OR `User_Name`='$_POST[username]'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $result_fetch['Password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['User_Name'];
                header("location:index.php");
            } else {
                echo " Wrong
                <script>
                    alert('Incorrect Password!');
                    window.location.href='index.php';
                </script>
            ";
            }
        } else {
            echo "
                    <script>
                        alert('Email OR Username Not Registered!');
                        window.location.href='index.php';
                    </script>
                ";
        }
    } else {
        echo "
                <script>
                    alert('Cannot Run Query!');
                    window.location.href='index.php';
                </script>
        ";
    }
}


// <== For User Registration ==>
if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * from `registration` WHERE `User_Name`='$_POST[username]' OR `Email`='$_POST[email]'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {

            $result_fetch = mysqli_fetch_assoc($result);

            if ($result_fetch['User_Name'] == $_POST['username']) {
                echo "
                    <script>
                        alert('$result_fetch[User_Name]: Uername Already Exist');
                        window.location.href='index.php';
                    </script>
                ";
            } else {
                echo "
                <script>
                    alert('$result_fetch[email]: Uername Already Exist');
                    window.location.href='index.php';
                </script>
            ";
            }
        } else {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO `registration`(`User_Name`, `Email`, `Password`) VALUES ('$_POST[username]','$_POST[email]','$password')";
            if (mysqli_query($conn, $query)) {
                echo "
                    <script>
                        alert('User Registration Successfully.');
                        window.location.href='index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('Query Running Failed!');
                        window.location.href='index.php';
                    </script>
                ";
            }
        }
    } else {
        echo "
            <script>
                alert('Query Running Failed!');
                window.location.href='index.php';
            </script>
        ";
    }
}

?>