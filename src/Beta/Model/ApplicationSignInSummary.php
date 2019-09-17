<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationSignInSummary File
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
* ApplicationSignInSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ApplicationSignInSummary extends Entity
{
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
    * @return ApplicationSignInSummary
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the successfulSignInCount
    *
    * @return int The successfulSignInCount
    */
    public function getSuccessfulSignInCount()
    {
        if (array_key_exists("successfulSignInCount", $this->_propDict)) {
            return $this->_propDict["successfulSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successfulSignInCount
    *
    * @param int $val The successfulSignInCount
    *
    * @return ApplicationSignInSummary
    */
    public function setSuccessfulSignInCount($val)
    {
        $this->_propDict["successfulSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedSignInCount
    *
    * @return int The failedSignInCount
    */
    public function getFailedSignInCount()
    {
        if (array_key_exists("failedSignInCount", $this->_propDict)) {
            return $this->_propDict["failedSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedSignInCount
    *
    * @param int $val The failedSignInCount
    *
    * @return ApplicationSignInSummary
    */
    public function setFailedSignInCount($val)
    {
        $this->_propDict["failedSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successPercentage
    *
    * @return float The successPercentage
    */
    public function getSuccessPercentage()
    {
        if (array_key_exists("successPercentage", $this->_propDict)) {
            return $this->_propDict["successPercentage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successPercentage
    *
    * @param float $val The successPercentage
    *
    * @return ApplicationSignInSummary
    */
    public function setSuccessPercentage($val)
    {
        $this->_propDict["successPercentage"] = $val;
        return $this;
    }
    
}