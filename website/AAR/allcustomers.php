<html>
 <head>
  <title>WEB-site of the Sletcova National Library</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<?php
	printf('<P>Hello world! Searching for every customer:</P> %s',"\n");
	// ‘®¥¤¨­ï¥¬áï, ¢ë¡¨à ¥¬ ¡ §ã ¤ ­­ëå VER3
	
	$link = mysqli_connect('10.14.129.132', 'HorchoevArtur', 'we4DGTeQ','HorchoevArturDB')
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	printf('<P>Succesfully connected!</P> %s',"\n");
	
	// ‚ë¯®«­ï¥¬ SQL-§ ¯à®á
	$SQLquery = 'SELECT * FROM customers';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>First Name</TH> %s',"\n");
	printf('	<TH>Family Name</TH> %s',"\n");
	printf('	<TH>Book</TH> %s',"\n");
	printf('</TR> %s',"\n");


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD> <TD>%s</TD> <TD> %s (%d) </TD>',$result[1],$result[2],$result[5],$result[6]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	// Žá¢®¡®¦¤ ¥¬ ¯ ¬ïâì ®â à¥§ã«ìâ â 
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>
 </body>
</html>