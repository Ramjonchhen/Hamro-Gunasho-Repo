<?php

include("dbConnection.php");

session_start();


// checking whether the user has logged in or not

// chceking whether user has already logged in or not by using the session login variable

// if logged in the will go to the user's profile

// else then the user will go to the login place;

if (!isset($_SESSION['admin_is_login'])) {


    if (isset($_POST['login'])) {

        // trimming the field as user can't keep the spaces in the input field

        // mysqli real escape string will make the website more secure as any code given will convert into string
        $Email = mysqli_real_escape_string($conn, trim($_POST['Email']));
        $Password = mysqli_real_escape_string($conn, trim($_POST['Password']));

        // some error in sql
        $sql = "select ad_email,ad_password from admin_info where ad_email='" . $_POST['Email'] . "' and ad_password='" . $_POST['Password'] . "' limit 1";

        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // if the user has logged in making the session value of login as true
            // as the user who has already login should not login

            $_SESSION['admin_is_login'] = true;
            $_SESSION['Email'] = $Email;
            $_SESSION['Password'] = $Password;
            // if the user has loggged in then go to user profile page
            echo "<script>location.href='adminprofile.php'</script>";
        } else {
            $msg = "<div>login failed</div>";
        }
    }
} else {
    echo "<script>location.href='adminprofile.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
    <style>
        * {
            /* 
        -May want to add "border-box for "box-sizing so padding does not affect width
        -Reset margin and padding 
       */
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            /* 
          -Background color is #344a72
        */
            background-color: grey;
            background-image: url("");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            font-family: sans-serif;
            color: white;
            line-height: 1.8;
        }

        a {
            /* 
        Underlined links are ugly :)
       */
            text-decoration: none;
        }

        #container {
            /* 
        -Remember, margin: auto on left and right will center a block element 
        -I would also set a "max-width" for responsiveness
        -May want to add some padding
        */
            max-width: 400px;
            margin: 30px auto;
            padding: 60px;
        }

        .form-wrap {
            /* 
          This is the white area around the form and heading, etc
        */
            background: white;
            color: #333;
            padding: 15px 25px;
        }

        .form-wrap h1,
        .form-wrap p {
            /* 
          May want to center these
        */
            text-align: center;
        }

        .form-wrap .form-group {
            /* 
          Each label, input is wrapped in .form-group
        */
            margin-top: 15px;
        }

        .form-wrap .form-group label {
            /* 
          Label should be turned into a block element
        */
            display: block;
            color: #666;
        }

        .form-wrap .form-group input {
            /* 
          Inputs should reach accross the .form-wrap 100% and have some padding
        */
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-wrap button {
            /* 
          Button should wrap accross 100% and display as block
          Background color for button is #49c1a2
        */
            background: #49c1a2;
            display: block;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            padding: 10px;
        }

        .form-wrap button:hover {
            /* 
          Hover background color for button is #37a08e
        */
            background: #37a08e;
        }

        .form-wrap .bottom-text {
            /* 
          Bottom text is smaller
        */
            font-size: 13px;
            margin-top: 20px;
        }

        footer {
            /* 
        Should be centered
       */
            text-align: center;
            margin-top: 10px;
        }

        footer a {
            /* 
          Footer link color is #49c1a2
        */
            color: black;
        }

        button {
            background-color: #37a08e;
            border-radius: 8px;
            height: 40px;
            width: 80px;
        }
    </style>
</head>

<body>
    <!-- Login Form Styling -->
    <div id="container">
        <div class="form-wrap">
            <h1>Admin Login</h1>
            <h1>हाम्रो समस्या</h1>
            <form method="post" action="adminlogin.php">
                <div class="form-group">
                    <label for="Email"> Email</label>
                    <input type="text" name="Email" id="Email" autofocus="on" placeholder="Your Email" />
                </div>

                <div class="form-group">
                    <label for="Password"> Password</label>
                    <input type="password" name="Password" id="Password" autofocus="on" />
                </div>

                <input type="submit" value="Login and raise your voice" name="login" />

                <?php
                if (isset($msg)) {
                    echo $msg;
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>