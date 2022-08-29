<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="phase.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Phase View</title>
</head>
<body id="ftr">
	<header class="header">
    <h1 class="logo"><a href="Homepage.html" onclick="javascript:window.close();opener.window.focus();"><img href="Homepage.html" src="" alt="logo"></a></h1>
    <h1 align="center" style="color: white; margin-right: 280px;">View By Phase</h1>
      <ul class="main-nav">
          
       </ul>

  </header>

  <br>

 <table align="center" border="1px" style="width:95% "> 
 		<thead style="height: 70px;color: white;">
		    <tr>
		         <th>Phase</th>
		         <th>Quantity</th>
		         <th>Demand Amount (in Lakhs)</th>
		    </tr> 
 		</thead>  
 		<tbody >
 			<tr>
 					<td>Demand Stage</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT * FROM record WHERE Phase LIKE '%Demand%'  ";
  					$result = $conn->query($qry);
  					$rowcount1 = mysqli_num_rows( $result );
  					echo "$rowcount1";
  				?>

 					</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT SUM(DemandAmount) FROM record WHERE Phase LIKE '%Demand%'  ";
  					$result = $conn->query($qry);
  					$row=$result->fetch_assoc();
  					$s1=$row['SUM(DemandAmount)'];
  					echo $row['SUM(DemandAmount)'];
  			  ?>
  			  </td>
  		</tr>
  	</tbody>
  	<tbody>
  		
  		<tr>
 					<td>RFP Stage</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT * FROM record WHERE Phase LIKE '%RFP%'  ";
  					$result = $conn->query($qry);
  					$rowcount2 = mysqli_num_rows( $result );
  					echo "$rowcount2";
  				?>

 					</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT SUM(DemandAmount) FROM record WHERE Phase LIKE '%RFP%'  ";
  					$result = $conn->query($qry);
  					$row=$result->fetch_assoc();
  					$s2=$row['SUM(DemandAmount)'];
  					echo $row['SUM(DemandAmount)'];
  			  ?>
  			  </td>
  		</tr>
  	
  	</tbody>
  	<tbody>
  		<tr>
 					<td>SO to be Placed</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT * FROM record WHERE Phase LIKE '%SO to be placed%'  ";
  					$result = $conn->query($qry);
  					$rowcount3 = mysqli_num_rows( $result );
  					echo "$rowcount3";
  				?>

 					</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT SUM(DemandAmount) FROM record WHERE Phase LIKE '%SO to be placed%'  ";
  					$result = $conn->query($qry);
  					$row=$result->fetch_assoc();
  					$s3=$row['SUM(DemandAmount)'];
  					echo $row['SUM(DemandAmount)'];
  			  ?>
  			  </td>
  		</tr>
  	</tbody>
  	<tbody>
  		<tr>
 					<td>SO Placed</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT * FROM record WHERE Phase LIKE '%SO placed%'  ";
  					$result = $conn->query($qry);
  					$rowcount4 = mysqli_num_rows( $result );
  					echo "$rowcount4";
  				?>

 					</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT SUM(DemandAmount) FROM record WHERE Phase LIKE '%SO placed%'  ";
  					$result = $conn->query($qry);
  					$row=$result->fetch_assoc();
  					$s4=$row['SUM(DemandAmount)'];
  					echo $row['SUM(DemandAmount)'];
  			  ?>
  			  </td>
  		</tr>
  	</tbody>
  	<tbody>
  		<tr>
 					<td>Payment Stage</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT * FROM record WHERE Phase LIKE '%Payment%'  ";
  					$result = $conn->query($qry);
  					$rowcount5 = mysqli_num_rows( $result );
  					echo "$rowcount5";
  				?>

 					</td>
 					<td> 
 					<?php 
 						$conn = mysqli_connect('localhost','root','','aman');
 						$qry= "SELECT SUM(DemandAmount) FROM record WHERE Phase LIKE '%Payment%'  ";
  					$result = $conn->query($qry);
  					$row=$result->fetch_assoc();
  					$s5=$row['SUM(DemandAmount)'];
  					echo $row['SUM(DemandAmount)'];
  			  ?>
  			  </td>
  		</tr>


  	</tbody> 
  	<thead>
  		<tr >
  			<td bgcolor="white">
  			</td>
  			<td bgcolor="#F94A4A">
  				<label class="label1">Total Quantity:
  	<?php 
  	  $z=$rowcount1+$rowcount2+$rowcount3+$rowcount4+$rowcount5;
			echo "$z";
		?></label>

		
  			</td>
  			<td bgcolor="#F94A4A">
  				<label class="label2">Total Amount:
  	<?php 
  	  $y=$s1+$s2+$s3+$s4+$s5;
			echo "$y";
		?></label>
  			</td>
  		</tr>
  	
</thead>
  </table>  
  
 
</body>
</html>