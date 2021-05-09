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