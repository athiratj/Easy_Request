<?php
session_start();
$i=1;
$row=$_SESSION['row'];
$array=$_SESSION['array'];
$n=$_SESSION['i'];
while($i<=$n){
if (isset($_POST[$i])) {
 $conn = mysqli_connect("localhost", "root", "", "er");
$sql="SELECT * from r3 where no ='$i' ";
$result = mysqli_query($conn,$sql);
$array = mysqli_fetch_assoc($result);
$_SESSION['arr']=$array;
echo "<form method='post'action='sendpro.php'> <td><input type='submit'  value='DOWNLOAD' name='$i'/></td></form>";
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
                                  VERIFIED REQUEST
                                  
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
                  <b id="logout"><a href="pro.php">BACK</a></b>                 </div>
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




<?php
include('libs/fpdf.php');

session_start();
$i=1;
$row=$_SESSION['row'];
$array=$_SESSION['array'];
$n=$_SESSION['i'];
while($i<=$n){
if (isset($_POST[$i])) {
$conn = mysqli_connect("localhost", "root", "", "er");
$sql="SELECT * from r1 where no ='$i' ";
$result = mysqli_query($conn,$sql);
$array = mysqli_fetch_assoc($result);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',7);
$pdf->Cell(1000,10,'GOVERNMENT ENGINEERING COLLEGE IDUKKI');
$pdf->Ln(10);
$pdf->Cell(70,12,'   NAME',1);
$pdf->Cell(70,12,$array['name'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   KTU ID',1);
$pdf->Cell(70,12,$array['idkno'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   TYPE OF REQUEST',1);
$pdf->Cell(70,12,$array['type'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   EMAIL',1);
$pdf->Cell(70,12,$array['em'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   PHONE',1);
$pdf->Cell(70,12,$array['ph'],1);
$pdf->Ln(10);
$pdf->Cell(70,12,'   DEPARTMENT',1);
$pdf->Cell(70,12,$array['dept'],1);
$pdf->Ln(10);
$pdf->Ln(10);
$pdf->Ln(10);
$pdf->Cell(70,12,'   VERIFIED BY PRINCIPAL GEC IDUKKI',1);
$pdf->Cell( 40, 40, $pdf->Image("tick.png", $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Output();
}
$i++;
}
?>