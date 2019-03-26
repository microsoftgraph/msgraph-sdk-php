<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10PFXImportCertificateProfile File
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
* Windows10PFXImportCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Windows10PFXImportCertificateProfile extends DeviceConfiguration
{
    /**
    * Gets the keyStorageProvider
    *
    * @return KeyStorageProviderOption The keyStorageProvider
    */
    public function getKeyStorageProvider()
    {
        if (array_key_exists("keyStorageProvider", $this->_propDict)) {
            if (is_a($this->_propDict["keyStorageProvider"], "Microsoft\Graph\Beta\Model\KeyStorageProviderOption")) {
                return $this->_propDict["keyStorageProvider"];
            } else {
                $this->_propDict["keyStorageProvider"] = new KeyStorageProviderOption($this->_propDict["keyStorageProvider"]);
                return $this->_propDict["keyStorageProvider"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keyStorageProvider
    *
    * @param KeyStorageProviderOption $val The keyStorageProvider
    *
    * @return Windows10PFXImportCertificateProfile
    */
    public function setKeyStorageProvider($val)
    {
        $this->_propDict["keyStorageProvider"] = $val;
        return $this;
    }
    
}