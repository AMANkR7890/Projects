<?php
$conn = mysqli_connect('localhost','root','','aman');
$Sn=$_GET['col3'];
$qry= "DELETE FROM record WHERE DemandNo='$Sn'";
$data = $conn->query($qry);
if($data)
{
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="2; url=deleteddisp.php">
	<link rel="stylesheet" type="text/css" href="redalert.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div id="InfoBanner" style="">
  <span class="reversed reversedRight">
    <span>
      &#9888;
    </span>
  </span>
  <span class="reversed reversedLeft">
    Record Deleted SuccessFully!!
  </span> 
</div>
</body>
</html>



<?php
}

?>
