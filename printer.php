
<?php include_once('includes/header.php');?>

<body>
		<section id="wrapper">
			<h1>Välkommen till Skrivarcenter AB</h1>

				<?php
				if ($_FILES["file"]["error"] > 0)
				  {
				  echo "Error: " . $_FILES["file"]["error"] . "<br />";
				  }
				else
				  {
				  echo "Uppladd: " . $_FILES["file"]["name"] . "<br />";
				  echo "Typ: " . $_FILES["file"]["type"] . "<br />";
				  echo "Storlek: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
				  echo "Filen finns i: " . $_FILES["file"]["tmp_name"];
				  }
				  echo "<br />";
				  echo "<a href='../skrivarecenter/index.php'>Gå tillbaka här!</a>";
				?>
		</form>
		</section>
		<?php include_once('includes/footer.php');?>
	</body>
</html>