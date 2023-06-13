<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CompanyInformation File
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
* CompanyInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CompanyInformation implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new CompanyInformation
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
    * Gets the property dictionary of the CompanyInformation
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the address
    *
    * @return PostalAddressType|null The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "\Beta\Microsoft\Graph\Model\PostalAddressType") || is_null($this->_propDict["address"])) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new PostalAddressType($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }

    /**
    * Sets the address
    *
    * @param PostalAddressType $val The address
    *
    * @return CompanyInformation
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }

    /**
    * Gets the currencyCode
    *
    * @return string|null The currencyCode
    */
    public function getCurrencyCode()
    {
        if (array_key_exists("currencyCode", $this->_propDict)) {
            return $this->_propDict["currencyCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currencyCode
    *
    * @param string $val The currencyCode
    *
    * @return CompanyInformation
    */
    public function setCurrencyCode($val)
    {
        $this->_propDict["currencyCode"] = $val;
        return $this;
    }

    /**
    * Gets the currentFiscalYearStartDate
    *
    * @return \DateTime|null The currentFiscalYearStartDate
    */
    public function getCurrentFiscalYearStartDate()
    {
        if (array_key_exists("currentFiscalYearStartDate", $this->_propDict)) {
            if (is_a($this->_propDict["currentFiscalYearStartDate"], "\DateTime") || is_null($this->_propDict["currentFiscalYearStartDate"])) {
                return $this->_propDict["currentFiscalYearStartDate"];
            } else {
                $this->_propDict["currentFiscalYearStartDate"] = new \DateTime($this->_propDict["currentFiscalYearStartDate"]);
                return $this->_propDict["currentFiscalYearStartDate"];
            }
        }
        return null;
    }

    /**
    * Sets the currentFiscalYearStartDate
    *
    * @param \DateTime $val The currentFiscalYearStartDate
    *
    * @return CompanyInformation
    */
    public function setCurrentFiscalYearStartDate($val)
    {
        $this->_propDict["currentFiscalYearStartDate"] = $val;
        return $this;
    }

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
    * @return CompanyInformation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the email
    *
    * @return string|null The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }

    /**
    * Sets the email
    *
    * @param string $val The email
    *
    * @return CompanyInformation
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }

    /**
    * Gets the faxNumber
    *
    * @return string|null The faxNumber
    */
    public function getFaxNumber()
    {
        if (array_key_exists("faxNumber", $this->_propDict)) {
            return $this->_propDict["faxNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the faxNumber
    *
    * @param string $val The faxNumber
    *
    * @return CompanyInformation
    */
    public function setFaxNumber($val)
    {
        $this->_propDict["faxNumber"] = $val;
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
    * @param string $val The id
    *
    * @return CompanyInformation
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the industry
    *
    * @return string|null The industry
    */
    public function getIndustry()
    {
        if (array_key_exists("industry", $this->_propDict)) {
            return $this->_propDict["industry"];
        } else {
            return null;
        }
    }

    /**
    * Sets the industry
    *
    * @param string $val The industry
    *
    * @return CompanyInformation
    */
    public function setIndustry($val)
    {
        $this->_propDict["industry"] = $val;
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
    * @return CompanyInformation
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the phoneNumber
    *
    * @return string|null The phoneNumber
    */
    public function getPhoneNumber()
    {
        if (array_key_exists("phoneNumber", $this->_propDict)) {
            return $this->_propDict["phoneNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phoneNumber
    *
    * @param string $val The phoneNumber
    *
    * @return CompanyInformation
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }

    /**
    * Gets the picture
    *
    * @return \GuzzleHttp\Psr7\Stream|null The picture
    */
    public function getPicture()
    {
        if (array_key_exists("picture", $this->_propDict)) {
            if (is_a($this->_propDict["picture"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["picture"])) {
                return $this->_propDict["picture"];
            } else {
                $this->_propDict["picture"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["picture"]);
                return $this->_propDict["picture"];
            }
        }
        return null;
    }

    /**
    * Sets the picture
    *
    * @param \GuzzleHttp\Psr7\Stream $val The picture
    *
    * @return CompanyInformation
    */
    public function setPicture($val)
    {
        $this->_propDict["picture"] = $val;
        return $this;
    }

    /**
    * Gets the taxRegistrationNumber
    *
    * @return string|null The taxRegistrationNumber
    */
    public function getTaxRegistrationNumber()
    {
        if (array_key_exists("taxRegistrationNumber", $this->_propDict)) {
            return $this->_propDict["taxRegistrationNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the taxRegistrationNumber
    *
    * @param string $val The taxRegistrationNumber
    *
    * @return CompanyInformation
    */
    public function setTaxRegistrationNumber($val)
    {
        $this->_propDict["taxRegistrationNumber"] = $val;
        return $this;
    }

    /**
    * Gets the website
    *
    * @return string|null The website
    */
    public function getWebsite()
    {
        if (array_key_exists("website", $this->_propDict)) {
            return $this->_propDict["website"];
        } else {
            return null;
        }
    }

    /**
    * Sets the website
    *
    * @param string $val The website
    *
    * @return CompanyInformation
    */
    public function setWebsite($val)
    {
        $this->_propDict["website"] = $val;
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
    * @return CompanyInformation
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
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
