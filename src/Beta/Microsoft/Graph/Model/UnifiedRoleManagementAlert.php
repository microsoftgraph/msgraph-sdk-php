<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementAlert File
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
* UnifiedRoleManagementAlert class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementAlert extends Entity
{
    /**
    * Gets the alertDefinitionId
    * The identifier of an alert definition. Supports $filter (eq, ne).
    *
    * @return string|null The alertDefinitionId
    */
    public function getAlertDefinitionId()
    {
        if (array_key_exists("alertDefinitionId", $this->_propDict)) {
            return $this->_propDict["alertDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertDefinitionId
    * The identifier of an alert definition. Supports $filter (eq, ne).
    *
    * @param string $val The alertDefinitionId
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setAlertDefinitionId($val)
    {
        $this->_propDict["alertDefinitionId"] = $val;
        return $this;
    }

    /**
    * Gets the incidentCount
    * The number of incidents triggered in the tenant and relating to the alert. Can only be a positive integer.
    *
    * @return int|null The incidentCount
    */
    public function getIncidentCount()
    {
        if (array_key_exists("incidentCount", $this->_propDict)) {
            return $this->_propDict["incidentCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incidentCount
    * The number of incidents triggered in the tenant and relating to the alert. Can only be a positive integer.
    *
    * @param int $val The incidentCount
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setIncidentCount($val)
    {
        $this->_propDict["incidentCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the isActive
    * false by default. true if the alert is active.
    *
    * @return bool|null The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isActive
    * false by default. true if the alert is active.
    *
    * @param bool $val The isActive
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date time when the alert configuration was updated or new incidents generated.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date time when the alert configuration was updated or new incidents generated.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastScannedDateTime
    * The date time when the tenant was last scanned for incidents that trigger this alert.
    *
    * @return \DateTime|null The lastScannedDateTime
    */
    public function getLastScannedDateTime()
    {
        if (array_key_exists("lastScannedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastScannedDateTime"], "\DateTime") || is_null($this->_propDict["lastScannedDateTime"])) {
                return $this->_propDict["lastScannedDateTime"];
            } else {
                $this->_propDict["lastScannedDateTime"] = new \DateTime($this->_propDict["lastScannedDateTime"]);
                return $this->_propDict["lastScannedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastScannedDateTime
    * The date time when the tenant was last scanned for incidents that trigger this alert.
    *
    * @param \DateTime $val The lastScannedDateTime
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setLastScannedDateTime($val)
    {
        $this->_propDict["lastScannedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the scopeId
    * The identifier of the scope where the alert is related. / is the only supported one for the tenant. Supports $filter (eq, ne).
    *
    * @return string|null The scopeId
    */
    public function getScopeId()
    {
        if (array_key_exists("scopeId", $this->_propDict)) {
            return $this->_propDict["scopeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeId
    * The identifier of the scope where the alert is related. / is the only supported one for the tenant. Supports $filter (eq, ne).
    *
    * @param string $val The scopeId
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setScopeId($val)
    {
        $this->_propDict["scopeId"] = $val;
        return $this;
    }

    /**
    * Gets the scopeType
    * The type of scope where the alert is created. DirectoryRole is the only currently supported scope type for Azure AD roles.
    *
    * @return string|null The scopeType
    */
    public function getScopeType()
    {
        if (array_key_exists("scopeType", $this->_propDict)) {
            return $this->_propDict["scopeType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopeType
    * The type of scope where the alert is created. DirectoryRole is the only currently supported scope type for Azure AD roles.
    *
    * @param string $val The scopeType
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
        return $this;
    }

    /**
    * Gets the alertConfiguration
    * The configuration of the alert in PIM for Azure AD roles. Alert configurations are pre-defined and cannot be created or deleted, but some configurations can be modified. Supports $filter for the isEnabled property and $expand.
    *
    * @return UnifiedRoleManagementAlertConfiguration|null The alertConfiguration
    */
    public function getAlertConfiguration()
    {
        if (array_key_exists("alertConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["alertConfiguration"], "\Beta\Microsoft\Graph\Model\UnifiedRoleManagementAlertConfiguration") || is_null($this->_propDict["alertConfiguration"])) {
                return $this->_propDict["alertConfiguration"];
            } else {
                $this->_propDict["alertConfiguration"] = new UnifiedRoleManagementAlertConfiguration($this->_propDict["alertConfiguration"]);
                return $this->_propDict["alertConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the alertConfiguration
    * The configuration of the alert in PIM for Azure AD roles. Alert configurations are pre-defined and cannot be created or deleted, but some configurations can be modified. Supports $filter for the isEnabled property and $expand.
    *
    * @param UnifiedRoleManagementAlertConfiguration $val The alertConfiguration
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setAlertConfiguration($val)
    {
        $this->_propDict["alertConfiguration"] = $val;
        return $this;
    }

    /**
    * Gets the alertDefinition
    * Contains the description, impact, and measures to mitigate or prevent the security alert from being triggered in your tenant. Supports $expand.
    *
    * @return UnifiedRoleManagementAlertDefinition|null The alertDefinition
    */
    public function getAlertDefinition()
    {
        if (array_key_exists("alertDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["alertDefinition"], "\Beta\Microsoft\Graph\Model\UnifiedRoleManagementAlertDefinition") || is_null($this->_propDict["alertDefinition"])) {
                return $this->_propDict["alertDefinition"];
            } else {
                $this->_propDict["alertDefinition"] = new UnifiedRoleManagementAlertDefinition($this->_propDict["alertDefinition"]);
                return $this->_propDict["alertDefinition"];
            }
        }
        return null;
    }

    /**
    * Sets the alertDefinition
    * Contains the description, impact, and measures to mitigate or prevent the security alert from being triggered in your tenant. Supports $expand.
    *
    * @param UnifiedRoleManagementAlertDefinition $val The alertDefinition
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setAlertDefinition($val)
    {
        $this->_propDict["alertDefinition"] = $val;
        return $this;
    }


     /**
     * Gets the alertIncidents
    * Represents the incidents of this type of alert that have been triggered in Privileged Identity Management (PIM) for Azure AD roles in the tenant. Supports $expand.
     *
     * @return array|null The alertIncidents
     */
    public function getAlertIncidents()
    {
        if (array_key_exists("alertIncidents", $this->_propDict)) {
           return $this->_propDict["alertIncidents"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alertIncidents
    * Represents the incidents of this type of alert that have been triggered in Privileged Identity Management (PIM) for Azure AD roles in the tenant. Supports $expand.
    *
    * @param UnifiedRoleManagementAlertIncident[] $val The alertIncidents
    *
    * @return UnifiedRoleManagementAlert
    */
    public function setAlertIncidents($val)
    {
        $this->_propDict["alertIncidents"] = $val;
        return $this;
    }

}
