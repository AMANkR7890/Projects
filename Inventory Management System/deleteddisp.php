<!DOCTYPE html>
<html>
<head>
  
	
	<link rel="stylesheet" href="del.css">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Deleting Records</title>
</head>

<body>
    <header class="header">
    <h1 class="logo"><a href="Homepage.html" onclick="javascript:window.close();opener.window.focus();"><img src=" " alt='logo'></a></h1>
    <h1 align="center" style="color: white; margin-right: 100px;">Delete Record</h1>
    <form action="" method="GET">
      <ul class="main-nav">
          
          
          <li><input type="text" name="search" placeholder="Demand No."></li>
        <li><button class="button" type="submit" ><img src="search.png" alt='Search' style="height: 30px;"></button></li>

      </ul>
    </form>

  </header> 
  <?php
$conn = mysqli_connect('localhost','root','','aman');
if( isset($_GET['search'])) 
{
      $dn = $_GET['search']; 
            

$qry= "SELECT * FROM record WHERE DemandNo='$dn'";
$data = $conn->query($qry);
if(mysqli_num_rows($data)>0) 
{
$row=$data->fetch_assoc();
$x=$row['CurrentStatus'];
?>
    
    
     <form action='delete.php' method="GET">
      <br>
    <table border="1px"> 
 
    
               <thead>

              <tr>
                   <th>Financial Year</th>
                   <th>Sno</th>
                   <th>Work Center</th>
                   <th>Demand No</th>
                   <th>Demand Date</th>
                   <th>Budget Booking Date</th>
                   <th>Control No</th>
                   <th>Control Date</th>
                   <th>Description</th>
                   <th>Demanding Officer</th>
                   <th>Inventory Holder</th>
                   <th>Demand Amount</th>
                   <th>SO Amount</th>
                   <th>PCDA Payment</th>
                   <th>Previous Status</th>
                   <th>Current Status</th>
                   <th>Phase</th>
              </tr> 
           </thead> 
    <tbody>
      <tr>
        <td><?php echo $row['FinancialYear']; ?></td>
         <td><?php echo $row['Sno']; ?></td>
         <td><?php echo $row['WorkCenter']; ?></td>
         <td><?php echo $row['DemandNo']; ?></td>
         <td><?php echo $row['DemandDate']; ?></td>
         <td><?php echo $row['BudgetBookingDate']; ?></td>
         <td><?php echo $row['ControlNo']; ?></td>
         <td><?php echo $row['ControlDate']; ?></td>
         <td><?php echo $row['Description']; ?></td>
         <td><?php echo $row['DemandingOfficer']; ?></td>
         <td><?php echo $row['InventoryHolder']; ?></td>
         <td><?php echo $row['DemandAmount']; ?></td>
         <td><?php echo $row['SOAmount']; ?></td>
         <td><?php echo $row['PCDAPayment']; ?></td>
         <td><?php echo $row['PreviousStatus']; ?></td>
         <td><?php echo $row['CurrentStatus']; ?></td>
         <td><?php echo $row['Phase']; ?></td>
  </tr>
  </tbody>
 </table>
 <br>    
     <input type="hidden" name="col3" value="<?php echo $row['DemandNo'];   ?>">
     
     <button type="submit" class="button9" onclick="confirm('Confirm to Delete')">Delete</button>    

    </form>
<?php
}
else
{
  echo '<script>alert("Please Enter Correct Demand Number!")</script>';
}

}
else
{
  ?>
  
  <h2 align="center">Please Enter Demand Number above to Delete Record</h2>
<?php
}
?>	
	
	


  	
</form>
</body>
</html>







