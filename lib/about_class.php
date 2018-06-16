<?php
require_once "global_class.php";

class About extends GlobalClass
{
	public function __construct($db)
	{
		parent::__construct("about", $db);
	}
}
?>