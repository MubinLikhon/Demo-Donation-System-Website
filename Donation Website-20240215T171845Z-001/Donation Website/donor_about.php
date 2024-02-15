<?php

session_start();
        
        include("connection.php");
        include("functions.php");
        $user_data = check_login($con);
?>




<html>
<head>
    <link rel="stylesheet" href="design_new.css">
</head>
<body>

    <nav class = 'container'>
            <a href="index1.php"><img src="../user registration/images/imageedit_1_7395898986.png"></a>
            <div class="nav-links">
                    <ul>
                    <li><a href="index1.php">HOME  </a></li>
                    <li><a href="payment_gateway-2.php">DONATE  </a></li>
                    <li><a href="logout.php">SIGN OUT</a></li>
                </ul>
            </div>

     </nav>


    <div class="container">
        <div class="main">
           
            <div class="row">
                <div class="left">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <div class="profile buttons">
                                <h3> &nbsp Welcome <?php echo $user_data['name_user']; ?> !</h3>
                                <a href = ""> History</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="user info content">
                        <h1 class="card content"><br>About</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="info">
                                    <h3>User Name: &nbsp </h3>
                                </div>
                                <div class="info-desc">
                                    <h3><?php echo $user_data['name_user']; ?> </h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="info">
                                    <h3>Email:&nbsp;</h3>
                                </div>
                                <div class="info-desc">
                                   <h3><?php echo $user_data['email']; ?> </h3>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="info">
                                    <h3>Phone :&nbsp;</h3>
                                </div>
                                <div class="info-desc">
                                  <h3><?php echo $user_data['mobile_no']; ?> </h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="info">
                                    <h3>Role:&nbsp;</h3>
                                </div>
                                <div class="info desc">
                                  <h3><?php echo $user_data['role']; ?> </h3>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="info">
                                    <h3>Representing:&nbsp;</h3>
                                </div>
                                <div class="info desc">
                                  <h3><?php echo $user_data['representing']; ?> </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card content">
                    <h3 class="m-3"><br>Previous Donations</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="info">
                                <h5>Last Donation Amount: &nbsp </h5>
                            </div>
                               <div class="info desc">
                                  <h5> <?php 

                                    $id = $_SESSION['id_user'];
                                    $query = "select  Amount from donation_info where user_id = '$id' ORDER BY Date DESC limit 1";
                                    $result = mysqli_query($con,$query);
                                    if($result && mysqli_num_rows($result)>0){
                                        $user_data = mysqli_fetch_assoc($result);
                                        echo $user_data['Amount'];
                                    }
                                    else
                                        echo "0"; ?> Taka
                                   </h5>
                            </div>

                        </div>
                        <hr>
                           <div class="row">
                            <div class="info">
                                <h5>Total Donation Amount: &nbsp </h5>
                            </div>
                               <div class="info desc">
                                  <h5> <?php 

                                    $id = $_SESSION['id_user'];
                                    $query = "select  SUM(Amount) as total_amount from donation_info where user_id = '$id'";
                                    $result = mysqli_query($con,$query);
                                    if($result && mysqli_num_rows($result)>0){
                                        $user_data = mysqli_fetch_assoc($result);
                                        echo $user_data['total_amount'];
                                    }
                                    else
                                        echo "0"; ?> Taka
                                   </h5>
                            </div>

                        </div>
                        <hr>
                           <div class="row">
                            <div class="info">
                                <h5>Number of Times Donated: &nbsp </h5>
                            </div>
                               <div class="info desc">
                                  <h5> <?php 

                                    $id = $_SESSION['id_user'];
                                    $query = "select  COUNT(Amount) as total_number from donation_info where user_id = '$id'";
                                    $result = mysqli_query($con,$query);
                                    if($result && mysqli_num_rows($result)>0){
                                        $user_data = mysqli_fetch_assoc($result);
                                        echo $user_data['total_number'];
                                    }
                                    else
                                        echo "0"; ?> 
                                   </h5>
                            </div>

                        </div>
                        <hr>
                           <div class="row">
                            <div class="info">
                                <h5>Maximum Amount of Donation: &nbsp </h5>
                            </div>
                               <div class="info desc">
                                  <h5> <?php 

                                    $id = $_SESSION['id_user'];
                                    $query = "select  MAX(Amount) as max_amount from donation_info where user_id = '$id'";
                                    $result = mysqli_query($con,$query);
                                    if($result && mysqli_num_rows($result)>0){
                                        $user_data = mysqli_fetch_assoc($result);
                                        echo $user_data['max_amount'];
                                    }
                                    else
                                        echo "0"; ?> Taka
                                   </h5>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>