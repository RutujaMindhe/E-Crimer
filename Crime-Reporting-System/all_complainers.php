<!DOCTYPE html>
<html>
<head>
<?php
session_start();
    if(!isset($_SESSION['x']))
    header("location: all_complainers.php");
        
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
        $ano=$_POST['a_no'];
        $_SESSION['a_no']=$ano;
        $alok=mysqli_query($conn,"SELECT a_no FROM user WHERE a_no='$ano'");
       $row = mysqli_fetch_assoc($alok);

        header("location:user_complain_details.php");
    }
    }
  
    $query="select u_id, u_name, u_addr, a_no, gen, mob from user order by u_id desc";
    $result=mysqli_query($conn,$query);  
?>
    
	<title>All Complainers</title>
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
<body>
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <a class="navbar-brand" href="home.php" style="font-family: Book Antiqua;font-size: 28px;">Crime Cell</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      
      <ul class="nav navbar-nav">
        <li><a href="official_login.php">Official Login</a></li>
           
        <li><a href="headlogin.php">Head Login</a></li>
        <li class="active"><a href="head_view_police_station.php">HQ Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="headHome.php">View Complaints</a></li>
        <li><a href="head_view_police_station.php">Police Station</a></li>
        <li class="active"><a href="all_complainers.php">All complainers</a></li>
        <li><a href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

 <div>
    <form style="margin-top: 5%; margin-left: 40%;" method="post">
      <input type="text" name="a_no" style="width: 250px; height: 30px;" placeholder="&nbsp Aadhar No" id="viid" onfocusout="f1()" required>
        <div>
      <input class="btn btn-primary" type="submit" value="Search" name="s1" style="margin-top: 10px; margin-left: 11%;">
     </div>
     </form>
 </div>
   
<div style="padding:50px;">
   <table class="table table-bordered">
       <thead class="thead-dark" style="background-color: black; color:white;">
    <tr>
      <th scope="col">u_name</th>
      <th scope="col">u_id</th>
      <th scope="col">u_addr</th>
      <th scope="col">a_no</th>
      <th scope="col">gen</th>
      <th scope="col">mob</th>
    </tr>
       </thead>
      <?php
              while($rows=mysqli_fetch_assoc($result)){
             ?> 
       <tbody style="background-color: white; color: black;">
    <tr>
      <td><?php echo $rows['u_name']; ?></td>
      <td><?php echo $rows['u_id']; ?></td>     
      <td><?php echo $rows['u_addr']; ?></td>     
      <td><?php echo $rows['a_no']; ?></td> 
      <td><?php echo $rows['gen']; ?></td> 
      <td><?php echo $rows['mob']; ?></td>         
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
   background-color: rgba(0,0,0,0.5);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>E-Crimer 2022</b></h4>
   




 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>