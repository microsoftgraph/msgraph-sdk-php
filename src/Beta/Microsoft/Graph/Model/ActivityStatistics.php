<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActivityStatistics File
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
* ActivityStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ActivityStatistics extends Entity
{
    /**
    * Gets the activity
    *
    * @return AnalyticsActivityType The activity
    */
    public function getActivity()
    {
        if (array_key_exists("activity", $this->_propDict)) {
            if (is_a($this->_propDict["activity"], "Beta\Microsoft\Graph\Model\AnalyticsActivityType")) {
                return $this->_propDict["activity"];
            } else {
                $this->_propDict["activity"] = new AnalyticsActivityType($this->_propDict["activity"]);
                return $this->_propDict["activity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activity
    *
    * @param AnalyticsActivityType $val The activity
    *
    * @return ActivityStatistics
    */
    public function setActivity($val)
    {
        $this->_propDict["activity"] = $val;
        return $this;
    }
    
    /**
    * Gets the duration
    *
    * @return Duration The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            if (is_a($this->_propDict["duration"], "Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["duration"];
            } else {
                $this->_propDict["duration"] = new Duration($this->_propDict["duration"]);
                return $this->_propDict["duration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the duration
    *
    * @param Duration $val The duration
    *
    * @return ActivityStatistics
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDate
    *
    * @return \DateTime The endDate
    */
    public function getEndDate()
    {
        if (array_key_exists("endDate", $this->_propDict)) {
            if (is_a($this->_propDict["endDate"], "\DateTime")) {
                return $this->_propDict["endDate"];
            } else {
                $this->_propDict["endDate"] = new \DateTime($this->_propDict["endDate"]);
                return $this->_propDict["endDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDate
    *
    * @param \DateTime $val The endDate
    *
    * @return ActivityStatistics
    */
    public function setEndDate($val)
    {
        $this->_propDict["endDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDate
    *
    * @return \DateTime The startDate
    */
    public function getStartDate()
    {
        if (array_key_exists("startDate", $this->_propDict)) {
            if (is_a($this->_propDict["startDate"], "\DateTime")) {
                return $this->_propDict["startDate"];
            } else {
                $this->_propDict["startDate"] = new \DateTime($this->_propDict["startDate"]);
                return $this->_propDict["startDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDate
    *
    * @param \DateTime $val The startDate
    *
    * @return ActivityStatistics
    */
    public function setStartDate($val)
    {
        $this->_propDict["startDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the timeZoneUsed
    *
    * @return string The timeZoneUsed
    */
    public function getTimeZoneUsed()
    {
        if (array_key_exists("timeZoneUsed", $this->_propDict)) {
            return $this->_propDict["timeZoneUsed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the timeZoneUsed
    *
    * @param string $val The timeZoneUsed
    *
    * @return ActivityStatistics
    */
    public function setTimeZoneUsed($val)
    {
        $this->_propDict["timeZoneUsed"] = $val;
        return $this;
    }
    
}