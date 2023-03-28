<?php

//Code By D'Coder!!!
   include_once 'lib/session.php';
   session::checkSession();
?>
<?php  require_once 'inc/header.php'; ?>
 <section class="container">
  <div class="main-wrapper">
  <div class="row">
   <div class="col-xl-4">
   <!-- Dynamic Sidebar -->
   <?php include_once 'inc/sidebar.php'; ?>
   <!-- Dynamic Sidebar -->
   </div>
   <div class="col-xl-8">
    <div class="right-panel mb-4">
     <div class="card">
      <div class="card-header">
       <strong><i class="fa fa-comments"></i> Welcome to D'Coder Chatbox</strong>
      </div>
      <div class="card-body">
       <h1 class="startup-txt display-6 text-center"><i class="fa fa-commenting"></i> Start Chatting</h1>
      </div>
     </div>
    </div>
   </div>
  </div>
  </div>
 </section>
<?php  require_once 'inc/footer.php'; ?>