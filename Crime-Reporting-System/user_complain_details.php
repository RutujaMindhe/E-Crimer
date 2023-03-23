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
   header("location:user_complain_data.php");
        
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
   $db_select=mysqli_select_db($conn,"crime_portal");
    
    $ano=$_SESSION['a_no'];
    // $p_id=$_SESSION['pol'];    
    
    $query="select * from user where a_no='$ano' ";
    $result=mysqli_query($conn,$query);  
    
   
    
    $query1="select * from complaint where a_no='$ano' ";
    $result1=mysqli_query($conn,$query1);  

    if(isset($_POST['Unblock'])){
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
    
            $qu1=mysqli_query($conn,"update user set Banned=0 where a_no='$ano'");
        }
    }
    if(isset($_POST['Block'])){
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
    
            $qu1=mysqli_query($conn,"update user set Banned=1 where a_no='$ano'");
        }
    }
    
  
     
    
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
       function alertmsg()
       {
        alert("User is unblocked");

       }
       function alertmsg1()
       {
        alert("User is Blocked");

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
      
      <ul class="nav navbar-nav navbar-right">
        
        <li>
            <form method="post">
            <input class="btn btn-primary btn-sm" onclick="alertmsg()" type="submit" value="Unblock" name="Unblock" style="margin-top: 10px; margin-left: 40%;">
        </form>
        </li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li>
        <li>
            <form method="post">
           
            <input class="btn btn-primary btn-sm" onclick="alertmsg1()" type="submit" value="Block" name="Block" style="margin-top: 10px; margin-left: 40%;">
    </form>
        </li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li>
        <li><a href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
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
        <th>User Id</th>
        <td><?php echo $rows['u_id']; ?></td>
              </tr>
              <tr>
        <th>User Name</th>
        <td><?php echo $rows['u_name']; ?></td>
      </tr>
              <tr>
                <th>User Address</th>
        <td><?php echo $rows['u_addr']; ?></td>
              </tr>
              <tr>
                <th>Aadhar Number</th>
        <td><?php echo $rows['a_no']; ?></td>
              </tr>
              <tr>
                <th>Gender</th>
        <td><?php echo $rows['gen']; ?></td>
              </tr>
              <tr>
                <th>Mobile Number</th>
        <td><?php echo $rows['mob']; ?></td>
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
      <th scope="col">Complaint Id</th>
      <th scope="col">Date</th>
      <th scope="col">Location</th>
      <th scope="col">Crime Type</th>
      <th scope="col">Description</th>
      <th scope="col">Complaint Status</th>
      <th scope="col">Fake complaint</th>
    </tr>
       </thead>
      <?php
              while($rows1=mysqli_fetch_assoc($result1)){
             ?> 
       <tbody style="background-color: white; color: black;">
    <tr>
        
      <td><?php echo $rows1['c_id']; ?></td>
      <td><?php echo $rows1['d_o_c']; ?></td>
      <td><?php echo $rows1['location']; ?></td>
      <td><?php echo $rows1['type_crime']; ?></td>
      <td><?php echo $rows1['description']; ?></td>
      <td><?php echo $rows1['pol_status']; ?></td>
      <td><?php echo $rows1['fakecomplaint']; ?></td>
        
        
    </tr>
       </tbody>
       <?php
} 
?>
          
</table>
 </div>
</div>
    <div style="position: absolute;
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