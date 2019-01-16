<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlayPromptOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* PlayPromptOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PlayPromptOperation extends CommsOperation
{

     /** 
     * Gets the prompts
     *
     * @return array The prompts
     */
    public function getPrompts()
    {
        if (array_key_exists("prompts", $this->_propDict)) {
           return $this->_propDict["prompts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the prompts
    *
    * @param Prompt $val The prompts
    *
    * @return PlayPromptOperation
    */
    public function setPrompts($val)
    {
		$this->_propDict["prompts"] = $val;
        return $this;
    }
    
    /**
    * Gets the completionReason
    *
    * @return CompletionReason The completionReason
    */
    public function getCompletionReason()
    {
        if (array_key_exists("completionReason", $this->_propDict)) {
            if (is_a($this->_propDict["completionReason"], "Microsoft\Graph\Model\CompletionReason")) {
                return $this->_propDict["completionReason"];
            } else {
                $this->_propDict["completionReason"] = new CompletionReason($this->_propDict["completionReason"]);
                return $this->_propDict["completionReason"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completionReason
    *
    * @param CompletionReason $val The completionReason
    *
    * @return PlayPromptOperation
    */
    public function setCompletionReason($val)
    {
        $this->_propDict["completionReason"] = $val;
        return $this;
    }
    
}