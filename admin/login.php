<?php

require_once '..' . DIRECTORY_SEPARATOR . 'globals.php';

if (!check_login($login_key)) {
	$status_message = 'Please login to enter';
}
?>

<form>
<div><?php echo isset($status_message) ? $status_message : ''; ?></div>
<br />
User <input name = "user" ><br />
Pass <input name = "pass" ><br />
<input name = "submit">
</form>

