<?php
/**
*
* @package Faq Manager
* @copyright (c) 2014 HAMMER663
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hammer663\FaqManager\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{

	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var string */
	protected $phpbb_root_path;
	protected $php_ext;
	protected $phpbb_dispatcher;
	/**
	* Constructor
	*/

	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, $phpbb_root_path, $php_ext, \phpbb\event\dispatcher_interface $phpbb_dispatcher)
	{
		$this->auth = $auth;
		$this->config = $config;
		$this->user = $user;
		$this->db = $db;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
		$this->phpbb_dispatcher = $phpbb_dispatcher;		
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.posting_modify_message_text'	=>	'faq_manager',
		);
	}

	/**
	* Faq Manager
	*
	* @return null
	* @access public
	*/
	public function faq_manager($event)
	{

		$this->user->add_lang_ext('hammer663/FaqManager', 'faq_manager');

	
	}

}
