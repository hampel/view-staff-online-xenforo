<?php namespace Hampel\ViewStaffOnline\XF\Repository;

class SessionActivity extends XFCP_SessionActivity
{
	public function getOnlineStatsBlockData($forceIncludeVisitor = true, $userLimit, $staffQuery = false)
	{
		if (!\XF::visitor()->canViewStaffOnline())
		{
			// if we don't have permission to view the staff online list, don't do the query
			$staffQuery = false;
		}

		return parent::getOnlineStatsBlockData($forceIncludeVisitor, $userLimit, $staffQuery);
	}
}
