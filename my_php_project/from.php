<?php
require_once ('db.php');
$query = "SELECT players.name_player, players.photo, clubs.logo, nationality.flag
FROM players
INNER JOIN clubs ON players.id_club = clubs.id
INNER JOIN nationality ON players.id_natio = nationality.id"; 
$result = mysqli_query($con,$query);
?>

<?php

if(isset($_POST['submit'])){
  $name =$_POST['name'];
  $pose =$_POST['pose'];
  $photo =$_POST['photo'];
  $club =$_POST['club'];
  $natio =$_POST['natio'];
  $query = mysqli_query($con, "INSERT INTO players (name_player, photo, position, id_club, id_natio)  
VALUES  
('$name', '$photo', '$pose','$club', $natio)"); 
if($query){
	echo  "<script>alert(data inserted seccesfulyy)</script>";
}else{
	echo  "<script>alert(data is not  inserted )</script>";
}
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<!-- Boxicons -->
 	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
 	<!-- My CSS -->
 	<link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="index.css">
 	<title>AdminHub</title>
 </head>
 <body>
 	<!-- SIDEBAR -->
 	<section id="sidebar">
 		<a href="#" class="brand">
 			<i class='bx bxs-smile'></i>
 			<span class="text">AdminHub</span>
 		</a>
 		<ul class="side-menu top">
 			<li>
 				<a href="index.php">
 					<i class='bx bxs-shopping-bag-alt' ></i>
 					<span class="text">OLL PLAYERS</span>
 				</a>
 			</li>
 			<li>
 				<a href="#">
 					<i class='bx bxs-doughnut-chart' ></i>
 					<span class="text">ADD PLAYER</span>
 				</a>
 			</li>
 			<li>
 				<a href="#">
 					<i class='bx bxs-message-dots' ></i>
 					<span class="text">Message</span>
 				</a>
 			</li>
 			<li>
 				<a href="#">
 					<i class='bx bxs-group' ></i>
 					<span class="text">Team</span>
 				</a>
 			</li>
 		</ul>
 		<ul class="side-menu">
 			<li>
 				<a href="#">
 					<i class='bx bxs-cog' ></i>
 					<span class="text">Settings</span>
 				</a>
 			</li>
 			<li>
 				<a href="#" class="logout">
 					<i class='bx bxs-log-out-circle' ></i>
 					<span class="text">Logout</span>
 				</a>
 			</li>
 		</ul>
 	</section>
 	<!-- SIDEBAR -->



 	<!-- CONTENT -->
 	<section id="content">
 		<!-- NAVBAR -->
 		<nav>
 			<i class='bx bx-menu' ></i>
 			<a href="#" class="nav-link">Categories</a>
 			<form action="#">
 				<div class="form-input">
 					<input type="search" placeholder="Search...">
 					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
 				</div>
 			</form>
 			<input type="checkbox" id="switch-mode" hidden>
 			<label for="switch-mode" class="switch-mode"></label>
 			<a href="#" class="notification">
 				<i class='bx bxs-bell' ></i>
 				<span class="num">8</span>
 			</a>
 			<a href="#" class="profile">
 				<img src="img/people.png">
 			</a>
 		</nav>
 		<!-- NAVBAR -->

 		<!-- MAIN -->
 		<main>
 			<div class="head-title">
 				
 				
 			</div>

 			


 			<div class="table-data">
 				<div class="order">
 					<div class="head">
 						<h3>Recent Orders</h3>
 						<i class='bx bx-search' ></i>
 						<i class='bx bx-filter' ></i>
 					</div>
 					<div class="container">
    <!-- Title section -->
    <div class="title">Registration</div>
    <div class="content">
      <!-- Registration form -->
      <form method="POST" action="#">
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <!-- Input for Username -->
          <div class="input-box">
            <span class="details">CLUB</span>
            <select id="position" class="input1" name="club" id="cars">
              <option value=12>Fenerbahçe</option>
              <option value=11>Paris Saint-Germain</option>
              <option value=10>Al-Ittihad</option>
              <option value=3>Manchester United</option>
              <option value=8>Atletico Madrid</option>
              <option value=7>Bayern Munich</option>
              <option value=6>Al-Hilal</option>
              <option value=9>Manchester United</option>
              <option value=5>Liverpool'</option>
              <option value=4>Real Madrid</option>
              <option value=2>Al Nassr</option>
              <option value=1>Inter Miami</option>
            </select>
           
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">NATIONALETE</span>
            <div class="input">
              <select id="position" class="input1" name="natio" id="cars">
                <option value=14>Slovenia</option>
                <option value=13>Italy</option>
                <option value=11>Norway</option>
                <option value=10>Morocco</option>
                <option value=9>Croatia</option>
                <option value=8>Egypt</option>
                <option value=7>Brazil</option>
                <option value=6>Germany</option>
                <option value=5>Netherlands</option>
                <option value=4>France</option>
                <option value=3>Belgium</option>
                <option value=2>Portugal</option>
                <option value=1>Argentina</option>
              </select>
          </div>
        </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">POSION</span>
            <div class="input">
              <select id="position" class="input1" name="pose" id="cars">
                <option value="CF">CF</option>
                <option value="LWF">LWF</option>
                <option value="RWF">RWF</option>
                <option value="CM2">CM</option>
                <option value="DM">DMF</option>
                <option value="CB1">CB</option>
                <option value="RB">RB</option>
                <option value="LB">LB</option>
                <option value="GK">GK</option>
              </select>
            </div>
          </div>
          <!-- Input for Password -->
		  <div class="input-box">
    <span class="details">Photo URL</span>
    <input type="text" name="photo" placeholder="Enter photo URL" required>
</div>


        </div>
       
        <!-- Submit button -->
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
  </div>









 				
 				</div>
 				<div class="todo">
 			</div>
 		</main>
 		<!-- MAIN -->
 	</section>
 	<!-- CONTENT -->
	

 	<script src="/assets/stylesheet/index.js"></script>
 </body>
 </html>











