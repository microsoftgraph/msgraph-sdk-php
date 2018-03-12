<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeSlotOLD File
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
* TimeSlotOLD class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class TimeSlotOLD extends Entity
{

    /**
    * Gets the start
    *
    * @return TimeStamp The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "Microsoft\Graph\Model\TimeStamp")) {
                return $this->_propDict["start"];
            } else {
                $this->_propDict["start"] = new TimeStamp($this->_propDict["start"]);
                return $this->_propDict["start"];
            }
        }
        return null;
    }

    /**
    * Sets the start
    *
    * @param TimeStamp $val The value to assign to the start
    *
    * @return TimeSlotOLD The TimeSlotOLD
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
         return $this;
    }

    /**
    * Gets the end
    *
    * @return TimeStamp The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "Microsoft\Graph\Model\TimeStamp")) {
                return $this->_propDict["end"];
            } else {
                $this->_propDict["end"] = new TimeStamp($this->_propDict["end"]);
                return $this->_propDict["end"];
            }
        }
        return null;
    }

    /**
    * Sets the end
    *
    * @param TimeStamp $val The value to assign to the end
    *
    * @return TimeSlotOLD The TimeSlotOLD
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
         return $this;
    }
}
