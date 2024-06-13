<!DOCTYPE html>
<html lang="en">
<head>

<?php
include_once '../head.php';

if (isset($_POST['signup'])) {
    // username 
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $username_error = 'Please fill your username.';
    }

    // first name
    if (isset($_POST['firstName']) && !empty($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
    } else {
        $firstName_error = 'Please fill your first name';
    }

    // last name
    if (isset($_POST['lastName']) && !empty($_POST['lastName'])) {
        $lastName = $_POST['lastName'];
    } else {
        $lastName_error = "Please fill your last name";
    }
    // email
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_error = "Please fill your email";
    }

    // phone
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $phone_error = " Please fill your phone number";
    }

    // password
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password_error = "Please enter a password";
    }

    // Confirm password
    if (isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {
        if ($password == $_POST['confirm_password']) {
            $finalPassword = $_POST['confirm_password'];

            // Save to database
            if ($_SERVER['REQUEST_METHOD']) {
                include_once 'connect.php';

                $username = $_POST['username'];

                // Check if the username already exists in the database
                $query = "SELECT * FROM `users` WHERE username = '$username'";
                $result = mysqli_query($connection, $query);

                if (mysqli_num_rows($result) > 0) {
                    // Username already exists
                    $username_error = 'Username already exists. Please choose a different username.';
                } else {
                    // Proceed with inserting the new user record into the database
                    $email = $_POST['email'];
                    $psw = $finalPassword;

                    $sql = "INSERT INTO `user` (username, email, password)
                                VALUES ('$username', '$email', '$psw')";

                    $result = mysqli_query($connection, $sql);

                    if ($result) {
                        // header ('Location: login.php');
                        // exit;

                        // Display Spinner and Redirect
                        echo '<div class="d-flex flex-column justify-content-center align-items-center bg-success" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
                            <h3>Creating user profile</h3>
                            <div class="spinner-border p-4 mt-3 mb-5" role="status">
                            <span class="sr-only p-3 mb-5"></span>
                            </div>
                            </div>';

                        echo '<script>
                            // Redirect to the main page after 3 seconds
                            setTimeout(function() {
                            window.location.href = "login.php";
                            }, 1000); // 1000 milliseconds (1 second) delay before redirection
                            </script>';
                    } else {
                        die(mysqli_error($connection));
                    }
                }
            }
        } else {
            $confirm_password_error = "Password doesn't match";
        }
    } else {
        $confirm_password_error = "Please confirm your password";
    }
}
?>
    <link rel="stylesheet" href="../css/output.css">
</head>
<body>
    <div class="h-screen p-10 flex items-center justify-center">
        <div class="grid lg:grid-cols-2 shadow-md rounded-3xl w-full lg:max-w-5xl border border-black/5">
            <div class=" bg-sky-900 lg:block hidden">
                <img src="../img/beach.webp" alt="" class="w-full h-full object-cover">
            </div>
            <div class="py-8 px-8 w-full max-w-xl mx-auto">
                <div class="text-2xl lg:text-4xl pb-12 text-center font-semibold">Register Now!</div>
                <form action="register_process.php" method="post">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="">
                            <input type="text" class="p-3 px-8 w-full focus:bg-sky-600 focus:text-white focus:placeholder:text-white rounded-s-full rounded-e-full outline-none border-2 border-black/10" placeholder="Pick a username" name="username" required>
                            <span class="text-danger">
                                <?php
                                // isset() function is used to check the variable whether it is already exist or not
                                if (isset($username_error)) {
                                    echo $username_error;
                                }
                                ?>
                            </span>
                        </div>
                        <div class="">
                            <input type="text" class="p-3 px-8 w-full focus:bg-sky-600 focus:text-white focus:placeholder:text-white rounded-s-full rounded-e-full outline-none border-2 border-black/10" placeholder="Enter your email" name="email" required>
                            <span class="text-danger">
                                    <?php
                                // isset() function is used to check the variable whether it is already exist or not
                                if (isset($email_error)) {
                                    echo $email_error;
                                }
                                ?>
                            </span>
                        </div>
                        <div class="">
                            <input type="text" class="p-3 px-8 w-full focus:bg-sky-600 focus:text-white focus:placeholder:text-white rounded-s-full rounded-e-full outline-none border-2 border-black/10" placeholder="Create a password" name="password" required>
                            <span class="text-danger">
                                <?php
                                if (isset($password_error)) {
                                    echo $password_error;
                                }
                                ?>
                            </span>
                        </div>
                        <div class="">
                            <input type="text" class="p-3 px-8 w-full focus:bg-sky-600 focus:text-white focus:placeholder:text-white rounded-s-full rounded-e-full outline-none border-2 border-black/10" placeholder="Confirm password" name="confirm_password" required>
                            <span class="text-danger">
                                <?php
                                if (isset($confirm_password_error)) {
                                    echo $confirm_password_error;
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                    <button name="signup" class="bg-sky-600 text-white mt-5 hover:bg-sky-700 p-3 px-20 mx-auto block rounded-s-full rounded-e-full">Sign Up</button>
                    <div class="pt-32 text-center">Already have an account? <a href="logIn.php" class="text-sky-600 font-semibold">Log In</a> here!</div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>