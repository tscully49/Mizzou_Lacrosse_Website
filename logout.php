<?php
	session_start();
	session_destroy();
	header("Location: https://babbage.cs.missouri.edu/~tps9tb/Lax_Website/index.php");
?>	