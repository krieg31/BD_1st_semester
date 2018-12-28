<?php

require_once('connect.php');
$objects_idobjects = mysqli_real_escape_string($con, $_POST['objects_idobjects']);


$SQLquery = "SELECT photoscol FROM photos WHERE objects_idobjects = $objects_idobjects";
$SQLresult = mysqli_query($con,$SQLquery);
$varA = 0;
printf('<table width="100%" cellspacing="0" border="1">');	
printf('<TR>');		
printf('<TH>photos</TH>');	
printf('</TR>');		
printf('<TR>');	
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TD> <img src=<?php echo %s?>/>	</TD>',$result[$varA]);
		printf("\n");
		$varA=$varA+1;
	}
printf('</TR>');		
printf('</table>');

mysqli_close($con);
printf('<a href="index.html"> <P>GO BACK</P> </a>');
?>
