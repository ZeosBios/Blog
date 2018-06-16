<?php
require_once "modules_class.php";

class AboutContent extends Modules
{
	private $about_info;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->about_info = $this->about->getAll();
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
	    return $this->getAbout();		
	}
	
	
	private function getAbout()
	{   
		 $sr["text_site"] = $this->article_info["text_site"];
		 return $this->getReplaceTemplate($sr, "about");	
	}
	
	
	protected function getBottom()
	{
		
	}
}
?>