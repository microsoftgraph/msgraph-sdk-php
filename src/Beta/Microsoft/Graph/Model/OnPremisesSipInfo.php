<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesSipInfo File
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
* OnPremisesSipInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesSipInfo extends Entity
{
    /**
    * Gets the isSipEnabled
    *
    * @return bool|null The isSipEnabled
    */
    public function getIsSipEnabled()
    {
        if (array_key_exists("isSipEnabled", $this->_propDict)) {
            return $this->_propDict["isSipEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSipEnabled
    *
    * @param bool $val The value of the isSipEnabled
    *
    * @return OnPremisesSipInfo
    */
    public function setIsSipEnabled($val)
    {
        $this->_propDict["isSipEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the sipDeploymentLocation
    *
    * @return string|null The sipDeploymentLocation
    */
    public function getSipDeploymentLocation()
    {
        if (array_key_exists("sipDeploymentLocation", $this->_propDict)) {
            return $this->_propDict["sipDeploymentLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sipDeploymentLocation
    *
    * @param string $val The value of the sipDeploymentLocation
    *
    * @return OnPremisesSipInfo
    */
    public function setSipDeploymentLocation($val)
    {
        $this->_propDict["sipDeploymentLocation"] = $val;
        return $this;
    }
    /**
    * Gets the sipPrimaryAddress
    *
    * @return string|null The sipPrimaryAddress
    */
    public function getSipPrimaryAddress()
    {
        if (array_key_exists("sipPrimaryAddress", $this->_propDict)) {
            return $this->_propDict["sipPrimaryAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sipPrimaryAddress
    *
    * @param string $val The value of the sipPrimaryAddress
    *
    * @return OnPremisesSipInfo
    */
    public function setSipPrimaryAddress($val)
    {
        $this->_propDict["sipPrimaryAddress"] = $val;
        return $this;
    }
}
