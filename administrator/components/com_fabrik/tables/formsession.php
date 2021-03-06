<?php
/**
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005 Fabrik. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Form Session Fabrik Table
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @since       3.0
 */
class FabrikTableFormsession extends JTable
{

	/**
	 * Constructor
	 *
	 * @param   object  &$db  database object
	 */

	public function __construct(&$db)
	{
		parent::__construct('#__{package}_form_sessions', 'id', $db);
	}

}
