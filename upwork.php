<?php

$c1 = $_GET['col1'];
$c2 = $_GET['col2'];
$c3 = $_GET['col3'];
$c4 = $_GET['col4'];
$c5 = $_GET['col5'];
$c6 = $_GET['col6'];
$c7 = $_GET['col7'];
$c8 = $_GET['col8'];
$c9 = $_GET['col9'];
$c10 = $_GET['col10'];
$c11 = $_GET['col11'];
$c12 = $_GET['col12'];
$c13 = $_GET['col13'];
$c14 = $_GET['col14']; 
$c15 = $_GET['col15']; 
$c16 = $_GET['colphase']; 
$c17 = $_GET['colps']; 



$conn = mysqli_connect('localhost','root','','aman');

	
	$update="UPDATE record  SET FinancialYear='$c15', Sno='$c1' , WorkCenter='$c2',DemandNo='$c3',DemandDate='$c4',BudgetBookingDate='$c5',ControlNo='$c6',ControlDate='$c14',Description='$c7',DemandingOfficer='$c8',InventoryHolder='$c9',DemandAmount='$c10',SOAmount='$c11',PCDAPayment='$c12',CurrentStatus='$c13',Phase='$c16'  WHERE Sno='$c1' ";
	$data = mysqli_query($conn,$update);
	if($c17!=$c13)
	{
		$updatestatus="UPDATE record  SET PreviousStatus='$c17' WHERE Sno='$c1' ";
		$data1 = mysqli_query($conn,$updatestatus);
	}

	echo "<script>alert('Record Updated')</script>";
	
	?>
	<<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="refresh" content="0; url=homepage.html">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	</html>
	

