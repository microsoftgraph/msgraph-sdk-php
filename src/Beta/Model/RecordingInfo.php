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
    * Gets the recordingStatus
    *
    * @return RecordingStatus The recordingStatus
    */
    public function getRecordingStatus()
    {
        if (array_key_exists("recordingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["recordingStatus"], "Microsoft\Graph\Beta\Model\RecordingStatus")) {
                return $this->_propDict["recordingStatus"];
            } else {
                $this->_propDict["recordingStatus"] = new RecordingStatus($this->_propDict["recordingStatus"]);
                return $this->_propDict["recordingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the recordingStatus
    *
    * @param RecordingStatus $val The value to assign to the recordingStatus
    *
    * @return RecordingInfo The RecordingInfo
    */
    public function setRecordingStatus($val)
    {
        $this->_propDict["recordingStatus"] = $val;
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
