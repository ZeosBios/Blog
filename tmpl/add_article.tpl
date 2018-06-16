<table/>
<form name="form_add_article" id="form_add_article" action="functions.php" method="post">
<tr>
<td colspan="3">Название статьи</td>
</tr>
<br />
<tr>
<td>
<input type="text"  name="title_article"  />
</td>
</tr>
<br />
<tr>
<td colspan="3">Описание статьи статьи</td>
</tr>
<br />
<tr>
<td>
<textarea name="intro_text_article" rows="10" cols="100"></textarea>
</td>
</tr>
<br />
<tr>
<td colspan="3">Текс статьи</td>
</tr>
<br />
<tr>
<td>
<textarea name="full_text_article" rows="150" cols="100"></textarea>
</td>
</tr>
<tr>
<td colspan="3">
<input name="add_article" id="add_article" type="button" value="Опубликовать статью" onClick="backAr()"/>
</td>
</tr>
</form>
</table>