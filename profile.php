<?php
include('session.php');
include('request.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
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
<?php
?>
<div id="profile">
<div><div class="container emp-profile">
          <form method="post">
              <div class="row">
                  <div class="col-md-4">
                      <div class="profile-img">
                          <img src="" alt="UPLOAD"/>
                          <div class="file btn btn-lg btn-primary">
                              Change Photo
                              <input type="file" name="file"/>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="profile-head">
                                  <h5>
                                  <?php echo $row['name']; ?>
                                  
                                  
                                  </h5>
                                  <h6>
                                  <?php echo $desig; ?>
                                  </h6>
                                
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                              </li>
                             
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-2">
                  <b id="logout"><a href="logout.php">Log Out</a></b>                 </div>
              </div>

             <div class="row">
                  <div class="col-md-4">
                      <div class="profile-work">
                          <p>REQUESTS</p>
                            <form method="post" action="request.php">
                            <input type="radio" name="req" value="noc"> NOC<br>
                            <input type="radio" name="req" value="scholarship"> SCHOLARSHIP<br>
                            <input type="radio" name="req" value="certificate"> CERTIFICATE<br><br><br>
                            <div class="col-md-2">
                            <input type="submit"  value="Submit Request" name="submit"/>
                            </div></form>
                            <div class="col-md-2">
                            <a href="pro.php"><input type='button' value='REQUEST STATUS'></a>
                            </div>

                      </div>
                  </div>
                  <div class="col-md-8">
                      <div class="tab-content profile-tab" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>User Id</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $row['idkno']; ?></p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>AD NO</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $row['adno']; ?></p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Name</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $row['name']; ?></p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Email</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $row['em']; ?></p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Phone</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $row['ph']; ?></p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Class</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p><?php echo $row['class']; ?></p>
                                          </div>
                                      </div>
                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                      
                                      
                                      
                                      
                              <div class="row">
                                  <div class="col-md-12">
                                      <label>Your Bio</label><br/>
                                      <p>Your detail description</p>
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

