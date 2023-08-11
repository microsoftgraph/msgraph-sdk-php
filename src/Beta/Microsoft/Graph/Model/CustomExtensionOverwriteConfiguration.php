<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomExtensionOverwriteConfiguration File
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
* CustomExtensionOverwriteConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CustomExtensionOverwriteConfiguration extends Entity
{

    /**
    * Gets the clientConfiguration
    *
    * @return CustomExtensionClientConfiguration|null The clientConfiguration
    */
    public function getClientConfiguration()
    {
        if (array_key_exists("clientConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["clientConfiguration"], "\Beta\Microsoft\Graph\Model\CustomExtensionClientConfiguration") || is_null($this->_propDict["clientConfiguration"])) {
                return $this->_propDict["clientConfiguration"];
            } else {
                $this->_propDict["clientConfiguration"] = new CustomExtensionClientConfiguration($this->_propDict["clientConfiguration"]);
                return $this->_propDict["clientConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the clientConfiguration
    *
    * @param CustomExtensionClientConfiguration $val The value to assign to the clientConfiguration
    *
    * @return CustomExtensionOverwriteConfiguration The CustomExtensionOverwriteConfiguration
    */
    public function setClientConfiguration($val)
    {
        $this->_propDict["clientConfiguration"] = $val;
         return $this;
    }
}
