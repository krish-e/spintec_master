<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "forms";
    $enq_num="";
    $cus_name="";
    $comp_name="";
    $part_num="";
    $quantity="";
    $material="";
    $material_grade="";
    $feasibility="";
	 // Create connection
	 $conn =mysqli_connect($servername, $username, $password, $dbname);
	 if(isset($_POST['enq_num']))
         $enq_num=$_POST['enq_num'];
	 if(isset($_POST['cus_name']))
         $cus_name=$_POST['cus_name'];
     if(isset($_POST['comp_name']))
         $comp_name=$_POST['comp_name'];
     if(isset($_POST['part_num']))
         $part_num=$_POST['part_num'];
	 if(isset($_POST['quantity']))
         $quantity=$_POST['quantity'];
	 if(isset($_POST['material']))
         $material=$_POST['material'];
     if(isset($_POST['material_grade']))
         $material_grade=$_POST['material_grade'];
     if(isset($_POST['feasibility']))
         $feasibility=$_POST['feasibility'];
	 

	 //Insert Query of SQL
     $query1 ="insert into draw_study_details values('$enq_num','')";
     $result1=mysqli_query($conn,$query1);   


     $query ="insert into enquiry values('$enq_num','$cus_name','$comp_name','$part_num','$quantity','$material','$material_grade','$feasibility')"; 
     $result2=mysqli_query($conn,$query);

    
     //checking
	 if($result2)
	 { 
		 echo '<script language="javascript">';
		 echo 'alert("Submitted Successfully")';
		 echo '</script>';
         header('location:dashboard.php');
	 }
	 else
	 {
		echo 'Data not inserted'; 
	 }  
  mysqli_close($conn);
 ?>