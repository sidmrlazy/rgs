<?php 
// include 'includes/database/db.php';
// include("includes/database/db.php");

$connect = new mysqli("localhost","root","","rgscp");

// // // Check connection
if ($connect -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connect -> connect_error;
  exit();
}
else
{
    echo "connect";
}

              if(isset($_POST['submit']))
                         {
                            
                             echo $username=$_POST['username'];
                             echo $email=$_POST['email'];
                             echo $phone=$_POST['phone'];
                             echo $message=$_POST['message'];
                            echo $todaydate=time();
                            
                           $res=mysqli_query($connect,"INSERT INTO contact (username,email,phone,message,todaydate) VALUES ('$username','$email','$phone','$message','$todaydate')");

                           if($res)
                           {
                              $_SESSION['message'] = "SMS Send"; 
                           }
                           else
                           {
                             $_SESSION['message'] = "SMS Not Send";
                           } 
                         
                            // header('location:admissions.php');
                         }

                          ?>