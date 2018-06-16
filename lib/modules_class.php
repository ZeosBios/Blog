<?php
header("Content-Type: text/html; charset=UTF-8");
require_once "config_class.php";
require_once "article_class.php";
require_once "advert_class.php";
require_once "project_class.php";
require_once "message_class.php";
require_once "banner_class.php";
require_once "comment_class.php";
require_once "menu_class.php";
require_once "about_class.php";
require_once "user_class.php";

abstract class Modules
{
	protected $config;
	protected $article;
	protected $advert;
	protected $project;
	protected $user;
	protected $message;
	protected $banner;
	protected $comment;
	protected $menu;
	protected $about;
	protected $data;
	
	public function __construct($db)
	{
		session_start();
		$this->config = new Config();
		$this->article = new Article($db);
		$this->advert = new Advert($db);
		$this->project = new Project($db);
		$this->message = new Message($db);
		$this->banner = new Banner($db);
		$this->comment = new Comment($db);
		$this->menu = new Menu($db);
		$this->about = new About($db);
		$this->user = new User($db);
		$this->data = $this->secureData($_GET);
	}
	
	public function getContent()
	{
		$sr["title"] = $this->getTitle();
		$sr["meta_desc"] = $this->getDescription();
		$sr["meta_key"] = $this->getKeyWords();
		$sr["menu"] = $this->getMenu();
		$sr["banners"] = $this->getBanners();
		$sr["top"] = $this->getTop();
		$sr["middle"] = $this->getMiddle();
		$sr["bottom"] = $this->getBottom();
		$sr["auth_user"] = $this->getAuthUser();
		return $this->getReplaceTemplate($sr, "main");	
	}
	
	abstract protected function getTitle();
	abstract protected function getDescription();
	abstract protected function getKeyWords();
	abstract protected function getMiddle();
	
	protected function getMenu()
	{
		$menu = $this->menu->getAll();
		for ($i = 0; $i < count($menu); $i++)
		{
			$sr["title"] = $menu[$i]["title"];
			$sr["link"] = $menu[$i]["link"];
			$text .= $this->getReplaceTemplate($sr, "menu_item");
		}
		return $text;
	}
	
	protected function getAuthUser()
	{
		return "";		
	}
	
	protected function getBanners()
	{
		$banners = $this->banner->getAll();
		for ($i = 0; $i < count($banners); $i++)
		{
			$sr["code"] = $banners[$i]["code"];
			$text .= $this->getReplaceTemplate($sr, "banner");
		}
		return $text;
		
	}
	
	protected function getTop()
	{
		return "";
	}
	
	
	protected function getBottom()
	{
		return "";
	}
	
	private function secureData($data)
	{
		foreach($data as $key => $value)
		{
			if (is_array($value)) $this->secureData($value);
			else $data[$key] = htmlspecialchars($value);
		}
		return $data;
	}
	
	protected function getBlogArticles($articles, $page)
	{
		$start = ($page - 1) * $this->config->count_blog;
		$end = count($articles) > $start + $this->config->count_blog ? $start + $this->config->count_blog: count($articles);
		for ($i = $start; $i < $end; $i++)
			{
			$sr["title_article"] = $articles[$i]["title_article"];
			$sr["intro_text_article"] = $articles[$i]["intro_text_article"];
			$sr["date_article"] = $this->formatDate($articles[$i]["date_article"]);
			$sr["link_article"] ="?view=articlecontent&amp;id=".$articles[$i]["id"];
			$text .= $this->getReplaceTemplate($sr,"article_intro");
		    return $text;
			}
	}
	
	protected function getBlogProjects($projects, $page)
	{
		$start = ($page - 1) * $this->config->count_blog;
		$end = count($projects) > $start + $this->config->count_blog ? $start + $this->config->count_blog: count($projects);
		for ($i = $start; $i < $end; $i++)
			{
			$sr["title_project"] = $projects[$i]["title_project"];
			$sr["intro_text_project"] = $projects[$i]["intro_text_project"];
			$sr["date_project"] = $this->formatDate($projects[$i]["date_project"]);
			$sr["link_project"] ="?view=projectcontent&amp;id=".$projects[$i]["id"];
			$text .= $this->getReplaceTemplate($sr,"project_intro");
		    return $text;
			}
	
	}
	
	protected function getBlogAdverts($adverts, $page)
	{
		$start = ($page - 1) * $this->config->count_blog;
		$end = count($adverts) > $start + $this->config->count_blog ? $start + $this->config->count_blog: count($adverts);
		for ($i = $start; $i < $end; $i++)
			{
			$sr["title_advert"] = $adverts[$i]["title_advert"];
			$sr["intro_text_advert"] = $adverts[$i]["intro_text_advert"];
			$sr["date_advert"] = $this->formatDate($adverts[$i]["date_advert"]);
			$sr["link_advert"] ="?view=advertcontent&amp;id=".$adverts[$i]["id"];
			$text .= $this->getReplaceTemplate($sr,"business_intro");
		    return $text;
			}
		
	}
	
	protected function getPagination($count, $count_on_page, $link)
	{
		$count_pages = ceil($count / $count_on_page);
		$sr["number"] = 1;
		$sr["link"] = $link;
		$sym = (strpos($link, "?") != false)? "&amp;": "?";
		$pages = $this->getReplaceTemplate($sr, "number_page");
		for ($i = 2; $i <= $count_pages; $i++)
		{
			$sr["number"] = $i;
			$sr["link"] = $link.$sym."page=$i";
			$pages .= $this->getReplaceTemplate($sr, "number_page");
		}
		$els["number_pages"] = $pages;
		return $this->getReplaceTemplate($els, "pagination");
		
	}
	
	protected function formatDate($time)
	{
		
		return date("Y-m-d H:i:s", $time);
	}
	
	protected function getMessage()
	{
		$message = $_SESSION["message"];
		unset($_SESSION["message"]);
		$sr["message"] = $this->message->getText($message);
		return $this->getReplaceTemplate($sr, "message_string");
	}
	
	protected function getTemplate($name)
	{
		$text = file_get_contents($this->config->dir_tmpl.$name.".tpl");
		return str_replace("%address%", $this->config->address, $text);
	}
	
	protected function getReplaceTemplate($sr, $template)
	{
		return $this->getReplaceContent($sr, $this->getTemplate($template));
	}
	
	
	
	private function getReplaceContent($sr, $content)
	{
		$search = array();
		$replace = array();
		$i = 0;
		foreach($sr as $key => $value)
		{
			$search[$i] = "%$key%";
			$replace[$i] = "$value";
			$i++;
		}
		return str_replace($search, $replace, $content);
	}
	
}
?>