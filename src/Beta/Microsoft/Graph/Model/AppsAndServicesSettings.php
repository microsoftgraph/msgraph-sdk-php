<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppsAndServicesSettings File
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
* AppsAndServicesSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppsAndServicesSettings extends Entity
{
    /**
    * Gets the isAppAndServicesTrialEnabled
    *
    * @return bool|null The isAppAndServicesTrialEnabled
    */
    public function getIsAppAndServicesTrialEnabled()
    {
        if (array_key_exists("isAppAndServicesTrialEnabled", $this->_propDict)) {
            return $this->_propDict["isAppAndServicesTrialEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAppAndServicesTrialEnabled
    *
    * @param bool $val The value of the isAppAndServicesTrialEnabled
    *
    * @return AppsAndServicesSettings
    */
    public function setIsAppAndServicesTrialEnabled($val)
    {
        $this->_propDict["isAppAndServicesTrialEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isOfficeStoreEnabled
    *
    * @return bool|null The isOfficeStoreEnabled
    */
    public function getIsOfficeStoreEnabled()
    {
        if (array_key_exists("isOfficeStoreEnabled", $this->_propDict)) {
            return $this->_propDict["isOfficeStoreEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOfficeStoreEnabled
    *
    * @param bool $val The value of the isOfficeStoreEnabled
    *
    * @return AppsAndServicesSettings
    */
    public function setIsOfficeStoreEnabled($val)
    {
        $this->_propDict["isOfficeStoreEnabled"] = $val;
        return $this;
    }
}
