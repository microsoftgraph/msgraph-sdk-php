<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppIdentity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* AppIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppIdentity extends Entity
{
    /**
    * Gets the appId
    * Refers to the unique ID representing application in Microsoft Entra ID.
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
    * Refers to the unique ID representing application in Microsoft Entra ID.
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
    * Refers to the application name displayed in the Microsoft Entra admin center.
    *
    * @return string|null The displayName
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
    * Refers to the application name displayed in the Microsoft Entra admin center.
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
    * Refers to the unique ID for the service principal in Microsoft Entra ID.
    *
    * @return string|null The servicePrincipalId
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
    * Refers to the unique ID for the service principal in Microsoft Entra ID.
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
    * Refers to the Service Principal Name is the Application name in the tenant.
    *
    * @return string|null The servicePrincipalName
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
    * Refers to the Service Principal Name is the Application name in the tenant.
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
