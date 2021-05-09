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