<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Project</title>
</head>
<body bgcolor=lightblue>
<img src="images/head1.png"> <br><br>
<?php
include("connfile.php");
session_start();
$res="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
// echo("working");
$v1=$_POST['text1'];
$v2=$_POST['text2'];
$v3=$_POST['text4'];
$v4=$_POST['text5'];
$v5=$_POST['text6'];
$v6=$_POST['text7'];
$v7=$_SESSION['actype'];


// echo $var1." ".$var2;
$sqlvar="insert into custactab values($v1,'$v2','$v3','$v4',$v5,'$v6','$v7','N')";

$result=$conn->query($sqlvar);
if($result)
{    
$res="Record Inserted";
}
else
 {
    $res="Record not Inserted,Some Problem ";   
}

}
else{
    
    $_SESSION['actype']=$_GET['actype'];
}
?>
<form name=form1 method="post" action="custsignup.php">

 <table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
     <tr><td colspan=2>Customer Signup</td></tr>
<tr><td>AcNo(10digit)</td><td><input type=text name=text1></td></tr>
<tr><td>Password</td><td><input type=password name=text2></td></tr>
<tr><td>Retype Password</td><td><input type=password name=text3></td></tr>
<tr><td>Person Name</td><td><input type=text name=text4></td></tr>
<tr><td>Address</td><td><textarea name=text5 rows=4></textarea></td></tr>
<tr><td>MobileNo</td><td><input type=text name=text6></td></tr>
<tr><td>eMail</td><td><input type=text name=text7></td></tr>


<tr><td><a href=mainpage.php>Back</a></td><td><input type=Submit name=Login style="height:45px;width:150px"></td></tr>
<tr><td colspan=2><?php echo $res; ?></td></tr> 
</table>   
  
</form>

<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="images/head2.png">
</body>
</html>