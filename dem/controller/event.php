<?php
require_once('event_log.php');
session_start();
$id = $_SESSION["id"];
insertlog($id);
?>
      <script>
		window.location="../auditorio1.html"
	  </script>
