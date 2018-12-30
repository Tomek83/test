<?php

namespace test\app;

use misc\lib\config;

class dump {

	public function echo_global()
	{
		global $VAR1;
		global $VAR2;
		echo "[$VAR1]\n[$VAR2]\n";
	}

	public function echo_config()
	{
		var_dump(config::instance());
	}

}
