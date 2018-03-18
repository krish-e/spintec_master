<?php
session_start();

	$name="";
	$pwd="";
	$conn =mysqli_connect("localhost","root","","employees");
	
	if(isset($_POST['username']))
         $name=$_POST['username'];
	 if(isset($_POST['pass']))
         $pwd=$_POST['pass'];
 
 if($name!='' && $pwd!='')
 {
   $query ="select * from emp_details where emp_id='$name' and password='$pwd'";
   $result=mysqli_query($conn,$query);   
   $row=mysqli_fetch_array($result, MYSQLI_BOTH);
   if($row)
   {
    $_SESSION["name"]=$_POST['username'];	 
     header('location: dashboard.php');
   }
   else
   {     
	 header('location:index.html');
	 echo '<script language="javascript">'; 
	 echo 'alert("Entered ID or password is incorrect")';
	 echo '</script>';	 
   }
 }
 else
 {
	 header('location:index.html');
     echo '<script language="javascript">'; 
	 echo 'alert("Enter username or password!")';
	 echo '</script>';	 
 }
?>