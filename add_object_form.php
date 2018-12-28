<?php


require_once('connect.php');
$adress = mysqli_real_escape_string($con, $_POST['adress']);
$square = mysqli_real_escape_string($con, $_POST['square']);
$room = mysqli_real_escape_string($con, $_POST['room']);
$floors = mysqli_real_escape_string($con, $_POST['floors']);
$descriptionl = mysqli_real_escape_string($con, $_POST['descriptionl']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$predoplata = mysqli_real_escape_string($con, $_POST['predoplata']);
$free = mysqli_real_escape_string($con, $_POST['free']);
$idowner = mysqli_real_escape_string($con, $_POST['idowner']);

echo $adress;
echo $square;
echo $room;
echo $floors;
echo $descriptionl;
echo $price;
echo $predoplata;
echo $free;
echo $idowner;

$maxsqlzapr="SELECT MAX(idobjects) AS max FROM objects";
$maxSQL = mysqli_query($con,$maxsqlzapr);

$row = mysqli_fetch_array( $maxSQL );
$varMaxid = $row['max'];

$SQLquery = "INSERT INTO objects (idobjects, adress, square, room, floors, descriptionl, price, predoplata, free, customers_idcustomer) VALUES ($varMaxid, '$adress',$square,$room,$floors,'$descriptionl',$price,$predoplata,$free,$idowner)";
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