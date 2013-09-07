<?php defined('EF5_SYSTEM') || exit;

return array(
	//Заголовки
	'Blocked addresses' => 'Заблокированные адреса',
	'Blacklist' => 'Черный список',
	'Blocked address edition' => 'Редактирование заблокированного адреса',

	//Оповещения
	'Address has been added to the blacklist.' => 'Адрес добавлен в черный список.',
	'Blocked address has been edited.' => 'Заблокированный адрес был отредактирован.',
	'Error! Blocked address has not been edited.' => 'Произошла ошибка! Заблокированный адрес не был отредактирован.',
	'Error! Address has not been added to the blacklist.' => 'Произошла ошибка! Адрес не был добавлен в черный список.',
	'Error! Address has not been deleted from the blacklist.' => 'Произошла ошибка! Адрес не был удален из черного списка.',
	'Address has been deleted from the blacklist.' => 'Адрес удален из черного списка.',
	'Error! Specified address already is in database.' => 'Произошла ошибка! Этот адрес уже отсутствует в базе данных.',
	'Error! Entered data is incorrect. Please validate e-mail address or IP address.' => 'Произошла ошибка! Правильные данные не были введены, проверти правильность email или IP',
	'Error! Missing id.' => 'Произошла ошибка! Отсутствует идентификатор :id для таблицы blacklist.',
	'Error! E-mail address can\'t be accepted with IP address. You must add IP address or e-mail address.' => 'Произошла ошибка! Нельзя принять адрес e-mail вместе с адресом IP, добавьте тольк адрес IP или только e-mail.',

	//Информация
	'N/A' => 'Недоступные',
	'Blacklist' => 'Черный список',
	'Blacklist description' => '<p>Добавление адреса IP в черный список запретит пользователю с данным IP посещать ваш сайт. Можете вписать полный адрес IP, например <em>123.123.123.123</em>, или только его часть, например <em>123.123.123</em> или <em>123.123</em>.</p><p>Помните! Адреса IPv6 записываются в полной форме, например <em>ABCD:1234:5:6:7:8:9:FF</em> будет показан как <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>. Смешанные адреса, частично содержащие данные из IPv6 и IPv4 не будут проверены.</p><p>Добавление в черный список адреса e-mail запретит пользователю с данным e-mail адресом регистрацию на сайте. Можете ввести полный адрес, например <em>foo@bar.com</em> или домен, владельцам адресов e-mail которого вы хотите запретить регистрацию, например <em>bar.com</em></p>',

	//Форма
	'Block IP address:' => 'Адрес IP: <br /><br /><strong>или</strong>',
	'Block e-mail address:' => 'Адрес e-mail:',
	'Block reason:' => 'Причина:',

	//Содержание
	'Address:' => 'Адрес:',
	'Blacklist is empty.' => 'Черный список пуст.'

);
