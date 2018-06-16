<h2>Регистрация на сайте</h2>
%message%
<form name="form_add_user" id="form_add_user" action="functions.php" method="post">
<table>
<tr>
<td>Логин:</td>
<td>
<input type="text" name="login" value="%login%"/>
</td>
</tr>
<tr>
<td>Пароль:</td>
<td>
<input type="password" name="password" />
</td>
</tr>
<tr>
<td colspan="2" align="center">
<img src="%address%captcha.php" alt="Каптча" />
</td>
</tr>
<tr>
<td>Проверочный код</td>
<td>
<input type="text" name="captcha" />
</td>
</tr>
<tr>
<td colspan ="2" align="right">
<input type="button" name="add_user" id="add_user" value="Зарегистрироваться" />
</td>
</tr>
</table>
</form>