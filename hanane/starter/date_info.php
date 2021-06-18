<?php
	include('./config/config.php');	
	include './components/header.php';
    include './components/navbar.php';
	$d=$_GET['dt'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Details de  la date : <?php echo $d;?></title>
	</head>
	<body>
		<?php
			$sql="select * from agenda where dt='$d'";
			$req=mysqli_query($con,$sql);
			if(mysqli_num_rows($req)==0)
				echo "Aucune information pour cette date";
			else
				while($data=mysqli_fetch_array($req))
				{
		?>
		<div class="col-sm-3"></div>
		<form class="col-sm-6" style="background-color:#FDD615; margin-top:170px"> 
			<h1 class="text-white" style="">Detail de la date : <?php echo $d;?></h1>
			<table >
				<tr height="50px"><td width="150px"><strong>Evenement</strong></td><td><?php echo $data['lieu'];?></td></tr>
				<tr height="50px"><td><strong>Lieu</strong></td><td><?php echo $data['event'];?></td></tr>
			</table>
		</form>
		<?php
				}
		?>


		<?php 
			include './components/footer.php';
		?>
	</body>
</html>



