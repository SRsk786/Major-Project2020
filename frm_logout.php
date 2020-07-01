<?php
session_start();
if (session_destroy()) {
	header('Location:frm_login.php');
}
 ?>