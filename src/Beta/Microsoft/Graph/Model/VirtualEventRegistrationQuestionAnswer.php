<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventRegistrationQuestionAnswer File
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
* VirtualEventRegistrationQuestionAnswer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventRegistrationQuestionAnswer extends Entity
{
    /**
    * Gets the booleanValue
    * Boolean answer of the virtualEventRegistrationQuestion. Only appears when answerInputType is boolean.
    *
    * @return bool|null The booleanValue
    */
    public function getBooleanValue()
    {
        if (array_key_exists("booleanValue", $this->_propDict)) {
            return $this->_propDict["booleanValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the booleanValue
    * Boolean answer of the virtualEventRegistrationQuestion. Only appears when answerInputType is boolean.
    *
    * @param bool $val The value of the booleanValue
    *
    * @return VirtualEventRegistrationQuestionAnswer
    */
    public function setBooleanValue($val)
    {
        $this->_propDict["booleanValue"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return VirtualEventRegistrationQuestionAnswer
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the multiChoiceValues
    * Collection of text answer of the virtualEventRegistrationQuestion. Only appears when answerInputType is multiChoice.
    *
    * @return string|null The multiChoiceValues
    */
    public function getMultiChoiceValues()
    {
        if (array_key_exists("multiChoiceValues", $this->_propDict)) {
            return $this->_propDict["multiChoiceValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the multiChoiceValues
    * Collection of text answer of the virtualEventRegistrationQuestion. Only appears when answerInputType is multiChoice.
    *
    * @param string $val The value of the multiChoiceValues
    *
    * @return VirtualEventRegistrationQuestionAnswer
    */
    public function setMultiChoiceValues($val)
    {
        $this->_propDict["multiChoiceValues"] = $val;
        return $this;
    }
    /**
    * Gets the questionId
    * id of the virtualEventRegistrationQuestion.
    *
    * @return string|null The questionId
    */
    public function getQuestionId()
    {
        if (array_key_exists("questionId", $this->_propDict)) {
            return $this->_propDict["questionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the questionId
    * id of the virtualEventRegistrationQuestion.
    *
    * @param string $val The value of the questionId
    *
    * @return VirtualEventRegistrationQuestionAnswer
    */
    public function setQuestionId($val)
    {
        $this->_propDict["questionId"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Text answer of the virtualEventRegistrationQuestion. Appears when answerInputType is text, multilineText or singleChoice.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Text answer of the virtualEventRegistrationQuestion. Appears when answerInputType is text, multilineText or singleChoice.
    *
    * @param string $val The value of the value
    *
    * @return VirtualEventRegistrationQuestionAnswer
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
