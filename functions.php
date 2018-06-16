<?php
header("Content-Type: text/html; charset=UTF-8");
require_once "lib/database_class.php";
require_once "lib/manage_class.php";

$db = new DataBase();
$manage = new Manage($db);


if($_POST["login"] && $_POST["password"] && $_POST["captcha"])
{
	$r = $manage->regUser();
}

elseif($_POST["page_id"] && $_POST["user_name"] && $_POST["text_comment"])
{
	$r = $manage->addComm();
}

elseif($_POST["title_article"] && $_POST["intro_text_article"] && $_POST["full_text_article"])
{
	$r = $manage->addArt();
}

elseif($_POST["title_advert"] && $_POST["intro_text_advert"] && $_POST["full_text_advert"] && $_POST["user_name_advert"] && $_POST["user_email_advert"] && $_POST["user_phone_advert"])
{
	$r = $manage->addAdv();
}

elseif($_POST["title_project"] && $_POST["intro_text_project"] && $_POST["product"] && $_POST["competition"] && $_POST["technology"] && $_POST["instruments"] && $_POST["logistics"] && $_POST["resources"] && $_POST["counterparties"] && $_POST["promotion"] && $_POST["finance"] && $_POST["user_name_project"] && $_POST["user_email_project"] && $_POST["user_phone_project"])
{
	$r = $manage->addPro();
}
?>