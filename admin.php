<?php
include 'db.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$district=$_POST['district'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$map=$_POST['map'];

mysqli_query($conn,"INSERT INTO gyms(gym_name,district,address,phone,map_link)
VALUES('$name','$district','$address','$phone','$map')");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Gym</title>
</head>

<body>

<h2>Add New Gym</h2>

<form method="POST">

Gym Name<br>
<input type="text" name="name"><br><br>

District<br>
<input type="text" name="district"><br><br>

Address<br>
<textarea name="address"></textarea><br><br>

Phone<br>
<input type="text" name="phone"><br><br>

Google Map Link<br>
<input type="text" name="map"><br><br>

<input type="submit" name="submit" value="Add Gym">

</form>

</body>
</html>