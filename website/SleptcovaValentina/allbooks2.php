<html>
 <head>
  <title>WEB-site of the Sletcova National Library</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<?php
	printf('<P>Hello world! Searching for every book:</P>');
	// ������塞��, �롨ࠥ� ���� ������ VER3
	
	$link = mysqli_connect('10.14.129.132', 'SlepcovaValentina', 'Dc6LZquV','SlepcovaValentinaDB')
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	echo '<P>Succesfully connected!</P>';
	
	// �믮��塞 SQL-�����
	$SQLquery = 'SELECT * FROM authors INNER JOIN books on books.AuthorID=authors.AuthorID';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table>');
	printf('<TR>');
	printf('	<TH>First Name</TH>');
	printf('	<TH>Family Name</TH>');
	printf('	<TH>Book</TH>');
	printf('</TR>');


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR> %s','/n');
		printf('<TD> %s </TD> nn <TD>%s</TD> /n <TD> %s (%d) </TD> %s',$result[1],$result[2],$result[5],$result[6],'\n');
		printf('</TR> %s','/n');
	}
	printf('</table>');
	// �᢮������� ������ �� १����
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>
 </body>
</html>