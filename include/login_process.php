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