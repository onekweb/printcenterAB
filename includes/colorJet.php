<meta charset="UTF-8" />
<?php
session_start();

class ColorJet{		
		public $copies;
		public function printColor(){
			echo "färgutskrift<br/>";	 	
		}
		public function collectPayment(){
			$copies = $_SESSION['copies'];
			echo "Antal kopior:". "".$copies;
		}		
		public function printXml(){
			$fileName = $_SESSION['asdf'];
			print "<p style='color: red;'>".file_get_contents($fileName)."</p>";
			
		}
		
	}
$colorPrint = new ColorJet;
$colorPrint->printColor();
$colorPrint->collectPayment();
$colorPrint->printXml();

?>