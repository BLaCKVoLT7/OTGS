<?php 
require_once("dbcon.php");
if(isset($_GET['Del']))
         {
             $UserID = $_GET['Del'];
          $sql_query = " delete  from btable where ID ='".$UserID."'";
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
             header("result.php");
         }
 ?>