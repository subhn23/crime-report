<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">

          <h1>Welcome</h1>
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p>Registered Cases</p>
          <div class="table">
          <table border="0px">
            <tr>
              <td><h3 style="color:white";>Sl. No.</h3></td>
              <td><h3 style="color:white";>Complain Id</h3></td>
              <td><h3 style="color:white";>Citizen Name</h3></td>
              <td><h3 style="color:white";>Date</h3></td>
              <td><h3 style="color:white";>Detail</h3></td>
            </tr>
            <tr>
                <td><h4 style="color:white";>01</h4></td>
                <td><h4 style="color:white";>OD03RB1234</h4></td>
                <td><h4 style="color:white";>SUBHENDRA KUMAR</h4></td>
                <td><h4 style="color:white";>22-08-2018</h4></td>
                <td><a href="#">Resolve</a></td>
            </tr>
            <tr>
                <td><h4 style="color:white";>02</h4></td>
                <td><h4 style="color:white";>OD03RB1134</h4></td>
                <td><h4 style="color:white";>ATIREK SINHA</h4></td>
                <td><h4 style="color:white";>22-08-2018</h4></td>
                <td><a href="#">Resolve</a></td>
            </tr>

            <tr>
                <td><h4 style="color:white";>03</h4></td>
                <td><h4 style="color:white";>OD03RB1659</h4></td>
                <td><h4 style="color:white";>SACHIT PANDA</h4></td>
                <td><h4 style="color:white";>22-08-2018</h4></td>
                <td><a href="#">Resolve</a></td>
            </tr>
            <tr>
                <td><h4 style="color:white";>04</h4></td>
                <td><h4 style="color:white";>OD03RB3659</h4></td>
                <td><h4 style="color:white";>SUBRAT MEHER</h4></td>
                <td><h4 style="color:white";>22-08-2018</h4></td>
                <td><a href="#">Resolve</a></td>
            </tr>
            <tr>
                <td><h4 style="color:white";>05</h4></td>
                <td><h4 style="color:white";>OD03RB9865</h4></td>
                <td><h4 style="color:white";>JANMEJAYA BHOI</h4></td>
                <td><h4 style="color:white";>22-08-2018</h4></td>
                <td><a href="#">Resolve</a></td>
            </tr>
            <tr>
                <td><h4 style="color:white";>06</h4></td>
                <td><h4 style="color:white";>OD03RB5864</h4></td>
                <td><h4 style="color:white";>SWATI SAHU</h4></td>
                <td><h4 style="color:white";>22-08-2018</h4></td>
                <td><a href="#">Resolve</a></td>
            </tr>
          </table>

          </div>
          

          
          <a href="logout.php"><button class="button button-block" name="logout"/>Back</button></a>

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
