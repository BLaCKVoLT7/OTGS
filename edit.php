<?php include ('header.php'); ?>
 <?php

    require_once("dbcon.php");
    $UserID = $_GET['GetID'];
    $sql_query = " select * from btable where ID ='".$UserID."'";
		$result=mysqli_query($conn, $sql_query)or die (mysqli_error($conn));

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
                            
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-white">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-8">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Your Data</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $UserID ?>" method="post"><br>
                                <input type="name" class="form-control mb-2" placeholder=" First Name " name="First_Name" value="<?php echo $First_Name ?>"><br>
								 <input type="name" class="form-control mb-2" placeholder=" Last Name " name="Last_Name" value="<?php echo $Last_Name ?>"><br>
                                <input type="email" class="form-control mb-2" placeholder="  Email " name="email" value="<?php echo $Email ?>"><br>
                                <input type="phone" class="form-control mb-2" placeholder=" Phone " name="phone" value="<?php echo $Phone ?>"><br>
								<input type="number" class="form-control mb-2" placeholder=" Number Of Passengers " name="number" value="<?php echo $NumberofPassengers ?>"><br>
								<input type="date" class="form-control mb-2" placeholder=" Date " name="date" value="<?php echo $date ?>"><br>
								<input type="text" class="form-control mb-2" placeholder=" Comment " name="comment" value="<?php echo $Comment ?>"><br>
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
 <?php include ('footer.php.'); ?>