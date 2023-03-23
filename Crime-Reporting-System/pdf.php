<?php
require('fpdf.php');
$pdf=new FPDF();

$pdf->AddPage();


//$pdf->SetLeftMargin(20);
$width_cell=array(55,135,95,200,20);

$pdf->SetFont('Helvetica','',16);
$pdf->SetTextColor(128,128,128);
$pdf->Cell($width_cell[4],10,"E-Crimer (Anti-Ragging Cell)",0,1,'L');
$pdf->Ln(7);


$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',18);
$pdf->Cell($width_cell[3],10,"Case Details",0,1,'C');
$pdf->Ln(2);

session_start();
    if(!isset($_SESSION['x']))
   header("location:victim_complain_details.php");
        
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
   $db_select=mysqli_select_db($conn,"crime_portal");
    
    $vid=$_SESSION['vid'];
    // $p_id=$_SESSION['pol'];    
    
    $query="select * from anti_ragging_complaint where victim_id='$vid' ";
    $result=mysqli_query($conn,$query); 
      
    while($rows=mysqli_fetch_assoc($result)){
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Victim's id",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_id'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Victim's College Id",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_clg_id'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Victim Category",1,0,'L');
        $pdf->SetFont('Arial','',12); 
        $pdf->Cell($width_cell[1],10,$rows['victim_category'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Victim Name",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_name'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Mobile No",1,0,'L'); 
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_mobileNo'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Email Id",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_email'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Gender",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_gender'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Victim's Caste",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_caste'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Victim's State",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_state'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Victim's College Name",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_clg_name'],1,1,'L');

    
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Victim's Address",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_address'],1,1,'L');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell($width_cell[0],10,"Ragging Details",1,0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[1],10,$rows['victim_ragging_details'],1,1,'L');
    }
    $pdf->Ln(8);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell($width_cell[2],10,"Date of update",1,0,'C');
    $pdf->Cell($width_cell[2],10,"Case Update",1,1,'C');

    $res2=mysqli_query($conn,"select d_o_u,victim_case_update from update_victim_case where victim_id='$vid'");
    while($rows1=mysqli_fetch_assoc($res2)){
    
        $pdf->SetFont('Arial','',12);
        $pdf->Cell($width_cell[2],10,$rows1['d_o_u'],1,0,'L');
        $pdf->Cell($width_cell[2],10,$rows1['victim_case_update'],1,1,'L');
    }


$pdf->Output();
?>