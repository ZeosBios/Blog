<?php
require_once "global_class.php";

class Project extends GlobalClass
{
	public function __construct($db)
	{
		parent::__construct("project", $db);
	}
	
	public function getAllSortDate()
	{
		return $this->getAll("date_project", false);
	}
	
	public function getAllOnSectionID($section_id)
	{
		return $this->getAllOnField("section_id", $section_id, "date", false);
	}
	
	public function addProject($title_project, $intro_text_project, $product, $competition, $technology, $instruments, $logistics, $resources, $counterparties, $promotion, $finance, $user_name_project, $user_email_project, $user_phone_project, $date_project)
	{
		return $this->add(array("title_project" => $title_project, "intro_text_project" => $intro_text_project, "product" => $product, "competition" => $competition, "technology" => $technology, "instruments" => $instruments, "logistics" => $logistics, "resources" => $resources, "counterparties" => $counterparties, "promotion" => $promotion, "finance" => $finance, "user_name_project" => $user_name_project, "user_email_project" => $user_email_project, "user_phone_project" => $user_phone_project, "date_project" => $date_project));
	}
	
	
	
	
	
}
?>