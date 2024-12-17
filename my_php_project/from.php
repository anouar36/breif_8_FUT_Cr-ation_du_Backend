<?php
include('db.php')
if(isset($_post['submit'])){
  $name =$_POST['name'];
  $email =$_POST['email'];
  $adderss =$_POST['address']
  $query = "INSERT players.name_player, players.photo, clubs.logo, nationality.flag
FROM players
INNER JOIN clubs ON players.id_club = clubs.id
INNER JOIN nationality ON players.id_natio = nationality.id"; 
$result = mysqli_query($con,$query);

}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Responsive Registration Form | CodingLab </title>
  <link rel="stylesheet" href="/my_php_project/iIndex.css">
</head>
<body>
  
</body>
</html>