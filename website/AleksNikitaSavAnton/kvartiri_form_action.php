<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$book_authorid = mysqli_real_escape_string($link, $_POST['adres']);
$book_title = mysqli_real_escape_string($link, $_POST['ploshad']);
$book_title1 = mysqli_real_escape_string($link, $_POST['count_komnat']);
$book_title2 = mysqli_real_escape_string($link, $_POST['etazh']);
$book_title3 = mysqli_real_escape_string($link, $_POST['kratk']);
$book_title4 = mysqli_real_escape_string($link, $_POST['4i4']);
$book_title5 = mysqli_real_escape_string($link, $_POST['kommisia']);

echo $book_authorid;
echo $book_title;
echo $book_title1;
echo $book_title2;
echo $book_title3;
echo $book_title4;
echo $book_title5;

$SQLquery = "INSERT INTO kvartiti (id_kvartiri, adres, ploshad, count_komnat, etazh, kratk, 4i4, kommisia) VALUES ((SELECT max(id_kvartiri)+1 from (Select id_kvartiri from kvartiti) as id_kvartiri), $book_authorid,'$book_title',$book_title1, $book_title2, $book_title3, $book_title4, $book_title5)";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

?>