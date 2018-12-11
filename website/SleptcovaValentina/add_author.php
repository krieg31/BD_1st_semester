<?php
$link = mysqli_connect('10.14.129.132', 'SlepcovaValentina', 'Dc6LZquV','SlepcovaValentinaDB')
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$first_name = $_POST['first_name'];
$family_name = $_POST['family_name'];

//$SQLquery = "INSERT INTO authors (AuthorID, FirstName, FamilyName) VALUES ((SELECT max(AuthorID) from authors) + 1, '$first_name','$family_name')";
//if(!mysql_query($link,$SQLquery)) {
//        echo $SQLquery;
//	echo 'Data not inserted';
//} else {
//	echo $SQLquery;
//    	echo 'Data inserted';
//}
//header("refresh:2; url=form.html");
?>