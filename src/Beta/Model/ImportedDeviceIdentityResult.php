<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedDeviceIdentityResult File
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
* ImportedDeviceIdentityResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ImportedDeviceIdentityResult extends ImportedDeviceIdentity
{
    /**
    * Gets the status
    *
    * @return bool The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    *
    * @param bool $val The status
    *
    * @return ImportedDeviceIdentityResult
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = boolval($val);
        return $this;
    }
    
}