<!DOCTYPE html>
<html>
  <head>
    <title>All Records</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    
    <link href="main2.css" rel="stylesheet" />
  </head>
  <body>
     <header class="header">
    <h1 class="logo"><a href="Homepage.html" onclick="javascript:window.close();opener.window.focus();"><img src=" " alt=" "></a></h1>
    <h1 align="center" style="color: white; margin-right: 320px;" >All Records</h1>
    <form action="" method="GET">
      <ul class="main-nav">
          
          
          
      </ul>
    
  </header>
          

 
<br>

 <table  class="tbl" > 
 
    
     <thead style="color: white;">

    <tr>
         <th>Financial Year</th>
         <th>Serial Number</th>
         <th>Work Center</th>
         <th>Demand Number</th>
         <th>Demand Date</th>
         <th>Budget Booking Date</th>
         <th>Control Number</th>
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

<?php

$conn = mysqli_connect('localhost','root','','aman');

$qry= "SELECT * FROM record ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   
  <tbody >
      <tr class="bdy">
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
     
     
  
<?php
  }
?>
</table>

</body>
</html>