<?php include ('header.php'); ?>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #000000;
  color: white;
}



</style>

<!-- 21:9 aspect ratio -->


<tr>
	<td><video width=1700 controls> <source src="img/la.mp4" type="video/mp4"> </video> </td>
    
  </tr>
  
  <h1 style="background-color:DodgerBlue;">Choose Your Ideal Guider </h1>
  <center>
<table class="table1" cellpadding=20; cellspacing=2; border=3;>
 <tr>
 <th>Biography</th>
 <th>Description</th>
 </tr>
 <tr>
	<td><img src="img/imone.jpg" class="img-fluid" alt="Killer Itachi"width="150" height="160"></td>
	<td><h2>K.G.T Neranjun.</h2><p>Category: Area<br>Tel:070549632<br>Address:50/7 sri lalyani,gangarama mawatha,mattakkuliya,co-150/7 sri lalyani,gangarama mawatha,mattakkuliya,co-1z<br>Registration: 01-01 <br> Email:nirangun@yahoo.co.uk<br><button onclick="document.location='table.php'"class="button button1">Hire</button></p></td>    
  </tr>
   <tr>
	<<td><img src="img/imtwo.jpg" class="img-fluid" alt="Killer Itachi"width="150" height="160"></td>
	<td><h2>E.B.Hulugalla.</h2><p>Category: Area<br>Tel:0774747521<br>Address:48, postoffice road, maskeliya<br>Registration: 01-02 <br> Email:Hulugalla@yahoo.co.uk<br><button onclick="document.location='table.php'" class="button button1">Hire</button></p></td> 
  </tr>
  <tr>
	<td><img src="img/imthree.jpg" class="img-fluid" alt="Killer Itachi"width="150" height="160"></td>
	<td><h2>Piumi Sulochana.</h2><p>Category: Area<br>Tel:0779808067<br>Address:No.85.temple road. beruwala,beruwala,kalutara<br>Registration: 01-03 <br> Email:sulochana@yahoo.co.uk<br><button onclick="document.location='table.php'" class="button button1">Hire</button></p></td>    
  </tr>
   <tr>
	<td><img src="img/imfour.jpg" class="img-fluid" alt="Killer Itachi"width="150" height="160"></td>
<td><h2>Wathsala Suraweera.</h2><p>Category: Area<br>Tel:0771237033<br>99/10,,hapugasthenna,madawala basar<br>Registration: 01-04 <br> Email: Wathsala@yahoo.co.uk<br><button onclick="document.location='table.php'" class="button button1">Hire</button></p></td>   
  </tr>
  
  
 </table>
</center><br><br><br><br>

 <?php include ('footer.php.'); ?>
 
 </body>
</html>
