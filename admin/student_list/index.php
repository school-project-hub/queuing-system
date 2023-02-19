<?php session_start(); ?>
<?php include '../../auth/admin.php'; ?>
<?php include '../topnav/topnav.php' ?>
<?php include '../topnav/header.php' ?>
<?php include '../sidenav/top.php' ?>
<!-- landing page -->
<main>
  <div class="col-md-12">
    <div class="card">
      <div class="card-title text-center p-4">
        <b class="">STUDENTS</b>
      </div>
      <div class="card-body">
        <div class="float-end p-3 mb-5">
          <button class="btn btn-success text-end mt-2" data-toggle="modal" type="button" data-target="#modal_add"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg> Register</button>
        </div>
        <?php
  //students
    $query_st = "SELECT id,  concat(fname,' ',mname,' ',lname,' ',suffix) as student, `sex`, `birthday`, `username`, `email`, `id_number`  FROM users where id_role = '3' ";																		
    $result_st = mysqli_query($conn, $query_st);	
    ?>

        <div class="folks border-warning p-2 rounded" style="border: 1px solid black; border-top:0px;">
                                            <table id="myTable" class="display">
                                            <thead>
                                              <tr>
                                                <th>Student ID No.</th>
                                                <th>Fullname</th>
                                                <th>Sex</th>
                                                <th>Birthday</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th class="text-end">Action</th>
                                              </tr>
                                            </thead>
                           
                                            <?php  
                                            while($res = mysqli_fetch_array($result_st)){
                                             
                                            ?>
                                            <tr>
                                              <td style="border-color: rgba(106, 106, 105, 0.11);">
                                                <i><?php echo $res['id_number'];?></i>
                                              </td>
                                              
                                              <td style="border-color: rgba(106, 106, 105, 0.11);">
                                                <i><?php echo $res['student'];?></i>
                                              </td>

                                              <td style="border-color: rgba(106, 106, 105, 0.11);">
                                                <i><?php echo $res['sex'];?></i>
                                              </td>

                                              <td style="border-color: rgba(106, 106, 105, 0.11);">
                                                <i><?php echo $res['birthday'];?></i>
                                              </td>

                                              <td style="border-color: rgba(106, 106, 105, 0.11);">
                                                <i><?php echo $res['username'];?></i>
                                              </td>

                                              <td style="border-color: rgba(106, 106, 105, 0.11);">
                                                <i><?php echo $res['email'];?></i>
                                              </td>

                                              <td class="text-end">
                                              <button class="btn btn-warning text-light mt-1" data-toggle="modal" type="button" data-target="#modal_edit<?php echo $res['id']?>">Edit</button>
																							<button class="btn btn-danger text-light mt-1" data-toggle="modal" type="button" data-target="#delete_modal<?php echo $res['id']?>">Delete</button>
																					 
																						</td>
                                            </tr>
                                            
                                            <?php
                                             include 'edit.php';
                                            	include 'delete.php';   
                                            
                                          }
                                             include 'add.php';
                                               
                                               ?>
                                            </table>
                                  </div>
      </div>
    </div>
  </div>
</main>
<?php include '../sidenav/bot.php' ?>
<?php include '../topnav/footer.php' ?>