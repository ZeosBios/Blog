<?php
header("Content-Type: text/html; charset=UTF-8");
require_once "modules_class.php";

class ArticleAdd extends Modules
{
	private $articles;
	
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
		return $this->getTemplate("add_article");
	}
	
	protected function getBottom()
	{
		
	}
}
?>