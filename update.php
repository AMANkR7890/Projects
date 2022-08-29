
<!DOCTYPE html>
<html>
  <head>
    
    <title>Updating Records</title>
	  <link rel="stylesheet" href="register.css" />

  </head>
  <body>
    <header class="header">
    <h1 class="logo"><a href="Homepage.html" onclick="javascript:window.close();opener.window.focus();"><img src=" " alt=" "></a></h1>
    <h1 align="center" style="color: white; margin-right: 180px;">Update Record</h1>
    <form action="" method="GET">
      <ul class="main-nav">
          
          
          <li><input type="text" name="search" placeholder="Demand No."></li>
        <li><button class="button" type="submit" ><img src="search.png" style="height: 30px;"></button></li>

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
    
    
     <form action='upwork.php' method="GET">
      <div class="container">
        <br>
        <datalist id="year">
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
        <label><b>Financial Year</b> </label>
        <input type="text" name="col15" list="year" value="2022-2023">
        <label><b>Serial no.</b> </label>
        <input type="number" name="col1" required value="<?php  echo $row['Sno']; ?>"/>
        <label><b>Work Center </b></label>
        <input type="text" name="col2" required value="<?php  echo $row['WorkCenter']; ?>"/>
        <label><b>Demand no.</b> </label>
        <input type="number" name="col3" required  value="<?php  echo $row['DemandNo']; ?>"/>
        <label><b>Demand Date</b> </label>
        <input type="date" name="col4" required value="<?php  echo $row['DemandDate']; ?>" />
        <label><b>Budget Booking Date </b></label>
        <input type="date" name="col5" required value="<?php  echo $row['BudgetBookingDate']; ?>"/>
        <label><b>Control no.</b></label> 
        <input type="text" name="col6" required value="<?php  echo $row['ControlNo']; ?>"/>
        <label><b>Control Date</b></label> 
        <input type="date" name="col14" required value="<?php  echo $row['ControlDate']; ?>"/>
        <label><b>Description</b></label>
         <input type="text" name="col7" required value="<?php  echo $row['Description']; ?>"/>
        <label><b>Demanding Officer</b></label>
         <input type="text" name="col8" required value="<?php  echo $row['DemandingOfficer']; ?>"/>
        <label><b>Inventory Holder </b></label>
        <input type="text" name="col9" required value="<?php  echo $row['InventoryHolder']; ?>"/>
        <label><b>Demand Amount</b></label>
        <input type="number" name="col10" required value="<?php  echo $row['DemandAmount']; ?>"/>
        <label><b>SO Amount</b></label>
        <input type="number" name="col11" value="<?php  echo $row['SOAmount']; ?>" />
        <label><b>PCDA Payment</b></label>
         <input type="number" name="col12" value="<?php  echo $row['PCDAPayment']; ?>" />
        <label><b>Previous Status</b></label>
         <input type="text" required value="<?php  echo $row['PreviousStatus']; ?>" readonly/>
        <label><b>Current Status</b></label>
         <input type="text" name="col13" required value="<?php  echo $row['CurrentStatus']; ?>"/>
         <label><b>Phase</b></label>
         <input type="text" name="colphase" required value="<?php  echo $row['Phase']; ?>"/>
          <input type="hidden" value="<?php echo $x; ?>" name="colps" />
 

   
    
    <button type="submit" class="registerbtn" value="Submit">Update</button>
  </div>
  
  
        
      
     
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
  
  <h2 align="center">Please Enter Demand Number above to Proceed...</h2>
<?php
}
?>
    
  </body>
</html>

