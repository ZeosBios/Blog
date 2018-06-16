<?php
require_once "modules_class.php";

class FrontPage extends Modules
{
	private $articles;
	private $page;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->articles = $this->article->getAllSortDate();
		$this->page = (isset($this->data["page"]))?$this->data["page"] : 1;
	
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

		return $this->getTemplate("article_get");
	}
	
	protected function getMiddle()
	{
	    return $this->getBlogArticles($this->articles, $this->page);	
	}
	
	
	protected function getBottom()
	{
		return $this->getPagination(count($this->articles), $this->config->count_blog, $this->config->add_article);
	}
}
?>