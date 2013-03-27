<?php
/**
 * This file is part of Joomla Estate Agency - Joomla! extension for real estate agency
 *
 * @package    Joomla
 * @copyright  Copyright (C) 2008 PHILIP Sylvain. All rights reserved.
 * @license    GNU/GPL, see LICENSE.txt
 * Joomla Estate Agency is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses.
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');
/**
 * Install Script file of JEA component
 */
class plgjeajoomfishInstallerScript
{
    /**
     * Method to install the extension
     *
     * @return void
     */
    function install($parent)
    {
        if (JFolder::exists(JPATH_ROOT . '/plugins/jea/joomfish/contentelements')) {
            $files = JFolder::files(JPATH_ROOT . '/plugins/jea/joomfish/contentelements');
            foreach ($files as $file) {
                JFile::copy(
                    JPATH_ROOT . '/plugins/jea/joomfish/contentelements/'.$file,
                    JPATH_ROOT . '/administrator/components/com_joomfish/contentelements/'.$file
                );
            }
        }
    }

    /**
     * Method to uninstall the extension
     *
     * @return void
     */
    function uninstall($parent)
    {
        if (JFolder::exists(JPATH_ROOT . '/administrator/components/com_joomfish')) {
            $files = JFolder::files(JPATH_ROOT . '/administrator/components/com_joomfish/contentelements', '^jea_', false, true);
            foreach ($files as $file) {
                JFile::delete($file);
            }
        }
    }

    /**
     * Method to run before an install/update/uninstall method
     *
     * @return boolean
     */
    function preflight($type, $parent)
    {
         if (!JFolder::exists(JPATH_ROOT . '/administrator/components/com_joomfish')) {
            JError::raiseWarning(301, 'Joomfish must be installed first');
            return false;
        }
        return true;
    }
}


