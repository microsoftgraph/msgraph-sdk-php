<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityContainer File
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
* IdentityContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityContainer extends 
{
    /**
    * Gets the conditionalAccess
    *
    * @return ConditionalAccessRoot The conditionalAccess
    */
    public function getConditionalAccess()
    {
        if (array_key_exists("conditionalAccess", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccess"], "Beta\Microsoft\Graph\Model\ConditionalAccessRoot")) {
                return $this->_propDict["conditionalAccess"];
            } else {
                $this->_propDict["conditionalAccess"] = new ConditionalAccessRoot($this->_propDict["conditionalAccess"]);
                return $this->_propDict["conditionalAccess"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditionalAccess
    *
    * @param ConditionalAccessRoot $val The conditionalAccess
    *
    * @return IdentityContainer
    */
    public function setConditionalAccess($val)
    {
        $this->_propDict["conditionalAccess"] = $val;
        return $this;
    }
    

     /** 
     * Gets the b2cUserFlows
     *
     * @return array The b2cUserFlows
     */
    public function getB2cUserFlows()
    {
        if (array_key_exists("b2cUserFlows", $this->_propDict)) {
           return $this->_propDict["b2cUserFlows"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the b2cUserFlows
    *
    * @param B2cIdentityUserFlow $val The b2cUserFlows
    *
    * @return IdentityContainer
    */
    public function setB2cUserFlows($val)
    {
		$this->_propDict["b2cUserFlows"] = $val;
        return $this;
    }
    

     /** 
     * Gets the b2xUserFlows
     *
     * @return array The b2xUserFlows
     */
    public function getB2xUserFlows()
    {
        if (array_key_exists("b2xUserFlows", $this->_propDict)) {
           return $this->_propDict["b2xUserFlows"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the b2xUserFlows
    *
    * @param B2xIdentityUserFlow $val The b2xUserFlows
    *
    * @return IdentityContainer
    */
    public function setB2xUserFlows($val)
    {
		$this->_propDict["b2xUserFlows"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userFlowAttributes
     *
     * @return array The userFlowAttributes
     */
    public function getUserFlowAttributes()
    {
        if (array_key_exists("userFlowAttributes", $this->_propDict)) {
           return $this->_propDict["userFlowAttributes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userFlowAttributes
    *
    * @param IdentityUserFlowAttribute $val The userFlowAttributes
    *
    * @return IdentityContainer
    */
    public function setUserFlowAttributes($val)
    {
		$this->_propDict["userFlowAttributes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userFlows
     *
     * @return array The userFlows
     */
    public function getUserFlows()
    {
        if (array_key_exists("userFlows", $this->_propDict)) {
           return $this->_propDict["userFlows"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userFlows
    *
    * @param IdentityUserFlow $val The userFlows
    *
    * @return IdentityContainer
    */
    public function setUserFlows($val)
    {
		$this->_propDict["userFlows"] = $val;
        return $this;
    }
    
    /**
    * Gets the continuousAccessEvaluationPolicy
    *
    * @return ContinuousAccessEvaluationPolicy The continuousAccessEvaluationPolicy
    */
    public function getContinuousAccessEvaluationPolicy()
    {
        if (array_key_exists("continuousAccessEvaluationPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["continuousAccessEvaluationPolicy"], "Beta\Microsoft\Graph\Model\ContinuousAccessEvaluationPolicy")) {
                return $this->_propDict["continuousAccessEvaluationPolicy"];
            } else {
                $this->_propDict["continuousAccessEvaluationPolicy"] = new ContinuousAccessEvaluationPolicy($this->_propDict["continuousAccessEvaluationPolicy"]);
                return $this->_propDict["continuousAccessEvaluationPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the continuousAccessEvaluationPolicy
    *
    * @param ContinuousAccessEvaluationPolicy $val The continuousAccessEvaluationPolicy
    *
    * @return IdentityContainer
    */
    public function setContinuousAccessEvaluationPolicy($val)
    {
        $this->_propDict["continuousAccessEvaluationPolicy"] = $val;
        return $this;
    }
    
}