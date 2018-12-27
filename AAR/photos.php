<html>
 <head>
  <title>WEB-site of the Sletcova National Library</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<?php
	printf('<P>Hello world! Searching for every customer:</P> %s',"\n");
	
	require_once('connect.php');
	$SQLquery = 'SELECT * FROM photos';
	$link = mysqli_query($con,$SQLquery); 
	$SQLresult = mysqli_query($link,$SQLquery);
	$varA;

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>photos</TH> %s',"\n");
	printf('</TR> %s',"\n");


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD>',$result[2]);
		$varA = $result[2];
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
<table width="100%" cellspacing="0" border="1">	
		<TR>
			<TH>Table column 1</TH>
		</TR>
		<TR>
			<TD>
			  <img src=<?php echo $varA;?> alt="This is how my library will look like" />			
			</TD>
		</TR>
<BR>

<a href="index.html"> <P>GO BACK</P> </a>
 </body>
</html>