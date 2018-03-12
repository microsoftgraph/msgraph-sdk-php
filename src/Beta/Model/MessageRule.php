<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* MessageRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MessageRule extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
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
    *
    * @param string $val The displayName
    *
    * @return MessageRule
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the sequence
    *
    * @return int The sequence
    */
    public function getSequence()
    {
        if (array_key_exists("sequence", $this->_propDict)) {
            return $this->_propDict["sequence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sequence
    *
    * @param int $val The sequence
    *
    * @return MessageRule
    */
    public function setSequence($val)
    {
        $this->_propDict["sequence"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conditions
    *
    * @return MessageRulePredicates The conditions
    */
    public function getConditions()
    {
        if (array_key_exists("conditions", $this->_propDict)) {
            if (is_a($this->_propDict["conditions"], "Microsoft\Graph\Model\MessageRulePredicates")) {
                return $this->_propDict["conditions"];
            } else {
                $this->_propDict["conditions"] = new MessageRulePredicates($this->_propDict["conditions"]);
                return $this->_propDict["conditions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditions
    *
    * @param MessageRulePredicates $val The conditions
    *
    * @return MessageRule
    */
    public function setConditions($val)
    {
        $this->_propDict["conditions"] = $val;
        return $this;
    }
    
    /**
    * Gets the actions
    *
    * @return MessageRuleActions The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            if (is_a($this->_propDict["actions"], "Microsoft\Graph\Model\MessageRuleActions")) {
                return $this->_propDict["actions"];
            } else {
                $this->_propDict["actions"] = new MessageRuleActions($this->_propDict["actions"]);
                return $this->_propDict["actions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the actions
    *
    * @param MessageRuleActions $val The actions
    *
    * @return MessageRule
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
        return $this;
    }
    
    /**
    * Gets the exceptions
    *
    * @return MessageRulePredicates The exceptions
    */
    public function getExceptions()
    {
        if (array_key_exists("exceptions", $this->_propDict)) {
            if (is_a($this->_propDict["exceptions"], "Microsoft\Graph\Model\MessageRulePredicates")) {
                return $this->_propDict["exceptions"];
            } else {
                $this->_propDict["exceptions"] = new MessageRulePredicates($this->_propDict["exceptions"]);
                return $this->_propDict["exceptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exceptions
    *
    * @param MessageRulePredicates $val The exceptions
    *
    * @return MessageRule
    */
    public function setExceptions($val)
    {
        $this->_propDict["exceptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return MessageRule
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasError
    *
    * @return bool The hasError
    */
    public function getHasError()
    {
        if (array_key_exists("hasError", $this->_propDict)) {
            return $this->_propDict["hasError"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasError
    *
    * @param bool $val The hasError
    *
    * @return MessageRule
    */
    public function setHasError($val)
    {
        $this->_propDict["hasError"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isReadOnly
    *
    * @return bool The isReadOnly
    */
    public function getIsReadOnly()
    {
        if (array_key_exists("isReadOnly", $this->_propDict)) {
            return $this->_propDict["isReadOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isReadOnly
    *
    * @param bool $val The isReadOnly
    *
    * @return MessageRule
    */
    public function setIsReadOnly($val)
    {
        $this->_propDict["isReadOnly"] = boolval($val);
        return $this;
    }
    
}