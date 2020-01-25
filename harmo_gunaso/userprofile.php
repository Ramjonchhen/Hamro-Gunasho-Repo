<?php

include('dbConnection.php');

if (isset($_POST['submit'])) {



    $reqinfo = $_POST['requestinfo'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    // $redder = $_POST['des'];
    $describe = $_POST['describe'];

    $query = "insert into submit_record(reqinfo,info,add1,add2,city,email,mobile,date) values('$reqinfo','$describe','$add1','$add2','$city','$email','$mobile','$date')";

    if ($conn->query($query) == true) {
        $message = "<div>Complain Submitted</div>";
    } else {
        $message = "<div>Complain Submitted</div>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="./css/all.min.css">

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="./css/style.css"> -->

    <style type="text/css">
        ul li {
            list-style: none;
        }
    </style>

</head>

<body>
    <!-- TOP NAVBAR -->
    <nav class="navbar navbar-dark  fixed-top bg-danger flex-md-nowrap p-0 shadow"> <a href="request.html" class="navbar-brand col-sm-3 col-md-2 mr-0">HAMRO GUNASHO</a></nav>


    <!-- Start Container -->
    <div class="container-fluid" style="margin-top: 40px">
        <div class="row">
            <!-- Start row -->
            <nav class="col-sm-2 bg-light sidebar py-5">
                <!-- SIDEBAR -->
                <div class="sidebar-sticky">
                    <ul class="flex-column">
                        <li class="nav-item"><a href="userprofile.php" class="nav-link"><i class="fab fa-accessible-icon"></i>Sumbit Request</a></li>
                        <li class="nav-item"><a href="checkstatus.php" class="nav-link"><i class="fas fa-user"></i>Service Status</a></li>
                        <!-- <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-key"></i>Change Password</a></li> -->
                        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </nav> <!-- End side bar -->

            <div class="col-sm-9 col-md-10 mt-5">
                <!-- start service request form the 2nd colums -->

                <form action="userprofile.php" method="post">

                    <div class="form-group">
                        <label for="inputRequestInfo">Request Info </label>
                        <input type="text" class="form-control" id="inputRequestInfo" placeholder="Requester Info" name="requestinfo">
                    </div>

                    <!-- <div class="form-group">
                        <label for="dest">Problem Descreption </label> -->
                    <!-- <input type="text" class="form-control" id="dest" placeholder="House no 123" name="des"> -->
                    <!-- </div> -->

                    <div class="form-group">
                        <label for="address1">Problem Descreption</label>
                        <input type="text" class="form-control" id="address1" placeholder="Descreption of the Complain" name="describe">
                    </div>

                    <div class="form-group">
                        <label for="address1">Address Line 1 </label>
                        <input type="text" class="form-control" id="address1" placeholder="House no 123" name="add1">
                    </div>


                    <div class="form-group">
                        <label for="address2">Address Line 2 </label>
                        <input type="text" class="form-control" id="address2" placeholder="suryabinakyk" name="add2">
                    </div>

                    <div class="form-group">
                        <label for="name">Requester Name </label>
                        <input type="text" class="form-control" id="name" placeholder="hari sapkota" name="email">
                    </div>

                    <div class="form-group">
                        <label for="city">City </label>
                        <input type="text" class="form-control" id="city" placeholder="bhaktapur" name="city">
                    </div>

                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" placeholder="abc@gmail.com" name="email">
                    </div>

                    <div class="form-group">
                        <label for="Mobile">Mobile </label>
                        <input type="text" class="form-control" id="Mobile" placeholder="9841231311" name="mobile">
                    </div>

                    <div class="form-group">
                        <label for="date">Date </label>
                        <input type="date" class="form-control" id="date" placeholder="House no 123" name="date">
                    </div>

                    <input type="submit" value="submit" name="submit">
                    <?php
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>
                </form>
            </div> <!-- end service request form the 2nd colums -->


        </div> <!-- End row -->
    </div> <!-- End Container -->






    <script src="./js/all.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/popper.min.js"></script>

</body>

</html>