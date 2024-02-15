<?php


    session_start();
    
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);


    
    if($_SERVER['REQUEST_METHOD'] == "POST"){

      
      $pay_option = $_POST['pay_option'];
      $cause = $_POST['cause'];
      $project_id = $_POST['project_id'];
      $account_no = $_POST['account_no'];
      $amount = $_POST['amount'];
      $id = $_SESSION['id_user'];

      $query = "insert into donation_info (user_id,Pay_Option,Cause,Project_ID,Account_no,Amount) values('$id','$pay_option','$cause','$project_id','$account_no', '$amount')";

      mysqli_query($con, $query);
      header("Location: successful.php");
      die;
    }
    
?>



<html>
  <head>
     <link rel="stylesheet" href="style2-2.css">    
   
  </head>
  <body>
    <div class="wrapper">
       <h2>Payment Form</h2> 
     <form method = "post">
      
          <div class="input-box">
             <h3>Payment Option</h3>
             <input type="text" name="pay_option"  placeholder="   Payment Option" required  list="pay_option">
             <datalist id="pay_option">
                <option>Bkash</option>
                <option>Rocket</option>
                <option>Nagad</option>     
            </datalist>
          </div>

        <div class="input-box">
             <h3>Payment For</h3>
             <input type="text" name="cause"  placeholder="   Payment Cause" list="cause">
             <datalist id="cause">
               <option>Education</option>
               <option>Food</option>
               <option>Medical </option>
               <option>Rehabilitation </option>
             </datalist>
        </div>

         <div class="input-box">
                <h3>Project/USER ID</h3>
                <input type="text" name="project_id"  placeholder="   Project/USER ID">
        </div>

 
         <div class="input-box">
           <h3>Account Number</h3>
           <input type="text" name="account_no" required placeholder="   Account Number">
         </div>

         <div class="input-box">
          <h3>Account Password</h3>
          <input type="password" name="password" required placeholder="    Password">
         </div>
          
          <div class="input-box">
            <h3>Amount</h3>
            <input type="text" name="amount" required placeholder="     Amount"><br>
          </div> 
         
         <div class="input-box">
             <input id = "button" type="submit" value = "Pay Now"><br><br>
         </div>
          
    </form>   
    </div>    
      
  </body>

</html>