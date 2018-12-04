<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedMobileApp File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* ManagedMobileApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedMobileApp extends Entity
{
    /**
    * Gets the mobileAppIdentifier
    *
    * @return MobileAppIdentifier The mobileAppIdentifier
    */
    public function getMobileAppIdentifier()
    {
        if (array_key_exists("mobileAppIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["mobileAppIdentifier"], "Microsoft\Graph\Model\MobileAppIdentifier")) {
                return $this->_propDict["mobileAppIdentifier"];
            } else {
                $this->_propDict["mobileAppIdentifier"] = new MobileAppIdentifier($this->_propDict["mobileAppIdentifier"]);
                return $this->_propDict["mobileAppIdentifier"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mobileAppIdentifier
    *
    * @param MobileAppIdentifier $val The mobileAppIdentifier
    *
    * @return ManagedMobileApp
    */
    public function setMobileAppIdentifier($val)
    {
        $this->_propDict["mobileAppIdentifier"] = $val;
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
    * @return ManagedMobileApp
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    
}