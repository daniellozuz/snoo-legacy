<?php

	session_start();
	
	if (isset($_SESSION['e_player_exists']))
	{
		echo $_SESSION['e_player_exists'];
		unset($_SESSION['e_player_exists']);
	}
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Snoo</title>
	<meta name="description" content="Snoo" />
	<meta name="keywords" content="snoo, snooker" />
	<meta http-equiv="X-UA_Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body>

	<div id="container">
		
		<div id="login_bar">
			<div id="photo">
			<?php
				if (isset($_SESSION['logged_in']))
					echo 'Zalogowany<br/>' . $_SESSION['my_username'] . '<br/>fota';
				else
					echo 'Wylog';
			?>
			</div>
			<div id="peekaboo">
				<?php
					if (isset($_SESSION['logged_in']))
					{
						echo <<< EOT
						<form method="post" action="submit_logout.php">
							<div id="div3">
								<input type="submit" value="Log-out" name="log_out" id="log_out">
							</div>
						</form>
EOT;
					}
					else
					{
						echo <<< EOT
						<form method="post" action="submit_login.php">
							<div id="div1">
								<input type="text" name="username" id="username" placeholder="username">
								<input type="text" name="password" id="password" placeholder="password">
							</div>
							<div id="div2">
								<input type="submit" value="Log-in">
							</div>
						</form>
EOT;
					}
				?>
			</div>
			<div style="clear:both;"></div>
		</div>
		
		<div id="header">
			Snoo
		</div>
		
		<div id="menu">
			<a href="index.php"><div class="menu_opt">Main menu</div></a>
			<a href="match_creation.php"><div class="menu_opt">Match</div></a>
			<a href="stats.php"><div class="menu_opt">Stats</div></a>
			<a href="profile.php"><div class="menu_opt">Profile</div></a>
			<div style="clear: both;"></div>
		</div>
		
		<div id="content">
			Welcome to Snoo!<br /><br />
			X players from X clubs entrusted us their training. We have X matches in our database. Why don't you join?<br /><br />
			Join now!
		</div>
		
		<div id="footer">
			Snoo by Daniel Zuziak
		</div>
	
	</div>

</body>
</html>

<!-- 
2- idiotoodpornosc (usuniecie gracza i wplyw na wyciaganie jego meczu z bazy itp.)
1- automatyczna akceptacja meczu w przypadku gracza, ktory go tworzy, ewentualnie tego, ktory go edytuje po utworzeniu przez poprzedniego gracza
5- zmienic zapytania sqlowe na try/exception
2- system logowania i jego rozdzielenie na klub/uzytkownika
2- fotka w kolku
0- okno main menu
7- okno profile (zmiana hasla, zdjecia, akceptacja meczy)
9- okno turniejow (dla klubu tworzenie, dla graczy zapisy)
0- przynaleznosc do klubow
0- turnieje, ogolnie cos co spodobaloby sie klubowi jako narzedzie do zarzadzania meczami
1- akceptacja meczu (klub, p1, p2) rozdzial w statsach na zaakceptowane (na gorze, biora udzial w statsach) i niezaakceptowane (dolna tabelka z przyciskiem akceptacji w celu dodania do statystyk)
0- ukryc informacje graczy (password, haszowanie itp)
0- practice routines and materials
0- docelowy wyglad strony, motywy itp, powoli to podsumowywac, chociaz layout + kolory dobrac
9- sprobowac dorobic jakis system akwizycji pot success, safety, bla bla -> raczej nie, moze na koniec
9- dorobic js uaktulaniajacy czas shota i frejma
9- wizualizacja brejkow, ogolnie JS i frontend najpierw, malo priorytetowa sprawa
?>