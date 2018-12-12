<?php
printf('<P>Hello World! Address </P>');
$link = mysqli_connect('10.14.129.132','MigalkinEgor','urtvddBq','MigalkinEgorDB') or die('Error! You suck!'.mysqli_connect_error());
echo '<P>Successfully connected<\P>';
$SQLquery = 'SELECT * FROM Object';
$SQLresult = mysqli_query($link,$SQLquery);
mysqli_free_result($SQLresult);
mysqli_close($link);
?>
