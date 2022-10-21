<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtectionConfigurations File
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
* InformationProtectionConfigurations class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtectionConfigurations extends Entity
{

    /**
    * Gets the endpoint
    *
    * @return InformationProtectionConfiguration|null The endpoint
    */
    public function getEndpoint()
    {
        if (array_key_exists("endpoint", $this->_propDict)) {
            if (is_a($this->_propDict["endpoint"], "\Beta\Microsoft\Graph\Model\InformationProtectionConfiguration") || is_null($this->_propDict["endpoint"])) {
                return $this->_propDict["endpoint"];
            } else {
                $this->_propDict["endpoint"] = new InformationProtectionConfiguration($this->_propDict["endpoint"]);
                return $this->_propDict["endpoint"];
            }
        }
        return null;
    }

    /**
    * Sets the endpoint
    *
    * @param InformationProtectionConfiguration $val The value to assign to the endpoint
    *
    * @return InformationProtectionConfigurations The InformationProtectionConfigurations
    */
    public function setEndpoint($val)
    {
        $this->_propDict["endpoint"] = $val;
         return $this;
    }

    /**
    * Gets the exchange
    *
    * @return InformationProtectionConfiguration|null The exchange
    */
    public function getExchange()
    {
        if (array_key_exists("exchange", $this->_propDict)) {
            if (is_a($this->_propDict["exchange"], "\Beta\Microsoft\Graph\Model\InformationProtectionConfiguration") || is_null($this->_propDict["exchange"])) {
                return $this->_propDict["exchange"];
            } else {
                $this->_propDict["exchange"] = new InformationProtectionConfiguration($this->_propDict["exchange"]);
                return $this->_propDict["exchange"];
            }
        }
        return null;
    }

    /**
    * Sets the exchange
    *
    * @param InformationProtectionConfiguration $val The value to assign to the exchange
    *
    * @return InformationProtectionConfigurations The InformationProtectionConfigurations
    */
    public function setExchange($val)
    {
        $this->_propDict["exchange"] = $val;
         return $this;
    }

    /**
    * Gets the oneDrive
    *
    * @return InformationProtectionConfiguration|null The oneDrive
    */
    public function getOneDrive()
    {
        if (array_key_exists("oneDrive", $this->_propDict)) {
            if (is_a($this->_propDict["oneDrive"], "\Beta\Microsoft\Graph\Model\InformationProtectionConfiguration") || is_null($this->_propDict["oneDrive"])) {
                return $this->_propDict["oneDrive"];
            } else {
                $this->_propDict["oneDrive"] = new InformationProtectionConfiguration($this->_propDict["oneDrive"]);
                return $this->_propDict["oneDrive"];
            }
        }
        return null;
    }

    /**
    * Sets the oneDrive
    *
    * @param InformationProtectionConfiguration $val The value to assign to the oneDrive
    *
    * @return InformationProtectionConfigurations The InformationProtectionConfigurations
    */
    public function setOneDrive($val)
    {
        $this->_propDict["oneDrive"] = $val;
         return $this;
    }

    /**
    * Gets the sharePoint
    *
    * @return InformationProtectionConfiguration|null The sharePoint
    */
    public function getSharePoint()
    {
        if (array_key_exists("sharePoint", $this->_propDict)) {
            if (is_a($this->_propDict["sharePoint"], "\Beta\Microsoft\Graph\Model\InformationProtectionConfiguration") || is_null($this->_propDict["sharePoint"])) {
                return $this->_propDict["sharePoint"];
            } else {
                $this->_propDict["sharePoint"] = new InformationProtectionConfiguration($this->_propDict["sharePoint"]);
                return $this->_propDict["sharePoint"];
            }
        }
        return null;
    }

    /**
    * Sets the sharePoint
    *
    * @param InformationProtectionConfiguration $val The value to assign to the sharePoint
    *
    * @return InformationProtectionConfigurations The InformationProtectionConfigurations
    */
    public function setSharePoint($val)
    {
        $this->_propDict["sharePoint"] = $val;
         return $this;
    }

    /**
    * Gets the teams
    *
    * @return InformationProtectionConfiguration|null The teams
    */
    public function getTeams()
    {
        if (array_key_exists("teams", $this->_propDict)) {
            if (is_a($this->_propDict["teams"], "\Beta\Microsoft\Graph\Model\InformationProtectionConfiguration") || is_null($this->_propDict["teams"])) {
                return $this->_propDict["teams"];
            } else {
                $this->_propDict["teams"] = new InformationProtectionConfiguration($this->_propDict["teams"]);
                return $this->_propDict["teams"];
            }
        }
        return null;
    }

    /**
    * Sets the teams
    *
    * @param InformationProtectionConfiguration $val The value to assign to the teams
    *
    * @return InformationProtectionConfigurations The InformationProtectionConfigurations
    */
    public function setTeams($val)
    {
        $this->_propDict["teams"] = $val;
         return $this;
    }
}
