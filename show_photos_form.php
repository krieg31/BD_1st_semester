<?php

require_once('connect.php');
$idobject = mysqli_real_escape_string($con, $_POST['objects_idobjects']);

$SQLquery = "SELECT DISTINCT photoscol FROM photos INNER JOIN objects ON photos.objects_idobjects = $idobject";
$SQLresult = mysqli_query($con,$SQLquery);
$result = mysqli_fetch_array($SQLresult,MYSQLI_BOTH);
printf('<table width="100%" cellspacing="0" border="1">',"\n");	
printf('<TR>',"\n");		
printf('<TH>photos</TH>',"\n");	
printf('</TR>',"\n");		
echo count($result);
for($i = 0, $size = count($result); $i <= $size; ++$i) {
	print''.$result[$i].'';
}
for($i = 0, $size = count($result); $i <= $size; ++$i) {
	print '<TR>
				<TD> 
					<img src="'.$result[$i].'" alt=""> 
				</TD>
			</TR>';
}
printf('</table>',"\n");
mysqli_close($con);
printf('<a href="index.html"> <P>GO BACK</P> </a>');

?>
