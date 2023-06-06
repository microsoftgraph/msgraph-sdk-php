<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationAttributeCollectionInputConfiguration File
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
* AuthenticationAttributeCollectionInputConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationAttributeCollectionInputConfiguration extends Entity
{
    /**
    * Gets the attribute
    * The built-in or custom attribute for which a value is being collected.
    *
    * @return string|null The attribute
    */
    public function getAttribute()
    {
        if (array_key_exists("attribute", $this->_propDict)) {
            return $this->_propDict["attribute"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attribute
    * The built-in or custom attribute for which a value is being collected.
    *
    * @param string $val The value of the attribute
    *
    * @return AuthenticationAttributeCollectionInputConfiguration
    */
    public function setAttribute($val)
    {
        $this->_propDict["attribute"] = $val;
        return $this;
    }
    /**
    * Gets the defaultValue
    * The default value of the attribute displayed to the end user.
    *
    * @return string|null The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            return $this->_propDict["defaultValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultValue
    * The default value of the attribute displayed to the end user.
    *
    * @param string $val The value of the defaultValue
    *
    * @return AuthenticationAttributeCollectionInputConfiguration
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
    /**
    * Gets the editable
    * Whether the attribute is editable by the end user.
    *
    * @return bool|null The editable
    */
    public function getEditable()
    {
        if (array_key_exists("editable", $this->_propDict)) {
            return $this->_propDict["editable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the editable
    * Whether the attribute is editable by the end user.
    *
    * @param bool $val The value of the editable
    *
    * @return AuthenticationAttributeCollectionInputConfiguration
    */
    public function setEditable($val)
    {
        $this->_propDict["editable"] = $val;
        return $this;
    }
    /**
    * Gets the hidden
    * Whether the attribute is displayed to the end user.
    *
    * @return bool|null The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hidden
    * Whether the attribute is displayed to the end user.
    *
    * @param bool $val The value of the hidden
    *
    * @return AuthenticationAttributeCollectionInputConfiguration
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = $val;
        return $this;
    }

    /**
    * Gets the inputType
    * The type of input field. The possible values are: text, radioSingleSelect, checkboxMultiSelect, boolean, checkboxSingleSelect, unknownFutureValue.
    *
    * @return AuthenticationAttributeCollectionInputType|null The inputType
    */
    public function getInputType()
    {
        if (array_key_exists("inputType", $this->_propDict)) {
            if (is_a($this->_propDict["inputType"], "\Beta\Microsoft\Graph\Model\AuthenticationAttributeCollectionInputType") || is_null($this->_propDict["inputType"])) {
                return $this->_propDict["inputType"];
            } else {
                $this->_propDict["inputType"] = new AuthenticationAttributeCollectionInputType($this->_propDict["inputType"]);
                return $this->_propDict["inputType"];
            }
        }
        return null;
    }

    /**
    * Sets the inputType
    * The type of input field. The possible values are: text, radioSingleSelect, checkboxMultiSelect, boolean, checkboxSingleSelect, unknownFutureValue.
    *
    * @param AuthenticationAttributeCollectionInputType $val The value to assign to the inputType
    *
    * @return AuthenticationAttributeCollectionInputConfiguration The AuthenticationAttributeCollectionInputConfiguration
    */
    public function setInputType($val)
    {
        $this->_propDict["inputType"] = $val;
         return $this;
    }
    /**
    * Gets the label
    * The label of the attribute field that will be displayed to end user, unless overridden.
    *
    * @return string|null The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }

    /**
    * Sets the label
    * The label of the attribute field that will be displayed to end user, unless overridden.
    *
    * @param string $val The value of the label
    *
    * @return AuthenticationAttributeCollectionInputConfiguration
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }

    /**
    * Gets the options
    * The option values for certain multiple-option input types.
    *
    * @return AuthenticationAttributeCollectionOptionConfiguration|null The options
    */
    public function getOptions()
    {
        if (array_key_exists("options", $this->_propDict)) {
            if (is_a($this->_propDict["options"], "\Beta\Microsoft\Graph\Model\AuthenticationAttributeCollectionOptionConfiguration") || is_null($this->_propDict["options"])) {
                return $this->_propDict["options"];
            } else {
                $this->_propDict["options"] = new AuthenticationAttributeCollectionOptionConfiguration($this->_propDict["options"]);
                return $this->_propDict["options"];
            }
        }
        return null;
    }

    /**
    * Sets the options
    * The option values for certain multiple-option input types.
    *
    * @param AuthenticationAttributeCollectionOptionConfiguration $val The value to assign to the options
    *
    * @return AuthenticationAttributeCollectionInputConfiguration The AuthenticationAttributeCollectionInputConfiguration
    */
    public function setOptions($val)
    {
        $this->_propDict["options"] = $val;
         return $this;
    }
    /**
    * Gets the required
    * Whether the field is required.
    *
    * @return bool|null The required
    */
    public function getRequired()
    {
        if (array_key_exists("required", $this->_propDict)) {
            return $this->_propDict["required"];
        } else {
            return null;
        }
    }

    /**
    * Sets the required
    * Whether the field is required.
    *
    * @param bool $val The value of the required
    *
    * @return AuthenticationAttributeCollectionInputConfiguration
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = $val;
        return $this;
    }
    /**
    * Gets the validationRegEx
    * The regex for the value of the field.
    *
    * @return string|null The validationRegEx
    */
    public function getValidationRegEx()
    {
        if (array_key_exists("validationRegEx", $this->_propDict)) {
            return $this->_propDict["validationRegEx"];
        } else {
            return null;
        }
    }

    /**
    * Sets the validationRegEx
    * The regex for the value of the field.
    *
    * @param string $val The value of the validationRegEx
    *
    * @return AuthenticationAttributeCollectionInputConfiguration
    */
    public function setValidationRegEx($val)
    {
        $this->_propDict["validationRegEx"] = $val;
        return $this;
    }
    /**
    * Gets the writeToDirectory
    * Whether the value collected will be stored.
    *
    * @return bool|null The writeToDirectory
    */
    public function getWriteToDirectory()
    {
        if (array_key_exists("writeToDirectory", $this->_propDict)) {
            return $this->_propDict["writeToDirectory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the writeToDirectory
    * Whether the value collected will be stored.
    *
    * @param bool $val The value of the writeToDirectory
    *
    * @return AuthenticationAttributeCollectionInputConfiguration
    */
    public function setWriteToDirectory($val)
    {
        $this->_propDict["writeToDirectory"] = $val;
        return $this;
    }
}
