<?php
/**
*
* About us extension for the phpBB Forum Software package.
* Russian translation by Evangelion
*
* @copyright (c) 2014-2015 Crizzo <http://www.crizzo.de>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUTUS'						=> 'О нас',
	'ABOUTUS_SETTINGS'				=> 'Настройки "О нас"',
	'ABOUTUS_UPDATED'				=> 'Страница "О нас" была успешно обновлена.',
	'ABOUTUS_AND'					=> 'и',

	'ACP_ABOUTUS_ENABLE'			=> 'Включить страницу "О нас"',
	'ACP_ABOUTUS_ENABLE_EXPLAIN'	=> 'Если страница "О нас" выключена, то на форуме не будет отображаться ссылка на данную страницу. Тем не менее, её можно посетить по ссылке "app.php/aboutus".',
	'ACP_ABOUTUS_INFO'				=> 'Сообщение на странице "О нас"',
	'ACP_ABOUTUS_INFO_EXPLAIN'		=> 'Вы можете изменить текст, который будет отображаться на странице "О нас"',
	'ACP_ABOUTUS_INFO_PREVIEW'		=> '"О нас" - Предпросмотр',
	'ACP_ABOUTUS_SETTINGS'			=> 'Настройки "О нас"',
	'ACP_ABOUTUS_SETTINGS_EXPLAIN'	=> 'Здесь вы можете ввести текст, который будет отображаться на страницк "О нас", а также включить или выключить его.',

	'ACP_TERMS_OF_USE_ENABLE' 			=> 'Показать Общие правила',
	'ACP_TERMS_OF_USE_ENABLE_EXPLAIN'	=> 'Отображает ссылку на "Общие правила" на странице "О нас".',
	'ACP_PRIVACY_ENABLE' 				=> 'Показать Соглашение о конфиденциальности',
	'ACP_PRIVACY_ENABLE_EXPLAIN'		=> 'Отображает ссылку на "Соглашение о конфиденциальности" на странице "О нас".',

	'DESCRIPTION_PRIVACY'			=> 'О Соглашении о конфиденциальности вы можете прочитать здесь:',
	'DESCRIPTION_TERMS_OF_USE'		=> 'Общие правила вы можете прочитать здесь:',
	'DESCRIPTION_PRIVACY_TERMS_OF_USE'=> 'Общие правила и Соглашение о конфиденциальности вы можете прочитать здесь:',

	'VIEWONLINE_ABOUTUS'	=> 'Просматривает страницу "О нас"',
));
