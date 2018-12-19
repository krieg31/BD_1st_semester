<?php

require_once('connect.php');
$SQLquery = "INSERT INTO objects (idobjects, adress, square, room, floors, descriptionl, price, predoplata, free, customers_idcustomer) VALUES ((SELECT max(idobjects)+1 from (Select idobjects from objects) as ID), '$adress',$square,$room,$floors,'$descriptionl',$price,$predoplata,$free,$idowner)";
$link = mysqli_query($con,$SQLquery); 

$adress = mysqli_real_escape_string($link, $_POST['adress']);
$square = mysqli_real_escape_string($link, $_POST['square']);
$room = mysqli_real_escape_string($link, $_POST['room']);
$floors = mysqli_real_escape_string($link, $_POST['floors']);
$descriptionl = mysqli_real_escape_string($link, $_POST['descriptionl']);
$price = mysqli_real_escape_string($link, $_POST['price']);
$predoplata = mysqli_real_escape_string($link, $_POST['predoplata']);
$free = mysqli_real_escape_string($link, $_POST['free']);
$idowner = mysqli_real_escape_string($link, $_POST['idowner']);

echo $adress;
echo $square;
echo $room;
echo $floors;
echo $descriptionl;
echo $price;
echo $predoplata;
echo $free;
echo $idowner;

echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="index.html"> <P>GO BACK</P> </a>');
?>