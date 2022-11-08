<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditActor File
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
* AuditActor class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditActor extends Entity
{
    /**
    * Gets the applicationDisplayName
    * Name of the Application.
    *
    * @return string|null The applicationDisplayName
    */
    public function getApplicationDisplayName()
    {
        if (array_key_exists("applicationDisplayName", $this->_propDict)) {
            return $this->_propDict["applicationDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationDisplayName
    * Name of the Application.
    *
    * @param string $val The value of the applicationDisplayName
    *
    * @return AuditActor
    */
    public function setApplicationDisplayName($val)
    {
        $this->_propDict["applicationDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the applicationId
    * AAD Application Id.
    *
    * @return string|null The applicationId
    */
    public function getApplicationId()
    {
        if (array_key_exists("applicationId", $this->_propDict)) {
            return $this->_propDict["applicationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationId
    * AAD Application Id.
    *
    * @param string $val The value of the applicationId
    *
    * @return AuditActor
    */
    public function setApplicationId($val)
    {
        $this->_propDict["applicationId"] = $val;
        return $this;
    }
    /**
    * Gets the auditActorType
    * Actor Type.
    *
    * @return string|null The auditActorType
    */
    public function getAuditActorType()
    {
        if (array_key_exists("auditActorType", $this->_propDict)) {
            return $this->_propDict["auditActorType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the auditActorType
    * Actor Type.
    *
    * @param string $val The value of the auditActorType
    *
    * @return AuditActor
    */
    public function setAuditActorType($val)
    {
        $this->_propDict["auditActorType"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    * IPAddress.
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * IPAddress.
    *
    * @param string $val The value of the ipAddress
    *
    * @return AuditActor
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the servicePrincipalName
    * Service Principal Name (SPN).
    *
    * @return string|null The servicePrincipalName
    */
    public function getServicePrincipalName()
    {
        if (array_key_exists("servicePrincipalName", $this->_propDict)) {
            return $this->_propDict["servicePrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalName
    * Service Principal Name (SPN).
    *
    * @param string $val The value of the servicePrincipalName
    *
    * @return AuditActor
    */
    public function setServicePrincipalName($val)
    {
        $this->_propDict["servicePrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * User Id.
    *
    * @return string|null The userId
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
    * User Id.
    *
    * @param string $val The value of the userId
    *
    * @return AuditActor
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPermissions
    * List of user permissions when the audit was performed.
    *
    * @return string|null The userPermissions
    */
    public function getUserPermissions()
    {
        if (array_key_exists("userPermissions", $this->_propDict)) {
            return $this->_propDict["userPermissions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPermissions
    * List of user permissions when the audit was performed.
    *
    * @param string $val The value of the userPermissions
    *
    * @return AuditActor
    */
    public function setUserPermissions($val)
    {
        $this->_propDict["userPermissions"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * User Principal Name (UPN).
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * User Principal Name (UPN).
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return AuditActor
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
