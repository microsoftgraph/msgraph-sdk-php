<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditResource File
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
* AuditResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AuditResource extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
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
    *
    * @return AuditProperty The modifiedProperties
    */
    public function getModifiedProperties()
    {
        if (array_key_exists("modifiedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedProperties"], "Microsoft\Graph\Beta\Model\AuditProperty")) {
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
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The value of the type
    *
    * @return AuditResource
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    /**
    * Gets the resourceId
    *
    * @return string The resourceId
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
