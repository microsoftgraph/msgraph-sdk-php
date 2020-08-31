<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10CustomConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* Windows10CustomConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10CustomConfiguration extends DeviceConfiguration
{

     /** 
     * Gets the omaSettings
    * OMA settings. This collection can contain a maximum of 1000 elements.
     *
     * @return array The omaSettings
     */
    public function getOmaSettings()
    {
        if (array_key_exists("omaSettings", $this->_propDict)) {
           return $this->_propDict["omaSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the omaSettings
    * OMA settings. This collection can contain a maximum of 1000 elements.
    *
    * @param OmaSetting $val The omaSettings
    *
    * @return Windows10CustomConfiguration
    */
    public function setOmaSettings($val)
    {
		$this->_propDict["omaSettings"] = $val;
        return $this;
    }
    
}