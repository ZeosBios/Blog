<!DOCTYPE html PUBLIC>
<html>
<head>
<title>%title%</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="%meta_desc%" />
<meta name="keywords" content="%meta_key%" />
<link rel="stylesheet" href="%address%css/main.css" type="text/css" />
<script type="text/javascript" src="%address%js/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="%address%js/functions.js"></script>
</head>
<body>
<div id="content">
<div id="header">
<h2>Шапка сайта</h2>
</div>
</div>
<hr />
<div id="main_content">
<div id="left">
<h2>Меню</h2>
<ul>%menu%</ul>
%auth_user%
<h2>Реклама</h2>
%banners%
</div>
<div id="right">
<form name="search" action="%address%" method="get">
<p>
Поиск: <input type="text" name="words" />
</p>
<p>
<input type="hidden" name="view" value="search" />
<input type="submit" name="search" value="Искать" />
</p>
</form>
<h2>Реклама</h2>
%banners%
</div>
<div id="center">
%top%
%middle%
%bottom%
</div>
<div class="clear"></div>
<hr />
<div id="footer">
<p>Все права защищены &copy; 2017</p>
</div>
</div>
</body>
</html> 