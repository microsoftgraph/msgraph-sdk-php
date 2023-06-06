<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventRegistrationQuestion File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* VirtualEventRegistrationQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventRegistrationQuestion extends Entity
{
    /**
    * Gets the answerChoices
    * Answer choices when answerInputType is singleChoice or multiChoice.
    *
    * @return array|null The answerChoices
    */
    public function getAnswerChoices()
    {
        if (array_key_exists("answerChoices", $this->_propDict)) {
            return $this->_propDict["answerChoices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the answerChoices
    * Answer choices when answerInputType is singleChoice or multiChoice.
    *
    * @param string[] $val The answerChoices
    *
    * @return VirtualEventRegistrationQuestion
    */
    public function setAnswerChoices($val)
    {
        $this->_propDict["answerChoices"] = $val;
        return $this;
    }

    /**
    * Gets the answerInputType
    * Input type of the registration question answer.
    *
    * @return VirtualEventRegistrationQuestionAnswerInputType|null The answerInputType
    */
    public function getAnswerInputType()
    {
        if (array_key_exists("answerInputType", $this->_propDict)) {
            if (is_a($this->_propDict["answerInputType"], "\Beta\Microsoft\Graph\Model\VirtualEventRegistrationQuestionAnswerInputType") || is_null($this->_propDict["answerInputType"])) {
                return $this->_propDict["answerInputType"];
            } else {
                $this->_propDict["answerInputType"] = new VirtualEventRegistrationQuestionAnswerInputType($this->_propDict["answerInputType"]);
                return $this->_propDict["answerInputType"];
            }
        }
        return null;
    }

    /**
    * Sets the answerInputType
    * Input type of the registration question answer.
    *
    * @param VirtualEventRegistrationQuestionAnswerInputType $val The answerInputType
    *
    * @return VirtualEventRegistrationQuestion
    */
    public function setAnswerInputType($val)
    {
        $this->_propDict["answerInputType"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name of the registration question.
    *
    * @return string|null The displayName
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
    * Display name of the registration question.
    *
    * @param string $val The displayName
    *
    * @return VirtualEventRegistrationQuestion
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isRequired
    * Indicates whether the question is required to answer. Default value is false.
    *
    * @return bool|null The isRequired
    */
    public function getIsRequired()
    {
        if (array_key_exists("isRequired", $this->_propDict)) {
            return $this->_propDict["isRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequired
    * Indicates whether the question is required to answer. Default value is false.
    *
    * @param bool $val The isRequired
    *
    * @return VirtualEventRegistrationQuestion
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = boolval($val);
        return $this;
    }

}
