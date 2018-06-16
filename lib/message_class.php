<?php
require_once "globalmessage_class.php";

class Message extends GlobalMessage 
{
	private $data;
	
	public function __construct($file)
	{
		parent::__construct("messages");
	}

}
?>