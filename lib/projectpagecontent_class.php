<?php
require_once "modules_class.php";

class ProjectPage extends Modules
{
	private $projects;
	private $page;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->projects = $this->project->getAllSortDate();
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
		return $this->getTemplate("project_get");
	}
	
	protected function getMiddle()
	{
	    return $this->getBlogProjects($this->projects, $this->page);	
	}
	
	protected function getBottom()
	{
		return $this->getPagination(count($this->projects), $this->config->count_blog, $this->config->add_project);
	}
}
?>