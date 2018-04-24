<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AutomaticRepliesSetting File
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
* AutomaticRepliesSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AutomaticRepliesSetting extends Entity
{

    /**
    * Gets the status
    *
    * @return AutomaticRepliesStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Beta\Model\AutomaticRepliesStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AutomaticRepliesStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param AutomaticRepliesStatus $val The value to assign to the status
    *
    * @return AutomaticRepliesSetting The AutomaticRepliesSetting
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }

    /**
    * Gets the externalAudience
    *
    * @return ExternalAudienceScope The externalAudience
    */
    public function getExternalAudience()
    {
        if (array_key_exists("externalAudience", $this->_propDict)) {
            if (is_a($this->_propDict["externalAudience"], "Microsoft\Graph\Beta\Model\ExternalAudienceScope")) {
                return $this->_propDict["externalAudience"];
            } else {
                $this->_propDict["externalAudience"] = new ExternalAudienceScope($this->_propDict["externalAudience"]);
                return $this->_propDict["externalAudience"];
            }
        }
        return null;
    }

    /**
    * Sets the externalAudience
    *
    * @param ExternalAudienceScope $val The value to assign to the externalAudience
    *
    * @return AutomaticRepliesSetting The AutomaticRepliesSetting
    */
    public function setExternalAudience($val)
    {
        $this->_propDict["externalAudience"] = $val;
         return $this;
    }

    /**
    * Gets the scheduledStartDateTime
    *
    * @return DateTimeTimeZone The scheduledStartDateTime
    */
    public function getScheduledStartDateTime()
    {
        if (array_key_exists("scheduledStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledStartDateTime"], "Microsoft\Graph\Beta\Model\DateTimeTimeZone")) {
                return $this->_propDict["scheduledStartDateTime"];
            } else {
                $this->_propDict["scheduledStartDateTime"] = new DateTimeTimeZone($this->_propDict["scheduledStartDateTime"]);
                return $this->_propDict["scheduledStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledStartDateTime
    *
    * @param DateTimeTimeZone $val The value to assign to the scheduledStartDateTime
    *
    * @return AutomaticRepliesSetting The AutomaticRepliesSetting
    */
    public function setScheduledStartDateTime($val)
    {
        $this->_propDict["scheduledStartDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the scheduledEndDateTime
    *
    * @return DateTimeTimeZone The scheduledEndDateTime
    */
    public function getScheduledEndDateTime()
    {
        if (array_key_exists("scheduledEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledEndDateTime"], "Microsoft\Graph\Beta\Model\DateTimeTimeZone")) {
                return $this->_propDict["scheduledEndDateTime"];
            } else {
                $this->_propDict["scheduledEndDateTime"] = new DateTimeTimeZone($this->_propDict["scheduledEndDateTime"]);
                return $this->_propDict["scheduledEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledEndDateTime
    *
    * @param DateTimeTimeZone $val The value to assign to the scheduledEndDateTime
    *
    * @return AutomaticRepliesSetting The AutomaticRepliesSetting
    */
    public function setScheduledEndDateTime($val)
    {
        $this->_propDict["scheduledEndDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the internalReplyMessage
    *
    * @return string The internalReplyMessage
    */
    public function getInternalReplyMessage()
    {
        if (array_key_exists("internalReplyMessage", $this->_propDict)) {
            return $this->_propDict["internalReplyMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalReplyMessage
    *
    * @param string $val The value of the internalReplyMessage
    *
    * @return AutomaticRepliesSetting
    */
    public function setInternalReplyMessage($val)
    {
        $this->_propDict["internalReplyMessage"] = $val;
        return $this;
    }
    /**
    * Gets the externalReplyMessage
    *
    * @return string The externalReplyMessage
    */
    public function getExternalReplyMessage()
    {
        if (array_key_exists("externalReplyMessage", $this->_propDict)) {
            return $this->_propDict["externalReplyMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalReplyMessage
    *
    * @param string $val The value of the externalReplyMessage
    *
    * @return AutomaticRepliesSetting
    */
    public function setExternalReplyMessage($val)
    {
        $this->_propDict["externalReplyMessage"] = $val;
        return $this;
    }
}
