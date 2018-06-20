<?php
	
	function logado(){
		// lembrete:  ---DESTRUIR SESSION SE NAO ESTA LOGADO----
		if(!isset($_SESSION)) { 
			session_start(); 
		}
		
		if (empty($_SESSION["id"])){
			echo "usuario não logado";
			return false;
		} else {
			return true;
		}
		
		
	}
?>