<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubscribedSku File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* SubscribedSku class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SubscribedSku extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new SubscribedSku
    *
    * @param array $propDict A list of properties to set
    *
    * @return SubscribedSku
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the SubscribedSku
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the capabilityStatus
    *
    * @return string The capabilityStatus
    */
    public function getCapabilityStatus()
    {
        if (array_key_exists("capabilityStatus", $this->_propDict)) {
            return $this->_propDict["capabilityStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the capabilityStatus
    *
    * @param string $val The capabilityStatus
    *
    * @return SubscribedSku
    */
    public function setCapabilityStatus($val)
    {
        $this->_propDict["capabilityStatus"] = $val;
        return $this;
    }

    /**
    * Gets the consumedUnits
    *
    * @return int The consumedUnits
    */
    public function getConsumedUnits()
    {
        if (array_key_exists("consumedUnits", $this->_propDict)) {
            return $this->_propDict["consumedUnits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the consumedUnits
    *
    * @param int $val The consumedUnits
    *
    * @return SubscribedSku
    */
    public function setConsumedUnits($val)
    {
        $this->_propDict["consumedUnits"] = intval($val);
        return $this;
    }

    /**
    * Gets the prepaidUnits
    *
    * @return LicenseUnitsDetail The prepaidUnits
    */
    public function getPrepaidUnits()
    {
        if (array_key_exists("prepaidUnits", $this->_propDict)) {
            if (is_a($this->_propDict["prepaidUnits"], "LicenseUnitsDetail")) {
                return $this->_propDict["prepaidUnits"];
            } else {
                $this->_propDict["prepaidUnits"] = new LicenseUnitsDetail($this->_propDict["prepaidUnits"]);
                return $this->_propDict["prepaidUnits"];
            }
        }
        return null;
    }

    /**
    * Sets the prepaidUnits
    *
    * @param string $val The prepaidUnits
    *
    * @return SubscribedSku
    */
    public function setPrepaidUnits($val)
    {
        $this->_propDict["prepaidUnits"] = $val;
        return $this;
    }

    /** 
    * Gets the servicePlans
    *
    * @return array The servicePlans
    */
    public function getServicePlans()
    {
        if (array_key_exists("servicePlans", $this->_propDict)) {
           return $this->_propDict["servicePlans"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the servicePlans
    *
    * @param string $val The servicePlans
    *
    * @return SubscribedSku
    */
    public function setServicePlans($val)
    {
		$this->_propDict["servicePlans"] = $val;
        return $this;
    }


    /**
    * Gets the skuId
    *
    * @return string The skuId
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
    * @return SubscribedSku
    */
    public function setSkuId($val)
    {
        $this->_propDict["skuId"] = $val;
        return $this;
    }

    /**
    * Gets the skuPartNumber
    *
    * @return string The skuPartNumber
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
    * @return SubscribedSku
    */
    public function setSkuPartNumber($val)
    {
        $this->_propDict["skuPartNumber"] = $val;
        return $this;
    }

    /**
    * Gets the appliesTo
    *
    * @return string The appliesTo
    */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
            return $this->_propDict["appliesTo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appliesTo
    *
    * @param string $val The appliesTo
    *
    * @return SubscribedSku
    */
    public function setAppliesTo($val)
    {
        $this->_propDict["appliesTo"] = $val;
        return $this;
    }
}