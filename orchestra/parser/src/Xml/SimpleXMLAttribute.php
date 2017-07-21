<?php

/*
 * This file is part of the jclark/simpleXMLAttribute package.
 *
 * (c) Junior clark <juniorclark@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orchestra\Parser\Xml;

use SimpleXMLElement;

class SimpleXMLAttribute extends SimpleXMLElement {
    public function Attribute($name) {
        foreach ($this->Attributes() as $key => $val) {
            if ($key == $name) {
                return (string) $val;
            }
        }
    }
}
