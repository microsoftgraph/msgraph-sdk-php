<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FormsSettings File
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
* FormsSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FormsSettings extends Entity
{
    /**
    * Gets the isBingImageSearchEnabled
    * Controls whether users can add images from Bing to forms.
    *
    * @return bool|null The isBingImageSearchEnabled
    */
    public function getIsBingImageSearchEnabled()
    {
        if (array_key_exists("isBingImageSearchEnabled", $this->_propDict)) {
            return $this->_propDict["isBingImageSearchEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isBingImageSearchEnabled
    * Controls whether users can add images from Bing to forms.
    *
    * @param bool $val The value of the isBingImageSearchEnabled
    *
    * @return FormsSettings
    */
    public function setIsBingImageSearchEnabled($val)
    {
        $this->_propDict["isBingImageSearchEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isExternalSendFormEnabled
    * Controls whether users can send a link to a form to an external user.
    *
    * @return bool|null The isExternalSendFormEnabled
    */
    public function getIsExternalSendFormEnabled()
    {
        if (array_key_exists("isExternalSendFormEnabled", $this->_propDict)) {
            return $this->_propDict["isExternalSendFormEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExternalSendFormEnabled
    * Controls whether users can send a link to a form to an external user.
    *
    * @param bool $val The value of the isExternalSendFormEnabled
    *
    * @return FormsSettings
    */
    public function setIsExternalSendFormEnabled($val)
    {
        $this->_propDict["isExternalSendFormEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isExternalShareCollaborationEnabled
    * Controls whether users can collaborate on a form layout and structure with an external user.
    *
    * @return bool|null The isExternalShareCollaborationEnabled
    */
    public function getIsExternalShareCollaborationEnabled()
    {
        if (array_key_exists("isExternalShareCollaborationEnabled", $this->_propDict)) {
            return $this->_propDict["isExternalShareCollaborationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExternalShareCollaborationEnabled
    * Controls whether users can collaborate on a form layout and structure with an external user.
    *
    * @param bool $val The value of the isExternalShareCollaborationEnabled
    *
    * @return FormsSettings
    */
    public function setIsExternalShareCollaborationEnabled($val)
    {
        $this->_propDict["isExternalShareCollaborationEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isExternalShareResultEnabled
    * Controls whether users can share form results with external users.
    *
    * @return bool|null The isExternalShareResultEnabled
    */
    public function getIsExternalShareResultEnabled()
    {
        if (array_key_exists("isExternalShareResultEnabled", $this->_propDict)) {
            return $this->_propDict["isExternalShareResultEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExternalShareResultEnabled
    * Controls whether users can share form results with external users.
    *
    * @param bool $val The value of the isExternalShareResultEnabled
    *
    * @return FormsSettings
    */
    public function setIsExternalShareResultEnabled($val)
    {
        $this->_propDict["isExternalShareResultEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isExternalShareTemplateEnabled
    * Controls whether users can share form templates with external users.
    *
    * @return bool|null The isExternalShareTemplateEnabled
    */
    public function getIsExternalShareTemplateEnabled()
    {
        if (array_key_exists("isExternalShareTemplateEnabled", $this->_propDict)) {
            return $this->_propDict["isExternalShareTemplateEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isExternalShareTemplateEnabled
    * Controls whether users can share form templates with external users.
    *
    * @param bool $val The value of the isExternalShareTemplateEnabled
    *
    * @return FormsSettings
    */
    public function setIsExternalShareTemplateEnabled($val)
    {
        $this->_propDict["isExternalShareTemplateEnabled"] = $val;
        return $this;
    }
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
    * @return FormsSettings
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
    * @return FormsSettings
    */
    public function setIsRecordIdentityByDefaultEnabled($val)
    {
        $this->_propDict["isRecordIdentityByDefaultEnabled"] = $val;
        return $this;
    }
}
