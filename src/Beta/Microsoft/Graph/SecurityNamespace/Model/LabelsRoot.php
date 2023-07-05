<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LabelsRoot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

/**
* LabelsRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LabelsRoot extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the authorities
    * Specifies the underlying authority that describes the type of content to be retained and its retention schedule.
     *
     * @return array|null The authorities
     */
    public function getAuthorities()
    {
        if (array_key_exists("authorities", $this->_propDict)) {
           return $this->_propDict["authorities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorities
    * Specifies the underlying authority that describes the type of content to be retained and its retention schedule.
    *
    * @param AuthorityTemplate[] $val The authorities
    *
    * @return LabelsRoot
    */
    public function setAuthorities($val)
    {
        $this->_propDict["authorities"] = $val;
        return $this;
    }


     /**
     * Gets the categories
    * Specifies a group of similar types of content in a particular department.
     *
     * @return array|null The categories
     */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
           return $this->_propDict["categories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the categories
    * Specifies a group of similar types of content in a particular department.
    *
    * @param CategoryTemplate[] $val The categories
    *
    * @return LabelsRoot
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }


     /**
     * Gets the citations
    * The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted.
     *
     * @return array|null The citations
     */
    public function getCitations()
    {
        if (array_key_exists("citations", $this->_propDict)) {
           return $this->_propDict["citations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the citations
    * The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted.
    *
    * @param CitationTemplate[] $val The citations
    *
    * @return LabelsRoot
    */
    public function setCitations($val)
    {
        $this->_propDict["citations"] = $val;
        return $this;
    }


     /**
     * Gets the departments
    * Specifies the department or business unit of an organization to which a label belongs.
     *
     * @return array|null The departments
     */
    public function getDepartments()
    {
        if (array_key_exists("departments", $this->_propDict)) {
           return $this->_propDict["departments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the departments
    * Specifies the department or business unit of an organization to which a label belongs.
    *
    * @param DepartmentTemplate[] $val The departments
    *
    * @return LabelsRoot
    */
    public function setDepartments($val)
    {
        $this->_propDict["departments"] = $val;
        return $this;
    }


     /**
     * Gets the filePlanReferences
    * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
     *
     * @return array|null The filePlanReferences
     */
    public function getFilePlanReferences()
    {
        if (array_key_exists("filePlanReferences", $this->_propDict)) {
           return $this->_propDict["filePlanReferences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filePlanReferences
    * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
    *
    * @param FilePlanReferenceTemplate[] $val The filePlanReferences
    *
    * @return LabelsRoot
    */
    public function setFilePlanReferences($val)
    {
        $this->_propDict["filePlanReferences"] = $val;
        return $this;
    }


     /**
     * Gets the retentionLabels
    * Represents how customers can manage their data, whether and for how long to retain or delete it.
     *
     * @return array|null The retentionLabels
     */
    public function getRetentionLabels()
    {
        if (array_key_exists("retentionLabels", $this->_propDict)) {
           return $this->_propDict["retentionLabels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the retentionLabels
    * Represents how customers can manage their data, whether and for how long to retain or delete it.
    *
    * @param RetentionLabel[] $val The retentionLabels
    *
    * @return LabelsRoot
    */
    public function setRetentionLabels($val)
    {
        $this->_propDict["retentionLabels"] = $val;
        return $this;
    }

}
