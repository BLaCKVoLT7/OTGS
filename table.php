<?php include ('dbcon.php'); ?>

<?php include ('header.php'); ?>
   
<html>
<head>

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
  background-image: url("img/lak.jpg");

  min-height: 980px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 550;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
  background-color: white;
}

.testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
}
form {
      width: 50%;
      padding: 5px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #cc7a00; 
      }
  input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 66.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<h2>Welcome To Booking</h2>
<div class="bg-img">
  <form action="dbcon.php" method="post"    class="container">
  
    <h1>Tour Booking Form</h1>

    <label for="name"><b>Full Name</b></label>
    <input type="name" placeholder="First Name " name="First_Name" required>
	
	
	  <input type="name" placeholder="Last Name" name="Last_Name" required><br><br>

   <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required><br><br>
	
 <label for="phone">Enter a phone number:</label><br><br>
  <input type="phone" id="phone" name="phone" placeholder="123-45-678"  required><br><br>
	

  
  <label for="passengerNo">Number of Passengers :</label><br><br>
  <input type="number" id="number" name="number" placeholder="123" " required><br><br>
	
	<label for="Date">Date:</label><br><br>
  <input type="date" id="date" name="date" placeholder="date" " required><br><br>
  
	<label for="comment">comment:</label><br><br>
  <textarea class="textarea" rows="4" cols="50" name="comment" placeholder="Your Message"></textarea><br><br>

    <button type="submit" name="save" class="btn">Submit</button><br><br>
	
  </form>
</div>



 <?php include ('footer.php.'); ?>
 
 </body>
</html>
