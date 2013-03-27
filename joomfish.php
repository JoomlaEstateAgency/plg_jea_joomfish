<?php
/**
 *
 * @package    Joomla
 * @subpackage JEA
 * @copyright  Copyright (C) 2011 PHILIP Sylvain. All rights reserved.
 * @license    GNU/GPL, see LICENSE.txt
 * Joomla Estate Agency is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses.
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.event.plugin');

/**
 * JEA Joomfish Plugin
 *
 * @package		Joomla
 * @subpackage	JEA
 * @since 		1.5
 */
class plgJeaJoomfish extends JPlugin
{

    /**
     * onBeforeLoadProperty method (Called before load property in frontend)
     *
     * @param JDatabaseQueryElement $query
     * @param JObject $Modelstate
     *
     * @return void
     */
    public function onBeforeLoadProperty(&$query, &$Modelstate)
    {
        $query->select('t.id AS `id2`');
        $query->select('d.id AS `id3`');
        $query->select('town.id AS `id4`');
        $query->select('area.id AS `id5`');
        $query->select('c.id AS `id6`');
        $query->select('ht.id AS `id7`');
        $query->select('hwt.id AS `id8`');
        $query->select('s.id AS `id9`');
    }

    /**
     * onBeforeSearch method (Called before query properties list in frontend)
     *
     * @param JDatabaseQueryElement $query
     * @param JObject $Modelstate
     *
     * @return void
     */
    public function onBeforeSearch(&$query, &$Modelstate)
    {
        $query->select('t.id AS `id2`');
        $query->select('d.id AS `id3`');
        $query->select('town.id AS `id4`');
        $query->select('area.id AS `id5`');
        $query->select('c.id AS `id6`');
        $query->select('s.id AS `id7`');
    }

}
