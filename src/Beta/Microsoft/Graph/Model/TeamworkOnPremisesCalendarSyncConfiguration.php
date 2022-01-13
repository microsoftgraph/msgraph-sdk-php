<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkOnPremisesCalendarSyncConfiguration File
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
* TeamworkOnPremisesCalendarSyncConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkOnPremisesCalendarSyncConfiguration extends Entity
{
    /**
    * Gets the domain
    *
    * @return string|null The domain
    */
    public function getDomain()
    {
        if (array_key_exists("domain", $this->_propDict)) {
            return $this->_propDict["domain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domain
    *
    * @param string $val The value of the domain
    *
    * @return TeamworkOnPremisesCalendarSyncConfiguration
    */
    public function setDomain($val)
    {
        $this->_propDict["domain"] = $val;
        return $this;
    }
    /**
    * Gets the domainUserName
    *
    * @return string|null The domainUserName
    */
    public function getDomainUserName()
    {
        if (array_key_exists("domainUserName", $this->_propDict)) {
            return $this->_propDict["domainUserName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainUserName
    *
    * @param string $val The value of the domainUserName
    *
    * @return TeamworkOnPremisesCalendarSyncConfiguration
    */
    public function setDomainUserName($val)
    {
        $this->_propDict["domainUserName"] = $val;
        return $this;
    }
    /**
    * Gets the smtpAddress
    *
    * @return string|null The smtpAddress
    */
    public function getSmtpAddress()
    {
        if (array_key_exists("smtpAddress", $this->_propDict)) {
            return $this->_propDict["smtpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smtpAddress
    *
    * @param string $val The value of the smtpAddress
    *
    * @return TeamworkOnPremisesCalendarSyncConfiguration
    */
    public function setSmtpAddress($val)
    {
        $this->_propDict["smtpAddress"] = $val;
        return $this;
    }
}
