<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InsightSummary File
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
* InsightSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InsightSummary extends Entity
{
    /**
    * Gets the activeUsers
    *
    * @return int|null The activeUsers
    */
    public function getActiveUsers()
    {
        if (array_key_exists("activeUsers", $this->_propDict)) {
            return $this->_propDict["activeUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeUsers
    *
    * @param int $val The activeUsers
    *
    * @return InsightSummary
    */
    public function setActiveUsers($val)
    {
        $this->_propDict["activeUsers"] = intval($val);
        return $this;
    }

    /**
    * Gets the appId
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    *
    * @param string $val The appId
    *
    * @return InsightSummary
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationCompletions
    *
    * @return int|null The authenticationCompletions
    */
    public function getAuthenticationCompletions()
    {
        if (array_key_exists("authenticationCompletions", $this->_propDict)) {
            return $this->_propDict["authenticationCompletions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationCompletions
    *
    * @param int $val The authenticationCompletions
    *
    * @return InsightSummary
    */
    public function setAuthenticationCompletions($val)
    {
        $this->_propDict["authenticationCompletions"] = intval($val);
        return $this;
    }

    /**
    * Gets the authenticationRequests
    *
    * @return int|null The authenticationRequests
    */
    public function getAuthenticationRequests()
    {
        if (array_key_exists("authenticationRequests", $this->_propDict)) {
            return $this->_propDict["authenticationRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationRequests
    *
    * @param int $val The authenticationRequests
    *
    * @return InsightSummary
    */
    public function setAuthenticationRequests($val)
    {
        $this->_propDict["authenticationRequests"] = intval($val);
        return $this;
    }

    /**
    * Gets the factDate
    *
    * @return \DateTime|null The factDate
    */
    public function getFactDate()
    {
        if (array_key_exists("factDate", $this->_propDict)) {
            if (is_a($this->_propDict["factDate"], "\DateTime") || is_null($this->_propDict["factDate"])) {
                return $this->_propDict["factDate"];
            } else {
                $this->_propDict["factDate"] = new \DateTime($this->_propDict["factDate"]);
                return $this->_propDict["factDate"];
            }
        }
        return null;
    }

    /**
    * Sets the factDate
    *
    * @param \DateTime $val The factDate
    *
    * @return InsightSummary
    */
    public function setFactDate($val)
    {
        $this->_propDict["factDate"] = $val;
        return $this;
    }

    /**
    * Gets the os
    *
    * @return string|null The os
    */
    public function getOs()
    {
        if (array_key_exists("os", $this->_propDict)) {
            return $this->_propDict["os"];
        } else {
            return null;
        }
    }

    /**
    * Sets the os
    *
    * @param string $val The os
    *
    * @return InsightSummary
    */
    public function setOs($val)
    {
        $this->_propDict["os"] = $val;
        return $this;
    }

    /**
    * Gets the securityTextCompletions
    *
    * @return int|null The securityTextCompletions
    */
    public function getSecurityTextCompletions()
    {
        if (array_key_exists("securityTextCompletions", $this->_propDict)) {
            return $this->_propDict["securityTextCompletions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityTextCompletions
    *
    * @param int $val The securityTextCompletions
    *
    * @return InsightSummary
    */
    public function setSecurityTextCompletions($val)
    {
        $this->_propDict["securityTextCompletions"] = intval($val);
        return $this;
    }

    /**
    * Gets the securityTextRequests
    *
    * @return int|null The securityTextRequests
    */
    public function getSecurityTextRequests()
    {
        if (array_key_exists("securityTextRequests", $this->_propDict)) {
            return $this->_propDict["securityTextRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityTextRequests
    *
    * @param int $val The securityTextRequests
    *
    * @return InsightSummary
    */
    public function setSecurityTextRequests($val)
    {
        $this->_propDict["securityTextRequests"] = intval($val);
        return $this;
    }

    /**
    * Gets the securityVoiceCompletions
    *
    * @return int|null The securityVoiceCompletions
    */
    public function getSecurityVoiceCompletions()
    {
        if (array_key_exists("securityVoiceCompletions", $this->_propDict)) {
            return $this->_propDict["securityVoiceCompletions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityVoiceCompletions
    *
    * @param int $val The securityVoiceCompletions
    *
    * @return InsightSummary
    */
    public function setSecurityVoiceCompletions($val)
    {
        $this->_propDict["securityVoiceCompletions"] = intval($val);
        return $this;
    }

    /**
    * Gets the securityVoiceRequests
    *
    * @return int|null The securityVoiceRequests
    */
    public function getSecurityVoiceRequests()
    {
        if (array_key_exists("securityVoiceRequests", $this->_propDict)) {
            return $this->_propDict["securityVoiceRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityVoiceRequests
    *
    * @param int $val The securityVoiceRequests
    *
    * @return InsightSummary
    */
    public function setSecurityVoiceRequests($val)
    {
        $this->_propDict["securityVoiceRequests"] = intval($val);
        return $this;
    }

}
