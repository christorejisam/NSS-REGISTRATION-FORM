//Database

<?php

$connection=mysqli_connect('localhost','root','','registrar');

?>

//Index
<?php

ob_start();
session_start();

include "include/db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Home</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <div class="main">

      
        
            <div class="container">
                <div class="content">
                
                   <h2> School Of Enginnering</h2>
                   <h2>Cochin University Of Science and Technology </h2>
           
                   <h2> welcome <?php echo $_SESSION['name']; ?>!</h2>
                   <p>Dear <?php echo $_SESSION['name']; ?>,</p>
                   <P>Welcome to<h4>National Service Scheme (NSS) Family.</h4></P>
                   <p> National Service Scheme (NSS) a Central Sector Scheme of Government of India, Ministry of Youth Affairs & Sports. It provides opportunity to the student youth of 11th & 12th Class of schools at +2 Board level and student youth of Technical Institution, Graduate & Post Graduate at colleges and University level of India to take part in various government led community service activities & programmes.The sole aim of the NSS is to provide hands on experience to young students in delivering community service.</p>
                   <h3>Motto</h3>
                   <p>The motto of National Service Scheme is <h3>"NOT ME BUT YOU"</h3></p>
                   

                   <h3>Benefits of Being a NSS Volunteer:</h3>
                   <p>A NSS volunteer who takes part in the community service programme would either be a college level or a senior secondary level student. Being an active member these student volunteers would have the exposure and experience to be the following:</p>
                   <p>➛ an accomplished social leader</p>
                   <p>➛ an efficient administrator</p>
                   <p>➛ a person who understands human nature</p>
                   
                   <a href="https://nss.gov.in/"><li><b>NSS OFFICAL WEBSITE</b></li></a>

                   <h3>Latest News</h3>
                   <p><h5> 22-Jan-2021 :-</h5> NSS Awards 2019-20 - Extension of Last Date for submission of Nominations to the Ministry. <a href="https://nss.gov.in/nss-awards-2019-20-extension-last-date-submission-nominations-ministry"><link>click here!</link></a></p>
                   <p><h5> 29-Dec-2020 :-</h5> Guidelines of NYPF 2021. <a href="https://nss.gov.in/guidelines-nypf-2021"><link>click here!</link></a></p>
                   <p><h5> 24-Dec-2020 :-</h5> Contact persons for National Youth Parliament Festival 2021 <a href="https://nss.gov.in/contact-persons-national-youth-parliament-festival-2021"><link>click here!</link></a></p>
                   <p><h5> 21-Dec-2020 :-</h5> Guidelines for NSS Award for the year 2019-20 <a href="https://nss.gov.in/guidelines-nss-award-year-2019-20"><link>click here!</link></a></p>
                   <p><h5> 21-Dec-2020 :-</h5> Calling of Nomination for NSS Award 2019-20 <a href="https://nss.gov.in/calling-nomination-nss-award-2019-20"><link>click here!</link></a></p>
                   

                   <h3>Latest Events</h3>
                   <p><h5> 31-Jan-2020 :-</h5> NSS Republic Day Parade Camp 2020 <a href="https://nss.gov.in/nss-republic-day-parade-camp-2020-0"><link>click here!</link></a></p>
                   <p><h5> 18-Jan-2020 :-</h5> Fit India Cyclothon <a href="https://nss.gov.in/fit-india-cyclothon-0"><link>click here!</link></a></p>
                   <p><h5> 12-Jan-2020 :-</h5> 23rd National Youth Fesival 2020 <a href="https://nss.gov.in/23rd-national-youth-fesival-2020"><link>click here!</link></a></p>
                   <p><h5> 02-Oct-2019 :-</h5> FIT INDIA Plog Run <a href="https://nss.gov.in/fit-india-plog-run"><link>click here!</link></a></p>


                   <h5>Your Personal Details</h5>
                   <p>Your department is <b><?php echo $_SESSION['department']; ?></b></p>
                   <p>You are currently in <b><?php echo $_SESSION['currentsemester']; ?></b></p>
                   <p>Your Email Address is <b><?php echo $_SESSION['email']; ?></b></p>
                   <p>Your Student ID :- <b><?php echo $_SESSION['studentid']; ?></b></p>
                   <p>Your Phone No :- <b><?php echo $_SESSION['phone']; ?></b></p>
                   <p>Your Date of Birth :- <b><?php echo $_SESSION['dateofbirth']; ?></b></p> 
                   <p>Your Blood Group :- <b><?php echo $_SESSION['bloodgroup']; ?></b></p>
                   <p>Your Father Name is <b><?php echo $_SESSION['fathername']; ?></b></p>
                   <p>Your Father Phone No :-  <b><?php echo $_SESSION['fatherphone']; ?></b></p>
                   <p>Your Guardian Name is <b><?php echo $_SESSION['guardianname']; ?></b></p>
                   <p>Your Guardian Phone No :- <b><?php echo $_SESSION['guardianphone']; ?></b></p>
                   
                   <h5>Department Details</h5>
                   <p>You are currently studying in <b>School Of Enginnering (SOE), CUSAT</b></p> 
                   <p>Your Department HOD Name is <b>Mr/Ms .<?php echo $_SESSION['hodname']; ?></b></p>
                   <h5>Contact</h5>
                   <p>NSS University Coordinator: <b>Sri.Santhosh Kumar M B</b></p> 
                   <P><b>✆: +91-9746622326</b></p>
                   <p>NSS Programme Officer(Campus):<b>Sri.Naveen S</b></p> 
                   <P><b>✆: +91-9400250724</b></p>
                   <p>NSS Programme Officer(SOE):<b>Dr.Dhannia T</b></p> 
                   <P><b>✆: +91-9446227207</b></p>
                   
                   <p> Usefull links below  </p>
                   <a href="http://soe.cusat.ac.in/"><li><b>SOE OFFICAL WEBSITE</b></li></a>
                   <a href="https://www.cusat.ac.in/"><li><b>CUSAT OFFICAL WEBSITE</b></li></a>
                   <a href="http://soe.cusat.ac.in/pages/nss.php"><li><b>SOE NSS UNIT</b></li></a>
                   
                   
                   <a href="include/logout.php"><button>Log out</button></a>

                   <h6> <id>Copyrights © christo 2021  School Of Enginnering,  CUSAT.   All rights reserved </id></h6> 
                   


                </div>
            </div>
            

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

//login 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

      
        
            <div class="container">
                <div class="content">
                <h2> NSS REGISTRATION PORTEL </h2>


                <form action="include/login_process.php" method="post">
                <h3>Login</h3>
                
                
                <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-input" required>
                </div>
                <div class="form-group">
                <input type="submit" name="login" class="form-submit" value="Login">
                </div>

                </form>
           
                If you don't have account , <a href="registration.php"><link>Create New Account</link></a>
                    
                </div>
            </div>
            

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

//login_process

<?php


ob_start();
session_start();


include "db.php";


if(isset($_POST['login'])){


   $username=$_POST['username'];
   $password=$_POST['password'];

   $username=mysqli_real_escape_string($connection,$username);
   $password=mysqli_real_escape_string($connection,$password);

   $query="SELECT * from students where username ='$username' AND password='$password' ";

   $query_login_exe=mysqli_query($connection,$query);

   $find_account=mysqli_num_rows($query_login_exe);

   if($find_account=="1"){

       while($row=mysqli_fetch_assoc($query_login_exe)){

           $name=$row['name'];
           $studentid=$row['studentid'];
           $email=$row['email'];
           $phone=$row['phone'];
           $dateofbirth=$row['dateofbirth'];
           $gender=$row['gender'];
           $bloodgroup=$row['bloodgroup'];
           $fathername=$row['fathername'];
           $fatherphone=$row['fatherphone'];
           $guardianname=$row['guardianname'];
           $guardianphone=$row['guardianphone'];
           $currentsemester=$row['currentsemester'];
           $department=$row['department'];
           $hodname=$row['hodname'];


           $_SESSION['name']=$name;
           $_SESSION['studentid']=$studentid;
           $_SESSION['email']=$email;
           $_SESSION['phone']=$phone;
           $_SESSION['dateofbirth']=$dateofbirth;
           $_SESSION['gende']=$gende;
           $_SESSION['bloodgroup']=$bloodgroup;
           $_SESSION['fathername']=$fathername;
           $_SESSION['fatherphone']=$fatherphone;
           $_SESSION['guardianname']=$guardianname;
           $_SESSION['guardianphone']=$guardianphone;
           $_SESSION['currentsemester']=$currentsemester;
           $_SESSION['department']=$department;
           $_SESSION['hodname']=$hodname;


           header("Location: ../index.php");


       }   


   }else{
       
       echo "Invalid Username or Password or It is not a Valid Account , Try to create a new Account !! ";

   }
   

}



?>

//logout

<?php


ob_start();
session_start();


include "db.php";

    $_SESSION['name']=$name;
    $_SESSION['studentid']=$studentid;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['dateofbirth']=$dateofbirth;
    $_SESSION['gende']=$gende;
    $_SESSION['bloodgroup']=$bloodgroup;
    $_SESSION['fathername']=$fathername;
    $_SESSION['fatherphone']=$fatherphone;
    $_SESSION['guardianname']=$guardianname;
    $_SESSION['guardianphone']=$guardianphone;
    $_SESSION['currentsemester']=$currentsemester;
    $_SESSION['department']=$department;
    $_SESSION['hodname']=$hodname;



$_SESSION['name']=null;
$_SESSION['studentid']=null;
$_SESSION['email']=null;
$_SESSION['phone']=null;
$_SESSION['dateofbirth']=null;
$_SESSION['gende']=null;
$_SESSION['bloodgroup']=null;
$_SESSION['fathername']=null;
$_SESSION['fatherphone']=null;
$_SESSION['guardianname']=null;
$_SESSION['guardianphone']=null;
$_SESSION['currentsemester']=null;
$_SESSION['department']=null;
$_SESSION['hodname']=null;

    header("Location: ../login.php");

?>

//registration 

<?php

ob_start();
session_start();

include "include/db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Home</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

      
        
            <div class="container">
                <div class="content">
                <h2> NSS REGISTRATION PORTEL </h2>


                <form action="include/registration_process.php" method="post">
                <h3>Student Registration</h3>
                <h4> STUDENT DETAILS </h4>
                <div class="form-group">
                <label>Student Name</label>
                <input type="text" name="name" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Student ID</label>
                <input type="text" name="studentid" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="phone" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Date of Birth (dd/mm/yyyy) </label>
                <input type="text" name="dateofbirth" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Gender</label>
                         <select name="gender" class="form-input">
                         
                         <option value="">Select Gender</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                         <option value="Others">Others</option>

                         </select>      
                </div>
                <div class="form-group">
                <label>Blood Group</label>
                <input type="text" name="bloodgroup" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Father Name</label>
                <input type="text" name="fathername" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Father Phone No</label>
                <input type="tel" name="fatherphone" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Guardian Name</label>
                <input type="text" name="guardianname" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Guardian Phone No</label>
                <input type="tel" name="guardianphone" class="form-input" required>
                </div>
                <h4> DEPARTMENT DETAILS </h4>
                <div class="form-group">
                <label>Current Semester</label>
                <select name="currentsemester" class="form-input">
                         
                         <option value="">Select Semester</option>
                         <option value="1st semester">1st semester</option>
                         <option value="2nd semester">2nd semester</option>
                         <option value="3rd semester">3rd semester</option>
                         <option value="4th semester">4th semester</option>
                         <option value="5th semester">5th semester</option>
                         <option value="6th semester">6th semester</option>
                         <option value="7th semester">7th semester</option>
                         <option value="8th semester">8th semester</option>

                         </select>
                </div>
                <div>
                <label>Department</label>
                <select name="department" class="form-input">
                         
                         <option value="">Select Branch</option>
                         <option value="Computer Science Enginnering">Computer Science Enginnering</option>
                         <option value="Civil Enginnering">Civil Enginnering </option>
                         <option value="Mechanical Enginnering">Mechanical Enginnering</option>
                         <option value="Electronics Enginnering">Electronics Enginnering</option>
                         <option value="Electrical Enginnering">Electrical Enginnering</option>
                         <option value="Information Technology Enginnering">Information Technology Enginnering</option>
                         <option value="Safety and Fire Enginnering">Safety and Fire Enginnering</option>
                         <option value="Chemical Enginnering">Chemical Enginnering</option>

                         </select>
                </div>
                <div class="form-group">
                <label>Head of Department Name</label>
                <input type="text" name="hodname" class="form-input" required>
                </div>
                <h3> ACCOUNT DETAILS </h3>
                <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-input" required>
                </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-input" required>
                </div>
                <div class="form-group">
                <input type="submit" name="reg" class="form-submit" value="Register">
                </div>

                </form>
           
                If you already have an account , <a href="login.php"><link>click here!</link></a>
                    
                </div>
            </div>
            

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

//registration_process

<?php

include "db.php";




if(isset($_POST['reg'])){
    
    $current_time=time();
$DateTime=strftime("%d-%m-%y  %H:%M:%S",$current_time);
$DateTime;    

    $name=$_POST['name'];
    $studentid=$_POST['studentid'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dateofbirth=$_POST['dateofbirth'];
    $gender=$_POST['gender'];
    $bloodgroup=$_POST['bloodgroup'];
    $fathername=$_POST['fathername'];
    $fatherphone=$_POST['fatherphone'];
    $guardianname=$_POST['guardianname'];
    $guardianphone=$_POST['guardianphone'];
    $currentsemester=$_POST['currentsemester'];
    $department=$_POST['department'];
    $hodname=$_POST['hodname'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    //Registration begin


    $query="INSERT INTO students(name,studentid,email,phone,dateofbirth,gender,bloodgroup,fathername,fatherphone,guardianname,guardianphone,currentsemester,department,hodname,username,password,reg_date) ";


    $query.="VALUES ('$name','$studentid','$email','$phone','$dateofbirth','$gender','$bloodgroup','$fathername','$fatherphone','$guardianname','$guardianphone','$currentsemester','$department','$hodname','$username','$password','$DateTime')";

    $query_exe=mysqli_query($connection,$query);

    if($query_exe){
        header("Location: ../login.php");
    }else{

        echo ( mysqli_error($connection));


    }



}



?>
