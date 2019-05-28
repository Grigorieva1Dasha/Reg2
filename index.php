<!DOCTYPE html>
<html>
<head>
	<title>Регулярные выражения 2</title>
</head>
<body>
	<?php include 'reg.php'; ?>
	<form method="POST">
		<p><b>Из полного имени файла (например, picture.jpg) получите его расширение (например, jpg)</b></p>
		<p><input name="expansion" value="<?= isset($_POST['expansion']) ? $_POST['expansion']:''?>"></p>
		<p><input type="submit"></p>
		<?= expansion(); ?>

		<p><b>По полному имени файла проверьте соответствует ли оно: а) архиву, б) аудиофайлу, в) видеофайлу, г) картинке</b></p>
		<p><input name="match" value="<?= isset($_POST['match']) ? $_POST['match']:''?>"></p>
		<p><input type="submit"></p>
		<?= match(); ?>

		<p><b>В произвольном HTML-коде найдите строку, заключенную в теги title</b></p>
		<p><textarea name="title" value="<?= isset($_POST['title']) ? $_POST['title']:''?>"></textarea></p>
		<p><input type="submit"></p>
		<?= title(); ?>

		<p><b>В произвольном HTML-коде найдите все ссылки в тегах a (атрибут href)</b></p>
		<p><textarea name="ahref" value="<?= isset($_POST['ahref']) ? $_POST['ahref']:''?>"></textarea></p>
		<p><input type="submit"></p>
		<?= ahref(); ?>	

		<p><b>В произвольном HTML-коде найдите все ссылки на картинки в тегах img (атрибут src)</b></p>
		<p><textarea name="img" value="<?= isset($_POST['img']) ? $_POST['img']:''?>"></textarea></p>
		<p><input type="submit"></p>
		<?= imgfind(); ?>

		<p><b>В произвольном тексте найдите и подсветите с помощью тега strong заданную строку</b></p>
		<p><textarea name="text" value="<?= isset($_POST['text']) ? $_POST['text']:''?>"></textarea></p>
		<p><textarea name="strong" value="<?= isset($_POST['strong']) ? $_POST['strong']:''?>"></textarea></p>
		<p><input type="submit"></p>
		<?= strong(); ?>

		<p><b>В произвольном тексте найдите определенный набор текстовых смайликов :), ;), :(на соответствующие им картинки </b></p>
		<p><textarea name="smile" value="<?= isset($_POST['smile']) ? $_POST['smile']:''?>"></textarea></p>
		<p><input type="submit"></p>
		<?= replacesmile(); ?>

		<p><b>В заданной строке избавьтесь от случайных повторяющихся пробелов</b></p>
		<p><textarea name="space" value="<?= isset($_POST['space']) ? $_POST['space']:''?>"></textarea></p>
		<p><input type="submit"></p>
		<?= space(); ?>

</form>

</body>
</html>
