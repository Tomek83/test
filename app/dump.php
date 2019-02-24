<?php

namespace test\app;

use misc\lib\config;

class dump {

	public function echo_config()
	{
		var_dump(config::instance());
	}

}
