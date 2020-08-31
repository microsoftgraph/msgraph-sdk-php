<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRuleSetting File
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
* GovernanceRuleSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRuleSetting extends Entity
{
    /**
    * Gets the ruleIdentifier
    *
    * @return string The ruleIdentifier
    */
    public function getRuleIdentifier()
    {
        if (array_key_exists("ruleIdentifier", $this->_propDict)) {
            return $this->_propDict["ruleIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ruleIdentifier
    *
    * @param string $val The value of the ruleIdentifier
    *
    * @return GovernanceRuleSetting
    */
    public function setRuleIdentifier($val)
    {
        $this->_propDict["ruleIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the setting
    *
    * @return string The setting
    */
    public function getSetting()
    {
        if (array_key_exists("setting", $this->_propDict)) {
            return $this->_propDict["setting"];
        } else {
            return null;
        }
    }

    /**
    * Sets the setting
    *
    * @param string $val The value of the setting
    *
    * @return GovernanceRuleSetting
    */
    public function setSetting($val)
    {
        $this->_propDict["setting"] = $val;
        return $this;
    }
}
