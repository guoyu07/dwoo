<?php
/**
 * Copyright (c) 2013-2016
 *
 * @category  Library
 * @package   Dwoo\Plugins\Functions
 * @author    Jordi Boggiano <j.boggiano@seld.be>
 * @author    David Sanchez <david38sanchez@gmail.com>
 * @copyright 2008-2013 Jordi Boggiano
 * @copyright 2013-2016 David Sanchez
 * @license   http://dwoo.org/LICENSE Modified BSD License
 * @version   1.3.0
 * @date      2016-09-19
 * @link      http://dwoo.org/
 */

namespace Dwoo\Plugins\Functions;

use Dwoo\Compiler;

/**
 * Marks the variable as safe and removes the auto-escape function, only useful if you turned auto-escaping on
 * <pre>
 *  * var : the variable to pass through untouched
 * </pre>
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 */
function PluginSafeCompile(Compiler $compiler, $var)
{
    return preg_replace('#\(is_string\(\$tmp=(.+)\) \? htmlspecialchars\(\$tmp, ENT_QUOTES, \$this->charset\) : \$tmp\)#', '$1', $var);
}
