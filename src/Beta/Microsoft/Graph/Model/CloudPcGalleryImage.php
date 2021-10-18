<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcGalleryImage File
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
* CloudPcGalleryImage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcGalleryImage extends Entity
{
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return CloudPcGalleryImage
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDate
    *
    * @return \DateTime|null The endDate
    */
    public function getEndDate()
    {
        if (array_key_exists("endDate", $this->_propDict)) {
            if (is_a($this->_propDict["endDate"], "\DateTime") || is_null($this->_propDict["endDate"])) {
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
    * @return CloudPcGalleryImage
    */
    public function setEndDate($val)
    {
        $this->_propDict["endDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDate
    *
    * @return \DateTime|null The expirationDate
    */
    public function getExpirationDate()
    {
        if (array_key_exists("expirationDate", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDate"], "\DateTime") || is_null($this->_propDict["expirationDate"])) {
                return $this->_propDict["expirationDate"];
            } else {
                $this->_propDict["expirationDate"] = new \DateTime($this->_propDict["expirationDate"]);
                return $this->_propDict["expirationDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDate
    *
    * @param \DateTime $val The expirationDate
    *
    * @return CloudPcGalleryImage
    */
    public function setExpirationDate($val)
    {
        $this->_propDict["expirationDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the offer
    *
    * @return string|null The offer
    */
    public function getOffer()
    {
        if (array_key_exists("offer", $this->_propDict)) {
            return $this->_propDict["offer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the offer
    *
    * @param string $val The offer
    *
    * @return CloudPcGalleryImage
    */
    public function setOffer($val)
    {
        $this->_propDict["offer"] = $val;
        return $this;
    }
    
    /**
    * Gets the offerDisplayName
    *
    * @return string|null The offerDisplayName
    */
    public function getOfferDisplayName()
    {
        if (array_key_exists("offerDisplayName", $this->_propDict)) {
            return $this->_propDict["offerDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the offerDisplayName
    *
    * @param string $val The offerDisplayName
    *
    * @return CloudPcGalleryImage
    */
    public function setOfferDisplayName($val)
    {
        $this->_propDict["offerDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    *
    * @return string|null The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisher
    *
    * @param string $val The publisher
    *
    * @return CloudPcGalleryImage
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the recommendedSku
    *
    * @return string|null The recommendedSku
    */
    public function getRecommendedSku()
    {
        if (array_key_exists("recommendedSku", $this->_propDict)) {
            return $this->_propDict["recommendedSku"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recommendedSku
    *
    * @param string $val The recommendedSku
    *
    * @return CloudPcGalleryImage
    */
    public function setRecommendedSku($val)
    {
        $this->_propDict["recommendedSku"] = $val;
        return $this;
    }
    
    /**
    * Gets the sizeInGB
    *
    * @return int|null The sizeInGB
    */
    public function getSizeInGB()
    {
        if (array_key_exists("sizeInGB", $this->_propDict)) {
            return $this->_propDict["sizeInGB"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sizeInGB
    *
    * @param int $val The sizeInGB
    *
    * @return CloudPcGalleryImage
    */
    public function setSizeInGB($val)
    {
        $this->_propDict["sizeInGB"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sku
    *
    * @return string|null The sku
    */
    public function getSku()
    {
        if (array_key_exists("sku", $this->_propDict)) {
            return $this->_propDict["sku"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sku
    *
    * @param string $val The sku
    *
    * @return CloudPcGalleryImage
    */
    public function setSku($val)
    {
        $this->_propDict["sku"] = $val;
        return $this;
    }
    
    /**
    * Gets the skuDisplayName
    *
    * @return string|null The skuDisplayName
    */
    public function getSkuDisplayName()
    {
        if (array_key_exists("skuDisplayName", $this->_propDict)) {
            return $this->_propDict["skuDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skuDisplayName
    *
    * @param string $val The skuDisplayName
    *
    * @return CloudPcGalleryImage
    */
    public function setSkuDisplayName($val)
    {
        $this->_propDict["skuDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDate
    *
    * @return \DateTime|null The startDate
    */
    public function getStartDate()
    {
        if (array_key_exists("startDate", $this->_propDict)) {
            if (is_a($this->_propDict["startDate"], "\DateTime") || is_null($this->_propDict["startDate"])) {
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
    * @return CloudPcGalleryImage
    */
    public function setStartDate($val)
    {
        $this->_propDict["startDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return CloudPcGalleryImageStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CloudPcGalleryImageStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcGalleryImageStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param CloudPcGalleryImageStatus $val The status
    *
    * @return CloudPcGalleryImage
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
