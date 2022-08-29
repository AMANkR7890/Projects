
<!DOCTYPE html>
<html>
  <head>
    
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    
    <link href="main2.css" rel="stylesheet" />
  </head>
  <body>
     <header class="header">
    <h1 class="logo"><a href="Homepage.html" onclick="javascript:window.close();opener.window.focus();"><img src=" " alt="logo"></a></h1>
    <h1 style="color: white;" >Search Results</h1>
      <ul class="main-nav">
          
          <form action="" method="GET">
        <li><input type="text" class="search1" list="fyear" name="fy" placeholder="Financial Year"><input type="text" class="search2" name="ctgory" list="category"  placeholder="Category" ></li>
        <li><input type="text" class="search3" name="data" placeholder="Enter Values Here"></li>
        <li><button class="button" type="submit" ><img src="search.png" class="searchbutton"> </button>
        <datalist id="category">
                  <option>Sno</option>
                  <option>WorkCenter</option>
                  <option>DemandNo</option>
                  <option>DemandDate</option>
                  <option>BudgetBookingDate</option>
                  <option>ControlNo</option>
                  <option>ControlDate</option>
                  <option>Description</option>
                  <option>DemandingOfficer</option>
                  <option>InventoryHolder</option>
                  <option>DemandAmount</option>
                  <option>SOAmount</option>
                  <option>PCDAPayment</option>
                  <option>PreviousStatus</option>
                  <option>CurrentStatus</option>
                  <option>Phase</option>

       
      </datalist>
        

      <datalist id="fyear">
        <option value="2020-2021"></option>
        <option value="2021-2022"></option>
        <option value="2022-2023"></option>
        <option value="2023-2024"></option>
        <option value="2024-2025"></option>
        <option value="2025-2026"></option>
        <option value="2026-2027"></option>
        <option value="2027-2028"></option>
        <option value="2028-2029"></option>
        
       
      </datalist>
      
</form>

      </ul>
  </header> 

 

 <table class="tbl"> 
 
    
          <br>
      <tr><label>FINANCIAL YEAR&nbsp;&nbsp;&nbsp;
        <?php 
            $c3 = ''; 
            if( isset( $_GET['fy'])) {
                $c3 = $_GET['fy']; 
            }  
            echo $c3;  
        ?>
              
          </label>
      </tr>
     <br>
     <br>
     <thead style="color: white;">

    <tr>
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
$c3 = ''; 
if( isset( $_GET['fy'])) {
    $c3 = $_GET['fy']; 
} 
$c1 = ''; 
if( isset( $_GET['data'])) {
    $c1 = $_GET['data']; 
} 
$c2 = ''; 
if( isset( $_GET['ctgory'])) {
  $c2 = $_GET['ctgory']; 
} 



$conn = mysqli_connect('localhost','root','','aman');
if($c3!='' AND ($c2=='' OR $c1==''))
{
$qry= "SELECT * FROM record WHERE FinancialYear='$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   
  <tbody>
      <tr class="bdy">
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
}
if ($c2=='WorkCenter')
{
  $qry= "SELECT * FROM record WHERE WorkCenter = '$c1' AND FinancialYear='$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   
  <tbody>
      <tr>
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
}

else if ($c2=='Sno')
{
  $qry= "SELECT * FROM record WHERE Sno = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='DemandNo')
{
  $qry= "SELECT * FROM record WHERE DemandNo = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='DemandDate')
{
  $qry= "SELECT * FROM record WHERE DemandDate = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='BudgetBookingDate')
{
  $qry= "SELECT * FROM record WHERE BudgetBookingDate = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='ControlNo')
{
  $qry= "SELECT * FROM record WHERE ControlNo = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='Description')
{
  $qry= "SELECT * FROM record WHERE Description LIKE '%$c1%' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='DemandingOfficer')
{
  $qry= "SELECT * FROM record WHERE DemandingOfficer LIKE '%$c1%' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='InventoryHolder')
{
  $qry= "SELECT * FROM record WHERE InventoryHolder = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='DemandAmount')
{
  $qry= "SELECT * FROM record WHERE DemandAmount = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='SOAmount')
{
  $qry= "SELECT * FROM record WHERE SOAmount = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='PCDAPayment')
{
  $qry= "SELECT * FROM record WHERE PCDAPayment = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='CurrentStatus')
{
  $qry= "SELECT * FROM record WHERE CurrentStatus LIKE '%$c1%' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='PreviousStatus')
{
  $qry= "SELECT * FROM record WHERE PreviousStatus LIKE '%$c1%' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}

else if ($c2=='Phase')
{
  $qry= "SELECT * FROM record WHERE Phase LIKE '%$c1%' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}
else if ($c2=='ControlDate')
{
  $qry= "SELECT * FROM record WHERE ControlDate = '$c1' AND  FinancialYear = '$c3' ";
  $result = $conn->query($qry);
  while($row=$result->fetch_assoc())
  {

?>   <tbody>
      <tr>
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
}












?>
 </table>   
  </body>
</html>
