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
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PlayPromptOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlayPromptOperation extends CommsOperation
{
    /**
    * Gets the completionReason
    *
    * @return PlayPromptCompletionReason The completionReason
    */
    public function getCompletionReason()
    {
        if (array_key_exists("completionReason", $this->_propDict)) {
            if (is_a($this->_propDict["completionReason"], "Beta\Microsoft\Graph\Model\PlayPromptCompletionReason")) {
                return $this->_propDict["completionReason"];
            } else {
                $this->_propDict["completionReason"] = new PlayPromptCompletionReason($this->_propDict["completionReason"]);
                return $this->_propDict["completionReason"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completionReason
    *
    * @param PlayPromptCompletionReason $val The completionReason
    *
    * @return PlayPromptOperation
    */
    public function setCompletionReason($val)
    {
        $this->_propDict["completionReason"] = $val;
        return $this;
    }
    
}