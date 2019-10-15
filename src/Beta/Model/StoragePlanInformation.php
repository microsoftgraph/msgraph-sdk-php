<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StoragePlanInformation File
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
* StoragePlanInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class StoragePlanInformation extends Entity
{
    /**
    * Gets the upgradeAvailable
    *
    * @return bool The upgradeAvailable
    */
    public function getUpgradeAvailable()
    {
        if (array_key_exists("upgradeAvailable", $this->_propDict)) {
            return $this->_propDict["upgradeAvailable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upgradeAvailable
    *
    * @param bool $val The value of the upgradeAvailable
    *
    * @return StoragePlanInformation
    */
    public function setUpgradeAvailable($val)
    {
        $this->_propDict["upgradeAvailable"] = $val;
        return $this;
    }
}
