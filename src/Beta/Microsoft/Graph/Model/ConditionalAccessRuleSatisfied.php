<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessRuleSatisfied File
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
* ConditionalAccessRuleSatisfied class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessRuleSatisfied extends Entity
{

    /**
    * Gets the conditionalAccessCondition
    *
    * @return ConditionalAccessConditions The conditionalAccessCondition
    */
    public function getConditionalAccessCondition()
    {
        if (array_key_exists("conditionalAccessCondition", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessCondition"], "\Beta\Microsoft\Graph\Model\ConditionalAccessConditions")) {
                return $this->_propDict["conditionalAccessCondition"];
            } else {
                $this->_propDict["conditionalAccessCondition"] = new ConditionalAccessConditions($this->_propDict["conditionalAccessCondition"]);
                return $this->_propDict["conditionalAccessCondition"];
            }
        }
        return null;
    }

    /**
    * Sets the conditionalAccessCondition
    *
    * @param ConditionalAccessConditions $val The value to assign to the conditionalAccessCondition
    *
    * @return ConditionalAccessRuleSatisfied The ConditionalAccessRuleSatisfied
    */
    public function setConditionalAccessCondition($val)
    {
        $this->_propDict["conditionalAccessCondition"] = $val;
         return $this;
    }

    /**
    * Gets the ruleSatisfied
    *
    * @return ConditionalAccessRule The ruleSatisfied
    */
    public function getRuleSatisfied()
    {
        if (array_key_exists("ruleSatisfied", $this->_propDict)) {
            if (is_a($this->_propDict["ruleSatisfied"], "\Beta\Microsoft\Graph\Model\ConditionalAccessRule")) {
                return $this->_propDict["ruleSatisfied"];
            } else {
                $this->_propDict["ruleSatisfied"] = new ConditionalAccessRule($this->_propDict["ruleSatisfied"]);
                return $this->_propDict["ruleSatisfied"];
            }
        }
        return null;
    }

    /**
    * Sets the ruleSatisfied
    *
    * @param ConditionalAccessRule $val The value to assign to the ruleSatisfied
    *
    * @return ConditionalAccessRuleSatisfied The ConditionalAccessRuleSatisfied
    */
    public function setRuleSatisfied($val)
    {
        $this->_propDict["ruleSatisfied"] = $val;
         return $this;
    }
}
