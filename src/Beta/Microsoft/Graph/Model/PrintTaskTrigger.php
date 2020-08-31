<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintTaskTrigger File
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
* PrintTaskTrigger class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintTaskTrigger extends Entity
{
    /**
    * Gets the event
    *
    * @return PrintEvent The event
    */
    public function getEvent()
    {
        if (array_key_exists("event", $this->_propDict)) {
            if (is_a($this->_propDict["event"], "Beta\Microsoft\Graph\Model\PrintEvent")) {
                return $this->_propDict["event"];
            } else {
                $this->_propDict["event"] = new PrintEvent($this->_propDict["event"]);
                return $this->_propDict["event"];
            }
        }
        return null;
    }
    
    /**
    * Sets the event
    *
    * @param PrintEvent $val The event
    *
    * @return PrintTaskTrigger
    */
    public function setEvent($val)
    {
        $this->_propDict["event"] = $val;
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
    * @return PrintTaskTrigger
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
        return $this;
    }
    
}