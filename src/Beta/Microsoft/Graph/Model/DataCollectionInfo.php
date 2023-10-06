<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataCollectionInfo File
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
* DataCollectionInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataCollectionInfo extends Entity
{
    /**
    * Gets the entitlements
    *
    * @return EntitlementsDataCollectionInfo|null The entitlements
    */
    public function getEntitlements()
    {
        if (array_key_exists("entitlements", $this->_propDict)) {
            if (is_a($this->_propDict["entitlements"], "\Beta\Microsoft\Graph\Model\EntitlementsDataCollectionInfo") || is_null($this->_propDict["entitlements"])) {
                return $this->_propDict["entitlements"];
            } else {
                $this->_propDict["entitlements"] = new EntitlementsDataCollectionInfo($this->_propDict["entitlements"]);
                return $this->_propDict["entitlements"];
            }
        }
        return null;
    }

    /**
    * Sets the entitlements
    *
    * @param EntitlementsDataCollectionInfo $val The entitlements
    *
    * @return DataCollectionInfo
    */
    public function setEntitlements($val)
    {
        $this->_propDict["entitlements"] = $val;
        return $this;
    }

}
