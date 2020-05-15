<?php
include('login.php'); // Includes Login Script
?>
<!DOCTYPE html>
<html>
<head>
<title>Easy Request</title>
<link href="style.css" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body><center>
<div class="wrapper fadeInDown">
            <div id="formContent">
            <div class="fadeIn first">
            
            <h1>EASY REQUEST</h1>
            </div>
            </div>
            <fieldset>
            <form action="" method="post">
            
            <input type="text" id="name" class="fadeIn second" name="username" placeholder="Username"/>
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password"/>
            <input type="submit" class="fadeIn fourth" value="Log In" name="submit"/>
            <span><?php echo $error; ?></span>
            </form>
          
        
            <div id="formFooter">
            
            </div>
            </fieldset>
        
          </div>
          </center>

</body>
</html>
