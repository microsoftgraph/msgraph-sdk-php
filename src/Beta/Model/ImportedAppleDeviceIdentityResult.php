<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedAppleDeviceIdentityResult File
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
* ImportedAppleDeviceIdentityResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ImportedAppleDeviceIdentityResult extends ImportedAppleDeviceIdentity
{
    /**
    * Gets the status
    * Status of imported device identity
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
    * Status of imported device identity
    *
    * @param bool $val The status
    *
    * @return ImportedAppleDeviceIdentityResult
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = boolval($val);
        return $this;
    }
    
}