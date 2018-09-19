<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppIntentAndState File
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
* MobileAppIntentAndState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileAppIntentAndState extends Entity
{
    /**
    * Gets the managedDeviceIdentifier
    *
    * @return string The managedDeviceIdentifier
    */
    public function getManagedDeviceIdentifier()
    {
        if (array_key_exists("managedDeviceIdentifier", $this->_propDict)) {
            return $this->_propDict["managedDeviceIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceIdentifier
    *
    * @param string $val The managedDeviceIdentifier
    *
    * @return MobileAppIntentAndState
    */
    public function setManagedDeviceIdentifier($val)
    {
        $this->_propDict["managedDeviceIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return MobileAppIntentAndState
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppList
     *
     * @return array The mobileAppList
     */
    public function getMobileAppList()
    {
        if (array_key_exists("mobileAppList", $this->_propDict)) {
           return $this->_propDict["mobileAppList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileAppList
    *
    * @param MobileAppIntentAndStateDetail $val The mobileAppList
    *
    * @return MobileAppIntentAndState
    */
    public function setMobileAppList($val)
    {
		$this->_propDict["mobileAppList"] = $val;
        return $this;
    }
    
}