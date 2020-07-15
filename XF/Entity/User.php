<?php namespace Hampel\ViewStaffOnline\XF\Entity;

class User extends XFCP_User
{
	public function canViewStaffOnline()
	{
		return \XF::visitor()->hasPermission('general', 'hampelViewStaffOnline');
	}
}
