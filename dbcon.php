  
<?php

 $servername="localhost";
  $username="root";
  $password="";
  $database="dbook";
  
   $conn=mysqli_connect($servername,$username,$password,$database);
  if(!$conn)
  {
	  die("Connection Failed:" .mysqli_connect_error());
  }
  
  if(isset($_POST['save']))
  {
	  $First_Name = $_POST['First_Name'];
	  $Last_Name = $_POST['Last_Name']; 
	  $email= $_POST['email'];
	  $phone = $_POST['phone']; 
	  $number = $_POST['number']; 
	  $date=$_POST['date'];
	  $comment=$_POST['comment'];
	  
	  $sql_query = "INSERT INTO btable (First_Name,Last_Name,email,phone,number,date,comment)
	  VALUES ('$First_Name','$Last_Name',' $email','$phone',' $number','$date','$comment')";

	if (mysqli_query($conn, $sql_query))
	  {
		header("location:result.php");
		  
	  }
	  
	  else
	  { 
		  echo"Error: " .$sql ."". mysqli_error($conn);
		  }
		  mysqli_close($conn);
  }
?>
 