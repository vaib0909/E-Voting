<?php
require('connection.php');

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>

<html>
<head>
     <title>Welcome</title>
     <link rel="stylesheet" type="text/css" href="style/style_new.css">
</head>
<body>
     <div class="n1">
          <div class="logo">
               <p>Online voting system</p>
          </div>
               <ul>
              
             
               <li><a href="student.php"class="active">Home</a></li>
               <li><a href="vote.php">Vote Here</a></li>
               
               <li><a href="logout.php">Logout</a></li>
            
               </ul>     
     </div>
     <div class="b1">

          <form name="form2">
          <h2>Welcome</h2>
         
     <label><center>Hello, Sir/Madam. Here You can Vote for your favourite Candidates at different positions </center></label>
          </form>
     </div>

     <div class="f1">
          <div class="footer">
          <center><p>@ Desgnied By - Komal , Tanmay , Vaibhav , Utkarsh<p></center>
          </div>
     </div>
</body>
</html>
