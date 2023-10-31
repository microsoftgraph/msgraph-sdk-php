<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingLanguageDetail File
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
* TrainingLanguageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingLanguageDetail extends Entity
{
    /**
    * Gets the content
    * Language specific content for the training.
    *
    * @return string|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * Language specific content for the training.
    *
    * @param string $val The content
    *
    * @return TrainingLanguageDetail
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * Identity of the user who created the language details.
    *
    * @return EmailIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new EmailIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity of the user who created the language details.
    *
    * @param EmailIdentity $val The createdBy
    *
    * @return TrainingLanguageDetail
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time when the language details were created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date and time when the language details were created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TrainingLanguageDetail
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Description as defined by the user.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Description as defined by the user.
    *
    * @param string $val The description
    *
    * @return TrainingLanguageDetail
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name as defined by the user.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name as defined by the user.
    *
    * @param string $val The displayName
    *
    * @return TrainingLanguageDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the isDefaultLangauge
    * Indicates whether the training has a default language.
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
    * Indicates whether the training has a default language.
    *
    * @param bool $val The isDefaultLangauge
    *
    * @return TrainingLanguageDetail
    */
    public function setIsDefaultLangauge($val)
    {
        $this->_propDict["isDefaultLangauge"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Identity of the user who last modified the details.
    *
    * @return EmailIdentity|null The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Microsoft\Graph\Model\EmailIdentity") || is_null($this->_propDict["lastModifiedBy"])) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new EmailIdentity($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * Identity of the user who last modified the details.
    *
    * @param EmailIdentity $val The lastModifiedBy
    *
    * @return TrainingLanguageDetail
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Date and time when the trainingLanguageDetail was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Date and time when the trainingLanguageDetail was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return TrainingLanguageDetail
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the locale
    * Content locale for the training detail.
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
    * Content locale for the training detail.
    *
    * @param string $val The locale
    *
    * @return TrainingLanguageDetail
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }

}
