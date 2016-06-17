<?php
	session_start();
	
	if(session_destroy()){
		echo "se destruyo";
		header('location:..');
		exit();
	}
?>}