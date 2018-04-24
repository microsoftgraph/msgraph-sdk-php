<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSecurityState File
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
* UserSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class UserSecurityState extends Entity
{
    /**
    * Gets the accountName
    *
    * @return string The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountName
    *
    * @param string $val The value of the accountName
    *
    * @return UserSecurityState
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
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
    * @param string $val The value of the domainName
    *
    * @return UserSecurityState
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }

    /**
    * Gets the logonDateTime
    *
    * @return \DateTime The logonDateTime
    */
    public function getLogonDateTime()
    {
        if (array_key_exists("logonDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["logonDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["logonDateTime"];
            } else {
                $this->_propDict["logonDateTime"] = new \DateTime($this->_propDict["logonDateTime"]);
                return $this->_propDict["logonDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the logonDateTime
    *
    * @param \DateTime $val The value to assign to the logonDateTime
    *
    * @return UserSecurityState The UserSecurityState
    */
    public function setLogonDateTime($val)
    {
        $this->_propDict["logonDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the logonId
    *
    * @return string The logonId
    */
    public function getLogonId()
    {
        if (array_key_exists("logonId", $this->_propDict)) {
            return $this->_propDict["logonId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logonId
    *
    * @param string $val The value of the logonId
    *
    * @return UserSecurityState
    */
    public function setLogonId($val)
    {
        $this->_propDict["logonId"] = $val;
        return $this;
    }
    /**
    * Gets the logonIpAddress
    *
    * @return string The logonIpAddress
    */
    public function getLogonIpAddress()
    {
        if (array_key_exists("logonIpAddress", $this->_propDict)) {
            return $this->_propDict["logonIpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logonIpAddress
    *
    * @param string $val The value of the logonIpAddress
    *
    * @return UserSecurityState
    */
    public function setLogonIpAddress($val)
    {
        $this->_propDict["logonIpAddress"] = $val;
        return $this;
    }
    /**
    * Gets the logonLocation
    *
    * @return string The logonLocation
    */
    public function getLogonLocation()
    {
        if (array_key_exists("logonLocation", $this->_propDict)) {
            return $this->_propDict["logonLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logonLocation
    *
    * @param string $val The value of the logonLocation
    *
    * @return UserSecurityState
    */
    public function setLogonLocation($val)
    {
        $this->_propDict["logonLocation"] = $val;
        return $this;
    }

    /**
    * Gets the logonType
    *
    * @return LogonType The logonType
    */
    public function getLogonType()
    {
        if (array_key_exists("logonType", $this->_propDict)) {
            if (is_a($this->_propDict["logonType"], "Microsoft\Graph\Beta\Model\LogonType")) {
                return $this->_propDict["logonType"];
            } else {
                $this->_propDict["logonType"] = new LogonType($this->_propDict["logonType"]);
                return $this->_propDict["logonType"];
            }
        }
        return null;
    }

    /**
    * Sets the logonType
    *
    * @param LogonType $val The value to assign to the logonType
    *
    * @return UserSecurityState The UserSecurityState
    */
    public function setLogonType($val)
    {
        $this->_propDict["logonType"] = $val;
         return $this;
    }
    /**
    * Gets the onPremisesSecurityIdentifier
    *
    * @return string The onPremisesSecurityIdentifier
    */
    public function getOnPremisesSecurityIdentifier()
    {
        if (array_key_exists("onPremisesSecurityIdentifier", $this->_propDict)) {
            return $this->_propDict["onPremisesSecurityIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSecurityIdentifier
    *
    * @param string $val The value of the onPremisesSecurityIdentifier
    *
    * @return UserSecurityState
    */
    public function setOnPremisesSecurityIdentifier($val)
    {
        $this->_propDict["onPremisesSecurityIdentifier"] = $val;
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
    * @param string $val The value of the riskScore
    *
    * @return UserSecurityState
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }

    /**
    * Gets the userAccountType
    *
    * @return UserAccountSecurityType The userAccountType
    */
    public function getUserAccountType()
    {
        if (array_key_exists("userAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["userAccountType"], "Microsoft\Graph\Beta\Model\UserAccountSecurityType")) {
                return $this->_propDict["userAccountType"];
            } else {
                $this->_propDict["userAccountType"] = new UserAccountSecurityType($this->_propDict["userAccountType"]);
                return $this->_propDict["userAccountType"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccountType
    *
    * @param UserAccountSecurityType $val The value to assign to the userAccountType
    *
    * @return UserSecurityState The UserSecurityState
    */
    public function setUserAccountType($val)
    {
        $this->_propDict["userAccountType"] = $val;
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
    * @param string $val The value of the userPrincipalName
    *
    * @return UserSecurityState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
