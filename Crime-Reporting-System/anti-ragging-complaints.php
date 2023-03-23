<!DOCTYPE html>
<html>
<head>   
<?php
session_start();
    if(!isset($_SESSION['x']))
    header("location:anti-ragging-complaints.php");
        
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    $db_select=mysqli_select_db($conn,"crime_portal");
    if(isset($_POST['s1']))
    {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $vid=$_POST['vid'];
        $_SESSION['vid']=$vid;
        $alok=mysqli_query($conn,"SELECT victim_id FROM anti_ragging_complaint WHERE victim_id='$vid'");
       $row = mysqli_fetch_assoc($alok);

        header("location:victim_complain_details.php");
    }
    }
  
    $query="select victim_id,victim_clg_id,victim_name,victim_mobileNo,victim_clg_name,Status from anti_ragging_complaint order by victim_id desc";
    $result=mysqli_query($conn,$query);  
?>


	<title>Ragging Complaints</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  
   <script>
     function f1()
        {
          var sta2=document.getElementById("viid").value;
          var x2=sta2.indexOf(' ');
          if(sta2!="" && x2>=0)
          {
            document.getElementById("viid").value="";
            alert("Blank Field Not Allowed");
          }
        }
    </script> 
    
</head>
<body style="background-image: url(search1.jpeg);">
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <a class="navbar-brand" href="anti_ragging_home.php.php" style="font-family: Book Antiqua;font-size: 28px;">Anti-Ragging Cell</a>
      
    </div>
    <!--<div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="official_login.php">Official Login</a></li>
        <li ><a href="headlogin.php">HQ Login</a></li>
        <li class="active"><a href="headHome.php">HQ Home</a></li>
      </ul>-->
      <ul class="nav navbar-nav navbar-right">
        <li class="active" ><a href="anti-ragging-complaints.php">View Complaints</a></li>
        <li ><a href="completed_complaints.php">Pending Complaints</a></li>
        <li ><a href="pending_complaints.php">Completed Complaints</a></li>
        <li><a href="c_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        <!--<li><a href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>-->
      </ul>
    </div> 
  </div>
 </nav>
 <div>
    <form style="margin-top: 5%; margin-left: 40%;" method="post">
      <input type="text" name="vid" style="width: 250px; height: 30px;" placeholder="&nbsp Victim Id" id="viid" onfocusout="f1()" required>
        <div>
      <input class="btn btn-primary" type="submit" value="Search" name="s1" style="margin-top: 10px; margin-left: 11%;">
     </div>
     </form>
 </div>
   
<div style="padding:50px;">
   <table class="table table-bordered">
       <thead class="thead-dark" style="background-color: black; color:white;">
    <tr>
      <th scope="col">Victim Id</th>
      <th scope="col">College Id</th>
      <th scope="col">Name of Victim</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">College Name</th>
      <th scope="col">Status</th>
    </tr>
       </thead>
      <?php
              while($rows=mysqli_fetch_assoc($result)){
             ?> 
       <tbody style="background-color: white; color: black;">
    <tr>
      <td><?php echo $rows['victim_id']; ?></td>
      <td><?php echo $rows['victim_clg_id']; ?></td>     
      <td><?php echo $rows['victim_name']; ?></td>     
      <td><?php echo $rows['victim_mobileNo']; ?></td> 
      <td><?php echo $rows['victim_clg_name']; ?></td> 
      <td><?php echo $rows['Status']; ?></td>         
    </tr>
       </tbody>
       <?php
} 
?>
    
  
</table>
 </div>

 <div style="position: fixed;
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