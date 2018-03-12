<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocatedRiskEvent File
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
* LocatedRiskEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LocatedRiskEvent extends IdentityRiskEvent
{
    /**
    * Gets the location
    *
    * @return SignInLocation The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "Microsoft\Graph\Model\SignInLocation")) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new SignInLocation($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }
    
    /**
    * Sets the location
    *
    * @param SignInLocation $val The location
    *
    * @return LocatedRiskEvent
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipAddress
    *
    * @return string The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipAddress
    *
    * @param string $val The ipAddress
    *
    * @return LocatedRiskEvent
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    
}