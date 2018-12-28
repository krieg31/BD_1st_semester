<?php


require_once('connect.php');
$passport = mysqli_real_escape_string($con, $_POST['passport']);
$adress = mysqli_real_escape_string($con, $_POST['adress']);
$surname = mysqli_real_escape_string($con, $_POST['surname']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$fathername = mysqli_real_escape_string($con, $_POST['fathername']);

echo $passport;
echo $adress;
echo $surname;
echo $name;
echo $fathername;

$maxsqlzapr="SELECT MAX(idcustomer) AS max FROM customers";
$maxSQL = mysqli_query($con,$maxsqlzapr);

$row = mysqli_fetch_array( $maxSQL );
$varMaxid = $row['max'] +1;

$SQLquery = "INSERT INTO customers (idcustomer, passport, adress, surname, name, fathername) VALUES ($varMaxid, $passport,'$adress','$surname','$name','$fathername')";
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