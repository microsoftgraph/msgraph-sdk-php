<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppTokenLicenseSummary File
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
* VppTokenLicenseSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class VppTokenLicenseSummary extends Entity
{
    /**
    * Gets the vppTokenId
    *
    * @return string The vppTokenId
    */
    public function getVppTokenId()
    {
        if (array_key_exists("vppTokenId", $this->_propDict)) {
            return $this->_propDict["vppTokenId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vppTokenId
    *
    * @param string $val The value of the vppTokenId
    *
    * @return VppTokenLicenseSummary
    */
    public function setVppTokenId($val)
    {
        $this->_propDict["vppTokenId"] = $val;
        return $this;
    }
    /**
    * Gets the appleId
    *
    * @return string The appleId
    */
    public function getAppleId()
    {
        if (array_key_exists("appleId", $this->_propDict)) {
            return $this->_propDict["appleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appleId
    *
    * @param string $val The value of the appleId
    *
    * @return VppTokenLicenseSummary
    */
    public function setAppleId($val)
    {
        $this->_propDict["appleId"] = $val;
        return $this;
    }
    /**
    * Gets the organizationName
    *
    * @return string The organizationName
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
    * @return VppTokenLicenseSummary
    */
    public function setOrganizationName($val)
    {
        $this->_propDict["organizationName"] = $val;
        return $this;
    }
    /**
    * Gets the availableLicenseCount
    *
    * @return int The availableLicenseCount
    */
    public function getAvailableLicenseCount()
    {
        if (array_key_exists("availableLicenseCount", $this->_propDict)) {
            return $this->_propDict["availableLicenseCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the availableLicenseCount
    *
    * @param int $val The value of the availableLicenseCount
    *
    * @return VppTokenLicenseSummary
    */
    public function setAvailableLicenseCount($val)
    {
        $this->_propDict["availableLicenseCount"] = $val;
        return $this;
    }
    /**
    * Gets the usedLicenseCount
    *
    * @return int The usedLicenseCount
    */
    public function getUsedLicenseCount()
    {
        if (array_key_exists("usedLicenseCount", $this->_propDict)) {
            return $this->_propDict["usedLicenseCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usedLicenseCount
    *
    * @param int $val The value of the usedLicenseCount
    *
    * @return VppTokenLicenseSummary
    */
    public function setUsedLicenseCount($val)
    {
        $this->_propDict["usedLicenseCount"] = $val;
        return $this;
    }
}
