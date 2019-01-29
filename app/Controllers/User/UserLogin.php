<?php

	class UserLogin {
		if(isset($_POST["login"])) {
			$field = array(
				'usercode'     =>     $_POST["username"],
				'passcode'     =>     $_POST["password"]
			);
		}
	}