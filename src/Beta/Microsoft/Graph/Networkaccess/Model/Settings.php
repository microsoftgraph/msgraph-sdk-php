<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Settings File
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
* Settings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Settings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the conditionalAccess
    *
    * @return ConditionalAccessSettings|null The conditionalAccess
    */
    public function getConditionalAccess()
    {
        if (array_key_exists("conditionalAccess", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccess"], "\Beta\Microsoft\Graph\Networkaccess\Model\ConditionalAccessSettings") || is_null($this->_propDict["conditionalAccess"])) {
                return $this->_propDict["conditionalAccess"];
            } else {
                $this->_propDict["conditionalAccess"] = new ConditionalAccessSettings($this->_propDict["conditionalAccess"]);
                return $this->_propDict["conditionalAccess"];
            }
        }
        return null;
    }

    /**
    * Sets the conditionalAccess
    *
    * @param ConditionalAccessSettings $val The conditionalAccess
    *
    * @return Settings
    */
    public function setConditionalAccess($val)
    {
        $this->_propDict["conditionalAccess"] = $val;
        return $this;
    }

    /**
    * Gets the crossTenantAccess
    *
    * @return CrossTenantAccessSettings|null The crossTenantAccess
    */
    public function getCrossTenantAccess()
    {
        if (array_key_exists("crossTenantAccess", $this->_propDict)) {
            if (is_a($this->_propDict["crossTenantAccess"], "\Beta\Microsoft\Graph\Networkaccess\Model\CrossTenantAccessSettings") || is_null($this->_propDict["crossTenantAccess"])) {
                return $this->_propDict["crossTenantAccess"];
            } else {
                $this->_propDict["crossTenantAccess"] = new CrossTenantAccessSettings($this->_propDict["crossTenantAccess"]);
                return $this->_propDict["crossTenantAccess"];
            }
        }
        return null;
    }

    /**
    * Sets the crossTenantAccess
    *
    * @param CrossTenantAccessSettings $val The crossTenantAccess
    *
    * @return Settings
    */
    public function setCrossTenantAccess($val)
    {
        $this->_propDict["crossTenantAccess"] = $val;
        return $this;
    }

    /**
    * Gets the enrichedAuditLogs
    *
    * @return EnrichedAuditLogs|null The enrichedAuditLogs
    */
    public function getEnrichedAuditLogs()
    {
        if (array_key_exists("enrichedAuditLogs", $this->_propDict)) {
            if (is_a($this->_propDict["enrichedAuditLogs"], "\Beta\Microsoft\Graph\Networkaccess\Model\EnrichedAuditLogs") || is_null($this->_propDict["enrichedAuditLogs"])) {
                return $this->_propDict["enrichedAuditLogs"];
            } else {
                $this->_propDict["enrichedAuditLogs"] = new EnrichedAuditLogs($this->_propDict["enrichedAuditLogs"]);
                return $this->_propDict["enrichedAuditLogs"];
            }
        }
        return null;
    }

    /**
    * Sets the enrichedAuditLogs
    *
    * @param EnrichedAuditLogs $val The enrichedAuditLogs
    *
    * @return Settings
    */
    public function setEnrichedAuditLogs($val)
    {
        $this->_propDict["enrichedAuditLogs"] = $val;
        return $this;
    }

    /**
    * Gets the forwardingOptions
    *
    * @return ForwardingOptions|null The forwardingOptions
    */
    public function getForwardingOptions()
    {
        if (array_key_exists("forwardingOptions", $this->_propDict)) {
            if (is_a($this->_propDict["forwardingOptions"], "\Beta\Microsoft\Graph\Networkaccess\Model\ForwardingOptions") || is_null($this->_propDict["forwardingOptions"])) {
                return $this->_propDict["forwardingOptions"];
            } else {
                $this->_propDict["forwardingOptions"] = new ForwardingOptions($this->_propDict["forwardingOptions"]);
                return $this->_propDict["forwardingOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the forwardingOptions
    *
    * @param ForwardingOptions $val The forwardingOptions
    *
    * @return Settings
    */
    public function setForwardingOptions($val)
    {
        $this->_propDict["forwardingOptions"] = $val;
        return $this;
    }

}
