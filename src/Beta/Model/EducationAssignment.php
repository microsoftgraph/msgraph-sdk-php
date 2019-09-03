<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* EducationAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationAssignment extends Entity
{
    /**
    * Gets the classId
    *
    * @return string The classId
    */
    public function getClassId()
    {
        if (array_key_exists("classId", $this->_propDict)) {
            return $this->_propDict["classId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classId
    *
    * @param string $val The classId
    *
    * @return EducationAssignment
    */
    public function setClassId($val)
    {
        $this->_propDict["classId"] = $val;
        return $this;
    }
    
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
    * @param string $val The displayName
    *
    * @return EducationAssignment
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the instructions
    *
    * @return EducationItemBody The instructions
    */
    public function getInstructions()
    {
        if (array_key_exists("instructions", $this->_propDict)) {
            if (is_a($this->_propDict["instructions"], "Microsoft\Graph\Beta\Model\EducationItemBody")) {
                return $this->_propDict["instructions"];
            } else {
                $this->_propDict["instructions"] = new EducationItemBody($this->_propDict["instructions"]);
                return $this->_propDict["instructions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the instructions
    *
    * @param EducationItemBody $val The instructions
    *
    * @return EducationAssignment
    */
    public function setInstructions($val)
    {
        $this->_propDict["instructions"] = $val;
        return $this;
    }
    
    /**
    * Gets the dueDateTime
    *
    * @return \DateTime The dueDateTime
    */
    public function getDueDateTime()
    {
        if (array_key_exists("dueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dueDateTime"], "\DateTime")) {
                return $this->_propDict["dueDateTime"];
            } else {
                $this->_propDict["dueDateTime"] = new \DateTime($this->_propDict["dueDateTime"]);
                return $this->_propDict["dueDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dueDateTime
    *
    * @param \DateTime $val The dueDateTime
    *
    * @return EducationAssignment
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignDateTime
    *
    * @return \DateTime The assignDateTime
    */
    public function getAssignDateTime()
    {
        if (array_key_exists("assignDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["assignDateTime"], "\DateTime")) {
                return $this->_propDict["assignDateTime"];
            } else {
                $this->_propDict["assignDateTime"] = new \DateTime($this->_propDict["assignDateTime"]);
                return $this->_propDict["assignDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the assignDateTime
    *
    * @param \DateTime $val The assignDateTime
    *
    * @return EducationAssignment
    */
    public function setAssignDateTime($val)
    {
        $this->_propDict["assignDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignedDateTime
    *
    * @return \DateTime The assignedDateTime
    */
    public function getAssignedDateTime()
    {
        if (array_key_exists("assignedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["assignedDateTime"], "\DateTime")) {
                return $this->_propDict["assignedDateTime"];
            } else {
                $this->_propDict["assignedDateTime"] = new \DateTime($this->_propDict["assignedDateTime"]);
                return $this->_propDict["assignedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the assignedDateTime
    *
    * @param \DateTime $val The assignedDateTime
    *
    * @return EducationAssignment
    */
    public function setAssignedDateTime($val)
    {
        $this->_propDict["assignedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the grading
    *
    * @return EducationAssignmentGradeType The grading
    */
    public function getGrading()
    {
        if (array_key_exists("grading", $this->_propDict)) {
            if (is_a($this->_propDict["grading"], "Microsoft\Graph\Beta\Model\EducationAssignmentGradeType")) {
                return $this->_propDict["grading"];
            } else {
                $this->_propDict["grading"] = new EducationAssignmentGradeType($this->_propDict["grading"]);
                return $this->_propDict["grading"];
            }
        }
        return null;
    }
    
    /**
    * Sets the grading
    *
    * @param EducationAssignmentGradeType $val The grading
    *
    * @return EducationAssignment
    */
    public function setGrading($val)
    {
        $this->_propDict["grading"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignTo
    *
    * @return EducationAssignmentRecipient The assignTo
    */
    public function getAssignTo()
    {
        if (array_key_exists("assignTo", $this->_propDict)) {
            if (is_a($this->_propDict["assignTo"], "Microsoft\Graph\Beta\Model\EducationAssignmentRecipient")) {
                return $this->_propDict["assignTo"];
            } else {
                $this->_propDict["assignTo"] = new EducationAssignmentRecipient($this->_propDict["assignTo"]);
                return $this->_propDict["assignTo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the assignTo
    *
    * @param EducationAssignmentRecipient $val The assignTo
    *
    * @return EducationAssignment
    */
    public function setAssignTo($val)
    {
        $this->_propDict["assignTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowLateSubmissions
    *
    * @return bool The allowLateSubmissions
    */
    public function getAllowLateSubmissions()
    {
        if (array_key_exists("allowLateSubmissions", $this->_propDict)) {
            return $this->_propDict["allowLateSubmissions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowLateSubmissions
    *
    * @param bool $val The allowLateSubmissions
    *
    * @return EducationAssignment
    */
    public function setAllowLateSubmissions($val)
    {
        $this->_propDict["allowLateSubmissions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return EducationAssignment
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    *
    * @param IdentitySet $val The createdBy
    *
    * @return EducationAssignment
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
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
    * @return EducationAssignment
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    *
    * @return IdentitySet The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedBy
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return EducationAssignment
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowStudentsToAddResourcesToSubmission
    *
    * @return bool The allowStudentsToAddResourcesToSubmission
    */
    public function getAllowStudentsToAddResourcesToSubmission()
    {
        if (array_key_exists("allowStudentsToAddResourcesToSubmission", $this->_propDict)) {
            return $this->_propDict["allowStudentsToAddResourcesToSubmission"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowStudentsToAddResourcesToSubmission
    *
    * @param bool $val The allowStudentsToAddResourcesToSubmission
    *
    * @return EducationAssignment
    */
    public function setAllowStudentsToAddResourcesToSubmission($val)
    {
        $this->_propDict["allowStudentsToAddResourcesToSubmission"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return EducationAssignmentStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Beta\Model\EducationAssignmentStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new EducationAssignmentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param EducationAssignmentStatus $val The status
    *
    * @return EducationAssignment
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
     *
     * @return array The resources
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
    * @param EducationAssignmentResource $val The resources
    *
    * @return EducationAssignment
    */
    public function setResources($val)
    {
		$this->_propDict["resources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the submissions
     *
     * @return array The submissions
     */
    public function getSubmissions()
    {
        if (array_key_exists("submissions", $this->_propDict)) {
           return $this->_propDict["submissions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the submissions
    *
    * @param EducationSubmission $val The submissions
    *
    * @return EducationAssignment
    */
    public function setSubmissions($val)
    {
		$this->_propDict["submissions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the categories
     *
     * @return array The categories
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
    *
    * @param EducationCategory $val The categories
    *
    * @return EducationAssignment
    */
    public function setCategories($val)
    {
		$this->_propDict["categories"] = $val;
        return $this;
    }
    
    /**
    * Gets the rubric
    *
    * @return EducationRubric The rubric
    */
    public function getRubric()
    {
        if (array_key_exists("rubric", $this->_propDict)) {
            if (is_a($this->_propDict["rubric"], "Microsoft\Graph\Beta\Model\EducationRubric")) {
                return $this->_propDict["rubric"];
            } else {
                $this->_propDict["rubric"] = new EducationRubric($this->_propDict["rubric"]);
                return $this->_propDict["rubric"];
            }
        }
        return null;
    }
    
    /**
    * Sets the rubric
    *
    * @param EducationRubric $val The rubric
    *
    * @return EducationAssignment
    */
    public function setRubric($val)
    {
        $this->_propDict["rubric"] = $val;
        return $this;
    }
    
}