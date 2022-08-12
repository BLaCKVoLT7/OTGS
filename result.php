<?php include ('header.php'); ?>

 <?php require_once("dbcon.php");
		$sql_query="select * from btable";
		$result=mysqli_query($conn, $sql_query);
		 
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
<style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("img/sk.jpg");

  min-height: 180px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 900;
bottom:90;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}



.btn:hover {
  opacity: 1;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
	 
<body class="bg-black">
<img src="img/sk.jpg" class="img-fluid" alt="...">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-8">
                        <table class="table table-bordered">
                            <tr>
                                <td> User ID </td>
                                <td> First Name</td>
                                <td> Last Name </td>
                                <td> Email </td>
                                <td> Phone </td>
                                <td> Number of Passengers </td>
								<td> Date</td>
								<td> Comment</td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['ID'];
                                        $First_Name = $row['First_Name'];
                                        $Last_Name = $row['Last_Name'];
                                        $Email = $row['email'];
										$Phone = $row['phone'];
										$NumberofPassengers = $row['number'];
										$date = $row['date'];
										$Comment = $row['comment'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $First_Name ?></td>
                                        <td><?php echo $Last_Name ?></td>
                                        <td><?php echo $Email ?></td>
										<td><?php echo $Phone ?></td>
										<td><?php echo $NumberofPassengers ?></td>
										<td><?php echo $date ?></td>
										<td><?php echo $Comment ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
   
   
    <?php include ('footer.php.'); ?>