<?php
include('db.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
  $id = $_GET['updateid'];
  $name =$_POST['name'];
  $pose =$_POST['pose'];
  $photo =$_POST['photo'];
  $club =$_POST['club'];
  $natio =$_POST['natio'];
  $sql = mysqli_query($con, " update players SET name_player = '$name',
                              id_club = $club,
                              id_natio  = $natio
                              WHERE id = $id ; ");
  if($sql){
    echo"<script>alert('data update seccesfully')</script>";
    echo"<script type='text/javascript'>document.location = View.php</script>";
  } else{
    echo "<script>alert('خطأ: " . mysqli_error($con) . "')</script>";;
  }
}



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="index.css" />
    <title>AdminHub</title>
  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="#" class="brand">
        <i class="bx bxs-smile"></i>
        <span class="text">AdminHub</span>
      </a>
      <ul class="side-menu top">
        <li>
          <a href="index.php">
            <i class="bx bxs-shopping-bag-alt"></i>
            <span class="text">OLL PLAYERS</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-doughnut-chart"></i>
            <span class="text">ADD PLAYER</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-message-dots"></i>
            <span class="text">Message</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-group"></i>
            <span class="text">Team</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="#">
            <i class="bx bxs-cog"></i>
            <span class="text">Settings</span>
          </a>
        </li>
        <li>
          <a href="#" class="logout">
            <i class="bx bxs-log-out-circle"></i>
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
        <i class="bx bx-menu"></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Search..." />
            <button type="submit" class="search-btn">
              <i class="bx bx-search"></i>
            </button>
          </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden />
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
          <i class="bx bxs-bell"></i>
          <span class="num">8</span>
        </a>
        <a href="#" class="profile">
          <img src="img/people.png" />
        </a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Recent Orders</h3>
              <i class="bx bx-search"></i>
              <i class="bx bx-filter"></i>
            </div>
            <div class="container">
              <!-- Title section -->
              <div class="title">Registration</div>
              <div class="content">
                <!-- Registration form -->
                <form method="POST" action="#">
                    <?php
                    include('db.php');
                    $id = $_GET['updateid'];
                    $query = mysqli_query($con, "SELECT players.name_player ,players.id, players.position, players.photo, clubs.logo, nationality.flag, clubs.id as club_id, nationality.id as natio_id
                             FROM players
                             INNER JOIN clubs ON players.id_club = clubs.id
                             INNER JOIN nationality ON players.id_natio = nationality.id
                             WHERE players.id = '$id'");
                    $row = mysqli_fetch_array($query);
                    if ($row) {

                    ?>
                  <div class="user-details">
                    <!-- Input for Full Name -->
                    <div class="input-box">
                      <span class="updateid">Full Name</span>
                      <input
                        type="text"
                        name="name"
                        placeholder="Enter your name"
                        required
                        value="<?php echo $row['name_player']; ?>"
                      />
                    </div>
                    <!-- Input for Username -->
                    <div class="input-box">
                      <span class="updateid">CLUB</span>
                      <select
                        id="position"
                        class="input1"
                        name="club"
                        id="cars"
                      >
                        <option <?php echo ($row['club_id'] == 12) ? 'selected' : ''; ?> value="12">Fenerbahçe</option>
                        <option <?php echo ($row['club_id'] == 10) ? 'selected' : ''; ?> value="10">Al-Ittihad</option>
                        <option <?php echo ($row['club_id'] == 11) ? 'selected' : ''; ?> value="11">Paris Saint-Germain</option>
                        <option <?php echo ($row['club_id'] == 3) ? 'selected' : ''; ?> value="3">Manchester United</option>
                        <option <?php echo ($row['club_id'] == 8) ? 'selected' : ''; ?> value="8">Atletico Madrid</option>
                        <option <?php echo ($row['club_id'] == 7) ? 'selected' : ''; ?> value="7">Bayern Munich</option>
                        <option <?php echo ($row['club_id'] == 6) ? 'selected' : ''; ?> value="6">Al-Hilal</option>
                        <option <?php echo ($row['club_id'] == 9) ? 'selected' : ''; ?> value="9">Manchester United</option>
                        <option <?php echo ($row['club_id'] == 5) ? 'selected' : ''; ?> value="5">Liverpool'</option>
                        <option <?php echo ($row['club_id'] == 4) ? 'selected' : ''; ?> value="4">Real Madrid</option>
                        <option <?php echo ($row['club_id'] == 2) ? 'selected' : ''; ?> value="2">Al Nassr</option>
                        <option <?php echo ($row['club_id'] == 1) ? 'selected' : ''; ?> value="1">Inter Miami</option>
                      </select>
                    </div>
                    <!-- Input for Email -->
                    <div class="input-box">
                      <span class="updateid">NATIONALETE</span>
                      <div class="input">
                        <select
                          id="position"
                          class="input1"
                          name="natio"
                          id="cars"
                        >
                          <option <?php echo ($row['natio_id'] == '14') ? 'selected' : ''; ?> value="14">Slovenia</option>
                          <option <?php echo ($row['natio_id'] == '13') ? 'selected' : ''; ?> value="13">Italy</option>
                          <option <?php echo ($row['natio_id'] == '11') ? 'selected' : ''; ?> value="11">Norway</option>
                          <option <?php echo ($row['natio_id'] == '10') ? 'selected' : ''; ?> value="10">Morocco</option>
                          <option <?php echo ($row['natio_id'] == '9') ? 'selected' : ''; ?> value="9">Croatia</option>
                          <option <?php echo ($row['natio_id'] == '8') ? 'selected' : ''; ?> value="8">Egypt</option>
                          <option <?php echo ($row['natio_id'] == '7') ? 'selected' : ''; ?> value="7">Brazil</option>
                          <option <?php echo ($row['natio_id'] == '6') ? 'selected' : ''; ?> value="6">Germany</option>
                          <option <?php echo ($row['natio_id'] == '5') ? 'selected' : ''; ?> value="5">Netherlands</option>
                          <option <?php echo ($row['natio_id'] == '4') ? 'selected' : ''; ?> value="4">France</option>
                          <option <?php echo ($row['natio_id'] == '3') ? 'selected' : ''; ?> value="3">Belgium</option>
                          <option <?php echo ($row['natio_id'] == '2') ? 'selected' : ''; ?> value="2">Portugal</option>
                          <option <?php echo ($row['natio_id'] == '1') ? 'selected' : ''; ?> value="1">Argentina</option>
                        </select>
                      </div>
                    </div>
                    <!-- Input for Phone Number -->
                    <div class="input-box">
                      <span class="updateid">POSION</span>
                      <div class="input">
                        <select
                          id="position"
                          class="input1"
                          name="pose"
                          id="cars"
                          value="<?php echo $row['position']; ?>"
                        >
                          <option <?php echo ($row['position'] == 'ST') ? 'selected' : ''; ?> value="CF">CF</option>
                          <option <?php echo ($row['position'] == 'LW') ? 'selected' : ''; ?> value="LWF">LWF</option>
                          <option <?php echo ($row['position'] == 'RW') ? 'selected' : ''; ?> value="RWF">RWF</option>
                          <option <?php echo ($row['position'] == 'CM') ? 'selected' : ''; ?> value="CM">CM</option>
                          <option <?php echo ($row['position'] == 'CDM') ? 'selected' : ''; ?> value="DM">DMF</option>
                          <option <?php echo ($row['position'] == 'CB') ? 'selected' : ''; ?> value="CB">CB</option>
                          <option <?php echo ($row['position'] == 'RB') ? 'selected' : ''; ?> value="RB">RB</option>
                          <option <?php echo ($row['position'] == 'LB') ? 'selected' : ''; ?> value="LB">LB</option>
                          <option <?php echo ($row['position'] == 'GK') ? 'selected' : ''; ?> value="GK">GK</option>
                        </select>
                      </div>
                    </div>
                    <!-- Input for Password -->
                    <div class="input-box">
                      <span class="updateid">Photo URL</span>
                      <input
                        type="text"
                        name="photo"
                        placeholder="Enter photo URL"
                        required
                        value="<?php echo $row['photo']; ?>"
                      />
                    </div>
                    


                  </div>

                  <!-- Submit button -->
                  <div class="button">
                    <input type="submit" name="id" value="UPDATE" />
                  </div>
                  <?php } ?>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="todo"></div>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="/assets/stylesheet/index.js"></script>
  </body>
</html>
