<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessagePolicyViolationPolicyTip File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ChatMessagePolicyViolationPolicyTip class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessagePolicyViolationPolicyTip extends Entity
{
    /**
    * Gets the generalText
    *
    * @return string The generalText
    */
    public function getGeneralText()
    {
        if (array_key_exists("generalText", $this->_propDict)) {
            return $this->_propDict["generalText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the generalText
    *
    * @param string $val The value of the generalText
    *
    * @return ChatMessagePolicyViolationPolicyTip
    */
    public function setGeneralText($val)
    {
        $this->_propDict["generalText"] = $val;
        return $this;
    }
    /**
    * Gets the complianceUrl
    *
    * @return string The complianceUrl
    */
    public function getComplianceUrl()
    {
        if (array_key_exists("complianceUrl", $this->_propDict)) {
            return $this->_propDict["complianceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the complianceUrl
    *
    * @param string $val The value of the complianceUrl
    *
    * @return ChatMessagePolicyViolationPolicyTip
    */
    public function setComplianceUrl($val)
    {
        $this->_propDict["complianceUrl"] = $val;
        return $this;
    }
    /**
    * Gets the matchedConditionDescriptions
    *
    * @return string The matchedConditionDescriptions
    */
    public function getMatchedConditionDescriptions()
    {
        if (array_key_exists("matchedConditionDescriptions", $this->_propDict)) {
            return $this->_propDict["matchedConditionDescriptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the matchedConditionDescriptions
    *
    * @param string $val The value of the matchedConditionDescriptions
    *
    * @return ChatMessagePolicyViolationPolicyTip
    */
    public function setMatchedConditionDescriptions($val)
    {
        $this->_propDict["matchedConditionDescriptions"] = $val;
        return $this;
    }
}
