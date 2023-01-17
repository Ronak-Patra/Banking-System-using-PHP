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
$v3=$_POST['text3'];
$v4=$_POST['text4'];
// echo $var1." ".$var2;
$sqlvar="insert into actypetab values('$v1','$v2','$v3',$v4)";
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
?>
<form name=form1 method="post" action="adminacdet.php">

 <table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
     <tr><td colspan=2>Ac Type Details Entry</td></tr>
<tr><td>AcName</td><td><input type=text name=text1></td></tr>
<tr><td>AcDetails</td><td><input type=text name=text2></td></tr>
<tr><td>Facilities</td><td><input type=text name=text3></td></tr>
<tr><td>MinBalance</td><td><input type=text name=text4></td></tr>
<tr><td><a href=adminmainpage.php>Back</a></td><td><input type=Submit name=Login style="height:45px;width:150px"></td></tr>
<tr><td colspan=2><?php echo $res; ?></td></tr> 
</table>   
  
</form>

<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="images/head2.png">
</body>
</html>