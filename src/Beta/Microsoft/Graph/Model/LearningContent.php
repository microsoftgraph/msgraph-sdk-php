<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LearningContent File
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
* LearningContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LearningContent implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new LearningContent
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the LearningContent
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the additionalTags
    *
    * @return string|null The additionalTags
    */
    public function getAdditionalTags()
    {
        if (array_key_exists("additionalTags", $this->_propDict)) {
            return $this->_propDict["additionalTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalTags
    *
    * @param string $val The additionalTags
    *
    * @return LearningContent
    */
    public function setAdditionalTags($val)
    {
        $this->_propDict["additionalTags"] = $val;
        return $this;
    }

    /**
    * Gets the contentWebUrl
    *
    * @return string|null The contentWebUrl
    */
    public function getContentWebUrl()
    {
        if (array_key_exists("contentWebUrl", $this->_propDict)) {
            return $this->_propDict["contentWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentWebUrl
    *
    * @param string $val The contentWebUrl
    *
    * @return LearningContent
    */
    public function setContentWebUrl($val)
    {
        $this->_propDict["contentWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the contributor
    *
    * @return string|null The contributor
    */
    public function getContributor()
    {
        if (array_key_exists("contributor", $this->_propDict)) {
            return $this->_propDict["contributor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contributor
    *
    * @param string $val The contributor
    *
    * @return LearningContent
    */
    public function setContributor($val)
    {
        $this->_propDict["contributor"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
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
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return LearningContent
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
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
    *
    * @param string $val The description
    *
    * @return LearningContent
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the duration
    *
    * @return \DateInterval|null The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            if (is_a($this->_propDict["duration"], "\DateInterval") || is_null($this->_propDict["duration"])) {
                return $this->_propDict["duration"];
            } else {
                $this->_propDict["duration"] = new \DateInterval($this->_propDict["duration"]);
                return $this->_propDict["duration"];
            }
        }
        return null;
    }

    /**
    * Sets the duration
    *
    * @param \DateInterval $val The duration
    *
    * @return LearningContent
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }

    /**
    * Gets the externalId
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return LearningContent
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the format
    *
    * @return string|null The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            return $this->_propDict["format"];
        } else {
            return null;
        }
    }

    /**
    * Sets the format
    *
    * @param string $val The format
    *
    * @return LearningContent
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }

    /**
    * Gets the isActive
    *
    * @return bool|null The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isActive
    *
    * @param bool $val The isActive
    *
    * @return LearningContent
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isPremium
    *
    * @return bool|null The isPremium
    */
    public function getIsPremium()
    {
        if (array_key_exists("isPremium", $this->_propDict)) {
            return $this->_propDict["isPremium"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPremium
    *
    * @param bool $val The isPremium
    *
    * @return LearningContent
    */
    public function setIsPremium($val)
    {
        $this->_propDict["isPremium"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSearchable
    *
    * @return bool|null The isSearchable
    */
    public function getIsSearchable()
    {
        if (array_key_exists("isSearchable", $this->_propDict)) {
            return $this->_propDict["isSearchable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSearchable
    *
    * @param bool $val The isSearchable
    *
    * @return LearningContent
    */
    public function setIsSearchable($val)
    {
        $this->_propDict["isSearchable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the languageTag
    *
    * @return string|null The languageTag
    */
    public function getLanguageTag()
    {
        if (array_key_exists("languageTag", $this->_propDict)) {
            return $this->_propDict["languageTag"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageTag
    *
    * @param string $val The languageTag
    *
    * @return LearningContent
    */
    public function setLanguageTag($val)
    {
        $this->_propDict["languageTag"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
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
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return LearningContent
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the numberOfPages
    *
    * @return int|null The numberOfPages
    */
    public function getNumberOfPages()
    {
        if (array_key_exists("numberOfPages", $this->_propDict)) {
            return $this->_propDict["numberOfPages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the numberOfPages
    *
    * @param int $val The numberOfPages
    *
    * @return LearningContent
    */
    public function setNumberOfPages($val)
    {
        $this->_propDict["numberOfPages"] = intval($val);
        return $this;
    }

    /**
    * Gets the skillTags
    *
    * @return string|null The skillTags
    */
    public function getSkillTags()
    {
        if (array_key_exists("skillTags", $this->_propDict)) {
            return $this->_propDict["skillTags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skillTags
    *
    * @param string $val The skillTags
    *
    * @return LearningContent
    */
    public function setSkillTags($val)
    {
        $this->_propDict["skillTags"] = $val;
        return $this;
    }

    /**
    * Gets the sourceName
    *
    * @return string|null The sourceName
    */
    public function getSourceName()
    {
        if (array_key_exists("sourceName", $this->_propDict)) {
            return $this->_propDict["sourceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceName
    *
    * @param string $val The sourceName
    *
    * @return LearningContent
    */
    public function setSourceName($val)
    {
        $this->_propDict["sourceName"] = $val;
        return $this;
    }

    /**
    * Gets the thumbnailWebUrl
    *
    * @return string|null The thumbnailWebUrl
    */
    public function getThumbnailWebUrl()
    {
        if (array_key_exists("thumbnailWebUrl", $this->_propDict)) {
            return $this->_propDict["thumbnailWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the thumbnailWebUrl
    *
    * @param string $val The thumbnailWebUrl
    *
    * @return LearningContent
    */
    public function setThumbnailWebUrl($val)
    {
        $this->_propDict["thumbnailWebUrl"] = $val;
        return $this;
    }

    /**
    * Gets the title
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    *
    * @param string $val The title
    *
    * @return LearningContent
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return LearningContent
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            }
        }
        return $serializableProperties;
    }
}
