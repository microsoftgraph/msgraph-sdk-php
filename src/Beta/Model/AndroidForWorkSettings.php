<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkSettings File
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
* AndroidForWorkSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkSettings extends Entity
{
    /**
    * Gets the bindStatus
    *
    * @return AndroidForWorkBindStatus The bindStatus
    */
    public function getBindStatus()
    {
        if (array_key_exists("bindStatus", $this->_propDict)) {
            if (is_a($this->_propDict["bindStatus"], "Microsoft\Graph\Beta\Model\AndroidForWorkBindStatus")) {
                return $this->_propDict["bindStatus"];
            } else {
                $this->_propDict["bindStatus"] = new AndroidForWorkBindStatus($this->_propDict["bindStatus"]);
                return $this->_propDict["bindStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bindStatus
    *
    * @param AndroidForWorkBindStatus $val The bindStatus
    *
    * @return AndroidForWorkSettings
    */
    public function setBindStatus($val)
    {
        $this->_propDict["bindStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastAppSyncDateTime
    *
    * @return \DateTime The lastAppSyncDateTime
    */
    public function getLastAppSyncDateTime()
    {
        if (array_key_exists("lastAppSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastAppSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastAppSyncDateTime"];
            } else {
                $this->_propDict["lastAppSyncDateTime"] = new \DateTime($this->_propDict["lastAppSyncDateTime"]);
                return $this->_propDict["lastAppSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastAppSyncDateTime
    *
    * @param \DateTime $val The lastAppSyncDateTime
    *
    * @return AndroidForWorkSettings
    */
    public function setLastAppSyncDateTime($val)
    {
        $this->_propDict["lastAppSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastAppSyncStatus
    *
    * @return AndroidForWorkSyncStatus The lastAppSyncStatus
    */
    public function getLastAppSyncStatus()
    {
        if (array_key_exists("lastAppSyncStatus", $this->_propDict)) {
            if (is_a($this->_propDict["lastAppSyncStatus"], "Microsoft\Graph\Beta\Model\AndroidForWorkSyncStatus")) {
                return $this->_propDict["lastAppSyncStatus"];
            } else {
                $this->_propDict["lastAppSyncStatus"] = new AndroidForWorkSyncStatus($this->_propDict["lastAppSyncStatus"]);
                return $this->_propDict["lastAppSyncStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastAppSyncStatus
    *
    * @param AndroidForWorkSyncStatus $val The lastAppSyncStatus
    *
    * @return AndroidForWorkSettings
    */
    public function setLastAppSyncStatus($val)
    {
        $this->_propDict["lastAppSyncStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerUserPrincipalName
    *
    * @return string The ownerUserPrincipalName
    */
    public function getOwnerUserPrincipalName()
    {
        if (array_key_exists("ownerUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["ownerUserPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerUserPrincipalName
    *
    * @param string $val The ownerUserPrincipalName
    *
    * @return AndroidForWorkSettings
    */
    public function setOwnerUserPrincipalName($val)
    {
        $this->_propDict["ownerUserPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerOrganizationName
    *
    * @return string The ownerOrganizationName
    */
    public function getOwnerOrganizationName()
    {
        if (array_key_exists("ownerOrganizationName", $this->_propDict)) {
            return $this->_propDict["ownerOrganizationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerOrganizationName
    *
    * @param string $val The ownerOrganizationName
    *
    * @return AndroidForWorkSettings
    */
    public function setOwnerOrganizationName($val)
    {
        $this->_propDict["ownerOrganizationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AndroidForWorkSettings
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrollmentTarget
    *
    * @return AndroidForWorkEnrollmentTarget The enrollmentTarget
    */
    public function getEnrollmentTarget()
    {
        if (array_key_exists("enrollmentTarget", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentTarget"], "Microsoft\Graph\Beta\Model\AndroidForWorkEnrollmentTarget")) {
                return $this->_propDict["enrollmentTarget"];
            } else {
                $this->_propDict["enrollmentTarget"] = new AndroidForWorkEnrollmentTarget($this->_propDict["enrollmentTarget"]);
                return $this->_propDict["enrollmentTarget"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrollmentTarget
    *
    * @param AndroidForWorkEnrollmentTarget $val The enrollmentTarget
    *
    * @return AndroidForWorkSettings
    */
    public function setEnrollmentTarget($val)
    {
        $this->_propDict["enrollmentTarget"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetGroupIds
    *
    * @return string The targetGroupIds
    */
    public function getTargetGroupIds()
    {
        if (array_key_exists("targetGroupIds", $this->_propDict)) {
            return $this->_propDict["targetGroupIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupIds
    *
    * @param string $val The targetGroupIds
    *
    * @return AndroidForWorkSettings
    */
    public function setTargetGroupIds($val)
    {
        $this->_propDict["targetGroupIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOwnerManagementEnabled
    *
    * @return bool The deviceOwnerManagementEnabled
    */
    public function getDeviceOwnerManagementEnabled()
    {
        if (array_key_exists("deviceOwnerManagementEnabled", $this->_propDict)) {
            return $this->_propDict["deviceOwnerManagementEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceOwnerManagementEnabled
    *
    * @param bool $val The deviceOwnerManagementEnabled
    *
    * @return AndroidForWorkSettings
    */
    public function setDeviceOwnerManagementEnabled($val)
    {
        $this->_propDict["deviceOwnerManagementEnabled"] = boolval($val);
        return $this;
    }
    
}