<table/>
<form name="form_add_advert" id="form_add_advert" action="functions.php" method="post">
<tr>
<td colspan="3">Заголовок объявления</td>
</tr>
<br />
<tr>
<td>
<input type="text"  name="title_advert"  />
</td>
</tr>
<br />
<tr>
<td colspan="3">Описание бизнеса</td>
</tr>
<br />
<tr>
<td>
<textarea name="intro_text_advert" rows="10" cols="100"></textarea>
</td>
</tr>
<br />
<tr>
<td colspan="3">Дополнительная информация</td>
</tr>
<br />
<tr>
<td>
<textarea name="full_text_advert" rows="10" cols="100"></textarea>
</td>
</tr>
<br />
<tr>
<td colspan="3">Имя</td>
</tr>
<br />
<tr>
<td>
<input type="text"  name="user_name_advert"  />
</td>
</tr>
<tr>
<td colspan="3">Электронный адрес</td>
</tr>
<br />
<tr>
<td>
<input type="text"  name="user_email_advert"  />
</td>
</tr>
<tr>
<td colspan="3">Номер телефона</td>
</tr>
<br />
<tr>
<td>
<input type="text"  name="user_phone_advert"  />
</td>
</tr>
<tr>
<td colspan="3">
<input name="add_advert" id="add_advert" type="button" value="Разместить объявление" value="Опубликовать статью" onClick="backAd()" />
</td>
</tr>
</form>
</table>