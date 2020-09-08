<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RubricLevel File
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
* RubricLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RubricLevel extends Entity
{

    /**
    * Gets the description
    *
    * @return EducationItemBody The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            if (is_a($this->_propDict["description"], "Beta\Microsoft\Graph\Model\EducationItemBody")) {
                return $this->_propDict["description"];
            } else {
                $this->_propDict["description"] = new EducationItemBody($this->_propDict["description"]);
                return $this->_propDict["description"];
            }
        }
        return null;
    }

    /**
    * Sets the description
    *
    * @param EducationItemBody $val The value to assign to the description
    *
    * @return RubricLevel The RubricLevel
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return RubricLevel
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
            if (is_a($this->_propDict["grading"], "Beta\Microsoft\Graph\Model\EducationAssignmentGradeType")) {
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
    * @param EducationAssignmentGradeType $val The value to assign to the grading
    *
    * @return RubricLevel The RubricLevel
    */
    public function setGrading($val)
    {
        $this->_propDict["grading"] = $val;
         return $this;
    }
    /**
    * Gets the levelId
    *
    * @return string The levelId
    */
    public function getLevelId()
    {
        if (array_key_exists("levelId", $this->_propDict)) {
            return $this->_propDict["levelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the levelId
    *
    * @param string $val The value of the levelId
    *
    * @return RubricLevel
    */
    public function setLevelId($val)
    {
        $this->_propDict["levelId"] = $val;
        return $this;
    }
}
