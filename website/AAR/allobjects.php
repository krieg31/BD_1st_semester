<html>
 <head>
  <title>WEB-site of the Sletcova National Library</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<?php
	printf('<P>Hello world! Searching for every customer:</P> %s',"\n");
	
	require_once('connect.php');
	$SQLquery = 'SELECT * FROM objects';
	$link = mysqli_query($con,$SQLquery); 
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>idobject</TH> %s',"\n");
	printf('	<TH>adress</TH> %s',"\n");
	printf('	<TH>square</TH> %s',"\n");
	printf('	<TH>room</TH> %s',"\n");
	printf('	<TH>floors</TH> %s',"\n");
	printf('	<TH>description</TH> %s',"\n");
	printf('	<TH>price</TH> %s',"\n");
	printf('	<TH>predoplata</TH> %s',"\n");
	printf('	<TH>free</TH> %s',"\n");
	printf('	<TH>idowner</TH> %s',"\n");
	printf('</TR> %s',"\n");


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD> <TD>%s</TD> <TD> %s  </TD><TD> %s  </TD><TD> %s  </TD><TD> %s  </TD><TD> %s  </TD><TD> %s  </TD><TD> %s  </TD><TD> %s  </TD>',$result[0],$result[1],$result[2],$result[3],$result[4],$result[5],$result[6],$result[7],$result[8],$result[9]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>
 </body>
</html>