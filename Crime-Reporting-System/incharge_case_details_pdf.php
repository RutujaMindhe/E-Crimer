
<?php
require('fpdf.php');
$pdf=new FPDF();

$pdf->AddPage();


//$pdf->SetLeftMargin(20);
$width_cell=array(55,135,95,200,20);

$pdf->SetFont('Helvetica','',16);
$pdf->SetTextColor(128,128,128);
$pdf->Cell($width_cell[4],10,"E-Crimer",0,1,'L');
$pdf->Ln(7);


$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',18);
$pdf->Cell($width_cell[3],10,"Case Details",0,1,'C');
$pdf->Ln(2);

session_start();
    if(!isset($_SESSION['x']))
        header("location:inchargelogin.php");
    
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    $db_select=mysqli_select_db($conn,"crime_portal");
    
    $cid=$_SESSION['cid'];
        
    $i_id=$_SESSION['email'];
    $result1=mysqli_query($conn,"SELECT location FROM police_station where i_id='$i_id'");
    $q2=mysqli_fetch_assoc($result1);
    $location=$q2['location'];
    
    $query="select c_id,type_crime,d_o_c,description from complaint where c_id='$cid' and location='$location' order by c_id desc";
    $result=mysqli_query($conn,$query); 
    $res2=mysqli_query($conn,"select d_o_u,case_update from update_case where c_id='$cid'");
      
    while($rows=mysqli_fetch_assoc($result)){
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Complaint ID",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['c_id'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Type of crime",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['type_crime'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Date of Crime",1,0,'L');
        $pdf->SetFont('Arial','',12); 
        $pdf->Cell($width_cell[1],10,$rows['d_o_c'],1,1,'L');


        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Description",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['description'],1,1,'L');

        
       

    }
    $pdf->Ln(8);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell($width_cell[2],10,"Date of update",1,0,'C');
    $pdf->Cell($width_cell[2],10,"Case Update",1,1,'C');

   
    while($rows1=mysqli_fetch_assoc($res2)){
    
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[2],10,$rows1['d_o_u'],1,0,'L');
        $pdf->Cell($width_cell[2],10,$rows1['case_update'],1,1,'L');
    }


$pdf->Output();
?>
