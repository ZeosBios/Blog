<?php
header("Content-Type: text/html; charset=UTF-8");
require_once "modules_class.php";

class ProjectContent extends Modules
{
	private $project_info;
	private $info_comment;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->project_info = $this->project->get($this->data["id"]);
	
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
	    return $this->getProject();		
	}
	
	private function getProject()
	{   
		$sr["title_project"] = $this->project_info["title_project"];
		$sr["intro_text_project"] = $this->project_info["intro_text_project"];
		$sr["product"] = $this->project_info["product"];
		$sr["competition"] = $this->project_info["competition"];
		$sr["technology"] = $this->project_info["technology"];
		$sr["instruments"] = $this->project_info["instruments"];
		$sr["logistics"] = $this->project_info["logistics"];
		$sr["resources"] = $this->project_info["resources"];
		$sr["counterparties"] = $this->project_info["counterparties"];
		$sr["finance"] = $this->project_info["finance"];
		$sr["user_name_project"] = $this->project_info["user_name_project"];
		$sr["user_email_project"] = $this->project_info["user_email_project"];
		$sr["user_phone_project"] = $this->project_info["user_phone_project"];
		$sr["date_project"] = $this->formatDate($this->project_info["date_project"]);
		return $this->getReplaceTemplate($sr, "project");	
	}
	
	
	
	protected function getMiddle()
	{
		return $this->getComment();
	}
	
	protected function getComment()
	{
		$page_id = $this->project_info["id"];
	    $info_comment = $this->comment->getAllOnCommentID($page_id);
		for ($i = 0; $i < count($info_comment); $i++)
		{
			$sr["user_name"] = $info_comment[$i]["user_name"];
			$sr["text_comment"] = $info_comment[$i]["text_comment"];
			$sr["date"] = $this->formatDate($info_comment[$i]["date"]);
			$text .= $this->getReplaceTemplate($sr, "text_comment");
		}
		return $text;
	}
	
	protected function getBottom()
	{
	  $sr["id"] = $this->project_info["id"];	
	   return $this->getReplaceTemplate($sr, "add_comment");	
	}
	
	
}
?>