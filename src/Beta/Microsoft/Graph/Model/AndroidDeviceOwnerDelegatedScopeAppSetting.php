<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerDelegatedScopeAppSetting File
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
* AndroidDeviceOwnerDelegatedScopeAppSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerDelegatedScopeAppSetting extends Entity
{

    /**
    * Gets the appDetail
    * Information about the app like Name, AppStoreUrl, Publisher and AppId
    *
    * @return AppListItem|null The appDetail
    */
    public function getAppDetail()
    {
        if (array_key_exists("appDetail", $this->_propDict)) {
            if (is_a($this->_propDict["appDetail"], "\Beta\Microsoft\Graph\Model\AppListItem") || is_null($this->_propDict["appDetail"])) {
                return $this->_propDict["appDetail"];
            } else {
                $this->_propDict["appDetail"] = new AppListItem($this->_propDict["appDetail"]);
                return $this->_propDict["appDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the appDetail
    * Information about the app like Name, AppStoreUrl, Publisher and AppId
    *
    * @param AppListItem $val The value to assign to the appDetail
    *
    * @return AndroidDeviceOwnerDelegatedScopeAppSetting The AndroidDeviceOwnerDelegatedScopeAppSetting
    */
    public function setAppDetail($val)
    {
        $this->_propDict["appDetail"] = $val;
         return $this;
    }

    /**
    * Gets the appScopes
    * List of scopes an app has been assigned.
    *
    * @return AndroidDeviceOwnerDelegatedAppScopeType|null The appScopes
    */
    public function getAppScopes()
    {
        if (array_key_exists("appScopes", $this->_propDict)) {
            if (is_a($this->_propDict["appScopes"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerDelegatedAppScopeType") || is_null($this->_propDict["appScopes"])) {
                return $this->_propDict["appScopes"];
            } else {
                $this->_propDict["appScopes"] = new AndroidDeviceOwnerDelegatedAppScopeType($this->_propDict["appScopes"]);
                return $this->_propDict["appScopes"];
            }
        }
        return null;
    }

    /**
    * Sets the appScopes
    * List of scopes an app has been assigned.
    *
    * @param AndroidDeviceOwnerDelegatedAppScopeType $val The value to assign to the appScopes
    *
    * @return AndroidDeviceOwnerDelegatedScopeAppSetting The AndroidDeviceOwnerDelegatedScopeAppSetting
    */
    public function setAppScopes($val)
    {
        $this->_propDict["appScopes"] = $val;
         return $this;
    }
}
