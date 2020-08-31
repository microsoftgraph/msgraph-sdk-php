<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonAward File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PersonAward class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonAward extends ItemFacet
{
    /**
    * Gets the description
    *
    * @return string The description
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
    * @return PersonAward
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
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
    *
    * @param string $val The displayName
    *
    * @return PersonAward
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the issuedDate
    *
    * @return \DateTime The issuedDate
    */
    public function getIssuedDate()
    {
        if (array_key_exists("issuedDate", $this->_propDict)) {
            if (is_a($this->_propDict["issuedDate"], "\DateTime")) {
                return $this->_propDict["issuedDate"];
            } else {
                $this->_propDict["issuedDate"] = new \DateTime($this->_propDict["issuedDate"]);
                return $this->_propDict["issuedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the issuedDate
    *
    * @param \DateTime $val The issuedDate
    *
    * @return PersonAward
    */
    public function setIssuedDate($val)
    {
        $this->_propDict["issuedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the issuingAuthority
    *
    * @return string The issuingAuthority
    */
    public function getIssuingAuthority()
    {
        if (array_key_exists("issuingAuthority", $this->_propDict)) {
            return $this->_propDict["issuingAuthority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issuingAuthority
    *
    * @param string $val The issuingAuthority
    *
    * @return PersonAward
    */
    public function setIssuingAuthority($val)
    {
        $this->_propDict["issuingAuthority"] = $val;
        return $this;
    }
    
    /**
    * Gets the thumbnailUrl
    *
    * @return string The thumbnailUrl
    */
    public function getThumbnailUrl()
    {
        if (array_key_exists("thumbnailUrl", $this->_propDict)) {
            return $this->_propDict["thumbnailUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the thumbnailUrl
    *
    * @param string $val The thumbnailUrl
    *
    * @return PersonAward
    */
    public function setThumbnailUrl($val)
    {
        $this->_propDict["thumbnailUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    *
    * @param string $val The webUrl
    *
    * @return PersonAward
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
}