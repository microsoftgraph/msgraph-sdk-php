<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessTemplate File
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
* ConditionalAccessTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessTemplate extends Entity
{
    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return ConditionalAccessTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the details
    *
    * @return ConditionalAccessPolicyDetail|null The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "\Beta\Microsoft\Graph\Model\ConditionalAccessPolicyDetail") || is_null($this->_propDict["details"])) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new ConditionalAccessPolicyDetail($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    *
    * @param ConditionalAccessPolicyDetail $val The details
    *
    * @return ConditionalAccessTemplate
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
        return $this;
    }

    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return ConditionalAccessTemplate
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the scenarios
    *
    * @return TemplateScenarios|null The scenarios
    */
    public function getScenarios()
    {
        if (array_key_exists("scenarios", $this->_propDict)) {
            if (is_a($this->_propDict["scenarios"], "\Beta\Microsoft\Graph\Model\TemplateScenarios") || is_null($this->_propDict["scenarios"])) {
                return $this->_propDict["scenarios"];
            } else {
                $this->_propDict["scenarios"] = new TemplateScenarios($this->_propDict["scenarios"]);
                return $this->_propDict["scenarios"];
            }
        }
        return null;
    }

    /**
    * Sets the scenarios
    *
    * @param TemplateScenarios $val The scenarios
    *
    * @return ConditionalAccessTemplate
    */
    public function setScenarios($val)
    {
        $this->_propDict["scenarios"] = $val;
        return $this;
    }

}
