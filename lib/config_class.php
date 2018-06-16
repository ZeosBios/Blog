<?php
header("Content-Type: text/html; charset=UTF-8");
class Config
{
	public $sitename = "Raketa.ru";
    public $address = "http://localhost/site/";
    public $secret = "zin1188";
    public $host = "localhost";
    public $db = "mybase";
    public $db_prefix = "zin_";
    public $user ="root";
    public $password = "";
    public $admname = "Сергей Зиновьев";
    public $admemail = "zinowjewsergey@yandex.ru";  
    public $dir_tmpl = "/domains/localhost/site/tmpl/";	
	public $count_blog = 3;
    public $add_article = "http://localhost/site/?view=article&;";
	public $add_project = "http://localhost/site/?view=project&;";
	public $add_advert = "http://localhost/site/?view=advert&;";
	public $min_login = 3;
	public $max_login = 255;
	public $dir_text = "lib/text/";
}
?>