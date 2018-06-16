<?php
mb_internal_encoding("UTF-8");
header("Content-Type: text/html; charset=UTF-8");
require_once "lib/database_class.php";
require_once "lib/frontpagecontent_class.php";
require_once "lib/articlepagecontent_class.php";
require_once "lib/projectpagecontent_class.php";
require_once "lib/projectgetcontent_class.php";
require_once "lib/advertpagecontent_class.php";
require_once "lib/advertgetcontent_class.php";
require_once "lib/aboutcontent_class.php";
require_once "lib/articleaddcontent_class.php";
require_once "lib/advertaddcontent_class.php";
require_once "lib/projectaddcontent_class.php";
require_once "lib/regcontent_class.php";
require_once "lib/messagecontent_class.php";


$db = new DataBase();
$view = $_GET["view"];

switch($view)
{
	case "": 
	    $content = new AboutContent($db);
		break;
	case "article": 
	    $content = new FrontPage($db);
		break;
	case "articlecontent": 
	    $content = new ArticleContent($db);
		break;
	case "project": 
	    $content = new ProjectPage($db);
		break;
    case "projectcontent": 
	    $content = new ProjectContent($db);
		break;
	case "advert": 
	    $content = new AdvertPage($db);
		break;
	case "advertcontent": 
	    $content = new AdvertContent($db);
		break;
    case "addarticle": 
	    $content = new ArticleAdd($db);
		break;	
    case "addadvert": 
	    $content = new AdvertAdd($db);
		break;	
    case "addproject": 
	    $content = new ProjectAdd($db);
		break;
    case "reg": 
	    $content = new RegContent($db);
		break;	
     case "message": 
	    $content = new MessageContent($db);
		break;		
	default: exit;	
}
 
echo $content->getContent();
?>