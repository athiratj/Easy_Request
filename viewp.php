<?php
session_start();
$i=1;
$row=$_SESSION['row'];
$array=$_SESSION['array'];
$n=$_SESSION['i'];
while($i<=$n){
if (isset($_POST[$i])) {
 $conn = mysqli_connect("localhost", "root", "", "er");
$sql="SELECT * from r2 where no ='$i' ";
$result = mysqli_query($conn,$sql);
$array = mysqli_fetch_assoc($result);
$_SESSION['arr']=$array;
echo "<form method='post'action='sendp.php'> <td><input type='submit'  value='VERIFY' name='$i'/></td></form>";
}
$i++;
}
?>

<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="profile.css" rel="stylesheet" type="text/css">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div id="profile">
<div><div class="container emp-profile">
          <form method="post">
              <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-6">
                      <div class="profile-head">
                                  <h5>
                                  REQUEST FORM
                                  
                                  </h5>
                                  <h6>
                                  <?php echo $array['type']; ?>
                                  </h6>
                                
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                              </li>
                             
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-2">
                  <b id="logout"><a href="rvp.php">BACK</a></b>                 </div>
              </div>

             <div class="row">
                  <div class="col-md-8">
                      <div class="tab-content profile-tab" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Register No</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $array['idkno']; ?></p>
                                          </div>
                                      </div>
                                      
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Name</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $array['name']; ?></p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Email</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $array['em']; ?></p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Phone</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $array['ph']; ?></p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Class</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $array['class']; ?></p>
                                          </div>
                                      </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>           
      </div></div>
</div>
</body>
</html>

