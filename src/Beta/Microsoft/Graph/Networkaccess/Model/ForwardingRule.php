<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ForwardingRule File
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
* ForwardingRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ForwardingRule extends PolicyRule
{
    /**
    * Gets the action
    *
    * @return ForwardingRuleAction|null The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Networkaccess\Model\ForwardingRuleAction") || is_null($this->_propDict["action"])) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new ForwardingRuleAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    *
    * @param ForwardingRuleAction $val The action
    *
    * @return ForwardingRule
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
        return $this;
    }


     /**
     * Gets the destinations
     *
     * @return array|null The destinations
     */
    public function getDestinations()
    {
        if (array_key_exists("destinations", $this->_propDict)) {
           return $this->_propDict["destinations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinations
    *
    * @param RuleDestination[] $val The destinations
    *
    * @return ForwardingRule
    */
    public function setDestinations($val)
    {
        $this->_propDict["destinations"] = $val;
        return $this;
    }

    /**
    * Gets the ruleType
    *
    * @return NetworkDestinationType|null The ruleType
    */
    public function getRuleType()
    {
        if (array_key_exists("ruleType", $this->_propDict)) {
            if (is_a($this->_propDict["ruleType"], "\Beta\Microsoft\Graph\Networkaccess\Model\NetworkDestinationType") || is_null($this->_propDict["ruleType"])) {
                return $this->_propDict["ruleType"];
            } else {
                $this->_propDict["ruleType"] = new NetworkDestinationType($this->_propDict["ruleType"]);
                return $this->_propDict["ruleType"];
            }
        }
        return null;
    }

    /**
    * Sets the ruleType
    *
    * @param NetworkDestinationType $val The ruleType
    *
    * @return ForwardingRule
    */
    public function setRuleType($val)
    {
        $this->_propDict["ruleType"] = $val;
        return $this;
    }

}
