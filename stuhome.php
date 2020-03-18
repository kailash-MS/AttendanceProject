<!DOCTYPE HTML>  
<html>
<head>
  <script>
    function validate()
             {
            var x = document.getElementById('t1').value;
            var y = document.getElementById('t2').value;
            var z = document.getElementById('t3').value;
            if (x.length<9 || x.length>9) 
            {
                alert("Check your roll no length!");
                return true;
            }
            if (y.length>7 || y.length<7) {
              alert("Check your subject code length");
              return  true;
              
            }
            if (z.length>3 || z.length<3) {
              alert("Check your system no length");
              return  true;
              
            }
            }
  </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
            body
            {
                background-color:lightgrey;
            }
        </style>
</head>

<body>  

<center><h1><p class="text-success">Welcome!</p></h1></center><br>
<center>
<?php
echo "Date: " . date("d/m/Y"); echo"||";
echo "Time: " . date("h:i:sa");
?>
<br><br>
<form method="post" action="stuinfo.php" onsubmit="return validate();"> 
<input type="text" id="t1" name="nme" placeholder="Enter your roll no" maxlenth="9" required><br><br> 
 <input type="text" id="t2" name="scode" placeholder="Enter your subject code" maxlenght="7" required>
  
  <br><br>
   <input type="text" id="t3" name="ccode"placeholder="Enter your system number" maxlength="5" required>
  <br><br>
  <input type="radio" name="attdr" value="present" required>present<br><br>
  <input type="radio" name="batch" value="batch1" required>batch-1
  <input type="radio" name="batch" value="batch2" required>batch-2
  <input type="radio" name="batch" value="batch3" required>batch-3   
  
  <br><br>
  <center><input type="submit" class="btn btn-info" value="Save"></center><br>
  
</form>
</center>



</body>
</html>