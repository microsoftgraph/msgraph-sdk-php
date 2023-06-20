<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrichedAuditLogs File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

/**
* EnrichedAuditLogs class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnrichedAuditLogs extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the exchange
    *
    * @return EnrichedAuditLogsSettings|null The exchange
    */
    public function getExchange()
    {
        if (array_key_exists("exchange", $this->_propDict)) {
            if (is_a($this->_propDict["exchange"], "\Beta\Microsoft\Graph\Networkaccess\Model\EnrichedAuditLogsSettings") || is_null($this->_propDict["exchange"])) {
                return $this->_propDict["exchange"];
            } else {
                $this->_propDict["exchange"] = new EnrichedAuditLogsSettings($this->_propDict["exchange"]);
                return $this->_propDict["exchange"];
            }
        }
        return null;
    }

    /**
    * Sets the exchange
    *
    * @param EnrichedAuditLogsSettings $val The exchange
    *
    * @return EnrichedAuditLogs
    */
    public function setExchange($val)
    {
        $this->_propDict["exchange"] = $val;
        return $this;
    }

    /**
    * Gets the sharepoint
    *
    * @return EnrichedAuditLogsSettings|null The sharepoint
    */
    public function getSharepoint()
    {
        if (array_key_exists("sharepoint", $this->_propDict)) {
            if (is_a($this->_propDict["sharepoint"], "\Beta\Microsoft\Graph\Networkaccess\Model\EnrichedAuditLogsSettings") || is_null($this->_propDict["sharepoint"])) {
                return $this->_propDict["sharepoint"];
            } else {
                $this->_propDict["sharepoint"] = new EnrichedAuditLogsSettings($this->_propDict["sharepoint"]);
                return $this->_propDict["sharepoint"];
            }
        }
        return null;
    }

    /**
    * Sets the sharepoint
    *
    * @param EnrichedAuditLogsSettings $val The sharepoint
    *
    * @return EnrichedAuditLogs
    */
    public function setSharepoint($val)
    {
        $this->_propDict["sharepoint"] = $val;
        return $this;
    }

    /**
    * Gets the teams
    *
    * @return EnrichedAuditLogsSettings|null The teams
    */
    public function getTeams()
    {
        if (array_key_exists("teams", $this->_propDict)) {
            if (is_a($this->_propDict["teams"], "\Beta\Microsoft\Graph\Networkaccess\Model\EnrichedAuditLogsSettings") || is_null($this->_propDict["teams"])) {
                return $this->_propDict["teams"];
            } else {
                $this->_propDict["teams"] = new EnrichedAuditLogsSettings($this->_propDict["teams"]);
                return $this->_propDict["teams"];
            }
        }
        return null;
    }

    /**
    * Sets the teams
    *
    * @param EnrichedAuditLogsSettings $val The teams
    *
    * @return EnrichedAuditLogs
    */
    public function setTeams($val)
    {
        $this->_propDict["teams"] = $val;
        return $this;
    }

}
