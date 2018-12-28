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

				<form action="show_photos_form.php" method="post">

					<select name="idowner">
						<?php 
						require_once('connect.php');
	
						$SQLquery = 'SELECT objects_idobjects FROM photos';
						$SQLresult = mysqli_query($con,$SQLquery);
						while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
						{
							printf('<option value=%d> %s </option>',$result[0],$result[0]);
						}


						mysqli_free_result($SQLresult);
						mysqli_close($con);
						?>
					</select>
          		  	<br>
            		  	<input type="submit" value="show photos">
      			  </form>
			</TD>
		</TR>
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