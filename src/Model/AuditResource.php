<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditResource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* AuditResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditResource extends Entity
{
    /**
    * Gets the auditResourceType
    * Audit resource's type.
    *
    * @return string|null The auditResourceType
    */
    public function getAuditResourceType()
    {
        if (array_key_exists("auditResourceType", $this->_propDict)) {
            return $this->_propDict["auditResourceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the auditResourceType
    * Audit resource's type.
    *
    * @param string $val The value of the auditResourceType
    *
    * @return AuditResource
    */
    public function setAuditResourceType($val)
    {
        $this->_propDict["auditResourceType"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Display name.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name.
    *
    * @param string $val The value of the displayName
    *
    * @return AuditResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the modifiedProperties
    * List of modified properties.
    *
    * @return AuditProperty|null The modifiedProperties
    */
    public function getModifiedProperties()
    {
        if (array_key_exists("modifiedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedProperties"], "\Microsoft\Graph\Model\AuditProperty") || is_null($this->_propDict["modifiedProperties"])) {
                return $this->_propDict["modifiedProperties"];
            } else {
                $this->_propDict["modifiedProperties"] = new AuditProperty($this->_propDict["modifiedProperties"]);
                return $this->_propDict["modifiedProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the modifiedProperties
    * List of modified properties.
    *
    * @param AuditProperty $val The value to assign to the modifiedProperties
    *
    * @return AuditResource The AuditResource
    */
    public function setModifiedProperties($val)
    {
        $this->_propDict["modifiedProperties"] = $val;
         return $this;
    }
    /**
    * Gets the resourceId
    * Audit resource's Id.
    *
    * @return string|null The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    * Audit resource's Id.
    *
    * @param string $val The value of the resourceId
    *
    * @return AuditResource
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
}
