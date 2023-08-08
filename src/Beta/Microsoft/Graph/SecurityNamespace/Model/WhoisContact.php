<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WhoisContact File
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
* WhoisContact class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WhoisContact extends \Beta\Microsoft\Graph\Model\Entity
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
    * @return WhoisContact The WhoisContact
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
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
    * @return WhoisContact
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    /**
    * Gets the fax
    *
    * @return string|null The fax
    */
    public function getFax()
    {
        if (array_key_exists("fax", $this->_propDict)) {
            return $this->_propDict["fax"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fax
    *
    * @param string $val The value of the fax
    *
    * @return WhoisContact
    */
    public function setFax($val)
    {
        $this->_propDict["fax"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return WhoisContact
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the organization
    *
    * @return string|null The organization
    */
    public function getOrganization()
    {
        if (array_key_exists("organization", $this->_propDict)) {
            return $this->_propDict["organization"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organization
    *
    * @param string $val The value of the organization
    *
    * @return WhoisContact
    */
    public function setOrganization($val)
    {
        $this->_propDict["organization"] = $val;
        return $this;
    }
    /**
    * Gets the telephone
    *
    * @return string|null The telephone
    */
    public function getTelephone()
    {
        if (array_key_exists("telephone", $this->_propDict)) {
            return $this->_propDict["telephone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the telephone
    *
    * @param string $val The value of the telephone
    *
    * @return WhoisContact
    */
    public function setTelephone($val)
    {
        $this->_propDict["telephone"] = $val;
        return $this;
    }
}
