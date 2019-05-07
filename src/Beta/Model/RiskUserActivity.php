<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskUserActivity File
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
* RiskUserActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RiskUserActivity extends Entity
{

    /**
    * Gets the eventTypes
    *
    * @return RiskEventType The eventTypes
    */
    public function getEventTypes()
    {
        if (array_key_exists("eventTypes", $this->_propDict)) {
            if (is_a($this->_propDict["eventTypes"], "Microsoft\Graph\Beta\Model\RiskEventType")) {
                return $this->_propDict["eventTypes"];
            } else {
                $this->_propDict["eventTypes"] = new RiskEventType($this->_propDict["eventTypes"]);
                return $this->_propDict["eventTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the eventTypes
    *
    * @param RiskEventType $val The value to assign to the eventTypes
    *
    * @return RiskUserActivity The RiskUserActivity
    */
    public function setEventTypes($val)
    {
        $this->_propDict["eventTypes"] = $val;
         return $this;
    }

    /**
    * Gets the detail
    *
    * @return RiskDetail The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "Microsoft\Graph\Beta\Model\RiskDetail")) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new RiskDetail($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }

    /**
    * Sets the detail
    *
    * @param RiskDetail $val The value to assign to the detail
    *
    * @return RiskUserActivity The RiskUserActivity
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
         return $this;
    }
}
