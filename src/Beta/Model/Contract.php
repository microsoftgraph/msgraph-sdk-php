<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Contract File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* Contract class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Contract extends DirectoryObject
{
    /**
    * Gets the contractType
    *
    * @return string The contractType
    */
    public function getContractType()
    {
        if (array_key_exists("contractType", $this->_propDict)) {
            return $this->_propDict["contractType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contractType
    *
    * @param string $val The contractType
    *
    * @return Contract
    */
    public function setContractType($val)
    {
        $this->_propDict["contractType"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerId
    *
    * @return string The customerId
    */
    public function getCustomerId()
    {
        if (array_key_exists("customerId", $this->_propDict)) {
            return $this->_propDict["customerId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerId
    *
    * @param string $val The customerId
    *
    * @return Contract
    */
    public function setCustomerId($val)
    {
        $this->_propDict["customerId"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultDomainName
    *
    * @return string The defaultDomainName
    */
    public function getDefaultDomainName()
    {
        if (array_key_exists("defaultDomainName", $this->_propDict)) {
            return $this->_propDict["defaultDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultDomainName
    *
    * @param string $val The defaultDomainName
    *
    * @return Contract
    */
    public function setDefaultDomainName($val)
    {
        $this->_propDict["defaultDomainName"] = $val;
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
    * @return Contract
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
}