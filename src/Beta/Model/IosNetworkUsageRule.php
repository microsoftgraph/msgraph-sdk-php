<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosNetworkUsageRule File
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
* IosNetworkUsageRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosNetworkUsageRule extends Entity
{

    /**
    * Gets the managedApps
    *
    * @return AppListItem The managedApps
    */
    public function getManagedApps()
    {
        if (array_key_exists("managedApps", $this->_propDict)) {
            if (is_a($this->_propDict["managedApps"], "Microsoft\Graph\Beta\Model\AppListItem")) {
                return $this->_propDict["managedApps"];
            } else {
                $this->_propDict["managedApps"] = new AppListItem($this->_propDict["managedApps"]);
                return $this->_propDict["managedApps"];
            }
        }
        return null;
    }

    /**
    * Sets the managedApps
    *
    * @param AppListItem $val The value to assign to the managedApps
    *
    * @return IosNetworkUsageRule The IosNetworkUsageRule
    */
    public function setManagedApps($val)
    {
        $this->_propDict["managedApps"] = $val;
         return $this;
    }
    /**
    * Gets the cellularDataBlockWhenRoaming
    *
    * @return bool The cellularDataBlockWhenRoaming
    */
    public function getCellularDataBlockWhenRoaming()
    {
        if (array_key_exists("cellularDataBlockWhenRoaming", $this->_propDict)) {
            return $this->_propDict["cellularDataBlockWhenRoaming"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cellularDataBlockWhenRoaming
    *
    * @param bool $val The value of the cellularDataBlockWhenRoaming
    *
    * @return IosNetworkUsageRule
    */
    public function setCellularDataBlockWhenRoaming($val)
    {
        $this->_propDict["cellularDataBlockWhenRoaming"] = $val;
        return $this;
    }
    /**
    * Gets the cellularDataBlocked
    *
    * @return bool The cellularDataBlocked
    */
    public function getCellularDataBlocked()
    {
        if (array_key_exists("cellularDataBlocked", $this->_propDict)) {
            return $this->_propDict["cellularDataBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cellularDataBlocked
    *
    * @param bool $val The value of the cellularDataBlocked
    *
    * @return IosNetworkUsageRule
    */
    public function setCellularDataBlocked($val)
    {
        $this->_propDict["cellularDataBlocked"] = $val;
        return $this;
    }
}
