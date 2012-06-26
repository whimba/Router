<?php

/*
  Copyright (C) <2012>  Vasyl Martyniuk <martyniuk.vasyl@gmail.com>

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Example of Dummy Controller for Module
 *
 * @package Router
 * @subpackage Dummy
 * @author Vasyl Martyniuk <martyniuk.vasyl@gmail.com>
 * @since 06/25/2012
 * @version v1.0
 */
class Router_Dummy_Controller {

    /**
     * Itself instance holder
     *
     * @access protected
     * @var Router_Dummy_Controller
     */
    protected static $_instance = NULL;

    /**
     * Get Single Instance of itself
     *
     * @access public
     * @return Router_Dummy_Controller
     */
    public static function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    /**
     * Default function for each Module
     *
     * @access public
     * @return string
     */
    public function index() {

        return 'Hello World!';
    }
}