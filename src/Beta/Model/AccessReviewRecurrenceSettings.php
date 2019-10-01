<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewRecurrenceSettings File
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
* AccessReviewRecurrenceSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AccessReviewRecurrenceSettings extends Entity
{
    /**
    * Gets the recurrenceType
    *
    * @return string The recurrenceType
    */
    public function getRecurrenceType()
    {
        if (array_key_exists("recurrenceType", $this->_propDict)) {
            return $this->_propDict["recurrenceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recurrenceType
    *
    * @param string $val The value of the recurrenceType
    *
    * @return AccessReviewRecurrenceSettings
    */
    public function setRecurrenceType($val)
    {
        $this->_propDict["recurrenceType"] = $val;
        return $this;
    }
    /**
    * Gets the recurrenceEndType
    *
    * @return string The recurrenceEndType
    */
    public function getRecurrenceEndType()
    {
        if (array_key_exists("recurrenceEndType", $this->_propDict)) {
            return $this->_propDict["recurrenceEndType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recurrenceEndType
    *
    * @param string $val The value of the recurrenceEndType
    *
    * @return AccessReviewRecurrenceSettings
    */
    public function setRecurrenceEndType($val)
    {
        $this->_propDict["recurrenceEndType"] = $val;
        return $this;
    }
    /**
    * Gets the durationInDays
    *
    * @return int The durationInDays
    */
    public function getDurationInDays()
    {
        if (array_key_exists("durationInDays", $this->_propDict)) {
            return $this->_propDict["durationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationInDays
    *
    * @param int $val The value of the durationInDays
    *
    * @return AccessReviewRecurrenceSettings
    */
    public function setDurationInDays($val)
    {
        $this->_propDict["durationInDays"] = $val;
        return $this;
    }
    /**
    * Gets the recurrenceCount
    *
    * @return int The recurrenceCount
    */
    public function getRecurrenceCount()
    {
        if (array_key_exists("recurrenceCount", $this->_propDict)) {
            return $this->_propDict["recurrenceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recurrenceCount
    *
    * @param int $val The value of the recurrenceCount
    *
    * @return AccessReviewRecurrenceSettings
    */
    public function setRecurrenceCount($val)
    {
        $this->_propDict["recurrenceCount"] = $val;
        return $this;
    }
}
