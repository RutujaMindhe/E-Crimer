<?php
include_once 'db.php';
    
if(isset($_POST['submit']))
{  
   
     $victim_category = $_POST['victim_category'];
     $victim_name = $_POST['victim_name'];
     $victim_mobileNo = $_POST['victim_mobileNo'];
     $victim_email=$_POST['victim_email'];
     $victim_gender=$_POST['slct'];
     $victim_caste=$_POST['victim_caste'];
     $victim_state=$_POST['victim_state'];
     $victim_clg_name=$_POST['victim_clg_name'];
     $victim_clg_pin=$_POST['victim_clg_pin'];
     $victim_address=$_POST['victim_address'];
     $victim_ragging_details=$_POST['victim_ragging_details'];
     $victim_clg_id=$_POST['victim_clg_id'];
     
     
     $sql = "INSERT INTO anti_ragging_complaint(victim_category,victim_name,victim_mobileNo,victim_email,victim_gender,victim_caste,
     victim_state,victim_clg_name,victim_clg_pin,victim_address,victim_ragging_details,victim_clg_id)
     VALUES ('$victim_category','$victim_name','$victim_mobileNo','$victim_email','$victim_gender','$victim_caste	',
     '$victim_state','$victim_clg_name',
     '$victim_clg_pin','$victim_address','$victim_ragging_details','$victim_clg_id')";
     if (mysqli_query($conn, $sql)) {

 
        echo '<script>alert("New complaint has been registered successfully!")</script>';
     } else {
      echo '<script>alert("already registered !")</script>';
        
     }
     mysqli_close($conn);

     

}


?>

<html><head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="icon" href="images/antiragging-cell.webp" type="image/icon type">

  <link rel="stylesheet" type="text/css" href="style.css"/>  
  <title>Register complaint | Anti-ragging cell</title>
  </head>
  <body>
  <header class="text-gray-600 body-font border-b-2 bg-white" style="overflow: hidden;
  
  position:fixed;
  top: 0;
  width: 100%;">
        <div class="container mx-auto flex flex-wrap py-3 flex-col md:flex-row items-center">
            <a href="anti_ragging_home.php" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
               <img class="h-12" src="images/antiragging-cell.webp"></img>

               
                <span class="ml-3 text-xl">Anti-Ragging Cell</span>
            </a>
           
        </div>
    </header>



  
<div class="container" style="margin: top 100px;">
 
  <em><div class="title">REGISTER COMPLAINT</div></em><br>
  <form method="post">
    
    <div class="user__details">
      <div class="input__box">
        <span class="details">Complaint Category</span>
        <input type="text" placeholder="E.g: Ragging, Sexual Harrasemnt" name="victim_category" required>
      </div>
      <div class="input__box">
        <span class="details">Victim Full Name</span>
        <input type="text" placeholder="Full name" name="victim_name" required>
      </div>
     
      <div class="input__box">
        <span class="details">Email</span>
        <input type="email" placeholder="email id" name="victim_email" required>
      </div>
      <!---<div class="input__box">
      <div class="gender">
        <span class="details">Gender</span>
        <select name="Gender" id="Gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        </div>
      </div> -->

      <div class="input__box">
        <span class="details">Gender</span>
      <div class="select">
        <select name="slct" id="victim_gender">
          <option>Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
          
        </select>
    </div>
      </div>

     <div class="input__box">
        <span class="details">Victim's Phone Number</span>
        <input type="mobile" placeholder="mobile number" name="victim_mobileNo" required>
      </div> 
      
      <div class="input__box">
        <span class="details">Victim's College Name</span>
        <input type="text" placeholder="college name " name="victim_clg_name" required>
      </div>
      <div class="input__box">
        <span class="details">Victim's Id</span>
        <input type="text" placeholder="PRN number" name="victim_clg_id" required>
      </div>
      <div class="input__box">
        <span class="details">Victim's College PinCode</span>
        <input type="text" placeholder="pincode" name="victim_clg_pin" required>
      </div>
      <div class="input__box">
        <span class="details">Victim's State</span>
        <input type="text" placeholder="state" name="victim_state" required>
      </div>
      <div class="input__box">
        <span class="details">Victim's Caste</span>
        <input type="text" placeholder="caste" name="victim_caste" required>
      </div>
      <div class="input__box1">
        <span class="details">Victim's Address</span><br>
        <input type="text" placeholder="address" name="victim_address" required>
        <br><br>

       
          <span class="details">Complaint Details</span><br>
          
          <input type="text" placeholder="explain complaint" name="victim_ragging_details" required>
        
      </div>



      

    
    </div>
    <br><br>
    <p>If You have any evidence, Kindly Mail them to helpline <b><u><a href="mailto:admin_committe@yopmail.com">admin_committe@yopmail.com</a></u></b>
      with the same email id you are using here. And Do not forget to mention that you are sending the attachments in Ragging Details.</p>
    <div class="button">
      <input type="submit" value="submit" name="submit">
    </div>
    
  </form>
</div>

<div style="position: fixed;
left: 0;
bottom: 0;
width: 100%;
background-color: rgba(0,0,0,0.7);
color: white;
text-align: center;">
<h4 style="color: white;">&copy <b>E-Crimer 2022</b></h4>
</div>
</body>
</html>