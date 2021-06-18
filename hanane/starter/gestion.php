<?php 
    include './components/header.php';
    include './components/navbar.php';
	include('./config/config.php');	
	if(isset($_POST['sup']))
	{
		$id=$_POST['upd'];
		$dat=$_POST['dd'];
		$d_l=explode('-',$dat);
		$mois=$d_l[1];
		$anne=$d_l[0];
		$lien="&annee=".$anne."&mois=".$mois;
		$l=$_POST['lieu'];
		$e=$_POST['event'];
		if($_POST['sup']==1)
			$sql="delete from agenda where id=$id";
		else
			$sql="update agenda set lieu='$l' , event='$e' where id=$id";
		mysqli_query($con,$sql);
		header("location:../agenda.php?admin&mod$lien");
	}
	else if(isset($_POST['lieu']))
	{
		$dat=$_POST['dd'];
		$l=$_POST['lieu'];
		$e=$_POST['event'];
		$d_l=explode('-',$dat);
		$mois=$d_l[1];
		$anne=$d_l[0];
		$lien="&annee=".$anne."&mois=".$mois;
		$sql="insert into agenda (dt,lieu,event) values('$dat','$l','$e')";
		mysqli_query($con,$sql);
		echo $sql;
		header("location:../agenda.php?admin&add$lien");
	}
	else
	{
		$d=$_GET['dt'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Details de  la date : <?php echo $d;?></title>
	</head>
	<body>
		<h1 class="text-white" style="margin-top:120px">Gestion de la date : <?php echo $d;?></h1>
		<?php
			$sql="select * from agenda where dt='$d'";
			$req=mysqli_query($con,$sql);
			if(mysqli_num_rows($req)==1)
				while($data=mysqli_fetch_array($req))
				{
					$mod=1;
					$id=$data['id'];
					$loc=$data['lieu'];
					$eve=$data['event'];
				}
			else
			{
				$mod=0;
				$loc="";
				$eve="";
			}
		?>
		<div class="col-sm-3"></div>
		<form name="gr" class="col-sm-6" action="gestion.php" style="background-color:#FDD615; " method="post"><input type='hidden' id='dd' name='dd' value='<?php echo $d; ?>'>
			<h2 class="text-white">Evenement d'aujourdui : </h2>
			<table >
				<tr height="50px"><td width="150px"><strong>Evenement</strong></td><td><input type="text" name="lieu" value="<?php echo $loc;?>"/></td></tr>
				<tr height="50px"><td><strong>Lieu</strong></td><td><input type="text" name="event" value="<?php echo $eve;?>"/></td></tr>
				<tr height="50px">
					<?php
						if($mod==0)
							echo "<td colspan='2'><input type='submit' value='Ajouter'></td>";
						else
						{
							echo "<td colspan='2'><input type='submit' value='Modifier'>&nbsp;&nbsp;<input type='button' value='Supprimer' onclick='supp()'>";
							echo "<input type='hidden' id='sup' name='sup' value='0'><input type='hidden' name='upd' value='$id'></td>";
						}
					?>
        		</tr>
			</table>
		</form>
		<div class="col-sm-2"></div>
	</body>
</html>
<?php
}
?>
<script type="text/javascript">
function supp()
{
	if(confirm("Etes vous sur de supprimer cette Date")==true)
	{
		document.getElementById('sup').value=1;
		gr.submit();
	}
}
</script>


<?php 
    include './components/footer.php';
?>