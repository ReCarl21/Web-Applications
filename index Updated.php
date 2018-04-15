<?php
  include_once 'header.php';
?>

<section>
<div>
  <h2>Home</h2>
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
