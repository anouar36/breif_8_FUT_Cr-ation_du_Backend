<?php
require_once ('db.php');
$query = "SELECT players.name_player, players.photo, clubs.logo, nationality.flag
FROM players
INNER JOIN clubs ON players.id_club = clubs.id
INNER JOIN nationality ON players.id_natio = nationality.id"; 
$result = mysqli_query($con,$query);
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<!-- Boxicons -->
 	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
 	<!-- My CSS -->
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
 			<li class="active">
 				<a href="#">
 					<i class='bx bxs-dashboard' ></i>
 					<span class="text">Dashboard</span>
 				</a>
 			</li>
 			<li>
 				<a href="#">
 					<i class='bx bxs-shopping-bag-alt' ></i>
 					<span class="text">My Store</span>
 				</a>
 			</li>
 			<li>
 				<a href="#">
 					<i class='bx bxs-doughnut-chart' ></i>
 					<span class="text">Analytics</span>
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
 				<div class="left">
 					<h1>Dashboard</h1>
 					<ul class="breadcrumb">
 						<li>
 							<a href="#">Dashboard</a>
 						</li>
 						<li><i class='bx bx-chevron-right' ></i></li>
 						<li>
 							<a class="active" href="#">Home</a>
 						</li>
 					</ul>
 				</div>
 				<a href="#" class="btn-download">
 					<i class='bx bxs-cloud-download' ></i>
 					<span class="text">Download PDF</span>
 				</a>
 			</div>

 			<ul class="box-info">
 				<li>
 					<i class='bx bxs-calendar-check' ></i>
 					<span class="text">
 						<h3>MODIFE PLAYER</h3>
 					</span>
 				</li>
 				<li>
 					<i class='bx bxs-group' ></i>
 					<span class="text">
 						<h3>DELET PLAYER</h3>
 						
 					</span>
 				</li>
 				<li>
 					<i class='bx bxs-dollar-circle' ></i>
 					<span class="text">
 						<h3>ADD PLAYER</h3>

 					</span>
 				</li>
 			</ul>


 			<div class="table-data">
 				<div class="order">
 					<div class="head">
 						<h3>Recent Orders</h3>
 						<i class='bx bx-search' ></i>
 						<i class='bx bx-filter' ></i>
 					</div>
 					<table>
 						<thead>
 							<tr>
 								<th>Players</th>
 								<th>CLUP</th>
 								<th>NATIONALETE</th>
 							</tr>
 						</thead>
 						<tbody>
 							<tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result))
                                {
                                ?>
                                <td>
 									<img src="<?php echo $row['photo'] ?>">
 									<p><?php echo $row['name_player'] ?></p>
 								
 								<td><img src="<?php echo $row['flag'] ?>" alt="/"></td>
 								<td><span class="status completed"><img src="<?php echo $row['logo'] ?>" alt=""></span></td>
    

                                 </tr>
                                <?php
                                   }
                                   ?>
 								
 							
                            
                            

                           
						
							
 						</tbody>
 					</table>
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













