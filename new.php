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
  border: 2px solid #17D0F1;
}

.button1:hover {
  background-color: #000000;
  color: white;
}



</style>
  
  <h1 style="background-color:powderblue;" ">upcomming events </h1>
  <center>
<table class="table1" cellpadding=20; cellspacing=2; border=3;>
 <tr>
 <th>location</th>
 <th>Description</th>
 </tr>
 <tr>
	<td><video width=600 controls> <source src="img/mov.mp4" type="video/mp4"> </video> </td>
	<td><h2>Best Hiking trails in sri lanaka.</h2><p> Adam's Peak, Hanthana, Naragala, Namunukula, <br>Peacok Hill, Wangedigala......  <br><br>
	<button onclick="document.location='bh.php'"class="button button1">View More Detailes</button></p></td> </p></td>      
  </tr>
 
	 <tr>
	<td><video width=600 controls> <source src="img/kf.mp4" type="video/mp4"> </video> </td>
	<td><h2>Hike to Kadiyanlena Falls.</h2><p>An amazing place to visit. It is quite famous among local<br> Kadiyanlena Falls is situated in Nawalapitiya, <br>a town close to Kandy......<br><br>
	<button onclick="document.location='kd.php'"class="button button1">View More Detailes</button></p></td> </p></td>      
  </tr>   
  
   <tr>
	<td><video width=600 controls> <source src="img/kg.mp4" type="video/mp4"> </video> </td>
	<td><h2>Kithulgala Water Rafting.</h2><p>Kitulgala is a small town in the west of Sri Lanka.<br> It is in the wet zone rain forest, which gets two monsoons each year, <br>and is one of the wettest places in the country.[citation needed] Nevertheless, <br>it comes alive in the first three months of the year, especially in February,<br> the driest month.<br><br>
	<button onclick="document.location='kg.php'"class="button button1">View More Detailes</button></p></td> </p></td>      
  </tr>
  
   <tr>
	<td><video width=600 controls> <source src="img/pk.mp4" type="video/mp4"> </video> </td>
	<td><h2>Peacok Hills.</h2><p>Peacock hills (1518m) is a mountain situated on the side of A5 <br>road closer to Pussellawa town. It is an easy hike as you can go <br>closer to the base of the mountain. But the road condition is not that much good. <br>After parking your vehicle at the trailhead there is a climb of 30minutes through<br> Pines trees which ends at peak of Peacock hills..<br><br>
	<button onclick="document.location='ph.php'"class="button button1">View More Detailes</button></p></td> </p></td>      
  </tr>
  
   <tr>
	<td><video width=600 controls> <source src="img/be.mp4" type="video/mp4"> </video> </td>
	<td><h2>Boburu ella.</h2><p>Bomburu Ella, also known as Perawella Falls, is a waterfall at<br> Uva-Paranagama Divisional Secretariat of Sri Lanka. It is located near <br>the border of Nuwara Eliya and Badulla districts, approximately 15 km <br>from Welimada town. Bomburu Ella is the widest waterfall in Sri Lanka
	<br><br><button onclick="document.location='be.php'"class="button button1">View More Detailes</button></p></td> </p></td>      
  </tr>
  
 </table>
</center><br><br><br><br>

 <?php include ('footer.php.'); ?>
 
 </body>
</html>
