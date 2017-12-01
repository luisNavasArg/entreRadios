<?php
function comprimir($filename,$fileNombre){		
	$zip = new ZipArchive();
	if($zip->open($filename,ZIPARCHIVE::CREATE)===true){
		$zip->addfile($fileNombre);
		$zip->close();	
		}
	}



		
?>
