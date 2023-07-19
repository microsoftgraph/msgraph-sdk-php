<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CompanySubscription File
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
* CompanySubscription class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CompanySubscription extends Entity
{
    /**
    * Gets the commerceSubscriptionId
    *
    * @return string|null The commerceSubscriptionId
    */
    public function getCommerceSubscriptionId()
    {
        if (array_key_exists("commerceSubscriptionId", $this->_propDict)) {
            return $this->_propDict["commerceSubscriptionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the commerceSubscriptionId
    *
    * @param string $val The commerceSubscriptionId
    *
    * @return CompanySubscription
    */
    public function setCommerceSubscriptionId($val)
    {
        $this->_propDict["commerceSubscriptionId"] = $val;
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
    * @return CompanySubscription
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the isTrial
    *
    * @return bool|null The isTrial
    */
    public function getIsTrial()
    {
        if (array_key_exists("isTrial", $this->_propDict)) {
            return $this->_propDict["isTrial"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isTrial
    *
    * @param bool $val The isTrial
    *
    * @return CompanySubscription
    */
    public function setIsTrial($val)
    {
        $this->_propDict["isTrial"] = boolval($val);
        return $this;
    }

    /**
    * Gets the nextLifecycleDateTime
    *
    * @return \DateTime|null The nextLifecycleDateTime
    */
    public function getNextLifecycleDateTime()
    {
        if (array_key_exists("nextLifecycleDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["nextLifecycleDateTime"], "\DateTime") || is_null($this->_propDict["nextLifecycleDateTime"])) {
                return $this->_propDict["nextLifecycleDateTime"];
            } else {
                $this->_propDict["nextLifecycleDateTime"] = new \DateTime($this->_propDict["nextLifecycleDateTime"]);
                return $this->_propDict["nextLifecycleDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the nextLifecycleDateTime
    *
    * @param \DateTime $val The nextLifecycleDateTime
    *
    * @return CompanySubscription
    */
    public function setNextLifecycleDateTime($val)
    {
        $this->_propDict["nextLifecycleDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the ocpSubscriptionId
    *
    * @return string|null The ocpSubscriptionId
    */
    public function getOcpSubscriptionId()
    {
        if (array_key_exists("ocpSubscriptionId", $this->_propDict)) {
            return $this->_propDict["ocpSubscriptionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ocpSubscriptionId
    *
    * @param string $val The ocpSubscriptionId
    *
    * @return CompanySubscription
    */
    public function setOcpSubscriptionId($val)
    {
        $this->_propDict["ocpSubscriptionId"] = $val;
        return $this;
    }

    /**
    * Gets the ownerId
    *
    * @return string|null The ownerId
    */
    public function getOwnerId()
    {
        if (array_key_exists("ownerId", $this->_propDict)) {
            return $this->_propDict["ownerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ownerId
    *
    * @param string $val The ownerId
    *
    * @return CompanySubscription
    */
    public function setOwnerId($val)
    {
        $this->_propDict["ownerId"] = $val;
        return $this;
    }

    /**
    * Gets the ownerTenantId
    *
    * @return string|null The ownerTenantId
    */
    public function getOwnerTenantId()
    {
        if (array_key_exists("ownerTenantId", $this->_propDict)) {
            return $this->_propDict["ownerTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ownerTenantId
    *
    * @param string $val The ownerTenantId
    *
    * @return CompanySubscription
    */
    public function setOwnerTenantId($val)
    {
        $this->_propDict["ownerTenantId"] = $val;
        return $this;
    }

    /**
    * Gets the ownerType
    *
    * @return string|null The ownerType
    */
    public function getOwnerType()
    {
        if (array_key_exists("ownerType", $this->_propDict)) {
            return $this->_propDict["ownerType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ownerType
    *
    * @param string $val The ownerType
    *
    * @return CompanySubscription
    */
    public function setOwnerType($val)
    {
        $this->_propDict["ownerType"] = $val;
        return $this;
    }


     /**
     * Gets the serviceStatus
     *
     * @return array|null The serviceStatus
     */
    public function getServiceStatus()
    {
        if (array_key_exists("serviceStatus", $this->_propDict)) {
           return $this->_propDict["serviceStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceStatus
    *
    * @param ServicePlanInfo[] $val The serviceStatus
    *
    * @return CompanySubscription
    */
    public function setServiceStatus($val)
    {
        $this->_propDict["serviceStatus"] = $val;
        return $this;
    }

    /**
    * Gets the skuId
    *
    * @return string|null The skuId
    */
    public function getSkuId()
    {
        if (array_key_exists("skuId", $this->_propDict)) {
            return $this->_propDict["skuId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skuId
    *
    * @param string $val The skuId
    *
    * @return CompanySubscription
    */
    public function setSkuId($val)
    {
        $this->_propDict["skuId"] = $val;
        return $this;
    }

    /**
    * Gets the skuPartNumber
    *
    * @return string|null The skuPartNumber
    */
    public function getSkuPartNumber()
    {
        if (array_key_exists("skuPartNumber", $this->_propDict)) {
            return $this->_propDict["skuPartNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skuPartNumber
    *
    * @param string $val The skuPartNumber
    *
    * @return CompanySubscription
    */
    public function setSkuPartNumber($val)
    {
        $this->_propDict["skuPartNumber"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return string|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return CompanySubscription
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the totalLicenses
    *
    * @return int|null The totalLicenses
    */
    public function getTotalLicenses()
    {
        if (array_key_exists("totalLicenses", $this->_propDict)) {
            return $this->_propDict["totalLicenses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalLicenses
    *
    * @param int $val The totalLicenses
    *
    * @return CompanySubscription
    */
    public function setTotalLicenses($val)
    {
        $this->_propDict["totalLicenses"] = intval($val);
        return $this;
    }

}
