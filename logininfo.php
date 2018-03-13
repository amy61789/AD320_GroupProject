<?php
session_start();

function is_logged_in() {
	if (!isset($_SESSION["email"]) && isset($_COOKIE["email"])) {
		$_SESSION["email"] = $_COOKIE["email"];
	}
	return isset($_SESSION["email"]);
}

function logout() {
	unset($_SESSION["email"]);
	setcookie("email", "", 0, "/");
}
?>