<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingWorkTimeSlot File
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
* BookingWorkTimeSlot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class BookingWorkTimeSlot extends Entity
{

    /**
    * Gets the start
    *
    * @return TimeOfDay The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["start"];
            } else {
                $this->_propDict["start"] = new TimeOfDay($this->_propDict["start"]);
                return $this->_propDict["start"];
            }
        }
        return null;
    }

    /**
    * Sets the start
    *
    * @param TimeOfDay $val The value to assign to the start
    *
    * @return BookingWorkTimeSlot The BookingWorkTimeSlot
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
         return $this;
    }

    /**
    * Gets the end
    *
    * @return TimeOfDay The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["end"];
            } else {
                $this->_propDict["end"] = new TimeOfDay($this->_propDict["end"]);
                return $this->_propDict["end"];
            }
        }
        return null;
    }

    /**
    * Sets the end
    *
    * @param TimeOfDay $val The value to assign to the end
    *
    * @return BookingWorkTimeSlot The BookingWorkTimeSlot
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
         return $this;
    }
}
