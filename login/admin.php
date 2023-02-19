<?php session_start(); ?>
<?php include 'topnav/topnav.php' ?>
<?php include 'topnav/header.php' ?>
 <div class="col-md-12">
  <div class="col-md-6 p-4">
    <div class="card col-md-10 mt-5">
      <div class="card-body">
        <div class="card-title text-center">
          <b>ADMIN</b>
          <hr>
        </div>
        <form action="" method="post">
         <div class="form-floating mb-3 ">
		<input class="form-control" id="inputusername" type="text" placeholder="Username" name="inputusername" required/>
		<label for="inputusername" class="text-success">Username</label>
</div>
<div class="form-floating mb-3 ">
		<input class="form-control" id="inputPassword" type="password" placeholder="Password" name="inputpw" required/>
		<label for="inputPassword" class="text-success">Password</label>
</div>

<button class="btn btn-primary" name="admin-login">Login</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6">

  </div>
</div>
<?php include 'topnav/footer.php' ?>
<?php require 'action.php'; ?>