<?php
require_once "modules_class.php";

class MessageContent extends Modules
{
	private $message_title;
	private $message_text;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->message_title = $this->message->getTitle($_SESSION["page_message"]);
		$this->message_text = $this->message->getText($_SESSION["page_message"]);
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
		$sr["title"] = $this->message_title;
	    $sr["text"] = $this->message_text;
		return $this->getReplaceTemplate($sr, "message");
	}
	

	
	protected function getBottom()
	{
	}
	
	
	
}
?>