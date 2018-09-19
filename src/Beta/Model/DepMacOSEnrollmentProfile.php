<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepMacOSEnrollmentProfile File
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
* DepMacOSEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DepMacOSEnrollmentProfile extends DepEnrollmentBaseProfile
{
    /**
    * Gets the registrationDisabled
    *
    * @return bool The registrationDisabled
    */
    public function getRegistrationDisabled()
    {
        if (array_key_exists("registrationDisabled", $this->_propDict)) {
            return $this->_propDict["registrationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the registrationDisabled
    *
    * @param bool $val The registrationDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setRegistrationDisabled($val)
    {
        $this->_propDict["registrationDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultDisabled
    *
    * @return bool The fileVaultDisabled
    */
    public function getFileVaultDisabled()
    {
        if (array_key_exists("fileVaultDisabled", $this->_propDict)) {
            return $this->_propDict["fileVaultDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultDisabled
    *
    * @param bool $val The fileVaultDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setFileVaultDisabled($val)
    {
        $this->_propDict["fileVaultDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudDiagnosticsDisabled
    *
    * @return bool The iCloudDiagnosticsDisabled
    */
    public function getICloudDiagnosticsDisabled()
    {
        if (array_key_exists("iCloudDiagnosticsDisabled", $this->_propDict)) {
            return $this->_propDict["iCloudDiagnosticsDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudDiagnosticsDisabled
    *
    * @param bool $val The iCloudDiagnosticsDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setICloudDiagnosticsDisabled($val)
    {
        $this->_propDict["iCloudDiagnosticsDisabled"] = boolval($val);
        return $this;
    }
    
}