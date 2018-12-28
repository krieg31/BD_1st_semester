<?php

require_once('connect.php');
$idobject = mysqli_real_escape_string($con, $_POST['idobject']);
$url = mysqli_real_escape_string($con, $_POST['url']);

$maxsqlzapr="SELECT MAX(idphotos) AS max FROM photos";
$maxSQL = mysqli_query($con,$maxsqlzapr);

$row = mysqli_fetch_array( $maxSQL );
$varMaxid = $row['max'] +1;

$SQLquery = "INSERT INTO photos (idphotos, objects_idobjects, photoscol) VALUES ($varMaxid, $idobject,'$url')";
echo '<BR> SQL query: ';
echo $SQLquery;
if (mysqli_query($con, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

printf('<a href="index.html"> <P>GO BACK</P> </a>');
?>