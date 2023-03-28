<?php  require_once 'inc/header.php'; ?>
 <section class="container">
  <div class="row">
   <div class="col-xl-4 col-sm-12 col-md-6 offset-md-4">
    <div class="signup-card">
    <h3 class="display-6 text-center py-4">Sign Up</h3>
    <?php 
    include('dbh.php');
      if($_SERVER['REQUEST_METHOD'] == "POST"){

        $uname = $_POST['username'];
        $mail  = $_POST['email'];
        $pass  = $_POST['pass'];
      
      
      $permited  = array('jpg', 'jpeg', 'png', 'gif');
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_temp = $_FILES['image']['tmp_name'];
      
      $div = explode('.', $file_name);
      $file_ext = strtolower(end($div));
      $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
      $uploaded_image = "uploads/".$unique_image;
      
      
      if($uname == ""){
        echo "<div class='alert alert-danger'>Enter Name</div>";
      }else{
        if($mail == ""){
          echo "<div class='alert alert-danger'>Enter Email</div>";
      }else{
        if(filter_var($mail, FILTER_VALIDATE_EMAIL) == false){
          echo "<div class='alert alert-danger'>Invalid Email!</div>";
          }else{
            if($pass==""){
              echo "<div class='alert alert-danger'>Enter Password</div>";
            }else{
              if(strlen($pass) < 6){
                echo "<div class='alert alert-danger'>Enter Minimum 6 Character Password</div>";
              }else{
      
                if(empty($file_name)) {
                  echo "<div class='alert alert-danger'>Choose Image</div>";
                  }else{
                
                  if ($file_size >1048567) {
                    echo "<div class='alert alert-danger'>Image Should Be Less Than 1 MB</div>";
                    }else{
                
                    if (in_array($file_ext, $permited) === false) {
                      echo "<div class='alert alert-danger'>Only ".implode(', ', $permited)." are allowed</div>";
                      }else{
        
                    $chk = "SELECT *FROM user WHERE email='$mail'";
                    $query = mysqli_query($conn,$chk);
                    $num = mysqli_num_rows($query);
                    if($num > 0){
                      echo "<div class='alert alert-danger'>User Exists!</div>";        
                    }else{ 

                    move_uploaded_file($file_temp, $uploaded_image);

                    $unique_id = rand(time(), 10000); 
                    $status = "Offline";
                    $crypt = password_hash($pass, PASSWORD_DEFAULT);  

                    $query = "INSERT INTO user(unique_id, img, username, email, pass, status)VALUES('$unique_id', '$uploaded_image', '$uname', '$mail', '$crypt', '$status')";
                    $res = $db->insert($query);
                    if($res){
                      echo "<script>alert('Account Created!');</script>";
                    }else{
                        echo "Error!";
                  }
                 }
                }
               }
              }
             }
            }
           }
          }
        } 
      }
      ?>
     <form method="POST" enctype="multipart/form-data">
      <input type="text" name="username" class="form-control mb-3" placeholder="User Name">
      <input type="text" name="email" class="form-control mb-3" placeholder="Email">
      <input type="password" name="pass" class="form-control mb-3" placeholder="Password">
      <div class="mb-3">
        <input class="form-control" type="file" name="image">
     </div>
     <button class="btn btn-sm btn-primary">Sign Up</button>
     <a href="login.php" class="btn btn-sm btn-info text-light">Log In</a>
     </form>
    </div>
   </div>
  </div>
 </section>
<?php  require_once 'inc/footer.php'; ?>
