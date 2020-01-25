<?php

include('dbConnection.php');
$query = "select distinct reqinfo,info from submit_record";
$result = $conn->query($query);

// // counting the no of complaines on a desird topic
// $query = "select distinct reqinfo from submit_record";
// $result = $conn->query($query);

// $arr = array();

// $no_of_different_query = 0;
// while ($fetch = $result->fetch_assoc()) {
//     $value = $fetch['reqinfo'];
//     echo $value;
//     $arr = array_push('$value');
// }



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #box {
            background: yellow;
            border: 1px solid red;
            width: 30%;
            text-align: justify;
            margin-left: 30px;
            margin-bottom: 10px;
        }

        form {
            margin-bottom: 5px;
        }

        #top {
            width: 100%;
            height: 40px;
            background: black;
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <p id="top">Weclcome to the admin panel's</p>

    <form action="logout.php">
        <button type="submit">Logout</button>
    </form>

    <?php
    while ($fetch = $result->fetch_assoc()) {
        echo "<div id='box'>
           Complain Intro:<br><br>" .
            $fetch['reqinfo'] . "<br><br>
           Complain Descreption:<br><br>"
            . $fetch['info'] . "<br>
        </div>";
    }
    ?>

</body>

</html>