<!DOCTYPE html>
<html>
  <head>
    
    <title>New Record</title>
	  <link rel="stylesheet" href="register.css" />
  </head>
  <body>
  <header class="header">
    <h1 class="logo"><a href="Homepage.html" onclick="javascript:window.close();opener.window.focus();"><img href="Homepage.html" src=" " alt="logo"></a></h1>
    <h1 align="center" style="color: white; margin-right: 250px;">New Record Details</h1>
      <ul class="main-nav">
          
         
          

      </ul>
  </header> 
    
    
    
     
    <form action='insert.php' method="GET">
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
        <input type="number" name="col1" required />
        <label><b>Work Center </b></label>
        <input type="text" name="col2" required />
        <label><b>Demand no.</b> </label>
        <input type="number" name="col3" required />
        <label><b>Demand Date</b> </label>
        <input type="date" name="col4" required />
        <label><b>Budget Booking Date </b></label>
        <input type="date" name="col5" required />
        <label><b>Control no.</b></label> 
        <input type="text" name="col6" value="NULL" />
        <label><b>Control Date</b></label> 
        <input type="date" name="col14" value="1983-01-01" />
        <label><b>Description</b></label>
         <input type="text" name="col7" required />
        <label><b>Demanding Officer</b></label>
         <input type="text" name="col8" required />
        <label><b>Inventory Holder </b></label>
        <input type="text" name="col9" required />
        <label><b>Demand Amount</b></label>
        <input type="number" name="col10" required />
        <label><b>SO Amount</b></label>
        <input type="number" name="col11"  value="0" />
        <label><b>PCDA Payment</b></label>
         <input type="number" name="col12" value="0" />
        <label><b>Current Status</b></label>
         <input type="text" name="col13" required />
 

   
    
    <button type="submit" class="registerbtn" value="Submit">Submit</button>
  </div>
  
  
        
      
     
    </form>

  </body>
</html>