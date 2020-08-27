<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LogonUser File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* LogonUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LogonUser extends Entity
{
    /**
    * Gets the accountDomain
    *
    * @return string The accountDomain
    */
    public function getAccountDomain()
    {
        if (array_key_exists("accountDomain", $this->_propDict)) {
            return $this->_propDict["accountDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountDomain
    *
    * @param string $val The value of the accountDomain
    *
    * @return LogonUser
    */
    public function setAccountDomain($val)
    {
        $this->_propDict["accountDomain"] = $val;
        return $this;
    }
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
    * @return LogonUser
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }

    /**
    * Gets the accountType
    *
    * @return UserAccountSecurityType The accountType
    */
    public function getAccountType()
    {
        if (array_key_exists("accountType", $this->_propDict)) {
            if (is_a($this->_propDict["accountType"], "Beta\Microsoft\Graph\Model\UserAccountSecurityType")) {
                return $this->_propDict["accountType"];
            } else {
                $this->_propDict["accountType"] = new UserAccountSecurityType($this->_propDict["accountType"]);
                return $this->_propDict["accountType"];
            }
        }
        return null;
    }

    /**
    * Sets the accountType
    *
    * @param UserAccountSecurityType $val The value to assign to the accountType
    *
    * @return LogonUser The LogonUser
    */
    public function setAccountType($val)
    {
        $this->_propDict["accountType"] = $val;
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
    * @param \DateTime $val The value to assign to the firstSeenDateTime
    *
    * @return LogonUser The LogonUser
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
    * @param \DateTime $val The value to assign to the lastSeenDateTime
    *
    * @return LogonUser The LogonUser
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
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
    * @return LogonUser
    */
    public function setLogonId($val)
    {
        $this->_propDict["logonId"] = $val;
        return $this;
    }

    /**
    * Gets the logonTypes
    *
    * @return LogonType The logonTypes
    */
    public function getLogonTypes()
    {
        if (array_key_exists("logonTypes", $this->_propDict)) {
            if (is_a($this->_propDict["logonTypes"], "Beta\Microsoft\Graph\Model\LogonType")) {
                return $this->_propDict["logonTypes"];
            } else {
                $this->_propDict["logonTypes"] = new LogonType($this->_propDict["logonTypes"]);
                return $this->_propDict["logonTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the logonTypes
    *
    * @param LogonType $val The value to assign to the logonTypes
    *
    * @return LogonUser The LogonUser
    */
    public function setLogonTypes($val)
    {
        $this->_propDict["logonTypes"] = $val;
         return $this;
    }
}
