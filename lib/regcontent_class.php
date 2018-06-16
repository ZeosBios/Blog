<?php
require_once "modules_class.php";

class RegContent extends Modules
{
	public function __construct($db)
	{
		parent::__construct($db);
	}
	
	protected function getTitle()
	{
		
	}
	protected function getDescription()
	{
		
	}
	protected function getKeyWords()
	{
		
	}
	protected function getAuthUser()
	{
		$sr["message_auth"] = "";
        return $this->getReplaceTemplate($sr, "form_auth");		
	}
	
	protected function getTop()
	{
		
	}
	protected function getMiddle()
	{
		$sr["message"] = $this->getMessage();
	    $sr["login"] = $_SESSION["login"];
		return $this->getReplaceTemplate($sr, "form_reg");
	}
	

	
	protected function getBottom()
	{
	}
	
	
	
}
?>