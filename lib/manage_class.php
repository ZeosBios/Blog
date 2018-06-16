<?
header("Content-Type: text/html; charset=UTF-8");
require_once "config_class.php";
require_once "comment_class.php";
require_once "article_class.php";
require_once "advert_class.php";
require_once "project_class.php";
require_once "user_class.php";

class Manage 
{
	private $config;
	private $comment;
	private $article;
	private $advert;
	private $project;
	private $user;
	private $data;
	
	public function __construct($db)
	{
		session_start();
		$this->config = new Config();
		$this->comment = new Comment($db);
		$this->article = new Article($db);
		$this->advert = new Advert($db);
		$this->project = new Project($db);
		$this->user = new User($db);
		$this->data = $this->secureData($_POST);
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
	
	
	public function regUser()
	{
		$login = $this->data["login"];
		$password = md5($this->data["password"].$this->config->secret);
		$datereg = time();
		return $this->user->addUser($login, $password, $datereg);
	}
	
	
	public function addComm()
	{
		$page_id = $this->data["page_id"];
		$user_name = $this->data["user_name"];
		$text_comment = $this->data["text_comment"];
		$date = time();
		return $this->comment->addComment($page_id, $user_name, $text_comment, $date);
	
	}

     public function addArt()
	{
		$title_article = $this->data["title_article"];
		$intro_text_article = $this->data["intro_text_article"];
		$full_text_article = $this->data["full_text_article"];
		$date_article = time();
		return $this->article->addArticle($title_article, $intro_text_article, $full_text_article, $date_article);
	
	}	
	public function addAdv()
	{
		$title_advert = $this->data["title_advert"];
		$intro_text_advert = $this->data["intro_text_advert"];
		$full_text_advert = $this->data["full_text_advert"];
		$user_name_advert = $this->data["user_name_advert"];
		$user_email_advert = $this->data["user_email_advert"];
		$user_phone_advert = $this->data["user_phone_advert"];
		$date_advert = time();
		return $this->advert->addAdvert($title_advert, $intro_text_advert, $full_text_advert, $user_name_advert, $user_email_advert, $user_phone_advert, $date_advert);
	}	
	
	public function addPro()
	{
		$title_project = $this->data["title_project"];
		$intro_text_project = $this->data["intro_text_project"];
		$product = $this->data["product"];
		$competition = $this->data["competition"];
		$technology = $this->data["technology"];
		$instruments = $this->data["instruments"];
		$logistics = $this->data["logistics"];
		$resources = $this->data["resources"];
		$counterparties = $this->data["counterparties"];
		$promotion = $this->data["promotion"];
		$finance = $this->data["finance"];
		$user_name = $this->data["user_name_project"];
		$user_email = $this->data["user_email_project"];
		$user_phone = $this->data["user_phone_project"];
		$date_project = time();
		return $this->project->addProject($title_project, $intro_text_project, $product, $competition, $technology, $instruments, $logistics, $resources, $counterparties, $promotion, $finance, $user_name_project, $user_email_project, $user_phone_project, $date_project);
	}
	
}
?>