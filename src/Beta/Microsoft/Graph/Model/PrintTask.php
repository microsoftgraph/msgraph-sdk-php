<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintTask File
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
* PrintTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintTask extends Entity
{
    /**
    * Gets the parentUrl
    *
    * @return string The parentUrl
    */
    public function getParentUrl()
    {
        if (array_key_exists("parentUrl", $this->_propDict)) {
            return $this->_propDict["parentUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentUrl
    *
    * @param string $val The parentUrl
    *
    * @return PrintTask
    */
    public function setParentUrl($val)
    {
        $this->_propDict["parentUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return PrintTaskStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\PrintTaskStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new PrintTaskStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param PrintTaskStatus $val The status
    *
    * @return PrintTask
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the definition
    *
    * @return PrintTaskDefinition The definition
    */
    public function getDefinition()
    {
        if (array_key_exists("definition", $this->_propDict)) {
            if (is_a($this->_propDict["definition"], "Beta\Microsoft\Graph\Model\PrintTaskDefinition")) {
                return $this->_propDict["definition"];
            } else {
                $this->_propDict["definition"] = new PrintTaskDefinition($this->_propDict["definition"]);
                return $this->_propDict["definition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the definition
    *
    * @param PrintTaskDefinition $val The definition
    *
    * @return PrintTask
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
        return $this;
    }
    
    /**
    * Gets the trigger
    *
    * @return PrintTaskTrigger The trigger
    */
    public function getTrigger()
    {
        if (array_key_exists("trigger", $this->_propDict)) {
            if (is_a($this->_propDict["trigger"], "Beta\Microsoft\Graph\Model\PrintTaskTrigger")) {
                return $this->_propDict["trigger"];
            } else {
                $this->_propDict["trigger"] = new PrintTaskTrigger($this->_propDict["trigger"]);
                return $this->_propDict["trigger"];
            }
        }
        return null;
    }
    
    /**
    * Sets the trigger
    *
    * @param PrintTaskTrigger $val The trigger
    *
    * @return PrintTask
    */
    public function setTrigger($val)
    {
        $this->_propDict["trigger"] = $val;
        return $this;
    }
    
}