<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Horchoev_Burtsev</title>
	<link rel="stylesheet" type="text/css" href="sitecss.css">
	<link rel="shortcut icon" href="logo.png" type="image/png" >
</head>
<body>
	<div class="container">
		<div class="header">
				Welcome to Horchoev_Burtsev site.
				<p> Please feel free to browse thorugh the site.</p>
		</div>
		<div class="sidebar">
        			<P>Навигация</P><br>
        <a href="allcustomers.php"> <P>Клиенты</P> </a>
        <a href="allobjects.php"> <P>Объекты</P> </a>
        <a href="photos.php"> <P>Фотографии</P> </a>
        <a href="add_object.php"> <P>Добавить новый объект</P> </a>
        <a href="add_customer.php"> <P>Добавить нового клиента</P> </a>
        <a href="index.html"> <P>Главная страница</P> </a>
		</div>
		<div class="content">
			 	<table width="100%" cellspacing="0" border="1">	
		<TR>
			<TH>Table column 1</TH>
		</TR>
		<TR>
			<TD>
			  <P>Add object:</P>
			  <form action="add_customer_form.php" method="post">
					passport: <input type="text" name="passport">
          		  	<br>
					adress: <input type="text" name="adress">
          		  	<br>
					surname: <input type="text" name="surname">
          		  	<br>
					name: <input type="text" name="name">
          		  	<br>
					fathername: <input type="text" name="fathername">
          		  	<br>
            		  	<input type="submit" value="Add customer">
      			  </form>
			</TD>
		</TR>
	<?php

?>
</table>
<BR>
<a href="index.html"> <P>На главную</P> </a>
		</div>
		
		<div class="footer">
			&copy; Horchoev_Burtsev 2018.  все вопросы по телефону 8(800)123456
		</div>

	</div>
</body>
</html>