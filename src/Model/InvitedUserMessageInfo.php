<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InvitedUserMessageInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* InvitedUserMessageInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class InvitedUserMessageInfo extends Entity
{

    /**
    * Gets the ccRecipients
    *
    * @return Recipient The ccRecipients
    */
    public function getCcRecipients()
    {
        if (array_key_exists("ccRecipients", $this->_propDict)) {
            if (is_a($this->_propDict["ccRecipients"], "Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["ccRecipients"];
            } else {
                $this->_propDict["ccRecipients"] = new Recipient($this->_propDict["ccRecipients"]);
                return $this->_propDict["ccRecipients"];
            }
        }
        return null;
    }

    /**
    * Sets the ccRecipients
    *
    * @param Recipient $val The value to assign to the ccRecipients
    *
    * @return InvitedUserMessageInfo The InvitedUserMessageInfo
    */
    public function setCcRecipients($val)
    {
        $this->_propDict["ccRecipients"] = $val;
         return $this;
    }
    /**
    * Gets the messageLanguage
    *
    * @return string The messageLanguage
    */
    public function getMessageLanguage()
    {
        if (array_key_exists("messageLanguage", $this->_propDict)) {
            return $this->_propDict["messageLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messageLanguage
    *
    * @param string $val The value of the messageLanguage
    *
    * @return InvitedUserMessageInfo
    */
    public function setMessageLanguage($val)
    {
        $this->_propDict["messageLanguage"] = $val;
        return $this;
    }
    /**
    * Gets the customizedMessageBody
    *
    * @return string The customizedMessageBody
    */
    public function getCustomizedMessageBody()
    {
        if (array_key_exists("customizedMessageBody", $this->_propDict)) {
            return $this->_propDict["customizedMessageBody"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customizedMessageBody
    *
    * @param string $val The value of the customizedMessageBody
    *
    * @return InvitedUserMessageInfo
    */
    public function setCustomizedMessageBody($val)
    {
        $this->_propDict["customizedMessageBody"] = $val;
        return $this;
    }
}
