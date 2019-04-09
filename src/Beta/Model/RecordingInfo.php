<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecordingInfo File
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
* RecordingInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RecordingInfo extends Entity
{

    /**
    * Gets the status
    *
    * @return RecordingStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Beta\Model\RecordingStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new RecordingStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param RecordingStatus $val The value to assign to the status
    *
    * @return RecordingInfo The RecordingInfo
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }

    /**
    * Gets the initiatedBy
    *
    * @return ParticipantInfo The initiatedBy
    */
    public function getInitiatedBy()
    {
        if (array_key_exists("initiatedBy", $this->_propDict)) {
            if (is_a($this->_propDict["initiatedBy"], "Microsoft\Graph\Beta\Model\ParticipantInfo")) {
                return $this->_propDict["initiatedBy"];
            } else {
                $this->_propDict["initiatedBy"] = new ParticipantInfo($this->_propDict["initiatedBy"]);
                return $this->_propDict["initiatedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the initiatedBy
    *
    * @param ParticipantInfo $val The value to assign to the initiatedBy
    *
    * @return RecordingInfo The RecordingInfo
    */
    public function setInitiatedBy($val)
    {
        $this->_propDict["initiatedBy"] = $val;
         return $this;
    }
}
