<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosSingleSignOnSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* IosSingleSignOnSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosSingleSignOnSettings extends Entity
{

    /**
    * Gets the allowedAppsList
    *
    * @return AppListItem The allowedAppsList
    */
    public function getAllowedAppsList()
    {
        if (array_key_exists("allowedAppsList", $this->_propDict)) {
            if (is_a($this->_propDict["allowedAppsList"], "Microsoft\Graph\Beta\Model\AppListItem")) {
                return $this->_propDict["allowedAppsList"];
            } else {
                $this->_propDict["allowedAppsList"] = new AppListItem($this->_propDict["allowedAppsList"]);
                return $this->_propDict["allowedAppsList"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedAppsList
    *
    * @param AppListItem $val The value to assign to the allowedAppsList
    *
    * @return IosSingleSignOnSettings The IosSingleSignOnSettings
    */
    public function setAllowedAppsList($val)
    {
        $this->_propDict["allowedAppsList"] = $val;
         return $this;
    }
    /**
    * Gets the allowedUrls
    *
    * @return string The allowedUrls
    */
    public function getAllowedUrls()
    {
        if (array_key_exists("allowedUrls", $this->_propDict)) {
            return $this->_propDict["allowedUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedUrls
    *
    * @param string $val The value of the allowedUrls
    *
    * @return IosSingleSignOnSettings
    */
    public function setAllowedUrls($val)
    {
        $this->_propDict["allowedUrls"] = $val;
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
    * @return IosSingleSignOnSettings
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the kerberosPrincipalName
    *
    * @return string The kerberosPrincipalName
    */
    public function getKerberosPrincipalName()
    {
        if (array_key_exists("kerberosPrincipalName", $this->_propDict)) {
            return $this->_propDict["kerberosPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kerberosPrincipalName
    *
    * @param string $val The value of the kerberosPrincipalName
    *
    * @return IosSingleSignOnSettings
    */
    public function setKerberosPrincipalName($val)
    {
        $this->_propDict["kerberosPrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the kerberosRealm
    *
    * @return string The kerberosRealm
    */
    public function getKerberosRealm()
    {
        if (array_key_exists("kerberosRealm", $this->_propDict)) {
            return $this->_propDict["kerberosRealm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kerberosRealm
    *
    * @param string $val The value of the kerberosRealm
    *
    * @return IosSingleSignOnSettings
    */
    public function setKerberosRealm($val)
    {
        $this->_propDict["kerberosRealm"] = $val;
        return $this;
    }
}
