<table border="2">
   <tr>
      <th>Name</th>
      <th>Address Line 1</th>
      <th>Address Line 2 </th>
      <th>E-mail Id </th>
    </tr>
    <?php
    session_start();
    include('rva.php');
    if (mysqli_num_rows($_SESSION['result'])>0){
        while($array=mysqli_fetch_assoc($_SESSION['result'])) 
    {
        print "<tr> <td>";
        echo $array; 
        
    }}
    ?>