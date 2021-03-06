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
 * Removes all html tags
 * <pre>
 *  * value : the string to process
 *  * addspace : if true, a space is added in place of every removed tag
 * </pre>
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 * TODO: add missing parameter `allowable_tags` - http://php.net/manual/en/function.strip-tags.php
 *
 * @param Compiler $compiler
 * @param string   $value
 * @param bool     $addspace
 *
 * @return string
 */
function PluginStripTagsCompile(Compiler $compiler, $value, $addspace = true)
{
    if ($addspace === 'true') {
        return "preg_replace('#<[^>]*>#', ' ', $value)";
    } else {
        return "strip_tags($value)";
    }
}
