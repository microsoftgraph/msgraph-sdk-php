<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppIdentity File
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
* AppIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AppIdentity extends Entity
{
    /**
    * Gets the appId
    *
    * @return string The appId
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
    * @param string $val The value of the appId
    *
    * @return AppIdentity
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return AppIdentity
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the servicePrincipalId
    *
    * @return string The servicePrincipalId
    */
    public function getServicePrincipalId()
    {
        if (array_key_exists("servicePrincipalId", $this->_propDict)) {
            return $this->_propDict["servicePrincipalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalId
    *
    * @param string $val The value of the servicePrincipalId
    *
    * @return AppIdentity
    */
    public function setServicePrincipalId($val)
    {
        $this->_propDict["servicePrincipalId"] = $val;
        return $this;
    }
    /**
    * Gets the servicePrincipalName
    *
    * @return string The servicePrincipalName
    */
    public function getServicePrincipalName()
    {
        if (array_key_exists("servicePrincipalName", $this->_propDict)) {
            return $this->_propDict["servicePrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalName
    *
    * @param string $val The value of the servicePrincipalName
    *
    * @return AppIdentity
    */
    public function setServicePrincipalName($val)
    {
        $this->_propDict["servicePrincipalName"] = $val;
        return $this;
    }
}
