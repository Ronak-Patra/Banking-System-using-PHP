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

<table align=center border=1 width=80% cellpadding=5 cellppacing=5>
<tr><td> AC Name</td><td>Details</td><td>Facilities</td><td>Min Bal</td></tr>
<?php
include("connfile.php");

$sqlvar="select* from actypetab order by actypename";
$result=$conn->query($sqlvar);
while($row=$result->fetch_row()){
    echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><tr>");
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