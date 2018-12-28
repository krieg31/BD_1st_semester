<?php

require_once('connect.php');
$idobject = mysqli_real_escape_string($con, $_POST['objects_idobjects']);

$SQLquery = "SELECT photoscol FROM photos WHERE objects_idobjects = $idobject";
$SQLresult = mysqli_query($con,$SQLquery);
$result = mysqli_fetch_array($SQLresult);
printf('<table width="100%" cellspacing="0" border="1">',"\n");	
printf('<TR>',"\n");		
printf('<TH>photos</TH>',"\n");	
printf('</TR>',"\n");		
	echo $result[0];
	echo $result[1];
	echo $result[2];
for($i = 0, $size = count($result); $i <= $size; ++$i) {
	printf('<TR>',"\n");
	printf('<TD> <img src=%s alt=""> </TD>',$result[$i]);
}
printf('</table>',"\n");
mysqli_close($con);
printf('<a href="index.html"> <P>GO BACK</P> </a>');

?>
