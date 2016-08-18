<?php
/**
*
* @package User Defaults Extension
* @copyright (c) 2016 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\userdefaults\acp;

class userdefaults_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\userdefaults\acp\userdefaults_module',
			'title'		=> 'USER_DEFAULTS',
			'modes'		=> array(
				'manage'	=> array('title' => 'MANAGE_DEFAULTS', 'auth' => 'ext_david63/userdefaults && acl_a_user', 'cat' => array('USER_DEFAULTS')),
			),
		);
	}
}
