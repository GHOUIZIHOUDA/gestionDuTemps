<?php
 
include './components/navbar.php';
include 'config/config.php';
include 'components/header.php';
if (isset($_POST["submit"])) {
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $email=$_POST['email'];
  $passeword=$_POST['passeword'];
  $sql="INSERT INTO user (`nomUser`,`prenomUser`,`emailUser`,`passewordUser`)
  VALUES ('$fname','$lname','$email','$passeword')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header("location:components/index.php");
  }
  else {
    echo $sql ;
  }
}

?>
<div class="col-sm-3"></div>
<form action="index.php" class="form-horizontal col-sm-6" id="" method="POST" style="background-color:#FDD615; margin-top:80px; border-radius:2%">
  <h2 class="text-center font-weight-bold" style="background-color: #FDD615; color:#000000; border-radius:4%">Formulaire d'inscription</h2>
  <label class="control-label" for="firstname" style="margin-top:30px" required>Firstname:</label>
  <input type="text" class="form-control" id="pwd" placeholder="Enter your first name" name="firstname" >
  <label class="control-label" for="lastname" >Lastname:</label>
  <input type="text" class="form-control" id="pwd" placeholder="Enter your last name" name="lastname" >
  <label class="control-label" for="email" >Email:</label>
  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
  <label class="control-label" for="adress" >Passeword:</label>
  <input type="passeword" class="form-control" id="passeword" placeholder="Enter passeword" name="passeword" >
  <div class="modal-footer">
    <input type="submit" value="submit" name="submit" class="btn-dark">
  </div> 
</form>


<?php 
    include './components/footer.php';
?>