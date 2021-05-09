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