<?php ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>signup</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<label>Логин:</label>
<input type="text" name="login">

<label>Пароль:</label>
<input type="password" name="password">

<label>Аватар:</label>
<input type="file" name="image">

<label>Пол:</label>
<select name="gender">
    <option value="Женский"></option>
    <option value="Мужской"></option>
</select>

<button type="submit">Зарегистрироваться</button>
</form>
</body>
</html>


<?php ?>