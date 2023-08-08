<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SslCertificateEntity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* SslCertificateEntity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SslCertificateEntity extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the address
    *
    * @return \Beta\Microsoft\Graph\Model\PhysicalAddress|null The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "\Beta\Microsoft\Graph\Model\PhysicalAddress") || is_null($this->_propDict["address"])) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new \Beta\Microsoft\Graph\Model\PhysicalAddress($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }

    /**
    * Sets the address
    *
    * @param \Beta\Microsoft\Graph\Model\PhysicalAddress $val The value to assign to the address
    *
    * @return SslCertificateEntity The SslCertificateEntity
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
         return $this;
    }
    /**
    * Gets the alternateNames
    *
    * @return string|null The alternateNames
    */
    public function getAlternateNames()
    {
        if (array_key_exists("alternateNames", $this->_propDict)) {
            return $this->_propDict["alternateNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternateNames
    *
    * @param string $val The value of the alternateNames
    *
    * @return SslCertificateEntity
    */
    public function setAlternateNames($val)
    {
        $this->_propDict["alternateNames"] = $val;
        return $this;
    }
    /**
    * Gets the commonName
    *
    * @return string|null The commonName
    */
    public function getCommonName()
    {
        if (array_key_exists("commonName", $this->_propDict)) {
            return $this->_propDict["commonName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the commonName
    *
    * @param string $val The value of the commonName
    *
    * @return SslCertificateEntity
    */
    public function setCommonName($val)
    {
        $this->_propDict["commonName"] = $val;
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
    * @param string $val The value of the email
    *
    * @return SslCertificateEntity
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    /**
    * Gets the givenName
    *
    * @return string|null The givenName
    */
    public function getGivenName()
    {
        if (array_key_exists("givenName", $this->_propDict)) {
            return $this->_propDict["givenName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the givenName
    *
    * @param string $val The value of the givenName
    *
    * @return SslCertificateEntity
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    /**
    * Gets the organizationName
    *
    * @return string|null The organizationName
    */
    public function getOrganizationName()
    {
        if (array_key_exists("organizationName", $this->_propDict)) {
            return $this->_propDict["organizationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organizationName
    *
    * @param string $val The value of the organizationName
    *
    * @return SslCertificateEntity
    */
    public function setOrganizationName($val)
    {
        $this->_propDict["organizationName"] = $val;
        return $this;
    }
    /**
    * Gets the organizationUnitName
    *
    * @return string|null The organizationUnitName
    */
    public function getOrganizationUnitName()
    {
        if (array_key_exists("organizationUnitName", $this->_propDict)) {
            return $this->_propDict["organizationUnitName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organizationUnitName
    *
    * @param string $val The value of the organizationUnitName
    *
    * @return SslCertificateEntity
    */
    public function setOrganizationUnitName($val)
    {
        $this->_propDict["organizationUnitName"] = $val;
        return $this;
    }
    /**
    * Gets the serialNumber
    *
    * @return string|null The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serialNumber
    *
    * @param string $val The value of the serialNumber
    *
    * @return SslCertificateEntity
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    /**
    * Gets the surname
    *
    * @return string|null The surname
    */
    public function getSurname()
    {
        if (array_key_exists("surname", $this->_propDict)) {
            return $this->_propDict["surname"];
        } else {
            return null;
        }
    }

    /**
    * Sets the surname
    *
    * @param string $val The value of the surname
    *
    * @return SslCertificateEntity
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
}
