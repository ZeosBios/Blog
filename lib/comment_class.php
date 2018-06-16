<?php
header("Content-Type: text/html; charset=UTF-8");
require_once "global_class.php";

class Comment extends GlobalClass
{
	
	public function __construct($db)
	{
		parent::__construct("comment", $db);
	}
	
	
	public function addComment($page_id, $user_name, $text_comment, $date)
	{
		return $this->add(array("page_id" => $page_id, "user_name" => $user_name, "text_comment" => $text_comment, "date" => $date));
	}
	
	public function getAllOnCommentID($page_id)
	{
		return $this->getAllOnField("page_id", $page_id, "date", false);
	}
}
?>