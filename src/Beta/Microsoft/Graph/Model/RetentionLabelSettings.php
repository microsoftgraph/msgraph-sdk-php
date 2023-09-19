<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RetentionLabelSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* RetentionLabelSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RetentionLabelSettings extends Entity
{

    /**
    * Gets the behaviorDuringRetentionPeriod
    * Describes the item behavior during retention period. Possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue. Read-only.
    *
    * @return \Beta\Microsoft\Graph\SecurityNamespace\Model\BehaviorDuringRetentionPeriod|null The behaviorDuringRetentionPeriod
    */
    public function getBehaviorDuringRetentionPeriod()
    {
        if (array_key_exists("behaviorDuringRetentionPeriod", $this->_propDict)) {
            if (is_a($this->_propDict["behaviorDuringRetentionPeriod"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\BehaviorDuringRetentionPeriod") || is_null($this->_propDict["behaviorDuringRetentionPeriod"])) {
                return $this->_propDict["behaviorDuringRetentionPeriod"];
            } else {
                $this->_propDict["behaviorDuringRetentionPeriod"] = new \Beta\Microsoft\Graph\SecurityNamespace\Model\BehaviorDuringRetentionPeriod($this->_propDict["behaviorDuringRetentionPeriod"]);
                return $this->_propDict["behaviorDuringRetentionPeriod"];
            }
        }
        return null;
    }

    /**
    * Sets the behaviorDuringRetentionPeriod
    * Describes the item behavior during retention period. Possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue. Read-only.
    *
    * @param \Beta\Microsoft\Graph\SecurityNamespace\Model\BehaviorDuringRetentionPeriod $val The value to assign to the behaviorDuringRetentionPeriod
    *
    * @return RetentionLabelSettings The RetentionLabelSettings
    */
    public function setBehaviorDuringRetentionPeriod($val)
    {
        $this->_propDict["behaviorDuringRetentionPeriod"] = $val;
         return $this;
    }
    /**
    * Gets the isContentUpdateAllowed
    * Specifies whether updates to document content are allowed. Read-only.
    *
    * @return bool|null The isContentUpdateAllowed
    */
    public function getIsContentUpdateAllowed()
    {
        if (array_key_exists("isContentUpdateAllowed", $this->_propDict)) {
            return $this->_propDict["isContentUpdateAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isContentUpdateAllowed
    * Specifies whether updates to document content are allowed. Read-only.
    *
    * @param bool $val The value of the isContentUpdateAllowed
    *
    * @return RetentionLabelSettings
    */
    public function setIsContentUpdateAllowed($val)
    {
        $this->_propDict["isContentUpdateAllowed"] = $val;
        return $this;
    }
    /**
    * Gets the isDeleteAllowed
    * Specifies whether the document deletion is allowed. Read-only.
    *
    * @return bool|null The isDeleteAllowed
    */
    public function getIsDeleteAllowed()
    {
        if (array_key_exists("isDeleteAllowed", $this->_propDict)) {
            return $this->_propDict["isDeleteAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDeleteAllowed
    * Specifies whether the document deletion is allowed. Read-only.
    *
    * @param bool $val The value of the isDeleteAllowed
    *
    * @return RetentionLabelSettings
    */
    public function setIsDeleteAllowed($val)
    {
        $this->_propDict["isDeleteAllowed"] = $val;
        return $this;
    }
    /**
    * Gets the isLabelUpdateAllowed
    * Specifies whether you're allowed to change the retention label on the document. Read-only.
    *
    * @return bool|null The isLabelUpdateAllowed
    */
    public function getIsLabelUpdateAllowed()
    {
        if (array_key_exists("isLabelUpdateAllowed", $this->_propDict)) {
            return $this->_propDict["isLabelUpdateAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLabelUpdateAllowed
    * Specifies whether you're allowed to change the retention label on the document. Read-only.
    *
    * @param bool $val The value of the isLabelUpdateAllowed
    *
    * @return RetentionLabelSettings
    */
    public function setIsLabelUpdateAllowed($val)
    {
        $this->_propDict["isLabelUpdateAllowed"] = $val;
        return $this;
    }
    /**
    * Gets the isMetadataUpdateAllowed
    * Specifies whether updates to the item metadata (for example, the Title field) are blocked. Read-only.
    *
    * @return bool|null The isMetadataUpdateAllowed
    */
    public function getIsMetadataUpdateAllowed()
    {
        if (array_key_exists("isMetadataUpdateAllowed", $this->_propDict)) {
            return $this->_propDict["isMetadataUpdateAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMetadataUpdateAllowed
    * Specifies whether updates to the item metadata (for example, the Title field) are blocked. Read-only.
    *
    * @param bool $val The value of the isMetadataUpdateAllowed
    *
    * @return RetentionLabelSettings
    */
    public function setIsMetadataUpdateAllowed($val)
    {
        $this->_propDict["isMetadataUpdateAllowed"] = $val;
        return $this;
    }
    /**
    * Gets the isRecordLocked
    * Specifies whether the item is locked. Read-write.
    *
    * @return bool|null The isRecordLocked
    */
    public function getIsRecordLocked()
    {
        if (array_key_exists("isRecordLocked", $this->_propDict)) {
            return $this->_propDict["isRecordLocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRecordLocked
    * Specifies whether the item is locked. Read-write.
    *
    * @param bool $val The value of the isRecordLocked
    *
    * @return RetentionLabelSettings
    */
    public function setIsRecordLocked($val)
    {
        $this->_propDict["isRecordLocked"] = $val;
        return $this;
    }
}
