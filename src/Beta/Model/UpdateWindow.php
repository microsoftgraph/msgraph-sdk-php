<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UpdateWindow File
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
* UpdateWindow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UpdateWindow extends Entity
{

    /**
    * Gets the updateWindowStartTime
    *
    * @return TimeOfDay The updateWindowStartTime
    */
    public function getUpdateWindowStartTime()
    {
        if (array_key_exists("updateWindowStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["updateWindowStartTime"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
                return $this->_propDict["updateWindowStartTime"];
            } else {
                $this->_propDict["updateWindowStartTime"] = new TimeOfDay($this->_propDict["updateWindowStartTime"]);
                return $this->_propDict["updateWindowStartTime"];
            }
        }
        return null;
    }

    /**
    * Sets the updateWindowStartTime
    *
    * @param TimeOfDay $val The value to assign to the updateWindowStartTime
    *
    * @return UpdateWindow The UpdateWindow
    */
    public function setUpdateWindowStartTime($val)
    {
        $this->_propDict["updateWindowStartTime"] = $val;
         return $this;
    }

    /**
    * Gets the updateWindowEndTime
    *
    * @return TimeOfDay The updateWindowEndTime
    */
    public function getUpdateWindowEndTime()
    {
        if (array_key_exists("updateWindowEndTime", $this->_propDict)) {
            if (is_a($this->_propDict["updateWindowEndTime"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
                return $this->_propDict["updateWindowEndTime"];
            } else {
                $this->_propDict["updateWindowEndTime"] = new TimeOfDay($this->_propDict["updateWindowEndTime"]);
                return $this->_propDict["updateWindowEndTime"];
            }
        }
        return null;
    }

    /**
    * Sets the updateWindowEndTime
    *
    * @param TimeOfDay $val The value to assign to the updateWindowEndTime
    *
    * @return UpdateWindow The UpdateWindow
    */
    public function setUpdateWindowEndTime($val)
    {
        $this->_propDict["updateWindowEndTime"] = $val;
         return $this;
    }
}
