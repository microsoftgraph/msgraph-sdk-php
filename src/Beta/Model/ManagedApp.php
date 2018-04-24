<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedApp File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* ManagedApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagedApp extends MobileApp
{
    /**
    * Gets the appAvailability
    *
    * @return ManagedAppAvailability The appAvailability
    */
    public function getAppAvailability()
    {
        if (array_key_exists("appAvailability", $this->_propDict)) {
            if (is_a($this->_propDict["appAvailability"], "Microsoft\Graph\Beta\Model\ManagedAppAvailability")) {
                return $this->_propDict["appAvailability"];
            } else {
                $this->_propDict["appAvailability"] = new ManagedAppAvailability($this->_propDict["appAvailability"]);
                return $this->_propDict["appAvailability"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appAvailability
    *
    * @param ManagedAppAvailability $val The appAvailability
    *
    * @return ManagedApp
    */
    public function setAppAvailability($val)
    {
        $this->_propDict["appAvailability"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param string $val The version
    *
    * @return ManagedApp
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}