<?php
/**
*
* @package phpBB3 FAQ Manager
* @copyright (c) 2014 HAMMER663
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace hammer663\FaqManager\acp;

class acp_faq_manager_info
{
	function module()
	{
		return array(
			'filename'	=> '\hammer663\FaqManager\acp\acp_faq_manager',
			'title'		=> 'ACP_FAQ_MANAGER',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'config_faq_manager'		=> array('title' => 'ACP_FAQ_MANAGER_EXPLAIN', 'auth' => 'ext_hammer663/FaqManager && acl_a_language', 'cat' => array('ACP_FAQ_MANAGER_EXPLAIN')),
			),
		);
	}
}
