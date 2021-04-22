<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RolloutSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;
/**
* RolloutSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RolloutSettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the devicesPerOffer
    *
    * @return int The devicesPerOffer
    */
    public function getDevicesPerOffer()
    {
        if (array_key_exists("devicesPerOffer", $this->_propDict)) {
            return $this->_propDict["devicesPerOffer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devicesPerOffer
    *
    * @param int $val The value of the devicesPerOffer
    *
    * @return RolloutSettings
    */
    public function setDevicesPerOffer($val)
    {
        $this->_propDict["devicesPerOffer"] = $val;
        return $this;
    }
    /**
    * Gets the durationBetweenOffers
    *
    * @return string The durationBetweenOffers
    */
    public function getDurationBetweenOffers()
    {
        if (array_key_exists("durationBetweenOffers", $this->_propDict)) {
            return $this->_propDict["durationBetweenOffers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationBetweenOffers
    *
    * @param string $val The value of the durationBetweenOffers
    *
    * @return RolloutSettings
    */
    public function setDurationBetweenOffers($val)
    {
        $this->_propDict["durationBetweenOffers"] = $val;
        return $this;
    }

    /**
    * Gets the endDateTime
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return RolloutSettings The RolloutSettings
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the startDateTime
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return RolloutSettings The RolloutSettings
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
}
