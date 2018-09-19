<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskSingleUWPApp File
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
* WindowsKioskSingleUWPApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsKioskSingleUWPApp extends WindowsKioskAppConfiguration
{

    /**
    * Gets the uwpApp
    *
    * @return WindowsKioskUWPApp The uwpApp
    */
    public function getUwpApp()
    {
        if (array_key_exists("uwpApp", $this->_propDict)) {
            if (is_a($this->_propDict["uwpApp"], "Microsoft\Graph\Beta\Model\WindowsKioskUWPApp")) {
                return $this->_propDict["uwpApp"];
            } else {
                $this->_propDict["uwpApp"] = new WindowsKioskUWPApp($this->_propDict["uwpApp"]);
                return $this->_propDict["uwpApp"];
            }
        }
        return null;
    }

    /**
    * Sets the uwpApp
    *
    * @param WindowsKioskUWPApp $val The value to assign to the uwpApp
    *
    * @return WindowsKioskSingleUWPApp The WindowsKioskSingleUWPApp
    */
    public function setUwpApp($val)
    {
        $this->_propDict["uwpApp"] = $val;
         return $this;
    }
}
