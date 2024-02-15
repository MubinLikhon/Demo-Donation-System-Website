<?php


    session_start();
    
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);


    
    if($_SERVER['REQUEST_METHOD'] == "POST"){

      
      $payment_option = $_POST['payment_option'];
      $reason = $_POST['reason'];
      $time_frame = $_POST['time_frame'];
      $account_number = $_POST['account_number'];
      $amount_needed = $_POST['amount_needed'];
      $id = $_SESSION['id_user'];

      $query = "insert into receiver_info (user_id, payment_option, reason, time_frame, account_number, amount_needed) values('$id','$payment_option','$reason','$time_frame','$account_number', '$amount_needed')";

      mysqli_query($con, $query);
      header("Location: successful-re.php");
      die;
    }
    
?>



<html>
<head>
    
<link rel="stylesheet" href="style3-2.css">
</head>
<body>
<div class="wrapper">
    <h2>Apply For Donation</h2>
<form method = "post">
  
      <div class="input-box">
        <h3>Received Option</h3>
     
        <input type="text" name= "payment_option"  placeholder="   Payment Option" required  list="payment_option">
        <datalist id="payment_option">
          <option> Bkash</option>
          <option> Rocket</option>
          <option> Nagad</option>     
        </datalist>
    </div>

    <div class="input-box">
        <h3>Received For</h3>
        <input type="text" name="reason"  placeholder="  Reason for Application" list="reason">
        <datalist id="reason">
          <option>Education</option>
          <option>Food</option>
          <option>Medical </option>
          <option>Rehabilitation </option>
        
        </datalist></div> 
    

    <div class="input-box">
        <h3>Time Frame</h3>
        <input type="text" name="time_frame" required placeholder="  When do you need the money?" list="time_frame">
        <datalist id="time_frame">
          <option>Within a day</option>
          <option>Within a week</option>
          <option>Within 15 days</option>
          <option>More than 15 days </option>
        
        </datalist></div>
    <div class="input-box">
        <h3>Account Number</h3>
        <input type="text" name="account_number" required placeholder="   Account Number">
    </div>

    <div class="input-box">
            <h3>Amount Needed</h3>
            <input type="text" name="amount_needed" required placeholder="     Amount Needed"><br>
          </div> 

     <div class="input-box">
         <button type="submit"> Apply Now</button>
        </div>
</div>
</body>


</html>