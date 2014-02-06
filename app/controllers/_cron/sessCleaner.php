<?php
view::autoRender ( false );

if (defined ( 'STDIN' )) {
	echo "\r\nStarting PHP Session Cleaner for jFramework...\r\n";
	// Loading Class
	tools::Library ( 'jSessCleaner' );
	// Starts Session Cleaner
	$sc = new jSessCleaner ();
	// Get Old Session Files
	$files = $sc->getOldSessFiles ();
	// Clean and Show
	$sc->cleanupAndShow ( $files );
}
?>