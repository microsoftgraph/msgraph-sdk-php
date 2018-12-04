<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* ManagedAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedAppConfiguration extends ManagedAppPolicy
{

     /** 
     * Gets the customSettings
     *
     * @return array The customSettings
     */
    public function getCustomSettings()
    {
        if (array_key_exists("customSettings", $this->_propDict)) {
           return $this->_propDict["customSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customSettings
    *
    * @param KeyValuePair $val The customSettings
    *
    * @return ManagedAppConfiguration
    */
    public function setCustomSettings($val)
    {
		$this->_propDict["customSettings"] = $val;
        return $this;
    }
    
}