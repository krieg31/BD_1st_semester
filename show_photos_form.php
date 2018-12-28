<?php

require_once('connect.php');
$objects_idobjects = mysqli_real_escape_string($con, $_POST['objects_idobjects']);


$SQLquery = "SELECT photoscol FROM photos WHERE objects_idobjects = $objects_idobjects";
$SQLresult = mysqli_query($con,$SQLquery);
$varA = 0;
printf('<table width="100%" cellspacing="0" border="1">',"\n");	
printf('<TR>',"\n");		
printf('<TH>photos</TH>',"\n");	
printf('</TR>',"\n");		
	
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>',"\n");
		printf('<TD> <img src=%s alt=""> </TD>',$result[$varA]);
		printf('</table>',"\n");
		printf("<br>");
		$varA=$varA+1;
	}

mysqli_close($con);
printf('<a href="index.html"> <P>GO BACK</P> </a>');
?>
