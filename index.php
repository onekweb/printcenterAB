<?php include_once('includes/header.php');?>
<body>
		<section id="wrapper">
			<h1>Välkommen till Skrivarcenter AB</h1>
				<h3>Ladda upp din fil nedanför!</h3>
			<form action="includes/printerchooser.php" method="post" enctype="multipart/form-data">
					<br />Antal kopior<br />
						<input type="number" name="copies" placeholder="Exempel 10"/><br />
					<br />Färgtyper:<br/>
						Färg:<input type="radio" name="color" value="colour" /><br />
						Svartvit<input type="radio" name="black" value="blackandwhite"/><br />
					<br />Filnamn<br/>
						<input type="file" name="file" /><br /><br />
					<input type="submit" name="send" value="Skriva ut" />		
			</form>
		</section>
		<?php include_once('includes/footer.php');?>
	</body>
</html>