<h3>Добавить комментарий</h3>
<table>
<form id="form_add_comment" name="form_add_comment" action="functions.php" method="POST">
<tr>
<td>Имя</td>
</tr>
<tr>
<td>
<input type="text"  name="user_name"  id="user_name" />
</td>
</tr>
<tr>
<td>Текст комментария</td>
</tr>
<tr>
<td>
<textarea id="text_comment" name="text_comment" rows="10" cols="70"></textarea>
</td>
</tr>
<tr>
<td colspan="2">
<input type="hidden" name="page_id" value='%id%' />
<input name="add_comment" id="add_comment" type="button" value="Добавить комментарий к статье" onClick="inter()"/ >
</td>
</tr>
</form>
</table>
