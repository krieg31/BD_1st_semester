	$link = 
	    
	printf('<P>Succesfully connected!</P> %s',"\n");
	
	// Выполняем SQL-запрос
	$SQLquery = 'SELECT * FROM authors INNER JOIN books on books.AuthorID=authors.AuthorID';
	$SQLresult = mysqli_query($link,$SQLquery);


<?php
$link = mysqli_connect('10.14.129.132', 'SlepcovaValentina', 'Dc6LZquV','SlepcovaValentinaDB')
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$first_name = $_POST['first_name'];
$family_name = $_POST['family_name'];

$sql = "INSERT INTO authors (AuthorID, FirstName, FamilyName) VALUES ((SELECT max(AuthorID) from authors) + 1, '$Name','$Email')";
if(!mysql_query($con,$sql)) {
    echo 'Data not inserted';
} else {
    echo 'Data inserted';
}
//header("refresh:2; url=form.html");
?>