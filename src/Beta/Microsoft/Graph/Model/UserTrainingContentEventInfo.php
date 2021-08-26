<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserTrainingContentEventInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* UserTrainingContentEventInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserTrainingContentEventInfo extends Entity
{
    /**
    * Gets the browser
    *
    * @return string|null The browser
    */
    public function getBrowser()
    {
        if (array_key_exists("browser", $this->_propDict)) {
            return $this->_propDict["browser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the browser
    *
    * @param string $val The value of the browser
    *
    * @return UserTrainingContentEventInfo
    */
    public function setBrowser($val)
    {
        $this->_propDict["browser"] = $val;
        return $this;
    }

    /**
    * Gets the contentDateTime
    *
    * @return \DateTime|null The contentDateTime
    */
    public function getContentDateTime()
    {
        if (array_key_exists("contentDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["contentDateTime"], "\DateTime") || is_null($this->_propDict["contentDateTime"])) {
                return $this->_propDict["contentDateTime"];
            } else {
                $this->_propDict["contentDateTime"] = new \DateTime($this->_propDict["contentDateTime"]);
                return $this->_propDict["contentDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the contentDateTime
    *
    * @param \DateTime $val The value to assign to the contentDateTime
    *
    * @return UserTrainingContentEventInfo The UserTrainingContentEventInfo
    */
    public function setContentDateTime($val)
    {
        $this->_propDict["contentDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the ipAddress
    *
    * @return string|null The ipAddress
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
    * @param string $val The value of the ipAddress
    *
    * @return UserTrainingContentEventInfo
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the osPlatformDeviceDetails
    *
    * @return string|null The osPlatformDeviceDetails
    */
    public function getOsPlatformDeviceDetails()
    {
        if (array_key_exists("osPlatformDeviceDetails", $this->_propDict)) {
            return $this->_propDict["osPlatformDeviceDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osPlatformDeviceDetails
    *
    * @param string $val The value of the osPlatformDeviceDetails
    *
    * @return UserTrainingContentEventInfo
    */
    public function setOsPlatformDeviceDetails($val)
    {
        $this->_propDict["osPlatformDeviceDetails"] = $val;
        return $this;
    }
    /**
    * Gets the potentialScoreImpact
    *
    * @return float|null The potentialScoreImpact
    */
    public function getPotentialScoreImpact()
    {
        if (array_key_exists("potentialScoreImpact", $this->_propDict)) {
            return $this->_propDict["potentialScoreImpact"];
        } else {
            return null;
        }
    }

    /**
    * Sets the potentialScoreImpact
    *
    * @param float $val The value of the potentialScoreImpact
    *
    * @return UserTrainingContentEventInfo
    */
    public function setPotentialScoreImpact($val)
    {
        $this->_propDict["potentialScoreImpact"] = $val;
        return $this;
    }
}
