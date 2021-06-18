<?php include 'config/config.php';

if (isset($_POST['login'])) {

  $email=$_POST['email'];
  $pass=$_POST['pwd'];
  $sql = "SELECT * FROM user WHERE emailUser='$email' AND passwordUser ='$pass'";
  $result = mysqli_query($con, $sql);
  if (!$row = mysqli_fetch_assoc($result)) {
    alert("Your username or password is incorrect!");
  } else {

    $_SESSION['login'] = true;

    header("location:./agenda/agenda.php");
  }
}

include 'components/header.php'; 
include '../starter/components/login.php'
?>




<script src="assets/js/script.js">
</script>
</body>
</html>