<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Project</title>
</head>
<style>
    body{
        font-size:20px;
    }
    table{
        font-size:20px;
    }
</style>
<body bgcolor=lightblue>
<img src="images/head1.png"> <br><br>

<table align=center border=1 width=80% cellpadding=5 cellppacing=5>
<tr><td> ACNo</td><td>Name</td><td>Address</td><td>MobileNo</td><td>eMail</td><td>actype</td></tr>
<?php
include("connfile.php");

$sqlvar="select* from custactab where custapp='Y'";
$result=$conn->query($sqlvar);
while($row=$result->fetch_row())
{
    echo("<tr><td>".$row[0]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><tr>");
}

?>
</table>
<a href=adminmainpage.php>Back</a>
<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="images/head2.png">
</body>
</html> 