<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainDnsRecord File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* DomainDnsRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DomainDnsRecord extends Entity
{
    /**
    * Gets the isOptional
    *
    * @return bool The isOptional
    */
    public function getIsOptional()
    {
        if (array_key_exists("isOptional", $this->_propDict)) {
            return $this->_propDict["isOptional"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOptional
    *
    * @param bool $val The isOptional
    *
    * @return DomainDnsRecord
    */
    public function setIsOptional($val)
    {
        $this->_propDict["isOptional"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the label
    *
    * @return string The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the label
    *
    * @param string $val The label
    *
    * @return DomainDnsRecord
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }
    
    /**
    * Gets the recordType
    *
    * @return string The recordType
    */
    public function getRecordType()
    {
        if (array_key_exists("recordType", $this->_propDict)) {
            return $this->_propDict["recordType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recordType
    *
    * @param string $val The recordType
    *
    * @return DomainDnsRecord
    */
    public function setRecordType($val)
    {
        $this->_propDict["recordType"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportedService
    *
    * @return string The supportedService
    */
    public function getSupportedService()
    {
        if (array_key_exists("supportedService", $this->_propDict)) {
            return $this->_propDict["supportedService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportedService
    *
    * @param string $val The supportedService
    *
    * @return DomainDnsRecord
    */
    public function setSupportedService($val)
    {
        $this->_propDict["supportedService"] = $val;
        return $this;
    }
    
    /**
    * Gets the ttl
    *
    * @return int The ttl
    */
    public function getTtl()
    {
        if (array_key_exists("ttl", $this->_propDict)) {
            return $this->_propDict["ttl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ttl
    *
    * @param int $val The ttl
    *
    * @return DomainDnsRecord
    */
    public function setTtl($val)
    {
        $this->_propDict["ttl"] = intval($val);
        return $this;
    }
    
}