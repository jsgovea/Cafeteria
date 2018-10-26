<?php
		$REPORTARERROR = true;
                $MODO_LOCAL    = true;

		/* ********* LOCALHOST (WINDOWS) ************ */
		if($MODO_LOCAL){
   		   $PROJ_ROOT_DIR         = $_SERVER["DOCUMENT_ROOT"] ."/MisManager";
		   $PROJ_GLOBALES_DIR     = $PROJ_ROOT_DIR ."/globales";
		   $PROJ_GUI_DIR          = $PROJ_GLOBALES_DIR ."/gui";
		   $PROJ_CLASES_DIR       = $PROJ_ROOT_DIR . "/clases";
		   $PROJ_FOTOS_DIR        = $PROJ_ROOT_DIR . "/fotos";
		   $PROJ_ARCHIVOS_DIR     = $PROJ_ROOT_DIR . "/archivos";
		
		   $PROJ_SERVER_DIR       = "http://" . $_SERVER["SERVER_NAME"] ."/MisManager/cms";
		   $PROJ_SERVER_GUI       = $PROJ_SERVER_DIR ."/globales/gui";		
		   $PROJ_SERVER_GLOBAL    = $PROJ_SERVER_DIR ."/globales";
		   $PROJ_SERVER_FOTOS     = $PROJ_SERVER_DIR ."/fotos";
		   $PROJ_SERVER_ARCHIVOS  = $PROJ_SERVER_DIR ."/archivos";
		   $PROJ_ADMIN_DIR        = $PROJ_SERVER_DIR ."/admin";
		   $PROJ_ADMIN_GUI        = $PROJ_ADMIN_DIR  ."/main/gui";
		
		}

               else{  /* ********* PRODUCCION (LINUX) ************ */ 
		   $PROJ_ROOT_DIR      = $_SERVER["DOCUMENT_ROOT"];
		   $PROJ_GLOBALES_DIR  = $PROJ_ROOT_DIR ."/globales";
		   $PROJ_GUI_DIR       = $PROJ_GLOBALES_DIR ."/gui";
		   $PROJ_CLASES_DIR    = $PROJ_ROOT_DIR ."/clases";
	
		   $PROJ_SERVER_DIR    = "http://" . $_SERVER["SERVER_NAME"];
		   $PROJ_SERVER_GUI    = $PROJ_SERVER_DIR ."/globales/gui";		
		   $PROJ_SERVER_GLOBAL = $PROJ_SERVER_DIR ."/globales";
		
		   $PROJ_ADMIN_DIR     = $PROJ_SERVER_DIR ."/admin";
		   $PROJ_ADMIN_GUI     = $PROJ_ADMIN_DIR  ."/main/gui";

	           $PROJ_MISMANAGER_DIR = $PROJ_ROOT_DIR ."/MisManager";
		}

?>
