<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EndUserNotificationDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* EndUserNotificationDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EndUserNotificationDetail extends Entity
{
    /**
    * Gets the emailContent
    * Email HTML content.
    *
    * @return string|null The emailContent
    */
    public function getEmailContent()
    {
        if (array_key_exists("emailContent", $this->_propDict)) {
            return $this->_propDict["emailContent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailContent
    * Email HTML content.
    *
    * @param string $val The emailContent
    *
    * @return EndUserNotificationDetail
    */
    public function setEmailContent($val)
    {
        $this->_propDict["emailContent"] = $val;
        return $this;
    }

    /**
    * Gets the isDefaultLangauge
    * Indicates whether this language is default.
    *
    * @return bool|null The isDefaultLangauge
    */
    public function getIsDefaultLangauge()
    {
        if (array_key_exists("isDefaultLangauge", $this->_propDict)) {
            return $this->_propDict["isDefaultLangauge"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefaultLangauge
    * Indicates whether this language is default.
    *
    * @param bool $val The isDefaultLangauge
    *
    * @return EndUserNotificationDetail
    */
    public function setIsDefaultLangauge($val)
    {
        $this->_propDict["isDefaultLangauge"] = boolval($val);
        return $this;
    }

    /**
    * Gets the language
    * Notification language.
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
    * Notification language.
    *
    * @param string $val The language
    *
    * @return EndUserNotificationDetail
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }

    /**
    * Gets the locale
    * Notification locale.
    *
    * @return string|null The locale
    */
    public function getLocale()
    {
        if (array_key_exists("locale", $this->_propDict)) {
            return $this->_propDict["locale"];
        } else {
            return null;
        }
    }

    /**
    * Sets the locale
    * Notification locale.
    *
    * @param string $val The locale
    *
    * @return EndUserNotificationDetail
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }

    /**
    * Gets the sentFrom
    * Email details of the sender.
    *
    * @return EmailIdentity|null The sentFrom
    */
    public function getSentFrom()
    {
        if (array_key_exists("sentFrom", $this->_propDict)) {
            if (is_a($this->_propDict["sentFrom"], "\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["sentFrom"])) {
                return $this->_propDict["sentFrom"];
            } else {
                $this->_propDict["sentFrom"] = new EmailIdentity($this->_propDict["sentFrom"]);
                return $this->_propDict["sentFrom"];
            }
        }
        return null;
    }

    /**
    * Sets the sentFrom
    * Email details of the sender.
    *
    * @param EmailIdentity $val The sentFrom
    *
    * @return EndUserNotificationDetail
    */
    public function setSentFrom($val)
    {
        $this->_propDict["sentFrom"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    * Mail subject.
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
    * Mail subject.
    *
    * @param string $val The subject
    *
    * @return EndUserNotificationDetail
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }

}
