<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReportSuspiciousActivitySettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* ReportSuspiciousActivitySettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReportSuspiciousActivitySettings extends Entity
{

    /**
    * Gets the includeTarget
    * Group IDs in scope for report suspicious activity.
    *
    * @return IncludeTarget|null The includeTarget
    */
    public function getIncludeTarget()
    {
        if (array_key_exists("includeTarget", $this->_propDict)) {
            if (is_a($this->_propDict["includeTarget"], "\Beta\Microsoft\Graph\Model\IncludeTarget") || is_null($this->_propDict["includeTarget"])) {
                return $this->_propDict["includeTarget"];
            } else {
                $this->_propDict["includeTarget"] = new IncludeTarget($this->_propDict["includeTarget"]);
                return $this->_propDict["includeTarget"];
            }
        }
        return null;
    }

    /**
    * Sets the includeTarget
    * Group IDs in scope for report suspicious activity.
    *
    * @param IncludeTarget $val The value to assign to the includeTarget
    *
    * @return ReportSuspiciousActivitySettings The ReportSuspiciousActivitySettings
    */
    public function setIncludeTarget($val)
    {
        $this->_propDict["includeTarget"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Specifies the state of the reportSuspiciousActivitySettings object. The possible values are: default, enabled, disabled, unknownFutureValue. Setting to default will result in a disabled state.
    *
    * @return AdvancedConfigState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\AdvancedConfigState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AdvancedConfigState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Specifies the state of the reportSuspiciousActivitySettings object. The possible values are: default, enabled, disabled, unknownFutureValue. Setting to default will result in a disabled state.
    *
    * @param AdvancedConfigState $val The value to assign to the state
    *
    * @return ReportSuspiciousActivitySettings The ReportSuspiciousActivitySettings
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
    /**
    * Gets the voiceReportingCode
    * Specifies the number the user will enter on their phone to report the MFA prompt as suspicious.
    *
    * @return int|null The voiceReportingCode
    */
    public function getVoiceReportingCode()
    {
        if (array_key_exists("voiceReportingCode", $this->_propDict)) {
            return $this->_propDict["voiceReportingCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the voiceReportingCode
    * Specifies the number the user will enter on their phone to report the MFA prompt as suspicious.
    *
    * @param int $val The value of the voiceReportingCode
    *
    * @return ReportSuspiciousActivitySettings
    */
    public function setVoiceReportingCode($val)
    {
        $this->_propDict["voiceReportingCode"] = $val;
        return $this;
    }
}
