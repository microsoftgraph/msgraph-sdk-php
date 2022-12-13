<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AnalyzedMessageEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* AnalyzedMessageEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AnalyzedMessageEvidence extends AlertEvidence
{
    /**
    * Gets the antiSpamDirection
    *
    * @return string|null The antiSpamDirection
    */
    public function getAntiSpamDirection()
    {
        if (array_key_exists("antiSpamDirection", $this->_propDict)) {
            return $this->_propDict["antiSpamDirection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the antiSpamDirection
    *
    * @param string $val The value of the antiSpamDirection
    *
    * @return AnalyzedMessageEvidence
    */
    public function setAntiSpamDirection($val)
    {
        $this->_propDict["antiSpamDirection"] = $val;
        return $this;
    }
    /**
    * Gets the attachmentsCount
    *
    * @return int|null The attachmentsCount
    */
    public function getAttachmentsCount()
    {
        if (array_key_exists("attachmentsCount", $this->_propDict)) {
            return $this->_propDict["attachmentsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attachmentsCount
    *
    * @param int $val The value of the attachmentsCount
    *
    * @return AnalyzedMessageEvidence
    */
    public function setAttachmentsCount($val)
    {
        $this->_propDict["attachmentsCount"] = $val;
        return $this;
    }
    /**
    * Gets the deliveryAction
    *
    * @return string|null The deliveryAction
    */
    public function getDeliveryAction()
    {
        if (array_key_exists("deliveryAction", $this->_propDict)) {
            return $this->_propDict["deliveryAction"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deliveryAction
    *
    * @param string $val The value of the deliveryAction
    *
    * @return AnalyzedMessageEvidence
    */
    public function setDeliveryAction($val)
    {
        $this->_propDict["deliveryAction"] = $val;
        return $this;
    }
    /**
    * Gets the deliveryLocation
    *
    * @return string|null The deliveryLocation
    */
    public function getDeliveryLocation()
    {
        if (array_key_exists("deliveryLocation", $this->_propDict)) {
            return $this->_propDict["deliveryLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deliveryLocation
    *
    * @param string $val The value of the deliveryLocation
    *
    * @return AnalyzedMessageEvidence
    */
    public function setDeliveryLocation($val)
    {
        $this->_propDict["deliveryLocation"] = $val;
        return $this;
    }
    /**
    * Gets the internetMessageId
    *
    * @return string|null The internetMessageId
    */
    public function getInternetMessageId()
    {
        if (array_key_exists("internetMessageId", $this->_propDict)) {
            return $this->_propDict["internetMessageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internetMessageId
    *
    * @param string $val The value of the internetMessageId
    *
    * @return AnalyzedMessageEvidence
    */
    public function setInternetMessageId($val)
    {
        $this->_propDict["internetMessageId"] = $val;
        return $this;
    }
    /**
    * Gets the language
    *
    * @return string|null The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }

    /**
    * Sets the language
    *
    * @param string $val The value of the language
    *
    * @return AnalyzedMessageEvidence
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }
    /**
    * Gets the networkMessageId
    *
    * @return string|null The networkMessageId
    */
    public function getNetworkMessageId()
    {
        if (array_key_exists("networkMessageId", $this->_propDict)) {
            return $this->_propDict["networkMessageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkMessageId
    *
    * @param string $val The value of the networkMessageId
    *
    * @return AnalyzedMessageEvidence
    */
    public function setNetworkMessageId($val)
    {
        $this->_propDict["networkMessageId"] = $val;
        return $this;
    }

    /**
    * Gets the p1Sender
    *
    * @return EmailSender|null The p1Sender
    */
    public function getP1Sender()
    {
        if (array_key_exists("p1Sender", $this->_propDict)) {
            if (is_a($this->_propDict["p1Sender"], "\Microsoft\Graph\SecurityNamespace\Model\EmailSender") || is_null($this->_propDict["p1Sender"])) {
                return $this->_propDict["p1Sender"];
            } else {
                $this->_propDict["p1Sender"] = new EmailSender($this->_propDict["p1Sender"]);
                return $this->_propDict["p1Sender"];
            }
        }
        return null;
    }

    /**
    * Sets the p1Sender
    *
    * @param EmailSender $val The value to assign to the p1Sender
    *
    * @return AnalyzedMessageEvidence The AnalyzedMessageEvidence
    */
    public function setP1Sender($val)
    {
        $this->_propDict["p1Sender"] = $val;
         return $this;
    }

    /**
    * Gets the p2Sender
    *
    * @return EmailSender|null The p2Sender
    */
    public function getP2Sender()
    {
        if (array_key_exists("p2Sender", $this->_propDict)) {
            if (is_a($this->_propDict["p2Sender"], "\Microsoft\Graph\SecurityNamespace\Model\EmailSender") || is_null($this->_propDict["p2Sender"])) {
                return $this->_propDict["p2Sender"];
            } else {
                $this->_propDict["p2Sender"] = new EmailSender($this->_propDict["p2Sender"]);
                return $this->_propDict["p2Sender"];
            }
        }
        return null;
    }

    /**
    * Sets the p2Sender
    *
    * @param EmailSender $val The value to assign to the p2Sender
    *
    * @return AnalyzedMessageEvidence The AnalyzedMessageEvidence
    */
    public function setP2Sender($val)
    {
        $this->_propDict["p2Sender"] = $val;
         return $this;
    }

    /**
    * Gets the receivedDateTime
    *
    * @return \DateTime|null The receivedDateTime
    */
    public function getReceivedDateTime()
    {
        if (array_key_exists("receivedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["receivedDateTime"], "\DateTime") || is_null($this->_propDict["receivedDateTime"])) {
                return $this->_propDict["receivedDateTime"];
            } else {
                $this->_propDict["receivedDateTime"] = new \DateTime($this->_propDict["receivedDateTime"]);
                return $this->_propDict["receivedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the receivedDateTime
    *
    * @param \DateTime $val The value to assign to the receivedDateTime
    *
    * @return AnalyzedMessageEvidence The AnalyzedMessageEvidence
    */
    public function setReceivedDateTime($val)
    {
        $this->_propDict["receivedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the recipientEmailAddress
    *
    * @return string|null The recipientEmailAddress
    */
    public function getRecipientEmailAddress()
    {
        if (array_key_exists("recipientEmailAddress", $this->_propDict)) {
            return $this->_propDict["recipientEmailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recipientEmailAddress
    *
    * @param string $val The value of the recipientEmailAddress
    *
    * @return AnalyzedMessageEvidence
    */
    public function setRecipientEmailAddress($val)
    {
        $this->_propDict["recipientEmailAddress"] = $val;
        return $this;
    }
    /**
    * Gets the senderIp
    *
    * @return string|null The senderIp
    */
    public function getSenderIp()
    {
        if (array_key_exists("senderIp", $this->_propDict)) {
            return $this->_propDict["senderIp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderIp
    *
    * @param string $val The value of the senderIp
    *
    * @return AnalyzedMessageEvidence
    */
    public function setSenderIp($val)
    {
        $this->_propDict["senderIp"] = $val;
        return $this;
    }
    /**
    * Gets the subject
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    *
    * @param string $val The value of the subject
    *
    * @return AnalyzedMessageEvidence
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    /**
    * Gets the threatDetectionMethods
    *
    * @return string|null The threatDetectionMethods
    */
    public function getThreatDetectionMethods()
    {
        if (array_key_exists("threatDetectionMethods", $this->_propDict)) {
            return $this->_propDict["threatDetectionMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threatDetectionMethods
    *
    * @param string $val The value of the threatDetectionMethods
    *
    * @return AnalyzedMessageEvidence
    */
    public function setThreatDetectionMethods($val)
    {
        $this->_propDict["threatDetectionMethods"] = $val;
        return $this;
    }
    /**
    * Gets the threats
    *
    * @return string|null The threats
    */
    public function getThreats()
    {
        if (array_key_exists("threats", $this->_propDict)) {
            return $this->_propDict["threats"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threats
    *
    * @param string $val The value of the threats
    *
    * @return AnalyzedMessageEvidence
    */
    public function setThreats($val)
    {
        $this->_propDict["threats"] = $val;
        return $this;
    }
    /**
    * Gets the urlCount
    *
    * @return int|null The urlCount
    */
    public function getUrlCount()
    {
        if (array_key_exists("urlCount", $this->_propDict)) {
            return $this->_propDict["urlCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urlCount
    *
    * @param int $val The value of the urlCount
    *
    * @return AnalyzedMessageEvidence
    */
    public function setUrlCount($val)
    {
        $this->_propDict["urlCount"] = $val;
        return $this;
    }
    /**
    * Gets the urls
    *
    * @return string|null The urls
    */
    public function getUrls()
    {
        if (array_key_exists("urls", $this->_propDict)) {
            return $this->_propDict["urls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urls
    *
    * @param string $val The value of the urls
    *
    * @return AnalyzedMessageEvidence
    */
    public function setUrls($val)
    {
        $this->_propDict["urls"] = $val;
        return $this;
    }
    /**
    * Gets the urn
    *
    * @return string|null The urn
    */
    public function getUrn()
    {
        if (array_key_exists("urn", $this->_propDict)) {
            return $this->_propDict["urn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urn
    *
    * @param string $val The value of the urn
    *
    * @return AnalyzedMessageEvidence
    */
    public function setUrn($val)
    {
        $this->_propDict["urn"] = $val;
        return $this;
    }
}
