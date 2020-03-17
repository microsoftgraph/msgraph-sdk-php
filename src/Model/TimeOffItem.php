<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeOffItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* TimeOffItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TimeOffItem extends ScheduleEntity
{
    /**
    * Gets the timeOffReasonId
    *
    * @return string The timeOffReasonId
    */
    public function getTimeOffReasonId()
    {
        if (array_key_exists("timeOffReasonId", $this->_propDict)) {
            return $this->_propDict["timeOffReasonId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeOffReasonId
    *
    * @param string $val The value of the timeOffReasonId
    *
    * @return TimeOffItem
    */
    public function setTimeOffReasonId($val)
    {
        $this->_propDict["timeOffReasonId"] = $val;
        return $this;
    }
}
