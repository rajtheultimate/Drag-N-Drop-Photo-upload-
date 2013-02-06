<?php  require_once('connection.php'); 
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name'])){
		echo($_POST['index']);
	}
		
        
		$file_name=$_FILES['file']['name'];
		$album_name=$_POST['album'];
        $query="INSERT INTO  `schoosj5_dbase`.`upload_data` (`album_name`,`FILE_NAME`,`FILE_SIZE`,`FILE_TYPE`)
		VALUES ('$album_name','$file_name','',''); "; 
		mysql_query($query); 
	exit;
}
?>
