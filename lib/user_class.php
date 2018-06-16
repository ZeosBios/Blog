<?php
require_once "global_class.php";

class User extends GlobalClass
{
	public function __construct($db)
	{
		parent::__construct("users", $db);
	}
	
	public function addUser($login, $password, $datereg)
	{
		//if (!$this->checkValid($login, $password, $datereg)) return false;
		return $this->add(array("login" => $login, "password" => $password, "datereg" => $datereg));
		
	}
	
	public function editUser($id, $login, $password, $datereg)
	{
		if (!$this->checkValid($login, $password, $datereg)) return false;
		return $this->edit($id, array("login" => $login, "password" => $password, "datereg" => $datereg));
	}
	
	public function isExistsUser($login)
	{
		return $this->isExists("login", $login);
	}
	
	public function getUserOnLogin($login)
	{
		$id = $this->getField("id", "login", $login);
		return $this->get($id);
	}
	
	private function checkValid($login, $password, $datereg)
	{
		if(!$this->valid->validLogin($login)) return false;
		if(!$this->valid->validHash($password)) return false;
		if(!$this->valid->validTimeStamp($datereg)) return false;
		return true;
	}
}

?>