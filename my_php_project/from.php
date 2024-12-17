<?php
include('db.php')
if(isset($_post['submit'])){
  $name =$_POST['name'];
  $email =$_POST['email'];
  $adderss =$_POST['address']
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
</body>
</html>