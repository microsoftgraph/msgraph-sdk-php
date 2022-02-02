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
     * @return Approval[]|null The accessPackageAssignmentApprovals
     */
    public function getAccessPackageAssignmentApprovals()
    {
        if (array_key_exists('accessPackageAssignmentApprovals', $this->_propDict) && !is_null($this->_propDict['accessPackageAssignmentApprovals'])) {
            $accessPackageAssignmentApprovals = [];
            if (count($this->_propDict['accessPackageAssignmentApprovals']) > 0 && is_a($this->_propDict['accessPackageAssignmentApprovals'][0], 'Approval')) {
                return $this->_propDict['accessPackageAssignmentApprovals'];
            }
            foreach ($this->_propDict['accessPackageAssignmentApprovals'] as $singleValue) {
                $accessPackageAssignmentApprovals []= new Approval($singleValue);
            }
            $this->_propDict['accessPackageAssignmentApprovals'] = $accessPackageAssignmentApprovals;
            return $this->_propDict['accessPackageAssignmentApprovals'];
        }
        return null;
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
    * Represents access package objects.
     *
     * @return AccessPackage[]|null The accessPackages
     */
    public function getAccessPackages()
    {
        if (array_key_exists('accessPackages', $this->_propDict) && !is_null($this->_propDict['accessPackages'])) {
            $accessPackages = [];
            if (count($this->_propDict['accessPackages']) > 0 && is_a($this->_propDict['accessPackages'][0], 'AccessPackage')) {
                return $this->_propDict['accessPackages'];
            }
            foreach ($this->_propDict['accessPackages'] as $singleValue) {
                $accessPackages []= new AccessPackage($singleValue);
            }
            $this->_propDict['accessPackages'] = $accessPackages;
            return $this->_propDict['accessPackages'];
        }
        return null;
    }

    /**
    * Sets the accessPackages
    * Represents access package objects.
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
    * Represents access package assignment requests created by or on behalf of a user.
     *
     * @return AccessPackageAssignmentRequest[]|null The assignmentRequests
     */
    public function getAssignmentRequests()
    {
        if (array_key_exists('assignmentRequests', $this->_propDict) && !is_null($this->_propDict['assignmentRequests'])) {
            $assignmentRequests = [];
            if (count($this->_propDict['assignmentRequests']) > 0 && is_a($this->_propDict['assignmentRequests'][0], 'AccessPackageAssignmentRequest')) {
                return $this->_propDict['assignmentRequests'];
            }
            foreach ($this->_propDict['assignmentRequests'] as $singleValue) {
                $assignmentRequests []= new AccessPackageAssignmentRequest($singleValue);
            }
            $this->_propDict['assignmentRequests'] = $assignmentRequests;
            return $this->_propDict['assignmentRequests'];
        }
        return null;
    }

    /**
    * Sets the assignmentRequests
    * Represents access package assignment requests created by or on behalf of a user.
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
    * Represents the grant of an access package to a subject (user or group).
     *
     * @return AccessPackageAssignment[]|null The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists('assignments', $this->_propDict) && !is_null($this->_propDict['assignments'])) {
            $assignments = [];
            if (count($this->_propDict['assignments']) > 0 && is_a($this->_propDict['assignments'][0], 'AccessPackageAssignment')) {
                return $this->_propDict['assignments'];
            }
            foreach ($this->_propDict['assignments'] as $singleValue) {
                $assignments []= new AccessPackageAssignment($singleValue);
            }
            $this->_propDict['assignments'] = $assignments;
            return $this->_propDict['assignments'];
        }
        return null;
    }

    /**
    * Sets the assignments
    * Represents the grant of an access package to a subject (user or group).
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
    * Represents a group of access packages.
     *
     * @return AccessPackageCatalog[]|null The catalogs
     */
    public function getCatalogs()
    {
        if (array_key_exists('catalogs', $this->_propDict) && !is_null($this->_propDict['catalogs'])) {
            $catalogs = [];
            if (count($this->_propDict['catalogs']) > 0 && is_a($this->_propDict['catalogs'][0], 'AccessPackageCatalog')) {
                return $this->_propDict['catalogs'];
            }
            foreach ($this->_propDict['catalogs'] as $singleValue) {
                $catalogs []= new AccessPackageCatalog($singleValue);
            }
            $this->_propDict['catalogs'] = $catalogs;
            return $this->_propDict['catalogs'];
        }
        return null;
    }

    /**
    * Sets the catalogs
    * Represents a group of access packages.
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
    * Represents references to a directory or domain of another organization whose users can request access.
     *
     * @return ConnectedOrganization[]|null The connectedOrganizations
     */
    public function getConnectedOrganizations()
    {
        if (array_key_exists('connectedOrganizations', $this->_propDict) && !is_null($this->_propDict['connectedOrganizations'])) {
            $connectedOrganizations = [];
            if (count($this->_propDict['connectedOrganizations']) > 0 && is_a($this->_propDict['connectedOrganizations'][0], 'ConnectedOrganization')) {
                return $this->_propDict['connectedOrganizations'];
            }
            foreach ($this->_propDict['connectedOrganizations'] as $singleValue) {
                $connectedOrganizations []= new ConnectedOrganization($singleValue);
            }
            $this->_propDict['connectedOrganizations'] = $connectedOrganizations;
            return $this->_propDict['connectedOrganizations'];
        }
        return null;
    }

    /**
    * Sets the connectedOrganizations
    * Represents references to a directory or domain of another organization whose users can request access.
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
    * Represents the settings that control the behavior of Azure AD entitlement management.
    *
    * @return EntitlementManagementSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict) && !is_null($this->_propDict["settings"])) {
            if (is_a($this->_propDict["settings"], "\Microsoft\Graph\Model\EntitlementManagementSettings")) {
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
    * Represents the settings that control the behavior of Azure AD entitlement management.
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
