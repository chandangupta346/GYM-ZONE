<?php
include 'db.php';

$result=mysqli_query($conn,"SELECT * FROM gyms");
?>

<!DOCTYPE html>
<html>
<head>
<title>All Gyms</title>
</head>

<body>

<h1>Jharkhand Gym Directory</h1>

<?php
while($row=mysqli_fetch_assoc($result)){
?>

<div style="border:1px solid gray;padding:20px;margin:20px;">

<h2><?php echo $row['gym_name']; ?></h2>

<p>District :
<?php echo $row['district']; ?>
</p>

<p>Address :
<?php echo $row['address']; ?>
</p>

<p>Phone :
<?php echo $row['phone']; ?>
</p>

<a href="<?php echo $row['map_link']; ?>" target="_blank">
View Location
</a>

</div>

<?php
}
?>

</body>
</html>