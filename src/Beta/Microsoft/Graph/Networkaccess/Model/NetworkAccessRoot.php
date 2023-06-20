<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkAccessRoot File
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
* NetworkAccessRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkAccessRoot extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the logs
    *
    * @return Logs|null The logs
    */
    public function getLogs()
    {
        if (array_key_exists("logs", $this->_propDict)) {
            if (is_a($this->_propDict["logs"], "\Beta\Microsoft\Graph\Networkaccess\Model\Logs") || is_null($this->_propDict["logs"])) {
                return $this->_propDict["logs"];
            } else {
                $this->_propDict["logs"] = new Logs($this->_propDict["logs"]);
                return $this->_propDict["logs"];
            }
        }
        return null;
    }

    /**
    * Sets the logs
    *
    * @param Logs $val The logs
    *
    * @return NetworkAccessRoot
    */
    public function setLogs($val)
    {
        $this->_propDict["logs"] = $val;
        return $this;
    }

    /**
    * Gets the reports
    *
    * @return Reports|null The reports
    */
    public function getReports()
    {
        if (array_key_exists("reports", $this->_propDict)) {
            if (is_a($this->_propDict["reports"], "\Beta\Microsoft\Graph\Networkaccess\Model\Reports") || is_null($this->_propDict["reports"])) {
                return $this->_propDict["reports"];
            } else {
                $this->_propDict["reports"] = new Reports($this->_propDict["reports"]);
                return $this->_propDict["reports"];
            }
        }
        return null;
    }

    /**
    * Sets the reports
    *
    * @param Reports $val The reports
    *
    * @return NetworkAccessRoot
    */
    public function setReports($val)
    {
        $this->_propDict["reports"] = $val;
        return $this;
    }

    /**
    * Gets the connectivity
    *
    * @return Connectivity|null The connectivity
    */
    public function getConnectivity()
    {
        if (array_key_exists("connectivity", $this->_propDict)) {
            if (is_a($this->_propDict["connectivity"], "\Beta\Microsoft\Graph\Networkaccess\Model\Connectivity") || is_null($this->_propDict["connectivity"])) {
                return $this->_propDict["connectivity"];
            } else {
                $this->_propDict["connectivity"] = new Connectivity($this->_propDict["connectivity"]);
                return $this->_propDict["connectivity"];
            }
        }
        return null;
    }

    /**
    * Sets the connectivity
    *
    * @param Connectivity $val The connectivity
    *
    * @return NetworkAccessRoot
    */
    public function setConnectivity($val)
    {
        $this->_propDict["connectivity"] = $val;
        return $this;
    }


     /**
     * Gets the forwardingPolicies
     *
     * @return array|null The forwardingPolicies
     */
    public function getForwardingPolicies()
    {
        if (array_key_exists("forwardingPolicies", $this->_propDict)) {
           return $this->_propDict["forwardingPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the forwardingPolicies
    *
    * @param ForwardingPolicy[] $val The forwardingPolicies
    *
    * @return NetworkAccessRoot
    */
    public function setForwardingPolicies($val)
    {
        $this->_propDict["forwardingPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the forwardingProfiles
     *
     * @return array|null The forwardingProfiles
     */
    public function getForwardingProfiles()
    {
        if (array_key_exists("forwardingProfiles", $this->_propDict)) {
           return $this->_propDict["forwardingProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the forwardingProfiles
    *
    * @param ForwardingProfile[] $val The forwardingProfiles
    *
    * @return NetworkAccessRoot
    */
    public function setForwardingProfiles($val)
    {
        $this->_propDict["forwardingProfiles"] = $val;
        return $this;
    }

    /**
    * Gets the settings
    *
    * @return Settings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Networkaccess\Model\Settings") || is_null($this->_propDict["settings"])) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new Settings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }

    /**
    * Sets the settings
    *
    * @param Settings $val The settings
    *
    * @return NetworkAccessRoot
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }

    /**
    * Gets the tenantStatus
    *
    * @return TenantStatus|null The tenantStatus
    */
    public function getTenantStatus()
    {
        if (array_key_exists("tenantStatus", $this->_propDict)) {
            if (is_a($this->_propDict["tenantStatus"], "\Beta\Microsoft\Graph\Networkaccess\Model\TenantStatus") || is_null($this->_propDict["tenantStatus"])) {
                return $this->_propDict["tenantStatus"];
            } else {
                $this->_propDict["tenantStatus"] = new TenantStatus($this->_propDict["tenantStatus"]);
                return $this->_propDict["tenantStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the tenantStatus
    *
    * @param TenantStatus $val The tenantStatus
    *
    * @return NetworkAccessRoot
    */
    public function setTenantStatus($val)
    {
        $this->_propDict["tenantStatus"] = $val;
        return $this;
    }

}
