<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntitlementManagement File
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
* EntitlementManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntitlementManagement extends Entity
{

     /**
     * Gets the accessPackageAssignmentApprovals
     *
     * @return array|null The accessPackageAssignmentApprovals
     */
    public function getAccessPackageAssignmentApprovals()
    {
        if (array_key_exists("accessPackageAssignmentApprovals", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentApprovals"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackageAssignmentApprovals
    *
    * @param Approval[] $val The accessPackageAssignmentApprovals
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentApprovals($val)
    {
        $this->_propDict["accessPackageAssignmentApprovals"] = $val;
        return $this;
    }


     /**
     * Gets the accessPackages
    * Access packages.
     *
     * @return array|null The accessPackages
     */
    public function getAccessPackages()
    {
        if (array_key_exists("accessPackages", $this->_propDict)) {
           return $this->_propDict["accessPackages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accessPackages
    * Access packages.
    *
    * @param AccessPackage[] $val The accessPackages
    *
    * @return EntitlementManagement
    */
    public function setAccessPackages($val)
    {
        $this->_propDict["accessPackages"] = $val;
        return $this;
    }


     /**
     * Gets the assignmentRequests
    * Access package assignment requests.
     *
     * @return array|null The assignmentRequests
     */
    public function getAssignmentRequests()
    {
        if (array_key_exists("assignmentRequests", $this->_propDict)) {
           return $this->_propDict["assignmentRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentRequests
    * Access package assignment requests.
    *
    * @param AccessPackageAssignmentRequest[] $val The assignmentRequests
    *
    * @return EntitlementManagement
    */
    public function setAssignmentRequests($val)
    {
        $this->_propDict["assignmentRequests"] = $val;
        return $this;
    }


     /**
     * Gets the assignments
    * Access package assignments.
     *
     * @return array|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignments
    * Access package assignments.
    *
    * @param AccessPackageAssignment[] $val The assignments
    *
    * @return EntitlementManagement
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }


     /**
     * Gets the catalogs
    * Access package catalogs.
     *
     * @return array|null The catalogs
     */
    public function getCatalogs()
    {
        if (array_key_exists("catalogs", $this->_propDict)) {
           return $this->_propDict["catalogs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the catalogs
    * Access package catalogs.
    *
    * @param AccessPackageCatalog[] $val The catalogs
    *
    * @return EntitlementManagement
    */
    public function setCatalogs($val)
    {
        $this->_propDict["catalogs"] = $val;
        return $this;
    }


     /**
     * Gets the connectedOrganizations
    * Connected organizations.
     *
     * @return array|null The connectedOrganizations
     */
    public function getConnectedOrganizations()
    {
        if (array_key_exists("connectedOrganizations", $this->_propDict)) {
           return $this->_propDict["connectedOrganizations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectedOrganizations
    * Connected organizations.
    *
    * @param ConnectedOrganization[] $val The connectedOrganizations
    *
    * @return EntitlementManagement
    */
    public function setConnectedOrganizations($val)
    {
        $this->_propDict["connectedOrganizations"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    * Entitlement management settings.
    *
    * @return EntitlementManagementSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Microsoft\Graph\Model\EntitlementManagementSettings") || is_null($this->_propDict["settings"])) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new EntitlementManagementSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    * Entitlement management settings.
    *
    * @param EntitlementManagementSettings $val The settings
    *
    * @return EntitlementManagement
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }

}
