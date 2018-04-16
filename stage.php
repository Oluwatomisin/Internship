 <!DOCTYPE html>
<html>
<head>
	<title>Current Time</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stage.css">
</head>
<body>
    <div class="container">
      <?php
      
      $time = date('H:i:A');
      
      echo "Current Time" 
	  
	  .$time;
	  ?>
    </div>  
      
</body>
</html>
