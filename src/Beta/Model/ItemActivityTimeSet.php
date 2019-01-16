<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActivityTimeSet File
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
* ItemActivityTimeSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ItemActivityTimeSet extends Entity
{

    /**
    * Gets the lastRecordedDateTime
    *
    * @return \DateTime The lastRecordedDateTime
    */
    public function getLastRecordedDateTime()
    {
        if (array_key_exists("lastRecordedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRecordedDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["lastRecordedDateTime"];
            } else {
                $this->_propDict["lastRecordedDateTime"] = new \DateTime($this->_propDict["lastRecordedDateTime"]);
                return $this->_propDict["lastRecordedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRecordedDateTime
    *
    * @param \DateTime $val The value to assign to the lastRecordedDateTime
    *
    * @return ItemActivityTimeSet The ItemActivityTimeSet
    */
    public function setLastRecordedDateTime($val)
    {
        $this->_propDict["lastRecordedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the observedDateTime
    *
    * @return \DateTime The observedDateTime
    */
    public function getObservedDateTime()
    {
        if (array_key_exists("observedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["observedDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["observedDateTime"];
            } else {
                $this->_propDict["observedDateTime"] = new \DateTime($this->_propDict["observedDateTime"]);
                return $this->_propDict["observedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the observedDateTime
    *
    * @param \DateTime $val The value to assign to the observedDateTime
    *
    * @return ItemActivityTimeSet The ItemActivityTimeSet
    */
    public function setObservedDateTime($val)
    {
        $this->_propDict["observedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the recordedDateTime
    *
    * @return \DateTime The recordedDateTime
    */
    public function getRecordedDateTime()
    {
        if (array_key_exists("recordedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["recordedDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["recordedDateTime"];
            } else {
                $this->_propDict["recordedDateTime"] = new \DateTime($this->_propDict["recordedDateTime"]);
                return $this->_propDict["recordedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the recordedDateTime
    *
    * @param \DateTime $val The value to assign to the recordedDateTime
    *
    * @return ItemActivityTimeSet The ItemActivityTimeSet
    */
    public function setRecordedDateTime($val)
    {
        $this->_propDict["recordedDateTime"] = $val;
         return $this;
    }
}
