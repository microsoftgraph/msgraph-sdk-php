<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomerVoiceSettings File
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
* CustomerVoiceSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomerVoiceSettings extends Entity
{
    /**
    * Gets the isInOrgFormsPhishingScanEnabled
    * Controls whether phishing protection is run on forms created by users, blocking the creation of forms if common phishing questions are detected.
    *
    * @return bool|null The isInOrgFormsPhishingScanEnabled
    */
    public function getIsInOrgFormsPhishingScanEnabled()
    {
        if (array_key_exists("isInOrgFormsPhishingScanEnabled", $this->_propDict)) {
            return $this->_propDict["isInOrgFormsPhishingScanEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInOrgFormsPhishingScanEnabled
    * Controls whether phishing protection is run on forms created by users, blocking the creation of forms if common phishing questions are detected.
    *
    * @param bool $val The value of the isInOrgFormsPhishingScanEnabled
    *
    * @return CustomerVoiceSettings
    */
    public function setIsInOrgFormsPhishingScanEnabled($val)
    {
        $this->_propDict["isInOrgFormsPhishingScanEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isRecordIdentityByDefaultEnabled
    * Controls whether the names of users who fill out forms are recorded.
    *
    * @return bool|null The isRecordIdentityByDefaultEnabled
    */
    public function getIsRecordIdentityByDefaultEnabled()
    {
        if (array_key_exists("isRecordIdentityByDefaultEnabled", $this->_propDict)) {
            return $this->_propDict["isRecordIdentityByDefaultEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRecordIdentityByDefaultEnabled
    * Controls whether the names of users who fill out forms are recorded.
    *
    * @param bool $val The value of the isRecordIdentityByDefaultEnabled
    *
    * @return CustomerVoiceSettings
    */
    public function setIsRecordIdentityByDefaultEnabled($val)
    {
        $this->_propDict["isRecordIdentityByDefaultEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isRestrictedSurveyAccessEnabled
    * Controls whether only users inside your organization can submit a response.
    *
    * @return bool|null The isRestrictedSurveyAccessEnabled
    */
    public function getIsRestrictedSurveyAccessEnabled()
    {
        if (array_key_exists("isRestrictedSurveyAccessEnabled", $this->_propDict)) {
            return $this->_propDict["isRestrictedSurveyAccessEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRestrictedSurveyAccessEnabled
    * Controls whether only users inside your organization can submit a response.
    *
    * @param bool $val The value of the isRestrictedSurveyAccessEnabled
    *
    * @return CustomerVoiceSettings
    */
    public function setIsRestrictedSurveyAccessEnabled($val)
    {
        $this->_propDict["isRestrictedSurveyAccessEnabled"] = $val;
        return $this;
    }
}
