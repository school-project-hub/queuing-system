<?php
if(isset($_POST["student-login"])){
  include "../config/index.php";
  	$username = $_POST['inputusername'];
    $pw = $_POST['inputpw'];
                    
    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username' AND `pw` = '$pw' AND `id_role` = '3' ");
    $rows = mysqli_num_rows($query);
    $fetch = mysqli_fetch_array($query);
       if($rows > 0){
          $_SESSION['id_user'] = $fetch['id'];
          $_SESSION['id_role'] = $fetch['id_role'];
          echo '
            <script type="text/javascript">
            swal({
              title: "Login Success!",
              text: "Loading ...",
              type: "success",
              timer: 2000,
              showConfirmButton: false
            }, function(){
            window.location.href = "../student/index.php";
            });
          </script>
       ';
                    }
                     else{
                        echo '<script>';
                        echo 'swal("Incorrect Credentials!", "Incorrect username or password.", "error");';
                        echo '</script>';                        
                        }
                    }
if(isset($_POST["admin-login"])){
  include "../config/index.php";
  	$username = $_POST['inputusername'];
    $pw = $_POST['inputpw'];
                    
    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username' AND `pw` = '$pw' AND `id_role` = '1' ");
    $rows = mysqli_num_rows($query);
    $fetch = mysqli_fetch_array($query);
       if($rows > 0){
          $_SESSION['id_user'] = $fetch['id'];
          $_SESSION['id_role'] = $fetch['id_role'];
          echo '
            <script type="text/javascript">
            swal({
              title: "Login Success!",
              text: "Loading ...",
              type: "success",
              timer: 2000,
              showConfirmButton: false
            }, function(){
            window.location.href = "../admin/queuing/index.php";
            });
          </script>
       ';
                    }
                     else{
                        echo '<script>';
                        echo 'swal("Incorrect Credentials!", "Incorrect username or password.", "error");';
                        echo '</script>';                        
                        }
                    }
?> 