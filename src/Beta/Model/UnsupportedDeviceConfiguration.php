<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnsupportedDeviceConfiguration File
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
* UnsupportedDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UnsupportedDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the originalEntityTypeName
    *
    * @return string The originalEntityTypeName
    */
    public function getOriginalEntityTypeName()
    {
        if (array_key_exists("originalEntityTypeName", $this->_propDict)) {
            return $this->_propDict["originalEntityTypeName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the originalEntityTypeName
    *
    * @param string $val The originalEntityTypeName
    *
    * @return UnsupportedDeviceConfiguration
    */
    public function setOriginalEntityTypeName($val)
    {
        $this->_propDict["originalEntityTypeName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the details
     *
     * @return array The details
     */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
           return $this->_propDict["details"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the details
    *
    * @param UnsupportedDeviceConfigurationDetail $val The details
    *
    * @return UnsupportedDeviceConfiguration
    */
    public function setDetails($val)
    {
		$this->_propDict["details"] = $val;
        return $this;
    }
    
}