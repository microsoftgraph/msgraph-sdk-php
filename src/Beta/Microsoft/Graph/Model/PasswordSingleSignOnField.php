<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordSingleSignOnField File
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
* PasswordSingleSignOnField class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordSingleSignOnField extends Entity
{
    /**
    * Gets the customizedLabel
    *
    * @return string The customizedLabel
    */
    public function getCustomizedLabel()
    {
        if (array_key_exists("customizedLabel", $this->_propDict)) {
            return $this->_propDict["customizedLabel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customizedLabel
    *
    * @param string $val The value of the customizedLabel
    *
    * @return PasswordSingleSignOnField
    */
    public function setCustomizedLabel($val)
    {
        $this->_propDict["customizedLabel"] = $val;
        return $this;
    }
    /**
    * Gets the defaultLabel
    *
    * @return string The defaultLabel
    */
    public function getDefaultLabel()
    {
        if (array_key_exists("defaultLabel", $this->_propDict)) {
            return $this->_propDict["defaultLabel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLabel
    *
    * @param string $val The value of the defaultLabel
    *
    * @return PasswordSingleSignOnField
    */
    public function setDefaultLabel($val)
    {
        $this->_propDict["defaultLabel"] = $val;
        return $this;
    }
    /**
    * Gets the fieldId
    *
    * @return string The fieldId
    */
    public function getFieldId()
    {
        if (array_key_exists("fieldId", $this->_propDict)) {
            return $this->_propDict["fieldId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fieldId
    *
    * @param string $val The value of the fieldId
    *
    * @return PasswordSingleSignOnField
    */
    public function setFieldId($val)
    {
        $this->_propDict["fieldId"] = $val;
        return $this;
    }
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The value of the type
    *
    * @return PasswordSingleSignOnField
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
