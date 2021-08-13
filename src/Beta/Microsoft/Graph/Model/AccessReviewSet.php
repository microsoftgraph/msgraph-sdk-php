<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewSet File
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
* AccessReviewSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewSet extends Entity
{

     /** 
     * Gets the definitions
     *
     * @return array|null The definitions
     */
    public function getDefinitions()
    {
        if (array_key_exists("definitions", $this->_propDict)) {
           return $this->_propDict["definitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the definitions
    *
    * @param AccessReviewScheduleDefinition $val The definitions
    *
    * @return AccessReviewSet
    */
    public function setDefinitions($val)
    {
        $this->_propDict["definitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the historyDefinitions
     *
     * @return array|null The historyDefinitions
     */
    public function getHistoryDefinitions()
    {
        if (array_key_exists("historyDefinitions", $this->_propDict)) {
           return $this->_propDict["historyDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the historyDefinitions
    *
    * @param AccessReviewHistoryDefinition $val The historyDefinitions
    *
    * @return AccessReviewSet
    */
    public function setHistoryDefinitions($val)
    {
        $this->_propDict["historyDefinitions"] = $val;
        return $this;
    }
    
    /**
    * Gets the policy
    *
    * @return AccessReviewPolicy|null The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict)) {
            if (is_a($this->_propDict["policy"], "\Beta\Microsoft\Graph\Model\AccessReviewPolicy") || is_null($this->_propDict["policy"])) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new AccessReviewPolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policy
    *
    * @param AccessReviewPolicy $val The policy
    *
    * @return AccessReviewSet
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }
    
}
