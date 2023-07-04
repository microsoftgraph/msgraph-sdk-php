<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FilePlanDescriptor File
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
* FilePlanDescriptor class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FilePlanDescriptor extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the authority
    * Represents the file plan descriptor of type authority applied to a particular retention label.
    *
    * @return Authority|null The authority
    */
    public function getAuthority()
    {
        if (array_key_exists("authority", $this->_propDict)) {
            if (is_a($this->_propDict["authority"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Authority") || is_null($this->_propDict["authority"])) {
                return $this->_propDict["authority"];
            } else {
                $this->_propDict["authority"] = new Authority($this->_propDict["authority"]);
                return $this->_propDict["authority"];
            }
        }
        return null;
    }

    /**
    * Sets the authority
    * Represents the file plan descriptor of type authority applied to a particular retention label.
    *
    * @param Authority $val The authority
    *
    * @return FilePlanDescriptor
    */
    public function setAuthority($val)
    {
        $this->_propDict["authority"] = $val;
        return $this;
    }

    /**
    * Gets the category
    *
    * @return AppliedCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AppliedCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new AppliedCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    *
    * @param AppliedCategory $val The category
    *
    * @return FilePlanDescriptor
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the citation
    * Represents the file plan descriptor of type citation applied to a particular retention label.
    *
    * @return Citation|null The citation
    */
    public function getCitation()
    {
        if (array_key_exists("citation", $this->_propDict)) {
            if (is_a($this->_propDict["citation"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Citation") || is_null($this->_propDict["citation"])) {
                return $this->_propDict["citation"];
            } else {
                $this->_propDict["citation"] = new Citation($this->_propDict["citation"]);
                return $this->_propDict["citation"];
            }
        }
        return null;
    }

    /**
    * Sets the citation
    * Represents the file plan descriptor of type citation applied to a particular retention label.
    *
    * @param Citation $val The citation
    *
    * @return FilePlanDescriptor
    */
    public function setCitation($val)
    {
        $this->_propDict["citation"] = $val;
        return $this;
    }

    /**
    * Gets the department
    * Represents the file plan descriptor of type department applied to a particular retention label.
    *
    * @return Department|null The department
    */
    public function getDepartment()
    {
        if (array_key_exists("department", $this->_propDict)) {
            if (is_a($this->_propDict["department"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Department") || is_null($this->_propDict["department"])) {
                return $this->_propDict["department"];
            } else {
                $this->_propDict["department"] = new Department($this->_propDict["department"]);
                return $this->_propDict["department"];
            }
        }
        return null;
    }

    /**
    * Sets the department
    * Represents the file plan descriptor of type department applied to a particular retention label.
    *
    * @param Department $val The department
    *
    * @return FilePlanDescriptor
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
        return $this;
    }

    /**
    * Gets the filePlanReference
    * Represents the file plan descriptor of type filePlanReference applied to a particular retention label.
    *
    * @return FilePlanReference|null The filePlanReference
    */
    public function getFilePlanReference()
    {
        if (array_key_exists("filePlanReference", $this->_propDict)) {
            if (is_a($this->_propDict["filePlanReference"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FilePlanReference") || is_null($this->_propDict["filePlanReference"])) {
                return $this->_propDict["filePlanReference"];
            } else {
                $this->_propDict["filePlanReference"] = new FilePlanReference($this->_propDict["filePlanReference"]);
                return $this->_propDict["filePlanReference"];
            }
        }
        return null;
    }

    /**
    * Sets the filePlanReference
    * Represents the file plan descriptor of type filePlanReference applied to a particular retention label.
    *
    * @param FilePlanReference $val The filePlanReference
    *
    * @return FilePlanDescriptor
    */
    public function setFilePlanReference($val)
    {
        $this->_propDict["filePlanReference"] = $val;
        return $this;
    }

    /**
    * Gets the authorityTemplate
    * Specifies the underlying authority that describes the type of content to be retained and its retention schedule.
    *
    * @return AuthorityTemplate|null The authorityTemplate
    */
    public function getAuthorityTemplate()
    {
        if (array_key_exists("authorityTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["authorityTemplate"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AuthorityTemplate") || is_null($this->_propDict["authorityTemplate"])) {
                return $this->_propDict["authorityTemplate"];
            } else {
                $this->_propDict["authorityTemplate"] = new AuthorityTemplate($this->_propDict["authorityTemplate"]);
                return $this->_propDict["authorityTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the authorityTemplate
    * Specifies the underlying authority that describes the type of content to be retained and its retention schedule.
    *
    * @param AuthorityTemplate $val The authorityTemplate
    *
    * @return FilePlanDescriptor
    */
    public function setAuthorityTemplate($val)
    {
        $this->_propDict["authorityTemplate"] = $val;
        return $this;
    }

    /**
    * Gets the categoryTemplate
    * Specifies a group of similar types of content in a particular department.
    *
    * @return CategoryTemplate|null The categoryTemplate
    */
    public function getCategoryTemplate()
    {
        if (array_key_exists("categoryTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["categoryTemplate"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\CategoryTemplate") || is_null($this->_propDict["categoryTemplate"])) {
                return $this->_propDict["categoryTemplate"];
            } else {
                $this->_propDict["categoryTemplate"] = new CategoryTemplate($this->_propDict["categoryTemplate"]);
                return $this->_propDict["categoryTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the categoryTemplate
    * Specifies a group of similar types of content in a particular department.
    *
    * @param CategoryTemplate $val The categoryTemplate
    *
    * @return FilePlanDescriptor
    */
    public function setCategoryTemplate($val)
    {
        $this->_propDict["categoryTemplate"] = $val;
        return $this;
    }

    /**
    * Gets the citationTemplate
    * The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted.
    *
    * @return CitationTemplate|null The citationTemplate
    */
    public function getCitationTemplate()
    {
        if (array_key_exists("citationTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["citationTemplate"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\CitationTemplate") || is_null($this->_propDict["citationTemplate"])) {
                return $this->_propDict["citationTemplate"];
            } else {
                $this->_propDict["citationTemplate"] = new CitationTemplate($this->_propDict["citationTemplate"]);
                return $this->_propDict["citationTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the citationTemplate
    * The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted.
    *
    * @param CitationTemplate $val The citationTemplate
    *
    * @return FilePlanDescriptor
    */
    public function setCitationTemplate($val)
    {
        $this->_propDict["citationTemplate"] = $val;
        return $this;
    }

    /**
    * Gets the departmentTemplate
    * Specifies the  department or business unit of an organization to which a label belongs.
    *
    * @return DepartmentTemplate|null The departmentTemplate
    */
    public function getDepartmentTemplate()
    {
        if (array_key_exists("departmentTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["departmentTemplate"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\DepartmentTemplate") || is_null($this->_propDict["departmentTemplate"])) {
                return $this->_propDict["departmentTemplate"];
            } else {
                $this->_propDict["departmentTemplate"] = new DepartmentTemplate($this->_propDict["departmentTemplate"]);
                return $this->_propDict["departmentTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the departmentTemplate
    * Specifies the  department or business unit of an organization to which a label belongs.
    *
    * @param DepartmentTemplate $val The departmentTemplate
    *
    * @return FilePlanDescriptor
    */
    public function setDepartmentTemplate($val)
    {
        $this->_propDict["departmentTemplate"] = $val;
        return $this;
    }

    /**
    * Gets the filePlanReferenceTemplate
    * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
    *
    * @return FilePlanReferenceTemplate|null The filePlanReferenceTemplate
    */
    public function getFilePlanReferenceTemplate()
    {
        if (array_key_exists("filePlanReferenceTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["filePlanReferenceTemplate"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\FilePlanReferenceTemplate") || is_null($this->_propDict["filePlanReferenceTemplate"])) {
                return $this->_propDict["filePlanReferenceTemplate"];
            } else {
                $this->_propDict["filePlanReferenceTemplate"] = new FilePlanReferenceTemplate($this->_propDict["filePlanReferenceTemplate"]);
                return $this->_propDict["filePlanReferenceTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the filePlanReferenceTemplate
    * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
    *
    * @param FilePlanReferenceTemplate $val The filePlanReferenceTemplate
    *
    * @return FilePlanDescriptor
    */
    public function setFilePlanReferenceTemplate($val)
    {
        $this->_propDict["filePlanReferenceTemplate"] = $val;
        return $this;
    }

}
