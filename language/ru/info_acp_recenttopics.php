<?php
/**
 *
 * @package Recent Topics Extension
 * Russian translation by rxu
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge(
	$lang, array(
	'RECENT_TOPICS'                    => 'Последние темы',
	'RECENT_TOPICS_EXPLAIN'            => 'On this page you can change the settings specific for the Recent Topics extension.<br /><br />Specific forums can be included or excluded by editing the respective forums in your ACP.<br />Also be sure to check your user permissions, which allow users to change some of the settings found below for themselves.',

	'RECENT_TOPICS_LIST'            => 'Показывать последние темы',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Если включено, то темы этого форума будут отображаться в списке последних тем.',

	'RT_CONFIG'                        => 'Настройка',
	'RT_ALT_LOCATION'                => 'Display in alternative location',
	'RT_ALT_LOCATION_EXP'            => 'Use alternative location to display recent topics.<br />Not all styles will support this, for prosilver it will be moved to the bottom of the page.',
	'RT_ANTI_TOPICS'                => 'Исключённые темы',
	'RT_ANTI_TOPICS_EXP'            => 'Разделённый запятыми список идентификаторов тем, которые не должны отображаться в списке последних тем (например: 7, 9)<br />Установите 0 для отключения данной функции.',
	'RT_MIN_TOPIC_LEVEL'            => 'Минимальный статус темы',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Минимальный статус темы для отображения. В списке последних тем будут отображены темы, имеющие указанный статус, и выше.<br />(0 = обычная, 1 = прилепленная, 2 = объявление, 3 = важная)',
	'RT_NUMBER'                        => 'Число тем в списке',
	'RT_NUMBER_EXP'                    => 'Количество тем, отображаемых на главной странице.',
	'RT_PAGE_NUMBER'                => 'Число страниц в списке тем',
	'RT_PAGE_NUMBER_EXP'            => 'Можно отображать большее число тем при использовании постраничного разбиения списка. Установите 1 для отключения данной функции. Если установлено значение 0, список будет иметь столько страниц, сколько необходимо для отображения всех тем на конференции (не рекомендуется).',
	'RT_PARENTS'                    => 'Показывать родительские форумы',
	'RT_PARENTS_EXP'                => 'Если включено, будут отображены названия родительских форумов для тем в списке.',
	'RT_SORT_START_TIME'            => 'Сортировать по дате создания',
	'RT_SORT_START_TIME_EXP'        => 'Если включено, темы будут отсортированы по дате их создания, а не по дате последнего сообщения.',
	'RT_UNREAD_ONLY'                => 'Только непрочтённые',
	'RT_UNREAD_ONLY_EXP'            => 'Если включено, в списке последних тем будут отображены только темы с непрочтёнными сообщениями, независимо от того, являются они последними или нет. При этом будут использованы те же настройки (исключённые темы, форумы и т.д.), что и в обычном режиме. Учтите, что данная функция работает только для зарегистрированных пользователей. Для гостей будет отображён обычный список.',

	'RT_VIEW_ON'                    => 'Размещение списка последних тем:',

	'RT_TOP'                         => 'Show on top',
	'RT_BOTTOM'                      => 'Show on bottom',
	'RT_SIDE'                        => 'Show on side',
	)
);
