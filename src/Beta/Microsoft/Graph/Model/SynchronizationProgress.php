<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationProgress File
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
* SynchronizationProgress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationProgress extends Entity
{
    /**
    * Gets the completedUnits
    *
    * @return int The completedUnits
    */
    public function getCompletedUnits()
    {
        if (array_key_exists("completedUnits", $this->_propDict)) {
            return $this->_propDict["completedUnits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedUnits
    *
    * @param int $val The value of the completedUnits
    *
    * @return SynchronizationProgress
    */
    public function setCompletedUnits($val)
    {
        $this->_propDict["completedUnits"] = $val;
        return $this;
    }

    /**
    * Gets the progressObservationDateTime
    *
    * @return \DateTime The progressObservationDateTime
    */
    public function getProgressObservationDateTime()
    {
        if (array_key_exists("progressObservationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["progressObservationDateTime"], "\DateTime")) {
                return $this->_propDict["progressObservationDateTime"];
            } else {
                $this->_propDict["progressObservationDateTime"] = new \DateTime($this->_propDict["progressObservationDateTime"]);
                return $this->_propDict["progressObservationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the progressObservationDateTime
    *
    * @param \DateTime $val The value to assign to the progressObservationDateTime
    *
    * @return SynchronizationProgress The SynchronizationProgress
    */
    public function setProgressObservationDateTime($val)
    {
        $this->_propDict["progressObservationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the totalUnits
    *
    * @return int The totalUnits
    */
    public function getTotalUnits()
    {
        if (array_key_exists("totalUnits", $this->_propDict)) {
            return $this->_propDict["totalUnits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalUnits
    *
    * @param int $val The value of the totalUnits
    *
    * @return SynchronizationProgress
    */
    public function setTotalUnits($val)
    {
        $this->_propDict["totalUnits"] = $val;
        return $this;
    }
    /**
    * Gets the units
    *
    * @return string The units
    */
    public function getUnits()
    {
        if (array_key_exists("units", $this->_propDict)) {
            return $this->_propDict["units"];
        } else {
            return null;
        }
    }

    /**
    * Sets the units
    *
    * @param string $val The value of the units
    *
    * @return SynchronizationProgress
    */
    public function setUnits($val)
    {
        $this->_propDict["units"] = $val;
        return $this;
    }
}
