<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentGrade File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* EducationAssignmentGrade class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAssignmentGrade extends Entity
{

    /**
    * Gets the gradedBy
    *
    * @return IdentitySet The gradedBy
    */
    public function getGradedBy()
    {
        if (array_key_exists("gradedBy", $this->_propDict)) {
            if (is_a($this->_propDict["gradedBy"], "Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["gradedBy"];
            } else {
                $this->_propDict["gradedBy"] = new IdentitySet($this->_propDict["gradedBy"]);
                return $this->_propDict["gradedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the gradedBy
    *
    * @param IdentitySet $val The value to assign to the gradedBy
    *
    * @return EducationAssignmentGrade The EducationAssignmentGrade
    */
    public function setGradedBy($val)
    {
        $this->_propDict["gradedBy"] = $val;
         return $this;
    }

    /**
    * Gets the gradedDateTime
    *
    * @return \DateTime The gradedDateTime
    */
    public function getGradedDateTime()
    {
        if (array_key_exists("gradedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["gradedDateTime"], "\DateTime")) {
                return $this->_propDict["gradedDateTime"];
            } else {
                $this->_propDict["gradedDateTime"] = new \DateTime($this->_propDict["gradedDateTime"]);
                return $this->_propDict["gradedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the gradedDateTime
    *
    * @param \DateTime $val The value to assign to the gradedDateTime
    *
    * @return EducationAssignmentGrade The EducationAssignmentGrade
    */
    public function setGradedDateTime($val)
    {
        $this->_propDict["gradedDateTime"] = $val;
         return $this;
    }
}
