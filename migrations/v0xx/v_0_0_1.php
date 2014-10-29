<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2014 HAMMER663
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace hammer663\FaqManager\migrations\v0xx;

class v_0_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['faq_manager_version']) && version_compare($this->config['faq_manager_version'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
			return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(

			// Current version
			array('config.add', array('faq_manager_version', '1.0.0')),

			// Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_FAQ_MANAGER')),
			array('module.add', array('acp', 'ACP_FAQ_MANAGER', array(
					'module_basename'	=> 'hammer663\FaqManager\acp\acp_faq_manager',
					'module_langname'	=> 'ACP_FAQ_MANAGER_EXPLAIN',
					'module_mode'		=> 'config_faq_manager',
					'module_auth'		=> 'ext_hammer663/FaqManager && acl_a_language',
			))),


		);
	}
}
