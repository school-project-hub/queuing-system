<div class="modal fade" id="modal_add" aria-hidden="true">
  <div class="modal-dialog modal-xl " role="document">
    <div class="modal-content">
      <form method="POST" action="">
        
        <div class="modal-body">
         
                                        <div class="row">
                                        <div class="col-md-6">
                                          <p class="text-secondary"><b>STUDENT INFORMATION</b></p>

                                          <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="idnumber" type="text" placeholder="Student ID. No." name="idnumber" required/>
                                            <label for="idnumber">Student ID No.</label>
                                          </div>

                                          <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="inputfname" type="text" placeholder="FIRST NAME" name="inputfname" required/>
                                            <label for="inputfname">First name</label>
                                          </div>

                                           <b class="text-danger">&nbsp;</b>
                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="inputmname" type="text" placeholder="MIDDLE NAME" name="inputmname"/>
                                            <label for="inputmname">Middle  name (<i class="text-secondary">if any</i>)</label>
                                          </div>

                                          <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="inputlname" type="text" placeholder="LAST NAME" name="inputlname" required/>
                                            <label for="inputlname">Last name</label>
                                          </div>

                                          <b class="text-danger">&nbsp;</b>
                                          <div class="form-floating mb-3">
                                            <select name="suffix" id="" class="form-control">
                                              <option value=" ">-none-</option>
                                              <option value="Jr.">Jr.</option>
                                              <option value="Sr.">Sr.</option>
                                              <option value="I">I</option>
                                              <option value="II">II</option>
                                              <option value="III">III</option>
                                            </select>
                                              <label for="inputsuffix" class="text-primary">Suffix</label>
                                          </div>

                                          <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">
																						<select class="form-control" name="sex" id="sex">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            </select>
                                            <label for="sex">Sex</label>
																						</div>

                                          <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="inputbirth" type="date" placeholder="Birthday" name="inputbirth" required/>
                                            <label for="inputbirth">Birthday</label>
                                          </div>

                                          <!-- <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">
                                          <select name="inputcivil" id="civil" class="form-control">
                                      
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Separated">Separated</option>
                                          </select>
                                        <label for="civil">Civil status</label>
                                      </div> -->

                                          <!-- <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="inputcontact" type="number" placeholder="11 digit of cell number <i>(example. 0912*******)</i>" name="inputcontact" required/>
                                            <label for="inputcontact">11 digit of cell number <i>(example. 0912*******)</i></label>
                                          </div> -->

                                        </div>
                                        <div class="col-md-6">
                              
                                         <p><b class="text-secondary">Login details</b></p>

                                            <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="email" type="email" placeholder="Email" name="email" required/>
                                            <label for="email">Email</label>
                                          </div>

                                          <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="username" type="text" placeholder="Username" name="username" required/>
                                            <label for="username">Username</label>
                                          </div>

                                          <b class="text-danger">*</b>
                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="password" type="text" placeholder="Password" name="pw" required/>
                                            <label for="password">Password</label>
                                          </div>

                                           <p class="mt-5"><b class="text-secondary">Other info.</b></p>

                                           <div class="form-floating mb-3">
                                          <select name="pwd" id="pwd" class="form-control">
                                      
                                            <option value="NO">NO</option>
                                            <option value="YES">YES</option>
                                            
                                          </select>
                                        <label for="pwd">Person with disability</label>
                                      </div> 

                                          <div class="form-floating mb-3">							
                                            <input class="form-control" id="pwd_descr" type="text" placeholder="PWD Description" name="pwd_descr" />
                                            <label for="pwd_descr">PWD Description</label>
                                          </div>
                              
                                        </div>
                                        </div>
       <?php include_once 'action.php'; ?>
        <div style="clear:both;"></div>
        <div class="modal-footer">
         
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit" name="add"> Submit</button>
        </div>
        </div>

      </form>
    </div>
  </div>
</div>
<style>

</style>