<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="text-center">
  <?php
     include "header.php";
   ?>

<script>
        function sendJSONdata() {
            var name = document.getElementById("total");
            
  
            // Creating a XHR object
            var xhr = new XMLHttpRequest();
  
            // open a connection
            xhr.open("POST", "/userdata");
  
            // Setting the request header
            xhr.setRequestHeader(
              "Content-Type", "application/json"
            );
  
            // Converting JSON data to string
            var data = JSON.stringify(
              {total: total.value }
            );
            xhr.send(data);
  
            total.value="";
        }
    </script>
   
   <?php
   $total = 0;
			
      // If the submit button has been pressed
      if(isset($_POST['submit']))
      {
        // Check number values
        if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
        {
          // Calculate total
          if($_POST['operation'] == 'plus')
          {
            $total = $_POST['number1'] + $_POST['number2'];	
          }
          if($_POST['operation'] == 'minus')
          {
            $total = $_POST['number1'] - $_POST['number2'];	
          }
          if($_POST['operation'] == 'multiply')
          {
            $total = $_POST['number1'] * $_POST['number2'];	
          }
          if($_POST['operation'] == 'divided by')
          {
            $total = $_POST['number1'] / $_POST['number2'];	
          }
        
        } 
      }
    // end PHP. Code by webdevtrick.com
    ?>
  <div class="text-center">
   <div class="login-page">
           <div class="form">

            <form class="form-signin" action="Calculator.php" method="POST">
               <img class="mb-4" src="images\jpg.webp" alt="" width="92" height="92">
          <h1 class="h3 mb-3 font-weight-normal">Calculator</h1>
                <br>



          <input type="number" name="number1" placeholder="First Number" id="first_num" class="form-control" required="required" value="<?php echo $first_num; ?>" />
          
          <select name="operation" class="form-control">
		      <option selected>Operation</option>  	
          <option value="plus"><span>&#128125;</span></option>
		            <option value="minus"><span>&#128128;</span></option>
		            <option value="multiply"><span>&#128123;</span></option>
		            <option value="divided by"><span>&#128561;</span</option>
		        </select>
          
          
          <input type="number" name="number2" placeholder="Second Number" id="second_num" class="form-control" required="required" value="<?php echo $second_num; ?>" />
          



            <input name="submit" type="submit" value="Calculate" onclick="sendJSONdata()" class="form-control" />
            <input readonly="readonly" name="result" placeholder="Result" class="form-control" value="<?php echo $total; ?>"> 
 <br>

 <br>
           </form>



   </div>
   </div>
 </div>

<br>

 <?php
include "footer.php";
  ?>

  </body>
</html>
