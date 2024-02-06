<?php
include "db_conn.php";
?>  

<!DOCTYPE html>
<html>
<head>
<title>Bikers Club Motorcycle (BCM)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">



<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo1.jpg" style="width:25%;" class="w3-round"><br><br>
    <h4><b>BCM</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="/BCM/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home (Guest)</a>
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a> 
    <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 
    <a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENT</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>

  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

   <!-- Header -->
<!-- Team Container -->
<p align= "center"></p>
<div class="w3-container w3-padding-64 w3-center"



  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <div class="w3-section w3-bottombar w3-padding-16">
 
   


  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">

    <div class="w3-col m6">
      <p align= "center"> <img src="photo/logo5.png" alt="Me" style="width:190%"> </p>
    </div>
  </div>

  <header id="membership">
  <p align="center"><h3>Membership form for Bikers Club Motorcycle 2024</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>


    </p>
    <hr>
  
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-center:300px">

  <!-- Header -->
  
  <header id="committee">
  <p align= "center"></p>

    <a href="committee"><img src="photo/convoi.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>OUR COMMITTEE MEMBERS</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
   
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/yusuf.jpg" alt="Group Ride and Charity Event" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Yusuf</b></p>
        <p><b>MasterMind</b></p>

      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/ajik.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Haziq Naqi</b></p>
        <p><b>Executor</b></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/kimi.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Zulhakimi</b></p>
        <p><b>Personal Assistant</b></p>
      </div>
    </div>
  </div> 

   
 


   
    
 <hr> 


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-center:300px">

  <!-- Header -->
  <header id="activity">
    <a href="activity"><img src="photo/convoi.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Activity in our Bikers Club</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
   
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/convoi.png" alt="Group Ride and Charity Event" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Group Ride and Charity Event</b></p>
        <p>Plan a scenic group ride for club members, and combine it with a charity event that are fun to enjoy. </p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/workshop3.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Skills Workshop</b></p>
        <p>Organize a skills workshop where experienced riders within the club can share their knowledge with others.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/bike_show.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Custom Bike Show</b></p>
        <p>Host a custom bike show where members can showcase their unique and customized motorcycles.</p>
      </div>
    </div>
  </div>


 

  <br>
 <p align="center"><h3>Activities Minutes of BIKERS CLUB</h3></p>
 <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



    <hr>
 
 <!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-center:300px">

  <!-- Header -->
  <header id="achievement">
    <a href="achievement"><img src="photo/convoi.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Bikers Club Achievement</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
   
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/certificate1.jpg" alt="Group Ride and Charity Event" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Certificate of Appreciation</b></p>

      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/certificate2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Road Run Section</b></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/certificate3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Continued Support and Trust</b></p>
      </div>
    </div>
  </div>
   
    
 <hr> 
 

  <!-- Contact Section -->
  <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Student ID</th>
          <th scope="col">Email</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
          
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>
            <td>
              <a href="edit_contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Us</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>yusufftaiyyob@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>UiTM Machang, Kelantan</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>011-21160186</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
