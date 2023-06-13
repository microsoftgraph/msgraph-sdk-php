<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicyRuleDelta File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;
/**
* PolicyRuleDelta class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicyRuleDelta extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the ruleId
    *
    * @return string|null The ruleId
    */
    public function getRuleId()
    {
        if (array_key_exists("ruleId", $this->_propDict)) {
            return $this->_propDict["ruleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ruleId
    *
    * @param string $val The value of the ruleId
    *
    * @return PolicyRuleDelta
    */
    public function setRuleId($val)
    {
        $this->_propDict["ruleId"] = $val;
        return $this;
    }
}
