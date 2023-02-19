<?php
include '../../config/index.php';

if(isset($_POST['add'])){
  $idnumber = $_POST['idnumber'];
  $inputfname = $_POST['inputfname'];
  $inputlname = $_POST['inputlname'];
  $inputmname = $_POST['inputmname'];
  $suffix = $_POST['suffix'];
  $sex = $_POST['sex'];
  $inputbirth = $_POST['inputbirth'];

  $email = $_POST['email'];
  $username = $_POST['username'];
  $pw = $_POST['pw'];
  
   $pwd = $_POST['pwd'];
   $pwd_descr = $_POST['pwd_descr'];
  
  $sql = " INSERT INTO `users`(`id_role`, `id_number`, `pwd`, `pwd_description`, `fname`, `mname`, `lname`, `suffix`, `sex`, `birthday`, `username`, `email`, `pw`)
   VALUES ('3', '$idnumber', '$pwd', '$pwd_descr', '$inputfname', '$inputmname', '$inputlname', '$suffix', '$sex', '$inputbirth', '$username', '$email', '$pw')  ";
if ($conn->query($sql) === TRUE) {
 
  echo '
  <script>
swal ( "Registered" ,  "" ,  "success" )
</script>
       '; 
 
} else {
      echo '
  <script>
swal ( "Incomplete!" ,  "Please try again later or contact system administrator" ,  "error" )
</script>
       ';  
}
}

if(isset($_POST['edit'])){

  $id = $_POST['id'];
  $idnumber = $_POST['idnumber'];
  $inputfname = $_POST['inputfname'];
  $inputlname = $_POST['inputlname'];
  $inputmname = $_POST['inputmname'];
  $suffix = $_POST['suffix'];
  $sex = $_POST['sex'];
  $inputbirth = $_POST['inputbirth'];

  $email = $_POST['email'];
  $username = $_POST['username'];
  $pw = $_POST['pw'];
  
   $pwd = $_POST['pwd'];
   $pwd_descr = $_POST['pwd_descr'];
  
  $sql = "UPDATE `users` SET `id_number`='$idnumber',`pwd`='$pw',`pwd_description`='$pwd_descr',`fname`='$inputfname',`mname`='$inputmname',`lname`='$inputlname',`suffix`='$suffix',`sex`='$sex',`birthday`='$inputbirth', `username` = '$username', `email` = '$email', `pw`='$pw' WHERE id = '$id'  ";
if ($conn->query($sql) === TRUE) {
 
  echo '
  <script>
swal ( "Updated" ,  "Student information updated." ,  "success" )
</script>
       '; 
} else {
      echo '
  <script>
swal ( "Incomplete!" ,  "Update Failed. Please contact System Administrator." ,  "error" )
</script>
       '; 
}
}

if(isset($_POST['delete'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM users WHERE id= '$id' ";

if ($conn->query($sql) === TRUE) {
  echo '
  <script>
swal ( "Deleted" ,  "Record successfully deleted." ,  "success" )
</script>
       '; 

} else {
  echo '
  <script>
swal ( "Delete" ,  "Record deletion failed." ,  "Error" )
</script>
       ';  

}
$conn->close();
}
?>