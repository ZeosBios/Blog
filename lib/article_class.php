<?php
require_once "global_class.php";

class Article extends GlobalClass
{
	public function __construct($db)
	{
		parent::__construct("article", $db);
	}
	
	public function getAllSortDate()
	{   
		return $this->getAll("date_article", false);
	}
	
	public function getAllOnSectionID($section_id)
	{
		return $this->getAllOnField("section_id", $section_id, "date", false);
	}
    
	public function addArticle($title_article, $intro_text_article, $full_text_article, $date_article)
	{
		return $this->add(array("title_article" => $title_article, "intro_text_article" => $intro_text_article, "full_text_article" => $full_text_article, "date_article" => $date_article));
	}
	
}
?>