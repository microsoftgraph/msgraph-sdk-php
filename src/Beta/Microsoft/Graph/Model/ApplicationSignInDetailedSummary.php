<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationSignInDetailedSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* ApplicationSignInDetailedSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationSignInDetailedSummary extends Entity
{
    /**
    * Gets the appId
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appId
    *
    * @param string $val The appId
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    *
    * @param string $val The appDisplayName
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return SignInStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\SignInStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SignInStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param SignInStatus $val The status
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInCount
    *
    * @return int The signInCount
    */
    public function getSignInCount()
    {
        if (array_key_exists("signInCount", $this->_propDict)) {
            return $this->_propDict["signInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInCount
    *
    * @param int $val The signInCount
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setSignInCount($val)
    {
        $this->_propDict["signInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the aggregatedEventDateTime
    *
    * @return \DateTime The aggregatedEventDateTime
    */
    public function getAggregatedEventDateTime()
    {
        if (array_key_exists("aggregatedEventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["aggregatedEventDateTime"], "\DateTime")) {
                return $this->_propDict["aggregatedEventDateTime"];
            } else {
                $this->_propDict["aggregatedEventDateTime"] = new \DateTime($this->_propDict["aggregatedEventDateTime"]);
                return $this->_propDict["aggregatedEventDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the aggregatedEventDateTime
    *
    * @param \DateTime $val The aggregatedEventDateTime
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setAggregatedEventDateTime($val)
    {
        $this->_propDict["aggregatedEventDateTime"] = $val;
        return $this;
    }
    
}