<?php
session_start();
if(isset($_POST['loginsubmit'])){
    include('./server/connection.php');
    $pusername=$_POST['loginname'];
    $ppassword=$_POST['loginpassword'];
    $sql="SELECT * FROM forms WHERE username='$pusername' AND password='$ppassword'";

    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($row=mysqli_fetch_assoc($qry)){
        $role = $row['role'];
        $_SESSION['user']=$pusername;
        $_SESSION['email']=$row['Email'];
        $_SESSION['role']=$row['Role'];
        if($role=='admin'){
            header('location:admin_area/index.php'); 
        }else{
            header('location:index.php');
        }
    }else{
        echo "Invalid User";
    }
  
}
?>