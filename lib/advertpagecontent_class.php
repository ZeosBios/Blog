<?php
require_once "modules_class.php";

class AdvertPage extends Modules
{
	private $adverts;
	private $page;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->adverts = $this->advert->getAllSortDate();
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
		return $this->getTemplate("business_get");
	}
	
	protected function getMiddle()
	{
	    return $this->getBlogAdverts($this->adverts, $this->page);	
	}
	
	protected function getBottom()
	{
		return $this->getPagination(count($this->adverts), $this->config->count_blog, $this->config->add_advert);
	}
}
?>