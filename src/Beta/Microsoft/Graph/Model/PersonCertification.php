<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonCertification File
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
* PersonCertification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonCertification extends ItemFacet
{
    /**
    * Gets the certificationId
    *
    * @return string The certificationId
    */
    public function getCertificationId()
    {
        if (array_key_exists("certificationId", $this->_propDict)) {
            return $this->_propDict["certificationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificationId
    *
    * @param string $val The certificationId
    *
    * @return PersonCertification
    */
    public function setCertificationId($val)
    {
        $this->_propDict["certificationId"] = $val;
        return $this;
    }
    
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
    * @return PersonCertification
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
    * @return PersonCertification
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDate
    *
    * @return \DateTime The endDate
    */
    public function getEndDate()
    {
        if (array_key_exists("endDate", $this->_propDict)) {
            if (is_a($this->_propDict["endDate"], "\DateTime")) {
                return $this->_propDict["endDate"];
            } else {
                $this->_propDict["endDate"] = new \DateTime($this->_propDict["endDate"]);
                return $this->_propDict["endDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDate
    *
    * @param \DateTime $val The endDate
    *
    * @return PersonCertification
    */
    public function setEndDate($val)
    {
        $this->_propDict["endDate"] = $val;
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
    * @return PersonCertification
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
    * @return PersonCertification
    */
    public function setIssuingAuthority($val)
    {
        $this->_propDict["issuingAuthority"] = $val;
        return $this;
    }
    
    /**
    * Gets the issuingCompany
    *
    * @return string The issuingCompany
    */
    public function getIssuingCompany()
    {
        if (array_key_exists("issuingCompany", $this->_propDict)) {
            return $this->_propDict["issuingCompany"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issuingCompany
    *
    * @param string $val The issuingCompany
    *
    * @return PersonCertification
    */
    public function setIssuingCompany($val)
    {
        $this->_propDict["issuingCompany"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDate
    *
    * @return \DateTime The startDate
    */
    public function getStartDate()
    {
        if (array_key_exists("startDate", $this->_propDict)) {
            if (is_a($this->_propDict["startDate"], "\DateTime")) {
                return $this->_propDict["startDate"];
            } else {
                $this->_propDict["startDate"] = new \DateTime($this->_propDict["startDate"]);
                return $this->_propDict["startDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDate
    *
    * @param \DateTime $val The startDate
    *
    * @return PersonCertification
    */
    public function setStartDate($val)
    {
        $this->_propDict["startDate"] = $val;
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
    * @return PersonCertification
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
    * @return PersonCertification
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
}