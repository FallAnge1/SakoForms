<?php

	// получим данные с элементов формы
	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];

	// обработаем полученные данные
	$name = htmlspecialchars($name);
	$number = htmlspecialchars($number); // преобразование символов в сущности 
	$email = htmlspecialchars($email);

	$name = urldecode($name);   // декодирование URL
	$number = urldecode($number);
	$email = urldecode($email);

	$name = trim($name);
	$number = trim($number); // удаление пробельных символов с обеих сторон
	$email = trim($email);

	// отправляем данные
	if(mail("sako.delovoi@gmal.com",
					"Новое письмо с сайта",
					"Имя: ".$name."\n".
					"Номер телефона: ".$number."\n".
					"Email: ".$email,
					"From: no-reply@mydomain.ru \r\n"
					)) {
						echo ("Письмо отправлена!");
					} 
					else {
						echo ("Есть ошибки! Проверьте данные...");
					}

	?>

