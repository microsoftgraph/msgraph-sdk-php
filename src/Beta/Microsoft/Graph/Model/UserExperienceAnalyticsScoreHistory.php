<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsScoreHistory File
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
* UserExperienceAnalyticsScoreHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsScoreHistory extends Entity
{
    /**
    * Gets the startupDateTime
    * The device startup date time. The value cannot be modified and is automatically populated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
    *
    * @return \DateTime|null The startupDateTime
    */
    public function getStartupDateTime()
    {
        if (array_key_exists("startupDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startupDateTime"], "\DateTime") || is_null($this->_propDict["startupDateTime"])) {
                return $this->_propDict["startupDateTime"];
            } else {
                $this->_propDict["startupDateTime"] = new \DateTime($this->_propDict["startupDateTime"]);
                return $this->_propDict["startupDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startupDateTime
    * The device startup date time. The value cannot be modified and is automatically populated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
    *
    * @param \DateTime $val The startupDateTime
    *
    * @return UserExperienceAnalyticsScoreHistory
    */
    public function setStartupDateTime($val)
    {
        $this->_propDict["startupDateTime"] = $val;
        return $this;
    }

}
