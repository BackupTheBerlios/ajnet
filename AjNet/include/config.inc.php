<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file set all default settings for AjNET
 *
 *
 * PHP versions 5
 *
 * Copyright (C) 2007 Kersten Burkhardt
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * @author     Kersten Burkhardt <kerstenk@gmail.com>
 * @copyright  2007 Kersten Burkhardt
 * @license    http://www.gnu.org/licenses/gpl.txt  GNU General Public License
 * @version    CVS: $Id: config.inc.php,v 1.4 2007/06/06 14:57:57 gottmodus Exp $
 * @since      File available since Release 0.0.1
 */

$BASE_WEBDIR = '/a';

// {{{ constants

/**
 * Constants for AjNET.
 */

// MySQL connection settings
define('MYSQL_USER', 'user');
define('MYSQL_PASSWORD', 'pass');
define('MYSQL_HOST', 'host');
define('MYSQL_PORT', 3306);
define('MYSQL_DATABASE', 'database');

// Base project settings
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);
define('BASE_URL', $_SERVER['HTTP_HOST'] . $BASE_WEBDIR);

// }}}
?>