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
$c16='NULL';

$c17 = "Demand Initiated on: " . $c4;


$conn = mysqli_connect('localhost','root','','aman');

	
	$INSERT="INSERT INTO record values ('$c15','$c1','$c2','$c3','$c4','$c5','$c6','$c14','$c7','$c8','$c9','$c10','$c11','$c12','$c16','$c13','$c17')";
	$data = mysqli_query($conn,$INSERT);

	


?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="greenalert.css">
	<link rel="stylesheet" type="text/css" href="yellowalert.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
if($data)
{
?>
<div id="InfoBanner" style="">
  <span class="reversed reversedRight">
    <span>
      &#9888;
    </span>
  </span>
  <span class="reversed reversedLeft">
    Record Added SuccessFully
    <meta http-equiv="refresh" content="3; url=registration.php">
  </span> 
</div>

<?php  
}
else
{
?>

<div id="infobanner" style="">
  <span class="Reversed ReversedRight">
    <span>
      &#9888;
    </span>
  </span>
  <span class="Reversed ReversedLeft">
    Failed to Add Record! Check Serial no. and Demand no.
    
  </span> 
</div>


<?php
}
?>
</body>
</html>