<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2014 HAMMER663
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
   $lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_FAQ_MANAGER'			=> 'Управление FAQ',
	'ACP_FAQ_MANAGER_EXPLAIN'	=> 'Управление экстом FAQ'	
));

?>