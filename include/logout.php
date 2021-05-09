
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