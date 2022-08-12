<?php include ('header.php'); ?>

<?php 

    require_once("dbcon.php"); 

    if(isset($_POST['update']))
    {
                                        $UserID = $_GET['ID'];
                                        $First_Name = $_POST['First_Name'];
                                        $Last_Name = $_POST['Last_Name'];
                                        $Email = $_POST['email'];
										$Phone = $_POST['phone'];
										$NumberofPassengers = $_POST['number'];
										$date = $_POST['date'];
										$Comment = $_POST['comment'];

            $sql_query = " update btable set First_Name ='".$First_Name."', Last_Name ='".$Last_Name."', email ='".$Email."', phone ='".$Phone."', number ='".$NumberofPassengers."', date ='".$date."', comment='".$Comment."'where ID ='".$UserID."'";
		$result=mysqli_query($conn, $sql_query)or die (mysqli_error($conn));
			 
        if($result)
        {
            header("location:result.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:result.php");
    }


?>
 <?php include ('footer.php.'); ?>