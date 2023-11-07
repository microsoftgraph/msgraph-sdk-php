<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemRetentionLabel File
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
* ItemRetentionLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemRetentionLabel extends Entity
{
    /**
    * Gets the isLabelAppliedExplicitly
    * Specifies whether the label is applied explicitly on the item. True indicates that the label is applied explicitly; otherwise, the label is inherited from its parent. Read-only.
    *
    * @return bool|null The isLabelAppliedExplicitly
    */
    public function getIsLabelAppliedExplicitly()
    {
        if (array_key_exists("isLabelAppliedExplicitly", $this->_propDict)) {
            return $this->_propDict["isLabelAppliedExplicitly"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLabelAppliedExplicitly
    * Specifies whether the label is applied explicitly on the item. True indicates that the label is applied explicitly; otherwise, the label is inherited from its parent. Read-only.
    *
    * @param bool $val The isLabelAppliedExplicitly
    *
    * @return ItemRetentionLabel
    */
    public function setIsLabelAppliedExplicitly($val)
    {
        $this->_propDict["isLabelAppliedExplicitly"] = boolval($val);
        return $this;
    }

    /**
    * Gets the labelAppliedBy
    * Identity of the user who applied the label. Read-only.
    *
    * @return IdentitySet|null The labelAppliedBy
    */
    public function getLabelAppliedBy()
    {
        if (array_key_exists("labelAppliedBy", $this->_propDict)) {
            if (is_a($this->_propDict["labelAppliedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["labelAppliedBy"])) {
                return $this->_propDict["labelAppliedBy"];
            } else {
                $this->_propDict["labelAppliedBy"] = new IdentitySet($this->_propDict["labelAppliedBy"]);
                return $this->_propDict["labelAppliedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the labelAppliedBy
    * Identity of the user who applied the label. Read-only.
    *
    * @param IdentitySet $val The labelAppliedBy
    *
    * @return ItemRetentionLabel
    */
    public function setLabelAppliedBy($val)
    {
        $this->_propDict["labelAppliedBy"] = $val;
        return $this;
    }

    /**
    * Gets the labelAppliedDateTime
    * The date and time when the label was applied on the item. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The labelAppliedDateTime
    */
    public function getLabelAppliedDateTime()
    {
        if (array_key_exists("labelAppliedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["labelAppliedDateTime"], "\DateTime") || is_null($this->_propDict["labelAppliedDateTime"])) {
                return $this->_propDict["labelAppliedDateTime"];
            } else {
                $this->_propDict["labelAppliedDateTime"] = new \DateTime($this->_propDict["labelAppliedDateTime"]);
                return $this->_propDict["labelAppliedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the labelAppliedDateTime
    * The date and time when the label was applied on the item. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The labelAppliedDateTime
    *
    * @return ItemRetentionLabel
    */
    public function setLabelAppliedDateTime($val)
    {
        $this->_propDict["labelAppliedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the name
    * The retention label on the document. Read-write.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The retention label on the document. Read-write.
    *
    * @param string $val The name
    *
    * @return ItemRetentionLabel
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the retentionSettings
    * The retention settings enforced on the item. Read-write.
    *
    * @return RetentionLabelSettings|null The retentionSettings
    */
    public function getRetentionSettings()
    {
        if (array_key_exists("retentionSettings", $this->_propDict)) {
            if (is_a($this->_propDict["retentionSettings"], "\Beta\Microsoft\Graph\Model\RetentionLabelSettings") || is_null($this->_propDict["retentionSettings"])) {
                return $this->_propDict["retentionSettings"];
            } else {
                $this->_propDict["retentionSettings"] = new RetentionLabelSettings($this->_propDict["retentionSettings"]);
                return $this->_propDict["retentionSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the retentionSettings
    * The retention settings enforced on the item. Read-write.
    *
    * @param RetentionLabelSettings $val The retentionSettings
    *
    * @return ItemRetentionLabel
    */
    public function setRetentionSettings($val)
    {
        $this->_propDict["retentionSettings"] = $val;
        return $this;
    }

}
