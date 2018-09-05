<?php include '../lib/session.php';
session::checkSession();
?>
<?php include '../config/config.php';?>
<?php include '../lib/Database.php';?>

<?php 
$db = new Database();
?>
<?php
if (!isset($_GET['delpage']) || $_GET['delpage'] == NULL){
	echo "<script>window.location = 'index.php';</script>";
	//header("Location:catlist.php");
}else {
	$pageid = $_GET['delpage'];	
	$delquery = "delete from tbl_page where id = '$pageid'";
	$delData = $db->delete($delquery);
	if($delData){
		echo "<script>alert('Page Delete Succesfully.');</script>";
		echo "<script>window.location = 'index.php';</script>"; 
	}else{
		echo "<script>alert('Page Not Delete Succesfully.');</script>";
		echo "<script>window.location = 'index.php';</script>"; 
	}
	
}
?>