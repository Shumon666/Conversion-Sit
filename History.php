<!DOCTYPE html>
<html>
<head>
<title>History]</title>
</head>
<body>

 <?php

 $firstName = $lastName = "";
$firstNameErr = $lastNameErr = "";
$lastNameErr = $elastNameErr = "";
$elastNameErr = $flastNameErr = "";
$flastNameErr = $glastNameErr = "";




 ?>
<div style="border: black; border-width: 5px; border-style: solid;">
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<span style="color: red;">Page 3 [History]</span>

<span style="color: red;"><?php echo $firstNameErr; ?></span>

 <br><br>
<span style="color: red;">Conversion Sit</span>

<span style="color: red;"><?php echo $lastNameErr; ?></span>

 <br><br>
 
 
<span style="color: blue;">1.<u>Home</u> 2.<u>Conversion Rate</u> 3.<u> History</u></span>

<span style="color: blue;"><?php echo $elastNameErr; ?></span>

 <br><br>
 
 <span style="color: red;">Conversion History:</span>

<span style="color: red;"><?php echo $flastNameErr; ?></span>

 <br><br>
 <label for="glastNameErr"><span style="color: black;"> </span> </label>
<input type="text" name="glastNameErr" id="glastNameErr">
<span style="color: black;"><?php echo $glastNameErr; ?></span>


</form>
</div>


 <br>


</body>
</html>