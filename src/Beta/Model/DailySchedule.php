<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DailySchedule File
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
* DailySchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DailySchedule extends RunSchedule
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
    * @return DailySchedule
    */
    public function setInterval($val)
    {
        $this->_propDict["interval"] = $val;
        return $this;
    }
}
