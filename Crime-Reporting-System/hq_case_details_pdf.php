
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
        header("location:headlogin.php");
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    $db_select=mysqli_select_db($conn,"crime_portal");
    
    $c_id=$_SESSION['cid'];
        
    $query="select c_id,description,inc_status,pol_status,location from complaint where c_id='$c_id'";
    $result=mysqli_query($conn,$query);
     $res2=mysqli_query($conn,"select d_o_u,case_update from update_case where c_id='$c_id'");
      
    while($rows=mysqli_fetch_assoc($result)){
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Complaint ID",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['c_id'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"location of crime",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['location'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Description",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['description'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Police Status",1,0,'L');
        $pdf->SetFont('Arial','',12); 
        $pdf->Cell($width_cell[1],10,$rows['inc_status'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Case Status",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['pol_status'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Address",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['location'],1,1,'L');

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
