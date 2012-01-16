<?php
include_once('printerType.php');
session_start();

class ChoosePrinter{	
	public static function uploadFile(){
		if (file_exists("uploads/" . $_FILES["file"]["name"])){
      		echo $_FILES["file"]["name"] . "  Filen finns redan ";
      	} else {
      		$target_path = "uploads/";
			$target_path = $target_path . basename($_FILES['file']['name']);
	}
		if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)){
			echo "Uppladdning lyckades";
		} else {
			echo "uppladdningen misslyckades";
		}
	}
	
	public static function printOut(){		
		if (isset($_POST['color'])){
			$_SESSION['copies'] = $_POST['copies'];
			$copies = $_SESSION['copies'];
			$upload = "uploads/";
			$_SESSION['asdf'] = $upload . $_FILES['file']['name'];
			$fileName = $_SESSION['asdf'];
			header('Location:colorJet.php');
		}
		
		else if (isset($_POST['black'])){
			$_SESSION['copies'] = $_POST['copies'];
			$copies = $_SESSION['copies'];
			$upload = "uploads/";
			$_SESSION['asdf'] = $upload . $_FILES['file']['name'];
			$fileName = $_SESSION['asdf'];
			header('Location:laserJet.php');
		}
		
		}
	}

$obj = new ChoosePrinter;
$obj->uploadFile();
$obj->printOut();

?>