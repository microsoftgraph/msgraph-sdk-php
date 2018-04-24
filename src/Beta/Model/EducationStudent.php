<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationStudent File
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
* EducationStudent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationStudent extends Entity
{
    /**
    * Gets the graduationYear
    *
    * @return string The graduationYear
    */
    public function getGraduationYear()
    {
        if (array_key_exists("graduationYear", $this->_propDict)) {
            return $this->_propDict["graduationYear"];
        } else {
            return null;
        }
    }

    /**
    * Sets the graduationYear
    *
    * @param string $val The value of the graduationYear
    *
    * @return EducationStudent
    */
    public function setGraduationYear($val)
    {
        $this->_propDict["graduationYear"] = $val;
        return $this;
    }
    /**
    * Gets the grade
    *
    * @return string The grade
    */
    public function getGrade()
    {
        if (array_key_exists("grade", $this->_propDict)) {
            return $this->_propDict["grade"];
        } else {
            return null;
        }
    }

    /**
    * Sets the grade
    *
    * @param string $val The value of the grade
    *
    * @return EducationStudent
    */
    public function setGrade($val)
    {
        $this->_propDict["grade"] = $val;
        return $this;
    }

    /**
    * Gets the birthDate
    *
    * @return \DateTime The birthDate
    */
    public function getBirthDate()
    {
        if (array_key_exists("birthDate", $this->_propDict)) {
            if (is_a($this->_propDict["birthDate"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["birthDate"];
            } else {
                $this->_propDict["birthDate"] = new \DateTime($this->_propDict["birthDate"]);
                return $this->_propDict["birthDate"];
            }
        }
        return null;
    }

    /**
    * Sets the birthDate
    *
    * @param \DateTime $val The value to assign to the birthDate
    *
    * @return EducationStudent The EducationStudent
    */
    public function setBirthDate($val)
    {
        $this->_propDict["birthDate"] = $val;
         return $this;
    }

    /**
    * Gets the gender
    *
    * @return EducationGender The gender
    */
    public function getGender()
    {
        if (array_key_exists("gender", $this->_propDict)) {
            if (is_a($this->_propDict["gender"], "Microsoft\Graph\Beta\Model\EducationGender")) {
                return $this->_propDict["gender"];
            } else {
                $this->_propDict["gender"] = new EducationGender($this->_propDict["gender"]);
                return $this->_propDict["gender"];
            }
        }
        return null;
    }

    /**
    * Sets the gender
    *
    * @param EducationGender $val The value to assign to the gender
    *
    * @return EducationStudent The EducationStudent
    */
    public function setGender($val)
    {
        $this->_propDict["gender"] = $val;
         return $this;
    }
    /**
    * Gets the studentNumber
    *
    * @return string The studentNumber
    */
    public function getStudentNumber()
    {
        if (array_key_exists("studentNumber", $this->_propDict)) {
            return $this->_propDict["studentNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the studentNumber
    *
    * @param string $val The value of the studentNumber
    *
    * @return EducationStudent
    */
    public function setStudentNumber($val)
    {
        $this->_propDict["studentNumber"] = $val;
        return $this;
    }
    /**
    * Gets the externalId
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    *
    * @param string $val The value of the externalId
    *
    * @return EducationStudent
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
}
