<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidCustomConfiguration File
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
* AndroidCustomConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidCustomConfiguration extends DeviceConfiguration
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
    * @return AndroidCustomConfiguration
    */
    public function setOmaSettings($val)
    {
		$this->_propDict["omaSettings"] = $val;
        return $this;
    }
    
}