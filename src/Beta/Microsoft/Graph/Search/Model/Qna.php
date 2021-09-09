<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Qna File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Search\Model;

/**
* Qna class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Qna extends SearchAnswer
{
    /**
    * Gets the availabilityEndDateTime
    *
    * @return \DateTime|null The availabilityEndDateTime
    */
    public function getAvailabilityEndDateTime()
    {
        if (array_key_exists("availabilityEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["availabilityEndDateTime"], "\DateTime") || is_null($this->_propDict["availabilityEndDateTime"])) {
                return $this->_propDict["availabilityEndDateTime"];
            } else {
                $this->_propDict["availabilityEndDateTime"] = new \DateTime($this->_propDict["availabilityEndDateTime"]);
                return $this->_propDict["availabilityEndDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the availabilityEndDateTime
    *
    * @param \DateTime $val The availabilityEndDateTime
    *
    * @return Qna
    */
    public function setAvailabilityEndDateTime($val)
    {
        $this->_propDict["availabilityEndDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the availabilityStartDateTime
    *
    * @return \DateTime|null The availabilityStartDateTime
    */
    public function getAvailabilityStartDateTime()
    {
        if (array_key_exists("availabilityStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["availabilityStartDateTime"], "\DateTime") || is_null($this->_propDict["availabilityStartDateTime"])) {
                return $this->_propDict["availabilityStartDateTime"];
            } else {
                $this->_propDict["availabilityStartDateTime"] = new \DateTime($this->_propDict["availabilityStartDateTime"]);
                return $this->_propDict["availabilityStartDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the availabilityStartDateTime
    *
    * @param \DateTime $val The availabilityStartDateTime
    *
    * @return Qna
    */
    public function setAvailabilityStartDateTime($val)
    {
        $this->_propDict["availabilityStartDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupIds
    *
    * @return string|null The groupIds
    */
    public function getGroupIds()
    {
        if (array_key_exists("groupIds", $this->_propDict)) {
            return $this->_propDict["groupIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupIds
    *
    * @param string $val The groupIds
    *
    * @return Qna
    */
    public function setGroupIds($val)
    {
        $this->_propDict["groupIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the isSuggested
    *
    * @return bool|null The isSuggested
    */
    public function getIsSuggested()
    {
        if (array_key_exists("isSuggested", $this->_propDict)) {
            return $this->_propDict["isSuggested"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSuggested
    *
    * @param bool $val The isSuggested
    *
    * @return Qna
    */
    public function setIsSuggested($val)
    {
        $this->_propDict["isSuggested"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keywords
    *
    * @return AnswerKeyword|null The keywords
    */
    public function getKeywords()
    {
        if (array_key_exists("keywords", $this->_propDict)) {
            if (is_a($this->_propDict["keywords"], "\Beta\Microsoft\Graph\Search\Model\AnswerKeyword") || is_null($this->_propDict["keywords"])) {
                return $this->_propDict["keywords"];
            } else {
                $this->_propDict["keywords"] = new AnswerKeyword($this->_propDict["keywords"]);
                return $this->_propDict["keywords"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keywords
    *
    * @param AnswerKeyword $val The keywords
    *
    * @return Qna
    */
    public function setKeywords($val)
    {
        $this->_propDict["keywords"] = $val;
        return $this;
    }
    
    /**
    * Gets the languageTags
    *
    * @return string|null The languageTags
    */
    public function getLanguageTags()
    {
        if (array_key_exists("languageTags", $this->_propDict)) {
            return $this->_propDict["languageTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the languageTags
    *
    * @param string $val The languageTags
    *
    * @return Qna
    */
    public function setLanguageTags($val)
    {
        $this->_propDict["languageTags"] = $val;
        return $this;
    }
    

     /** 
     * Gets the platforms
     *
     * @return array|null The platforms
     */
    public function getPlatforms()
    {
        if (array_key_exists("platforms", $this->_propDict)) {
           return $this->_propDict["platforms"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the platforms
    *
    * @param \Beta\Microsoft\Graph\Model\DevicePlatformType $val The platforms
    *
    * @return Qna
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return AnswerState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Search\Model\AnswerState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new AnswerState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param AnswerState $val The state
    *
    * @return Qna
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    

     /** 
     * Gets the targetedVariations
     *
     * @return array|null The targetedVariations
     */
    public function getTargetedVariations()
    {
        if (array_key_exists("targetedVariations", $this->_propDict)) {
           return $this->_propDict["targetedVariations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the targetedVariations
    *
    * @param AnswerVariant $val The targetedVariations
    *
    * @return Qna
    */
    public function setTargetedVariations($val)
    {
        $this->_propDict["targetedVariations"] = $val;
        return $this;
    }
    
}
