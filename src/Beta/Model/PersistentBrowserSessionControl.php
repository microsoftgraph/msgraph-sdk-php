<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersistentBrowserSessionControl File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* PersistentBrowserSessionControl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PersistentBrowserSessionControl extends ConditionalAccessSessionControl
{

    /**
    * Gets the mode
    *
    * @return PersistentBrowserSessionMode The mode
    */
    public function getMode()
    {
        if (array_key_exists("mode", $this->_propDict)) {
            if (is_a($this->_propDict["mode"], "Microsoft\Graph\Beta\Model\PersistentBrowserSessionMode")) {
                return $this->_propDict["mode"];
            } else {
                $this->_propDict["mode"] = new PersistentBrowserSessionMode($this->_propDict["mode"]);
                return $this->_propDict["mode"];
            }
        }
        return null;
    }

    /**
    * Sets the mode
    *
    * @param PersistentBrowserSessionMode $val The value to assign to the mode
    *
    * @return PersistentBrowserSessionControl The PersistentBrowserSessionControl
    */
    public function setMode($val)
    {
        $this->_propDict["mode"] = $val;
         return $this;
    }
}
