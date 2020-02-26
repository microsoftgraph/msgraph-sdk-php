<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailAssessmentRequest File
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
* MailAssessmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MailAssessmentRequest extends ThreatAssessmentRequest
{
    /**
    * Gets the recipientEmail
    *
    * @return string The recipientEmail
    */
    public function getRecipientEmail()
    {
        if (array_key_exists("recipientEmail", $this->_propDict)) {
            return $this->_propDict["recipientEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recipientEmail
    *
    * @param string $val The recipientEmail
    *
    * @return MailAssessmentRequest
    */
    public function setRecipientEmail($val)
    {
        $this->_propDict["recipientEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the destinationRoutingReason
    *
    * @return MailDestinationRoutingReason The destinationRoutingReason
    */
    public function getDestinationRoutingReason()
    {
        if (array_key_exists("destinationRoutingReason", $this->_propDict)) {
            if (is_a($this->_propDict["destinationRoutingReason"], "Microsoft\Graph\Model\MailDestinationRoutingReason")) {
                return $this->_propDict["destinationRoutingReason"];
            } else {
                $this->_propDict["destinationRoutingReason"] = new MailDestinationRoutingReason($this->_propDict["destinationRoutingReason"]);
                return $this->_propDict["destinationRoutingReason"];
            }
        }
        return null;
    }
    
    /**
    * Sets the destinationRoutingReason
    *
    * @param MailDestinationRoutingReason $val The destinationRoutingReason
    *
    * @return MailAssessmentRequest
    */
    public function setDestinationRoutingReason($val)
    {
        $this->_propDict["destinationRoutingReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the messageUri
    *
    * @return string The messageUri
    */
    public function getMessageUri()
    {
        if (array_key_exists("messageUri", $this->_propDict)) {
            return $this->_propDict["messageUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the messageUri
    *
    * @param string $val The messageUri
    *
    * @return MailAssessmentRequest
    */
    public function setMessageUri($val)
    {
        $this->_propDict["messageUri"] = $val;
        return $this;
    }
    
}