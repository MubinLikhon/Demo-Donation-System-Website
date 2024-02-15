<?php

session_start();
        
        include("connection.php");
        include("functions.php");
        $user_data = check_login($con);
?>

<html>
    <head>
        <link rel="stylesheet" href="table1.css">
    </head>
    <body>
        <section class="header">
             <nav>
            <img src="../user registration/images/imageedit_1_7395898986.png">
            <div class="nav-links">
                <ul>
                    <li><a href="index1.php">HOME</a></li>
                    <li><a href="payment_gateway-2.php">DONATE</a></li>
                    <li><a href="donor_about.php">ACCOUNT INFO</a></li>
                     <li><a href="logout.php">SIGN OUT</a></li>
                </ul>
            </div>
            </nav>
     </section>
     <h2>List of Individuals Seeking Help</h2>
        
            <?php
             $query = "select  user_id, reason, amount_needed, time_frame, date from receiver_info ORDER BY date DESC limit 6";
             $result = mysqli_query($con,$query);
             
            
            
    echo "<table border='1' class = 'right' style = 'text-align:center'>
        
                <tr>
                    <th>USER ID</th>
                    <th>REASON</th>
                    <th>AMOUNT NEEDED</th>
                    <th>Required</th>
                    <th>Application DATE</th>
                </tr>";

            

             while($row = mysqli_fetch_assoc($result))
            {
            echo "<tr>";
            echo "<td>" . $row['user_id'] . "</td>";
            echo "<td>" . $row['reason'] . "</td>";
            echo "<td>" . $row['amount_needed'] . "</td>";
            echo "<td>" . $row['time_frame'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";

            echo "</tr>";
            }
            echo "</table>";


            ?>

                </body>
</html>