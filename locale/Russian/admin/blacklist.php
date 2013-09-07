<?php defined('EF5_SYSTEM') || exit;

return array(
	//Tytuły
	'Blocked addresses' => 'Заблокированные адреса',
	'Blacklist' => 'Черный список',
	'Blocked address edition' => 'Edycja zablokowanego adresu',

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
	'Error! E-mail address can\'t be accepted with IP address. You must add IP address or e-mail address.' => 'Произошла ошибка! Nie można zatwierdzić adresu e-mail wraz z adresem IP, добавьте адрес IP или e-mail.',

	//Informacje
	'N/A' => 'Недоступные',
	'Blacklist' => 'Черный список',
	'Blacklist description' => '<p>Добавление адреса IP в черный список заблокирует пользователю с таким IP доступ к этому сайту. Можете вписать полный адрес IP, например <em>123.123.123.123</em>, или только его часть, например <em>123.123.123</em> или <em>123.123</em>.</p><p>Помните! Адреса IPv6 записываются в полной форме, например <em>ABCD:1234:5:6:7:8:9:FF</em> будет показан как <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>. Смешанные адреса, частично содержащие данные из IPv6 и IPv4 не будут проверены.</p><p>Добавление в черный список адреса e-mail запретит пользователю с данным e-mail адресом регистрацию на сайте. Можете ввести полный адрес, например <em>foo@bar.com</em> или домен, владельцам адресов e-mail козапретить регистрацию, например <em>bar.com</em></p>',

	//Formularz
	'Block IP address:' => 'Adres IP do zablokowania: <br /><br /><strong>lub</strong>',
	'Block e-mail address:' => 'Adres e-mail do zablokowania:',
	'Block reason:' => 'Powód:',

	//Treść
	'Address:' => 'Adres:',
	'Blacklist is empty.' => 'Brak adresów na czarnej liście.'

);
