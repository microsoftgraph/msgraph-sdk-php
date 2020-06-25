<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventMessageResponse File
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
* EventMessageResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EventMessageResponse extends EventMessage
{
    /**
    * Gets the proposedNewTime
    *
    * @return TimeSlot The proposedNewTime
    */
    public function getProposedNewTime()
    {
        if (array_key_exists("proposedNewTime", $this->_propDict)) {
            if (is_a($this->_propDict["proposedNewTime"], "Microsoft\Graph\Model\TimeSlot")) {
                return $this->_propDict["proposedNewTime"];
            } else {
                $this->_propDict["proposedNewTime"] = new TimeSlot($this->_propDict["proposedNewTime"]);
                return $this->_propDict["proposedNewTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proposedNewTime
    *
    * @param TimeSlot $val The proposedNewTime
    *
    * @return EventMessageResponse
    */
    public function setProposedNewTime($val)
    {
        $this->_propDict["proposedNewTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the responseType
    *
    * @return ResponseType The responseType
    */
    public function getResponseType()
    {
        if (array_key_exists("responseType", $this->_propDict)) {
            if (is_a($this->_propDict["responseType"], "Microsoft\Graph\Model\ResponseType")) {
                return $this->_propDict["responseType"];
            } else {
                $this->_propDict["responseType"] = new ResponseType($this->_propDict["responseType"]);
                return $this->_propDict["responseType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the responseType
    *
    * @param ResponseType $val The responseType
    *
    * @return EventMessageResponse
    */
    public function setResponseType($val)
    {
        $this->_propDict["responseType"] = $val;
        return $this;
    }
    
}