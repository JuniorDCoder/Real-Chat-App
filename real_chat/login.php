<?php 
 include_once 'lib/session.php';
 session::checkLogin();
?>
<?php  require_once 'inc/header.php'; ?>
 <section class="container">
  <div class="row">
   <div class="col-xl-4 col-sm-12 col-md-6 offset-md-4">
    <div class="signup-card">
    <h3 class="display-6 text-center py-4">User Login</h3>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $user = $_POST['email'];
            $pass = $_POST['pass'];
            $db->login($user, $pass);
     }
    ?>
     <form method="POST">
      <input name="email" type="text" class="form-control mb-3" placeholder="Email" required>
      <input name="pass" type="password" class="form-control mb-3" placeholder="Password" required>
     <button class="btn btn-sm btn-info text-light">Login </button>
     <a href="signup.php" class="btn btn-sm btn-primary">Sign Up</a>
     </form>
    </div>
   </div>
  </div>
 </section>
<?php  require_once 'inc/footer.php'; ?>
