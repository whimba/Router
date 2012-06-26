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
 * Example of SOAP Service Controller
 *
 * @package Router
 * @subpackage Service
 * @author Vasyl Martyniuk <martyniuk.vasyl@gmail.com>
 * @since 06/25/2012
 * @version v1.0
 */
class Router_Service_Controller{

    /**
     * Test Function
     *
     * @access public
     * @param string $param
     * @return string
     */
    public function test($param){

        return "Response {$param}";
    }
}