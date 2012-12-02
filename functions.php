<?php

function login_required ($login_key) {
	if (!check_login($login_key)) {
		header('Location: ' . LOGIN_URL);
	}	
}

function check_login ($login_key) {
	if (!empty($login_key)) {
		//query database and find the unique key for the user session
		//if $login_key == unique user session key
		//return true
	} else {
		return false;
	}
}