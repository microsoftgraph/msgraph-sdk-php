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
    * Approval stages for decisions associated with access package assignment requests.
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
    * Approval stages for decisions associated with access package assignment requests.
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
    * Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources.
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
    * Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources.
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
     * Gets the assignmentPolicies
    * Access package assignment policies govern which subjects can request or be assigned an access package via an access package assignment.
     *
     * @return array|null The assignmentPolicies
     */
    public function getAssignmentPolicies()
    {
        if (array_key_exists("assignmentPolicies", $this->_propDict)) {
           return $this->_propDict["assignmentPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignmentPolicies
    * Access package assignment policies govern which subjects can request or be assigned an access package via an access package assignment.
    *
    * @param AccessPackageAssignmentPolicy[] $val The assignmentPolicies
    *
    * @return EntitlementManagement
    */
    public function setAssignmentPolicies($val)
    {
        $this->_propDict["assignmentPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the assignmentRequests
    * Access package assignment requests created by or on behalf of a subject.
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
    * Access package assignment requests created by or on behalf of a subject.
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
    * The assignment of an access package to a subject for a period of time.
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
    * The assignment of an access package to a subject for a period of time.
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
    * A container for access packages.
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
    * A container for access packages.
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
    * References to a directory or domain of another organization whose users can request access.
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
    * References to a directory or domain of another organization whose users can request access.
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
     * Gets the resourceEnvironments
     *
     * @return array|null The resourceEnvironments
     */
    public function getResourceEnvironments()
    {
        if (array_key_exists("resourceEnvironments", $this->_propDict)) {
           return $this->_propDict["resourceEnvironments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceEnvironments
    *
    * @param AccessPackageResourceEnvironment[] $val The resourceEnvironments
    *
    * @return EntitlementManagement
    */
    public function setResourceEnvironments($val)
    {
        $this->_propDict["resourceEnvironments"] = $val;
        return $this;
    }


     /**
     * Gets the resourceRequests
     *
     * @return array|null The resourceRequests
     */
    public function getResourceRequests()
    {
        if (array_key_exists("resourceRequests", $this->_propDict)) {
           return $this->_propDict["resourceRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceRequests
    *
    * @param AccessPackageResourceRequest[] $val The resourceRequests
    *
    * @return EntitlementManagement
    */
    public function setResourceRequests($val)
    {
        $this->_propDict["resourceRequests"] = $val;
        return $this;
    }


     /**
     * Gets the resourceRoleScopes
     *
     * @return array|null The resourceRoleScopes
     */
    public function getResourceRoleScopes()
    {
        if (array_key_exists("resourceRoleScopes", $this->_propDict)) {
           return $this->_propDict["resourceRoleScopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceRoleScopes
    *
    * @param AccessPackageResourceRoleScope[] $val The resourceRoleScopes
    *
    * @return EntitlementManagement
    */
    public function setResourceRoleScopes($val)
    {
        $this->_propDict["resourceRoleScopes"] = $val;
        return $this;
    }


     /**
     * Gets the resources
     *
     * @return array|null The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resources
    *
    * @param AccessPackageResource[] $val The resources
    *
    * @return EntitlementManagement
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    * The settings that control the behavior of Azure AD entitlement management.
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
    * The settings that control the behavior of Azure AD entitlement management.
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
