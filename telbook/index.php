<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/style.css">
<title>Ввод данных</title>
</head>
<body>
<form class="contact_form" action="classes/add.php" method="post" name="tel_form">
<ul>
<li>
		<h2>Введите данные</h2>		
</li>
<li>
	<span class="required_notification">* Поля для заполнения</span>
</li>
<li>
    	<label for="name">Имя*</label>
    	<input type="text" name="name"required />
    	
</li>
<li>
    <label for="org">Организация*</label>
    <input type="text" name="org" />
    
</li>
<li>
    <label for="tel">Телефон*</label>
    <input type="text" name="tel" />
    
</li>
<li>
    <button class="submit" type="submit">Отправить</button>
</li>
</ul>
</form>
</body>
</html>