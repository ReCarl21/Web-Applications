




<!DOCTYPE html>
<html lang="en-US">
<head>
<title>ITravel Philippines </title>
<link rel="stylesheet" css="text/css" href="css/index.css"/>
</head>
<body>


  <?php
    include_once 'header.php';
  ?>

  <section>
  <div>
    <h2>INDEXHOME</h2>
    <?php
    if (isset($_SESSION['u_id'])){
      echo 'you are logged in!';
    }
     ?>
  </div>
  </section>

  <?php
    include_once 'footer.php';
  ?>




<header>
<div class="intro">
<!-- Logo Image here! -->
<br />

  <!-- Navigations -->
<a href=""><img id="planeLogo" src="images/Logo.png" alt="plane" /></a><br />
  <div id="nav">

      <a href="#home" class="nav" title="login" onclick="document.getElementById('id01').style.display='block'" target="">LOGIN</a>
      <a href="#home" class="nav" title="Home" target="">HOME</a>
      <a href="#packages" class="nav" title="Packages" target="">PACKAGES</a>
      <a href="#about_us" class="nav" title="About" target="">ABOUT</a>

<div id="id01" class="modal">

  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/Logo2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container" style="font-family: Arial, Helvetica, sans-serif;">
      <label for="uname" style="font-family: Arial, Helvetica, sans-serif;"><b>Username</b></label>
      &nbsp;<input type="text" placeholder="Enter Username" name="uname" required>
      <br>
      <label for="psw" style="font-family: Arial, Helvetica, sans-serif;"><b>Password</b></label>
      &nbsp;<input type="password" placeholder="Enter Password" name="psw" required>
      <center>
      &nbsp;<button type="submit">Login</button><!-- edit this for database-->
      </center>
    </div>
  </form>
</div>


  </div>

  <!-- Introductory Statement Here! -->

  <br><br><center><p id="statement">"EVERY GREAT JOURNEY STARTS WITH US"</p>


  <img src="images/Couple.png" alt="image" /></center>
</div>
</header>

<!-- NOTES
  1. Add Locator using google maps or local map
  2. Add login system where user can comment
  3.
-->

<!-- Content Here! -->

<div class="middle_one">


<center>

<div class="middle_one_inside">

<center>
<div class="country_align">
<!-- Hong Kong Line -->
    <div class="imgcontainer">
      <img src="images/hk_flag.jpg" class="image1" style="height: 40%; width: 40%; display: inline-block; float: left; ">
      <div class="middle" style= "position: absolute;">
        <div class="text1">HONGKONG FREE & EASY<br />
        Macau, Ocean Park, Disney Land<br /><br /><br /><br />
        JULY 2018 - SEPTEMBER 2018<BR />
        &#x20B1; STARTS AT 9,999

          <button class="readm" onclick="document.getElementById('id02').style.display='block'">READ MORE</button>
        </div>
      </div>
      <div id="id02" class="modal">

      <form class="modal-content animate" action="/action_page.php">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="images/Logo2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container" style="font-family: Arial, Helvetica, sans-serif;">

        <!--Insert Text Here-->

        </div>
      </form>
    </div><!-- Hongkong End Line -->
  </div>


<!-- Singapore Line -->
  <div class="imgcontainer">
        <img src="images/sing_flag.jpg" class="image1" style="height: 40%; width: 40%; display: inline-block; float: left">
        <div class="middle" style= " position: absolute;">
          <div class="text1">SINGAPORE FREE & EASY<br />
          Air Fare, Hotel, Transfers & More<br /><br /><br /><br />
         JULY 2018 - SEPTEMBER 2018<BR />
          &#x20B1; STARTS AT 12,999

            <button class="readm" onclick="document.getElementById('id03').style.display='block'">READ MORE</button>
          </div>
        </div>

        <div id="id03" class="modal">
          <form class="modal-content animate" action="/action_page.php">
           <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="images/Logo2.png" alt="Avatar" class="avatar">
          </div>

          <div class="container" style="font-family: Arial, Helvetica, sans-serif;">

          <!--Insert Text Here-->
          </div>

          </form>
          </div>
  </div>  <!-- Singapore End Line -->


<!-- Malaysian Line -->
  <div class="imgcontainer">
        <img src="images/mal_flag.jpg" class="image1" style="height: 40%; width: 40%; display: inline-block; float: left ">
        <div class="middle" style= " position: absolute;">
          <div class="text2">MALAYSIA FREE & EASY<br />
          Air Fare, Hotel, Transfers & More<br /><br /><br /><br />
          JULY 2018 - SEPTEMBER 2018<BR />
          &#x20B1; STARTS AT 10,999

            <button class="readm" onclick="document.getElementById('id04').style.display='block'">READ MORE</button>
          </div>
        </div>

        <div id="id04" class="modal">
          <form class="modal-content animate" action="/action_page.php">
           <div class="imgcontainer">
            <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="images/Logo2.png" alt="Avatar" class="avatar">
          </div>

          <div class="container" style="font-family: Arial, Helvetica, sans-serif;">

          <!--Insert Text Here-->
          </div>

          </form>
          </div>
  </div>  <!-- Malyasian End Line -->

<!-- Thailand Line -->
  <div class="imgcontainer">
        <img src="images/thai_flag.jpg" class="image1" style="height: 40%; width: 40%; display: inline-block; float: left ">
        <div class="middle" style= " position: absolute;">
          <div class="text2">BANGKOK FREE & EASY<br />
          Air Fare, Hotel, Transfers & More<br /><br /><br /><br />
         JULY 2018 - SEPTEMBER 2018<BR />
          &#x20B1; STARTS AT 11,999

            <button class="readm" onclick="document.getElementById('id05').style.display='block'">READ MORE</button>
          </div>
        </div>

        <div id="id05" class="modal">
          <form class="modal-content animate" action="/action_page.php">
           <div class="imgcontainer">
            <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="images/Logo2.png" alt="Avatar" class="avatar">
          </div>

          <div class="container" style="font-family: Arial, Helvetica, sans-serif;">

          <!--Insert Text Here-->
          </div>

          </form>
          </div>
  </div>  <!-- Thailand End Line -->


</div>
</center>
</div> <!-- country-align End div -->
</center>
</div> <!-- middle_one End div -->

<div class="middle_two"> <!-- Middle two start-->

<div class="middle_two_inside">

<!-- Fix margin for different screen resolution -->
<center>

  <div>
  <img src="images/ph.png" class="ph" >
  <img src="images/backpack.png" class="bp">
  </div>
  <div>
  <img src="images/globe.png" class="gb" >
  </div>
  <div class="package-alignleft">

    <p style="font-family: Bebas;">

      <br /><br /><br /><br /><br />
      LOCAL TRAVEL<br /><font color="#1976D2">&#x20B1; 1,399</font><br />PACKAGE</p>
  </div>

  <div class="package-aligncenter">
    <p style="font-family: Bebas;">
    <br /><br /><br /><br />
      TRAVEL TODAY<br /><font color="#1976D2">&#x20B1; 1,399</font></p>
    <button class="book" onclick="document.getElementById('id01').style.display='block'" style="right: 20px;">BOOK</button>
  </div>

  <div class="package-alignright">
    <p style="font-family: Bebas;">
      <br /><br /><br /><br />
      INTERNATIONAL<br />TRAVEL<br /><font color="#1976D2">&#x20B1; 10,000</font><br />PACKAGE </p>
  </div>
</center>
</div>
</div>

<footer>
  <div class="lefty">
    <!-- Logo Here! -->

  </div>

  <!-- Social Media Logo Here! -->


  <div class="end">
<div class="hey"><img src="images/bagel.png">

<!-- Social Media Logo Here! -->

  <div class="social-media-logo">
    <p><a href="https://www.facebook.com/iTravelHolidaysCompany/"><img src="images/fblogo.png" style="height: 3%; width: 3%;"></a></p>
    <p style="font-family: Bebas;">&copy ANTONIL & COSTELO</p>

    <p>
      <div id="nav2">

      <a href="#home" class="nav2" title="login" onclick="document.getElementById('id01').style.display='block'" target=""><font color="#1565C0">LOGIN</font></a>
      <a href="#home" class="nav2" title="Home" target="" style=" display: inline-block;"><font color="#1565C0">HOME</font></a>
      <a href="#packages" class="nav2" title="Packages" target="" style=" display: inline-block;"><font color="#1565C0">PACKAGES</font></a>
      <a href="#about_us" class="nav2" title="About" target="" style=" display: inline-block;"><font color="#1565C0">ABOUT</font></a>
      </div>
    </p>
    <img src="images/Logo2.png" class="logo3">
  </div>
  </div>



<br /><br /><br />
    <p><span id="book_now">BOOK NOW!</span><br />

    <span style="color:blue; font-family: Bebas;">CONTACT US </span><span style="color:white;  font-family: Bebas;">FOR YOUR </span><span style="color:red;  font-family: Bebas;">GREAT JOURNEYS AHEAD</span></p>
  </div>




</footer>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
