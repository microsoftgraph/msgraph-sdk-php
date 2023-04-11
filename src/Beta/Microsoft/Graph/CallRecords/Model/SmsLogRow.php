<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SmsLogRow File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;
/**
* SmsLogRow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SmsLogRow extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the callCharge
    *
    * @return \Beta\Microsoft\Graph\Model\Decimal|null The callCharge
    */
    public function getCallCharge()
    {
        if (array_key_exists("callCharge", $this->_propDict)) {
            if (is_a($this->_propDict["callCharge"], "\Beta\Microsoft\Graph\Model\Decimal") || is_null($this->_propDict["callCharge"])) {
                return $this->_propDict["callCharge"];
            } else {
                $this->_propDict["callCharge"] = new \Beta\Microsoft\Graph\Model\Decimal($this->_propDict["callCharge"]);
                return $this->_propDict["callCharge"];
            }
        }
        return null;
    }

    /**
    * Sets the callCharge
    *
    * @param \Beta\Microsoft\Graph\Model\Decimal $val The value to assign to the callCharge
    *
    * @return SmsLogRow The SmsLogRow
    */
    public function setCallCharge($val)
    {
        $this->_propDict["callCharge"] = $val;
         return $this;
    }
    /**
    * Gets the currency
    *
    * @return string|null The currency
    */
    public function getCurrency()
    {
        if (array_key_exists("currency", $this->_propDict)) {
            return $this->_propDict["currency"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currency
    *
    * @param string $val The value of the currency
    *
    * @return SmsLogRow
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    /**
    * Gets the destinationContext
    *
    * @return string|null The destinationContext
    */
    public function getDestinationContext()
    {
        if (array_key_exists("destinationContext", $this->_propDict)) {
            return $this->_propDict["destinationContext"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationContext
    *
    * @param string $val The value of the destinationContext
    *
    * @return SmsLogRow
    */
    public function setDestinationContext($val)
    {
        $this->_propDict["destinationContext"] = $val;
        return $this;
    }
    /**
    * Gets the destinationName
    *
    * @return string|null The destinationName
    */
    public function getDestinationName()
    {
        if (array_key_exists("destinationName", $this->_propDict)) {
            return $this->_propDict["destinationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationName
    *
    * @param string $val The value of the destinationName
    *
    * @return SmsLogRow
    */
    public function setDestinationName($val)
    {
        $this->_propDict["destinationName"] = $val;
        return $this;
    }
    /**
    * Gets the destinationNumber
    *
    * @return string|null The destinationNumber
    */
    public function getDestinationNumber()
    {
        if (array_key_exists("destinationNumber", $this->_propDict)) {
            return $this->_propDict["destinationNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationNumber
    *
    * @param string $val The value of the destinationNumber
    *
    * @return SmsLogRow
    */
    public function setDestinationNumber($val)
    {
        $this->_propDict["destinationNumber"] = $val;
        return $this;
    }
    /**
    * Gets the id
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return SmsLogRow
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the licenseCapability
    *
    * @return string|null The licenseCapability
    */
    public function getLicenseCapability()
    {
        if (array_key_exists("licenseCapability", $this->_propDict)) {
            return $this->_propDict["licenseCapability"];
        } else {
            return null;
        }
    }

    /**
    * Sets the licenseCapability
    *
    * @param string $val The value of the licenseCapability
    *
    * @return SmsLogRow
    */
    public function setLicenseCapability($val)
    {
        $this->_propDict["licenseCapability"] = $val;
        return $this;
    }
    /**
    * Gets the otherPartyCountryCode
    *
    * @return string|null The otherPartyCountryCode
    */
    public function getOtherPartyCountryCode()
    {
        if (array_key_exists("otherPartyCountryCode", $this->_propDict)) {
            return $this->_propDict["otherPartyCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the otherPartyCountryCode
    *
    * @param string $val The value of the otherPartyCountryCode
    *
    * @return SmsLogRow
    */
    public function setOtherPartyCountryCode($val)
    {
        $this->_propDict["otherPartyCountryCode"] = $val;
        return $this;
    }

    /**
    * Gets the sentDateTime
    *
    * @return \DateTime|null The sentDateTime
    */
    public function getSentDateTime()
    {
        if (array_key_exists("sentDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sentDateTime"], "\DateTime") || is_null($this->_propDict["sentDateTime"])) {
                return $this->_propDict["sentDateTime"];
            } else {
                $this->_propDict["sentDateTime"] = new \DateTime($this->_propDict["sentDateTime"]);
                return $this->_propDict["sentDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sentDateTime
    *
    * @param \DateTime $val The value to assign to the sentDateTime
    *
    * @return SmsLogRow The SmsLogRow
    */
    public function setSentDateTime($val)
    {
        $this->_propDict["sentDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the smsId
    *
    * @return string|null The smsId
    */
    public function getSmsId()
    {
        if (array_key_exists("smsId", $this->_propDict)) {
            return $this->_propDict["smsId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smsId
    *
    * @param string $val The value of the smsId
    *
    * @return SmsLogRow
    */
    public function setSmsId($val)
    {
        $this->_propDict["smsId"] = $val;
        return $this;
    }
    /**
    * Gets the smsType
    *
    * @return string|null The smsType
    */
    public function getSmsType()
    {
        if (array_key_exists("smsType", $this->_propDict)) {
            return $this->_propDict["smsType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smsType
    *
    * @param string $val The value of the smsType
    *
    * @return SmsLogRow
    */
    public function setSmsType($val)
    {
        $this->_propDict["smsType"] = $val;
        return $this;
    }
    /**
    * Gets the smsUnits
    *
    * @return int|null The smsUnits
    */
    public function getSmsUnits()
    {
        if (array_key_exists("smsUnits", $this->_propDict)) {
            return $this->_propDict["smsUnits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smsUnits
    *
    * @param int $val The value of the smsUnits
    *
    * @return SmsLogRow
    */
    public function setSmsUnits($val)
    {
        $this->_propDict["smsUnits"] = $val;
        return $this;
    }
    /**
    * Gets the sourceNumber
    *
    * @return string|null The sourceNumber
    */
    public function getSourceNumber()
    {
        if (array_key_exists("sourceNumber", $this->_propDict)) {
            return $this->_propDict["sourceNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceNumber
    *
    * @param string $val The value of the sourceNumber
    *
    * @return SmsLogRow
    */
    public function setSourceNumber($val)
    {
        $this->_propDict["sourceNumber"] = $val;
        return $this;
    }
    /**
    * Gets the tenantCountryCode
    *
    * @return string|null The tenantCountryCode
    */
    public function getTenantCountryCode()
    {
        if (array_key_exists("tenantCountryCode", $this->_propDict)) {
            return $this->_propDict["tenantCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantCountryCode
    *
    * @param string $val The value of the tenantCountryCode
    *
    * @return SmsLogRow
    */
    public function setTenantCountryCode($val)
    {
        $this->_propDict["tenantCountryCode"] = $val;
        return $this;
    }
    /**
    * Gets the userCountryCode
    *
    * @return string|null The userCountryCode
    */
    public function getUserCountryCode()
    {
        if (array_key_exists("userCountryCode", $this->_propDict)) {
            return $this->_propDict["userCountryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userCountryCode
    *
    * @param string $val The value of the userCountryCode
    *
    * @return SmsLogRow
    */
    public function setUserCountryCode($val)
    {
        $this->_propDict["userCountryCode"] = $val;
        return $this;
    }
    /**
    * Gets the userDisplayName
    *
    * @return string|null The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDisplayName
    *
    * @param string $val The value of the userDisplayName
    *
    * @return SmsLogRow
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The value of the userId
    *
    * @return SmsLogRow
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return SmsLogRow
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
