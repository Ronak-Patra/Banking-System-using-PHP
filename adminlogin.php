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

if($_SERVER['REQUEST_METHOD']=='POST')
{
// echo("working");
$v1=$_POST['text1'];
$v2=$_POST['text2'];
// echo $var1." ".$var2;
$sqlvar="select* from logintab where userid='$v1' and pword='$v2'";
$result=$conn->query($sqlvar);
if($result->num_rows > 0)
{    
header('location:adminmainpage.php');
}
else
 {
echo('userid or password is not correct');    
}

}
?>
<form name=form1 method="post" action="adminlogin.php">
<table width=100% align="left">
<tr><td width="50%">
 <table width=80% border=1 cellspacing=5 cellpadding=5>
     <tr><td colspan=2>Admin Login</td></tr>
<tr><td>UserID</td><td><input type=text name=text1></td></tr>
<tr><td>Password</td><td><input type=password name=text2></td></tr>
<tr><td><a href=mainpage.php>Back</a></td><td><input type=Submit name=Login style="height:45px;width:150px"></td></tr>
  </table>   
</td><td width=50% align=right><img src="images/pic1.png" style="width:100%></td></tr>

</table>  
</form>

<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="images/head2.png">
</body>
</html>