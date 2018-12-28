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
printf('<TR>',"\n");	
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{

		echo "varA";
		echo "\n";
		echo $varA;
		echo "\n";
		printf('<TD> <img src=%s alt=""> </TD>',$result[$varA]);
		echo $result[$varA];
		echo "\n";
		printf("\n");
		$varA=$varA+1;
	}
printf('</TR>',"\n");		
printf('</table>',"\n");

mysqli_close($con);
printf('<a href="index.html"> <P>GO BACK</P> </a>');
?>
