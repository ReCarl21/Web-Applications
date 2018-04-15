<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<header>
<nav>
  <div>
    <?php
      if(isset($_SESSION['u_id'])){
        echo '<form action="includes/logout.inc.php" method="post">
              <button type="submit" name="submit">log out</button>
              </form>';
      } else {
        echo '<form action="includes/login.inc.php" method="post">
              <table>
              <tr>
              <td><input type="emails" placeholder="username@example.com" name="username" maxlength="40" size="18" required/></td>
              </tr>
              <tr>
              <td><input type="password" name="password" placeholder="password" maxlength="40" size="18" required /></td>
              </tr>

              <tr>
              <td align="right"><button type="submit" name="submit">Login</button></td>
              <!-- Can be button -->
              </tr>
              </table>
              </form>
              <a href="signup.php">Sign up</a>';
      }
     ?>


  </div>
</nav>
</header>

<section>
<div>
  <h2>Home</h2>
</div>
</section>

</body>
</html>
