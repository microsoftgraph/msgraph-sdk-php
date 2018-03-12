<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HourlySchedule File
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
* HourlySchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class HourlySchedule extends RunSchedule
{
    /**
    * Gets the interval
    *
    * @return int The interval
    */
    public function getInterval()
    {
        if (array_key_exists("interval", $this->_propDict)) {
            return $this->_propDict["interval"];
        } else {
            return null;
        }
    }

    /**
    * Sets the interval
    *
    * @param int $val The value of the interval
    *
    * @return HourlySchedule
    */
    public function setInterval($val)
    {
        $this->_propDict["interval"] = $val;
        return $this;
    }
}
