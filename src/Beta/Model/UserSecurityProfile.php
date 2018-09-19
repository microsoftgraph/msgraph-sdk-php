<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSecurityProfile File
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
* UserSecurityProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserSecurityProfile extends Entity
{
    /**
    * Gets the aadUserDisplayName
    *
    * @return string The aadUserDisplayName
    */
    public function getAadUserDisplayName()
    {
        if (array_key_exists("aadUserDisplayName", $this->_propDict)) {
            return $this->_propDict["aadUserDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the aadUserDisplayName
    *
    * @param string $val The aadUserDisplayName
    *
    * @return UserSecurityProfile
    */
    public function setAadUserDisplayName($val)
    {
        $this->_propDict["aadUserDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the aadUserId
    *
    * @return string The aadUserId
    */
    public function getAadUserId()
    {
        if (array_key_exists("aadUserId", $this->_propDict)) {
            return $this->_propDict["aadUserId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the aadUserId
    *
    * @param string $val The aadUserId
    *
    * @return UserSecurityProfile
    */
    public function setAadUserId($val)
    {
        $this->_propDict["aadUserId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accountAliases
     *
     * @return array The accountAliases
     */
    public function getAccountAliases()
    {
        if (array_key_exists("accountAliases", $this->_propDict)) {
           return $this->_propDict["accountAliases"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accountAliases
    *
    * @param AccountAlias $val The accountAliases
    *
    * @return UserSecurityProfile
    */
    public function setAccountAliases($val)
    {
		$this->_propDict["accountAliases"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountInstance
    *
    * @return int The accountInstance
    */
    public function getAccountInstance()
    {
        if (array_key_exists("accountInstance", $this->_propDict)) {
            return $this->_propDict["accountInstance"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountInstance
    *
    * @param int $val The accountInstance
    *
    * @return UserSecurityProfile
    */
    public function setAccountInstance($val)
    {
        $this->_propDict["accountInstance"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the accountService
    *
    * @return string The accountService
    */
    public function getAccountService()
    {
        if (array_key_exists("accountService", $this->_propDict)) {
            return $this->_propDict["accountService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountService
    *
    * @param string $val The accountService
    *
    * @return UserSecurityProfile
    */
    public function setAccountService($val)
    {
        $this->_propDict["accountService"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountStatus
    *
    * @return AccountStatus The accountStatus
    */
    public function getAccountStatus()
    {
        if (array_key_exists("accountStatus", $this->_propDict)) {
            if (is_a($this->_propDict["accountStatus"], "Microsoft\Graph\Beta\Model\AccountStatus")) {
                return $this->_propDict["accountStatus"];
            } else {
                $this->_propDict["accountStatus"] = new AccountStatus($this->_propDict["accountStatus"]);
                return $this->_propDict["accountStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accountStatus
    *
    * @param AccountStatus $val The accountStatus
    *
    * @return UserSecurityProfile
    */
    public function setAccountStatus($val)
    {
        $this->_propDict["accountStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureSubscriptionId
    *
    * @return string The azureSubscriptionId
    */
    public function getAzureSubscriptionId()
    {
        if (array_key_exists("azureSubscriptionId", $this->_propDict)) {
            return $this->_propDict["azureSubscriptionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureSubscriptionId
    *
    * @param string $val The azureSubscriptionId
    *
    * @return UserSecurityProfile
    */
    public function setAzureSubscriptionId($val)
    {
        $this->_propDict["azureSubscriptionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureTenantId
    *
    * @return string The azureTenantId
    */
    public function getAzureTenantId()
    {
        if (array_key_exists("azureTenantId", $this->_propDict)) {
            return $this->_propDict["azureTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureTenantId
    *
    * @param string $val The azureTenantId
    *
    * @return UserSecurityProfile
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the domainName
    *
    * @return string The domainName
    */
    public function getDomainName()
    {
        if (array_key_exists("domainName", $this->_propDict)) {
            return $this->_propDict["domainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the domainName
    *
    * @param string $val The domainName
    *
    * @return UserSecurityProfile
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the firstSeenDateTime
    *
    * @return \DateTime The firstSeenDateTime
    */
    public function getFirstSeenDateTime()
    {
        if (array_key_exists("firstSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstSeenDateTime"], "\DateTime")) {
                return $this->_propDict["firstSeenDateTime"];
            } else {
                $this->_propDict["firstSeenDateTime"] = new \DateTime($this->_propDict["firstSeenDateTime"]);
                return $this->_propDict["firstSeenDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firstSeenDateTime
    *
    * @param \DateTime $val The firstSeenDateTime
    *
    * @return UserSecurityProfile
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSeenDateTime
    *
    * @return \DateTime The lastSeenDateTime
    */
    public function getLastSeenDateTime()
    {
        if (array_key_exists("lastSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSeenDateTime"], "\DateTime")) {
                return $this->_propDict["lastSeenDateTime"];
            } else {
                $this->_propDict["lastSeenDateTime"] = new \DateTime($this->_propDict["lastSeenDateTime"]);
                return $this->_propDict["lastSeenDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSeenDateTime
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return UserSecurityProfile
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastVpnClientIp
    *
    * @return string The lastVpnClientIp
    */
    public function getLastVpnClientIp()
    {
        if (array_key_exists("lastVpnClientIp", $this->_propDict)) {
            return $this->_propDict["lastVpnClientIp"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastVpnClientIp
    *
    * @param string $val The lastVpnClientIp
    *
    * @return UserSecurityProfile
    */
    public function setLastVpnClientIp($val)
    {
        $this->_propDict["lastVpnClientIp"] = $val;
        return $this;
    }
    
    /**
    * Gets the mfaEnabled
    *
    * @return bool The mfaEnabled
    */
    public function getMfaEnabled()
    {
        if (array_key_exists("mfaEnabled", $this->_propDict)) {
            return $this->_propDict["mfaEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mfaEnabled
    *
    * @param bool $val The mfaEnabled
    *
    * @return UserSecurityProfile
    */
    public function setMfaEnabled($val)
    {
        $this->_propDict["mfaEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the riskScore
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the riskScore
    *
    * @param string $val The riskScore
    *
    * @return UserSecurityProfile
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
    
    /**
    * Gets the tags
    *
    * @return string The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    *
    * @param string $val The tags
    *
    * @return UserSecurityProfile
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
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
    * @param string $val The userPrincipalName
    *
    * @return UserSecurityProfile
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the vendorInformation
    *
    * @return SecurityVendorInformation The vendorInformation
    */
    public function getVendorInformation()
    {
        if (array_key_exists("vendorInformation", $this->_propDict)) {
            if (is_a($this->_propDict["vendorInformation"], "Microsoft\Graph\Beta\Model\SecurityVendorInformation")) {
                return $this->_propDict["vendorInformation"];
            } else {
                $this->_propDict["vendorInformation"] = new SecurityVendorInformation($this->_propDict["vendorInformation"]);
                return $this->_propDict["vendorInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vendorInformation
    *
    * @param SecurityVendorInformation $val The vendorInformation
    *
    * @return UserSecurityProfile
    */
    public function setVendorInformation($val)
    {
        $this->_propDict["vendorInformation"] = $val;
        return $this;
    }
    
    /**
    * Gets the vpnClientId
    *
    * @return string The vpnClientId
    */
    public function getVpnClientId()
    {
        if (array_key_exists("vpnClientId", $this->_propDict)) {
            return $this->_propDict["vpnClientId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vpnClientId
    *
    * @param string $val The vpnClientId
    *
    * @return UserSecurityProfile
    */
    public function setVpnClientId($val)
    {
        $this->_propDict["vpnClientId"] = $val;
        return $this;
    }
    
}