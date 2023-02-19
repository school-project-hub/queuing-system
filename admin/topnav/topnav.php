<?php require '../../config/index.php'; ?>
<?php
  $query_user_app =" SELECT concat(fname,' ',mname,' ',lname,' ',`suffix`) as user_app from users where id = '".$_SESSION['id_user']."'  ";																		
  $result_user_app = mysqli_query($conn, $query_user_app);
  $user_app = mysqli_fetch_assoc($result_user_app);
  $_SESSION['user_app'] = $user_app['user_app']; 
 ?>
 
<nav class="nav navbar bg-primary" style="height:10vh;">
 <div class="col-md-12 p-2">
 <a href=""class="text-light" style="text-decoration: none;" >
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
   <?php echo $_SESSION['user_app']; ?> </a> 
 <div class="" style="float:right;">
 <form action="" method="post">
  <button class="btn btn-danger dropbtn" name="logout">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
  <path d="M7.5 1v7h1V1h-1z"/>
  <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
</svg>
    Logout</button>
    </form>
</div>
 </div>
</nav>

<?php include '../../auth/admin.php'; ?>