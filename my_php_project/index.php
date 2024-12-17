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
 	<link rel="stylesheet" href="style.css">
 	<title>AdminHub</title>
 </head>
 <body>
 <div class="container">
    <!-- Title section -->
    <div class="title">Registration</div>
    <div class="content">
      <!-- Registration form -->
      <form method="POSTE" action="#">
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <!-- Input for Username -->
          <div class="input-box">
            <span class="details">CLUB</span>
            <select id="position" class="input1" name="cars" id="cars">
              <option value="Fenerbahçe">Fenerbahçe</option>
              <option value="Paris Saint-Germain">Paris Saint-Germain</option>
              <option value="Al-Ittihad">Al-Ittihad</option>
              <option value="Manchester United">Manchester United</option>
              <option value="Atletico Madrid">Atletico Madrid</option>
              <option value="Bayern Munich">Bayern Munich</option>
              <option value="Al-Hilal">Al-Hilal</option>
              <option value="Manchester United">Manchester United</option>
              <option value="Liverpool">Liverpool'</option>
              <option value="Real Madrid">Real Madrid</option>
              <option value="Al Nassr">Al Nassr</option>
              <option value="Inter Miami">Inter Miami</option>
            </select>
           
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">NATIONALETE</span>
            <div class="input">
              <select id="position" class="input1" name="cars" id="cars">
                <option value="Slovenia">Slovenia</option>
                <option value="Italy">Italy</option>
                <option value="Italy"></option>
                <option value="Italy">Norway</option>
                <option value="Morocco">Morocco</option>
                <option value="Croatia">Croatia</option>
                <option value="Egypt">Egypt</option>
                <option value="Brazil">Brazil</option>
                <option value="Germany">Germany</option>
                <option value="Netherlands">Netherlands</option>
                <option value="France">France</option>
                <option value="Belgium">Belgium</option>
                <option value="Portugal">Portugal</option>
                <option value="Argentina">Argentina</option>
              </select>
          </div>
        </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">POSION</span>
            <div class="input">
              <select id="position" class="input1" name="cars" id="cars">
                <option value="CF">CF</option>
                <option value="LWF">LWF</option>
                <option value="RWF">RWF</option>
                <option value="CM2">CM2</option>
                <option value="CM1">CM1</option>
                <option value="DM">DMF</option>
                <option value="CB1">CB1</option>
                <option value="CB2">CB2</option>
                <option value="RB">RB</option>
                <option value="LB">LB</option>
                <option value="GK">GK</option>
              </select>
            </div>
          </div>
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>

        </div>
       
        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

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
					<a href="/index.html">
 					<i class='bx bxs-dollar-circle' ></i>

 					<span class="text">
 						<h3>ADD PLAYER</h3>
						 </a>
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













