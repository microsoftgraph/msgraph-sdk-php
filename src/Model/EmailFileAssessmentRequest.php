<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailFileAssessmentRequest File
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
* EmailFileAssessmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EmailFileAssessmentRequest extends ThreatAssessmentRequest
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
    * @return EmailFileAssessmentRequest
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
    * @return EmailFileAssessmentRequest
    */
    public function setDestinationRoutingReason($val)
    {
        $this->_propDict["destinationRoutingReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentData
    *
    * @return string The contentData
    */
    public function getContentData()
    {
        if (array_key_exists("contentData", $this->_propDict)) {
            return $this->_propDict["contentData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentData
    *
    * @param string $val The contentData
    *
    * @return EmailFileAssessmentRequest
    */
    public function setContentData($val)
    {
        $this->_propDict["contentData"] = $val;
        return $this;
    }
    
}