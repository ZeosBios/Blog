<?php
require_once "modules_class.php";

class AdvertContent extends Modules
{
	private $advert_info;
	protected $id_advert;
	protected $info_comment;
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->advert_info = $this->advert->get($this->data["id"]);
	
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
	    return $this->getAdvert();		
	}
	
	private function getAdvert()
	{   
		 $sr["title_advert"] = $this->advert_info["title_advert"];
		 $sr["full_text_advert"] = $this->advert_info["full_text_advert"];
		 $sr["user_name_advert"] = $this->advert_info["user_name_advert"];
		 $sr["user_email_advert"] = $this->advert_info["user_email_advert"];
		 $sr["user_phone_advert"] = $this->advert_info["user_phone_advert"];
		 $sr["date_advert"] = $this->formatDate($this->advert_info["date_advert"]);
		 return $this->getReplaceTemplate($sr, "business_advert");	
	}
	
	
	
	protected function getMiddle()
	{
		return $this->getComment();
	}
	
	protected function getComment()
	{
		$page_id = $this->advert_info["id"];
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
       $sr["id"] = $this->advert_info["id"];	
	   return $this->getReplaceTemplate($sr, "add_comment");	
	}
	
	
	
}
?>