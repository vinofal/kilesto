<!DOCTYPE html>
<html>
<head>
<title>Ввод данных</title>
</head>
<body>
<form class="contact_form" action="" method="post" name="tel_form">
<ul>
<li>
		<h2>Введите данные </h2>		
</li>
<li>
	<span class="required_notification">* Поля для заполнения</span>
</li>
<li>
    	<label for="name">Имя</label>
    	<input type="text" name="name"required/>
    	<span class="form_hint">Введите email</span>
</li>
<li>
    <label for="organization">Организация</label>
    <input type="text" name="organization"required/>
    <span class="form_hint">Введите имя организации</span>
</li>
<li>
    <label for="phone">Телефон</label>
    <input type="text" name="phone"required/>
    <span class="form_hint">Введите номер телефона</span>
</li>
<li>
    <button class="submit" type="submit">Отправить</button>
</li>
</ul>
</form>
</body>
</html>