<html>
	<head>
		<meta charset="UTF-8">
	</head>
<body>
	

<?php
session_start();

class LaserJet{
		
		public $copies;
		public function printColor(){
			echo "Hej!<br />";
			echo "Du har beställt svartvitt papper<br />";
			 	
			
		}
		public function collectPayment(){
			$copies = $_SESSION['copies'];
			echo "Antal kopior$copies";
		}
				public function printXml(){
			$fileName = $_SESSION['asdf'];
			print "<p style='color: #fff; background:#000;'>".file_get_contents($fileName)."</p>";

		}
		
	}
$laserPrint = new LaserJet;
$laserPrint->printColor();
$laserPrint->collectPayment();
$laserPrint->printXml();
?>

</body>
</html>