<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImpossibleTravelRiskEvent File
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
* ImpossibleTravelRiskEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ImpossibleTravelRiskEvent extends LocatedRiskEvent
{
    /**
    * Gets the userAgent
    *
    * @return string The userAgent
    */
    public function getUserAgent()
    {
        if (array_key_exists("userAgent", $this->_propDict)) {
            return $this->_propDict["userAgent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userAgent
    *
    * @param string $val The userAgent
    *
    * @return ImpossibleTravelRiskEvent
    */
    public function setUserAgent($val)
    {
        $this->_propDict["userAgent"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceInformation
    *
    * @return string The deviceInformation
    */
    public function getDeviceInformation()
    {
        if (array_key_exists("deviceInformation", $this->_propDict)) {
            return $this->_propDict["deviceInformation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceInformation
    *
    * @param string $val The deviceInformation
    *
    * @return ImpossibleTravelRiskEvent
    */
    public function setDeviceInformation($val)
    {
        $this->_propDict["deviceInformation"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAtypicalLocation
    *
    * @return bool The isAtypicalLocation
    */
    public function getIsAtypicalLocation()
    {
        if (array_key_exists("isAtypicalLocation", $this->_propDict)) {
            return $this->_propDict["isAtypicalLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAtypicalLocation
    *
    * @param bool $val The isAtypicalLocation
    *
    * @return ImpossibleTravelRiskEvent
    */
    public function setIsAtypicalLocation($val)
    {
        $this->_propDict["isAtypicalLocation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the previousSigninDateTime
    *
    * @return \DateTime The previousSigninDateTime
    */
    public function getPreviousSigninDateTime()
    {
        if (array_key_exists("previousSigninDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["previousSigninDateTime"], "\DateTime")) {
                return $this->_propDict["previousSigninDateTime"];
            } else {
                $this->_propDict["previousSigninDateTime"] = new \DateTime($this->_propDict["previousSigninDateTime"]);
                return $this->_propDict["previousSigninDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previousSigninDateTime
    *
    * @param \DateTime $val The previousSigninDateTime
    *
    * @return ImpossibleTravelRiskEvent
    */
    public function setPreviousSigninDateTime($val)
    {
        $this->_propDict["previousSigninDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the previousLocation
    *
    * @return SignInLocation The previousLocation
    */
    public function getPreviousLocation()
    {
        if (array_key_exists("previousLocation", $this->_propDict)) {
            if (is_a($this->_propDict["previousLocation"], "Microsoft\Graph\Beta\Model\SignInLocation")) {
                return $this->_propDict["previousLocation"];
            } else {
                $this->_propDict["previousLocation"] = new SignInLocation($this->_propDict["previousLocation"]);
                return $this->_propDict["previousLocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previousLocation
    *
    * @param SignInLocation $val The previousLocation
    *
    * @return ImpossibleTravelRiskEvent
    */
    public function setPreviousLocation($val)
    {
        $this->_propDict["previousLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the previousIpAddress
    *
    * @return string The previousIpAddress
    */
    public function getPreviousIpAddress()
    {
        if (array_key_exists("previousIpAddress", $this->_propDict)) {
            return $this->_propDict["previousIpAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the previousIpAddress
    *
    * @param string $val The previousIpAddress
    *
    * @return ImpossibleTravelRiskEvent
    */
    public function setPreviousIpAddress($val)
    {
        $this->_propDict["previousIpAddress"] = $val;
        return $this;
    }
    
}