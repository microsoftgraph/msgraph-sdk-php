<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedOperationEvent File
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
* PrivilegedOperationEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedOperationEvent extends Entity
{
    /**
    * Gets the additionalInformation
    *
    * @return string The additionalInformation
    */
    public function getAdditionalInformation()
    {
        if (array_key_exists("additionalInformation", $this->_propDict)) {
            return $this->_propDict["additionalInformation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the additionalInformation
    *
    * @param string $val The additionalInformation
    *
    * @return PrivilegedOperationEvent
    */
    public function setAdditionalInformation($val)
    {
        $this->_propDict["additionalInformation"] = $val;
        return $this;
    }
    
    /**
    * Gets the creationDateTime
    *
    * @return \DateTime The creationDateTime
    */
    public function getCreationDateTime()
    {
        if (array_key_exists("creationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["creationDateTime"], "\DateTime")) {
                return $this->_propDict["creationDateTime"];
            } else {
                $this->_propDict["creationDateTime"] = new \DateTime($this->_propDict["creationDateTime"]);
                return $this->_propDict["creationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the creationDateTime
    *
    * @param \DateTime $val The creationDateTime
    *
    * @return PrivilegedOperationEvent
    */
    public function setCreationDateTime($val)
    {
        $this->_propDict["creationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return PrivilegedOperationEvent
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the referenceKey
    *
    * @return string The referenceKey
    */
    public function getReferenceKey()
    {
        if (array_key_exists("referenceKey", $this->_propDict)) {
            return $this->_propDict["referenceKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the referenceKey
    *
    * @param string $val The referenceKey
    *
    * @return PrivilegedOperationEvent
    */
    public function setReferenceKey($val)
    {
        $this->_propDict["referenceKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the referenceSystem
    *
    * @return string The referenceSystem
    */
    public function getReferenceSystem()
    {
        if (array_key_exists("referenceSystem", $this->_propDict)) {
            return $this->_propDict["referenceSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the referenceSystem
    *
    * @param string $val The referenceSystem
    *
    * @return PrivilegedOperationEvent
    */
    public function setReferenceSystem($val)
    {
        $this->_propDict["referenceSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestorId
    *
    * @return string The requestorId
    */
    public function getRequestorId()
    {
        if (array_key_exists("requestorId", $this->_propDict)) {
            return $this->_propDict["requestorId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestorId
    *
    * @param string $val The requestorId
    *
    * @return PrivilegedOperationEvent
    */
    public function setRequestorId($val)
    {
        $this->_propDict["requestorId"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestorName
    *
    * @return string The requestorName
    */
    public function getRequestorName()
    {
        if (array_key_exists("requestorName", $this->_propDict)) {
            return $this->_propDict["requestorName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestorName
    *
    * @param string $val The requestorName
    *
    * @return PrivilegedOperationEvent
    */
    public function setRequestorName($val)
    {
        $this->_propDict["requestorName"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestType
    *
    * @return string The requestType
    */
    public function getRequestType()
    {
        if (array_key_exists("requestType", $this->_propDict)) {
            return $this->_propDict["requestType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestType
    *
    * @param string $val The requestType
    *
    * @return PrivilegedOperationEvent
    */
    public function setRequestType($val)
    {
        $this->_propDict["requestType"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleId
    *
    * @return string The roleId
    */
    public function getRoleId()
    {
        if (array_key_exists("roleId", $this->_propDict)) {
            return $this->_propDict["roleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleId
    *
    * @param string $val The roleId
    *
    * @return PrivilegedOperationEvent
    */
    public function setRoleId($val)
    {
        $this->_propDict["roleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleName
    *
    * @return string The roleName
    */
    public function getRoleName()
    {
        if (array_key_exists("roleName", $this->_propDict)) {
            return $this->_propDict["roleName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleName
    *
    * @param string $val The roleName
    *
    * @return PrivilegedOperationEvent
    */
    public function setRoleName($val)
    {
        $this->_propDict["roleName"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantId
    *
    * @return string The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return PrivilegedOperationEvent
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return PrivilegedOperationEvent
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userMail
    *
    * @return string The userMail
    */
    public function getUserMail()
    {
        if (array_key_exists("userMail", $this->_propDict)) {
            return $this->_propDict["userMail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userMail
    *
    * @param string $val The userMail
    *
    * @return PrivilegedOperationEvent
    */
    public function setUserMail($val)
    {
        $this->_propDict["userMail"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    *
    * @param string $val The userName
    *
    * @return PrivilegedOperationEvent
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
}