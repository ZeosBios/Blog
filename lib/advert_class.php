<?php
require_once "global_class.php";

class Advert extends GlobalClass
{
	public function __construct($db)
	{
		parent::__construct("advert", $db);
	}
	
	public function getAllSortDate()
	{
		return $this->getAll("date_advert", false);
	}
	
	public function getAllOnSectionID($section_id)
	{
		return $this->getAllOnField("section_id", $section_id, "date", false);
	}
	
	public function addAdvert($title_advert, $intro_text_advert, $full_text_advert, $user_name_advert, $user_email_advert, $user_phone_advert, $date_advert)
	{
		return $this->add(array("title_advert"=>$title_advert, "intro_text_advert"=>$intro_text_advert, "full_text_advert"=>$full_text_advert, "user_name_advert"=>$user_name_advert, "user_email_advert"=>$user_email_advert, "user_phone_advert"=>$user_phone_advert, "date_advert" => $date_advert));
	}
	
}
?>