<?php
/**
*
* @package User Defaults Extension
* @copyright (c) 2016 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\userdefaults\acp;

class userdefaults_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		$this->tpl_name		= 'user_defaults';
		$this->page_title	= $user->lang('USER_DEFAULTS');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('david63.userdefaults.admin.controller');

		$admin_controller->display_options();
	}
}
