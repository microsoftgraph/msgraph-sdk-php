<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityVendorInformation File
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
* SecurityVendorInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SecurityVendorInformation extends Entity
{
    /**
    * Gets the provider
    *
    * @return string The provider
    */
    public function getProvider()
    {
        if (array_key_exists("provider", $this->_propDict)) {
            return $this->_propDict["provider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provider
    *
    * @param string $val The value of the provider
    *
    * @return SecurityVendorInformation
    */
    public function setProvider($val)
    {
        $this->_propDict["provider"] = $val;
        return $this;
    }
    /**
    * Gets the providerVersion
    *
    * @return string The providerVersion
    */
    public function getProviderVersion()
    {
        if (array_key_exists("providerVersion", $this->_propDict)) {
            return $this->_propDict["providerVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the providerVersion
    *
    * @param string $val The value of the providerVersion
    *
    * @return SecurityVendorInformation
    */
    public function setProviderVersion($val)
    {
        $this->_propDict["providerVersion"] = $val;
        return $this;
    }
    /**
    * Gets the subProvider
    *
    * @return string The subProvider
    */
    public function getSubProvider()
    {
        if (array_key_exists("subProvider", $this->_propDict)) {
            return $this->_propDict["subProvider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subProvider
    *
    * @param string $val The value of the subProvider
    *
    * @return SecurityVendorInformation
    */
    public function setSubProvider($val)
    {
        $this->_propDict["subProvider"] = $val;
        return $this;
    }
    /**
    * Gets the vendor
    *
    * @return string The vendor
    */
    public function getVendor()
    {
        if (array_key_exists("vendor", $this->_propDict)) {
            return $this->_propDict["vendor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vendor
    *
    * @param string $val The value of the vendor
    *
    * @return SecurityVendorInformation
    */
    public function setVendor($val)
    {
        $this->_propDict["vendor"] = $val;
        return $this;
    }
}
