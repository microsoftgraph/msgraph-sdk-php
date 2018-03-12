<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkMobileAppConfiguration File
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
* AndroidForWorkMobileAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkMobileAppConfiguration extends ManagedDeviceMobileAppConfiguration
{
    /**
    * Gets the packageName
    *
    * @return string The packageName
    */
    public function getPackageName()
    {
        if (array_key_exists("packageName", $this->_propDict)) {
            return $this->_propDict["packageName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the packageName
    *
    * @param string $val The packageName
    *
    * @return AndroidForWorkMobileAppConfiguration
    */
    public function setPackageName($val)
    {
        $this->_propDict["packageName"] = $val;
        return $this;
    }
    
    /**
    * Gets the payloadJson
    *
    * @return string The payloadJson
    */
    public function getPayloadJson()
    {
        if (array_key_exists("payloadJson", $this->_propDict)) {
            return $this->_propDict["payloadJson"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payloadJson
    *
    * @param string $val The payloadJson
    *
    * @return AndroidForWorkMobileAppConfiguration
    */
    public function setPayloadJson($val)
    {
        $this->_propDict["payloadJson"] = $val;
        return $this;
    }
    

     /** 
     * Gets the permissionActions
     *
     * @return array The permissionActions
     */
    public function getPermissionActions()
    {
        if (array_key_exists("permissionActions", $this->_propDict)) {
           return $this->_propDict["permissionActions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the permissionActions
    *
    * @param AndroidPermissionAction $val The permissionActions
    *
    * @return AndroidForWorkMobileAppConfiguration
    */
    public function setPermissionActions($val)
    {
		$this->_propDict["permissionActions"] = $val;
        return $this;
    }
    
}