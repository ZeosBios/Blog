<?php
header("Content-Type: text/html; charset=utf-8");
require_once "modules_class.php";

class ArticleContent extends Modules
{
	private $article_info;
	protected $id_article;
	protected $info_comment;
  
	
	
	public function __construct($db)
	{
		parent::__construct($db);
		$this->article_info = $this->article->get($this->data["id"]);
	
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
	    return $this->getArticle();		
	}
	
	private function getArticle()
	{   
		 $sr["title_article"] = $this->article_info["title_article"];
		 $sr["full_text_article"] = $this->article_info["full_text_article"];
		 $sr["date_article"] = $this->formatDate($this->article_info["date_article"]);
		 return $this->getReplaceTemplate($sr, "article");	
	}
	
	
	
	protected function getMiddle()
	{
		return $this->getComment();
	}
	
	
	protected function getComment()
	{   $page_id = $this->article_info["id"];
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
	   $sr["id"] = $this->article_info["id"];	
	   return $this->getReplaceTemplate($sr, "add_comment");
	}
	
	
	
	
}
?>