<!DOCTYPE html>
<html>
<head>
  <style>
    table{
  
      table-layout: auto;
      width:55%;
    }
    td{
      font: 15px sans-serif;
      padding: 15px;
      height: 40px;
    }
    th{
      font: 16px sans-serif;
      font-weight:bold;
      padding: 15px;
      height: 40px;
    }
    tr {
      
  border-bottom: 2px solid #ddd;
}

    </style>

    
    <?php
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
    
    if(isset($_POST['status'])){
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $upd=$_POST['update'];
            $qu1=mysqli_query($conn,"insert into update_victim_case(victim_id,victim_case_update) values('$vid','$upd')");
            $qu1=mysqli_query($conn,"update anti_ragging_complaint set Status='In Progress' where victim_id='$vid'");
        }
    }
    
    if(isset($_POST['close'])){
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $up=$_POST['final_report'];
            $qu2=mysqli_query($conn,"insert into update_victim_case(victim_id,victim_case_update) values('$vid','$up')");
            $q2=mysqli_query($conn,"update anti_ragging_complaint set Status='final report generated' where victim_id='$vid'");
           
        }
    }
     $res2=mysqli_query($conn,"select d_o_u,victim_case_update from update_victim_case where victim_id='$vid'");
    
    ?>

	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<script>
     function f1()
        {
        var sta2=document.getElementById("viid").value;
        var x2=sta2.indexOf(' ');
        if(sta2=="" && x2>=0){
          document.getElementById("viid").value="";
          alert("Blank FIeld Not Allowed");
        }
      }
    </script>
</head>
<body>
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <a class="navbar-brand" href="anti_ragging_home.php" style="font-family: Book Antiqua;font-size: 28px;">Anti-Ragging Cell</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      
      <ul class="nav navbar-nav navbar-right">
      <li><a href="victim_case_details_pdf.php"  style="margin-left: 5px; margin-top: 5px; margin-bottom:5px;">Generate PDF
    </a></li>
        <li><a href="c_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
<div style="padding:50px; margin-top:10px;">
<center><h3><b>Case Details</b></h3></center>
   <table>
    
      <?php
      
              while($rows=mysqli_fetch_assoc($result)){
                
             ?> 
    <tbody style="background-color: white; color: black;">
       <tr>
        <th>Victim Id</th>
        <td><?php echo $rows['victim_id']; ?></td>
              </tr>
              <tr>
        <th>Victim's College Id</th>
        <td><?php echo $rows['victim_clg_id']; ?></td>
      </tr>
              <tr>
                <th>Victim Category</th>
        <td><?php echo $rows['victim_category']; ?></td>
              </tr>
              <tr>
                <th>Victim Name</th>
        <td><?php echo $rows['victim_name']; ?></td>
              </tr>
              <tr>
                <th>Mobile No</th>
        <td><?php echo $rows['victim_mobileNo']; ?></td>
              </tr>
              <tr>
                <th>Email Id</th>
        <td><?php echo $rows['victim_email']; ?></td>
              </tr>
              <tr>
                <th>Gender</th>
        <td><?php echo $rows['victim_gender']; ?></td>
      </tr>
      <tr>
        <th>Victim's Caste</th>
        <td><?php echo $rows['victim_caste']; ?></td>
      </tr>
      <tr>
        <th>Victim's State</th>
        <td><?php echo $rows['victim_state']; ?></td>
      </tr>
      <tr>
        <th>Victim's College Name</th>
        <td><?php echo $rows['victim_clg_name']; ?></td>
      </tr>
      <tr>
        <th>Victim's Address</th>
        <td><?php echo $rows['victim_address']; ?></td>
      </tr>
      <tr>
        <th>Ragging Details</th>
        <td style="heigth:60px; width:400px;"><?php echo $rows['victim_ragging_details']; ?></td>
      </tr>

      
       </tbody>
       <?php
} 
?>
  </center>        
</table>

 </div>
    
<div style="padding:50px; margin-top:8px;">
   <table class="table table-bordered">
        <thead class="thead-dark" style="background-color: black; color: white;">
    <tr>
      <th scope="col">Date Of Update</th>
      <th scope="col">Case Update</th>
    </tr>
       </thead>
      <?php
              while($rows1=mysqli_fetch_assoc($res2)){
             ?> 
       <tbody style="background-color: white; color: black;">
    <tr>
        
      <td><?php echo $rows1['d_o_u']; ?></td>
      <td><?php echo $rows1['victim_case_update']; ?></td>
        
        
    </tr>
       </tbody>
       <?php
} 
?>
          
</table>
 </div>

  <div style="width: 100%; height: 250px;"> 
    
    <div style="width: 50%;float: left;height: 250px; background-color: #dcdcdc"> 
     
     <form method="post">
    
      <h5 style="text-align: center;"><b>Complaint ID</b></h5>                 
      <input type="text" name="vid" style="margin-left: 47%; width: 50px;" disabled value="<?php echo "$vid" ?>">
        
         
      <select class="form-control" style="align-content: center;margin-top: 20px; margin-left: 35%; width: 180px;" name="update">
          <option>Criminal Verified</option>
          <option>Criminal Caught</option>
          <option>Criminal Interrogated</option>
          <option>Criminal Accepted the Crime</option>
          <option>Criminal Charged</option>
      </select>

      <input class="btn btn-primary btn-sm" type="submit" value="Update Case Status" name="status" style="margin-top: 10px; margin-left: 40%;">
        
    </form>
    </div>     
     <div style="width: 50%;float: right;height: 250px; background-color: #dfdfdf;">
     <form method="post">
     <textarea name="final_report" cols="40" rows="5" placeholder="Final Report" style="margin-top: 20px;margin-left: 20px;" id="viid" onfocusout="f1()" required></textarea>
     <div>
      <input  class="btn btn-danger" type="submit" value="Close Case" name="close" style="margin-left: 20px; margin-top: 10px; margin-bottom:20px;">
       </div> 
    </form>
  </div>

 </div>
    <div style="position: relative;
    float: left;
    margin-bottom: 0px;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>E-Crimer 2022</b></h4>
</div> 

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>