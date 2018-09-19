<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkImportedPFXCertificateProfile File
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
* AndroidForWorkImportedPFXCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkImportedPFXCertificateProfile extends AndroidCertificateProfileBase
{
    /**
    * Gets the intendedPurpose
    *
    * @return IntendedPurpose The intendedPurpose
    */
    public function getIntendedPurpose()
    {
        if (array_key_exists("intendedPurpose", $this->_propDict)) {
            if (is_a($this->_propDict["intendedPurpose"], "Microsoft\Graph\Beta\Model\IntendedPurpose")) {
                return $this->_propDict["intendedPurpose"];
            } else {
                $this->_propDict["intendedPurpose"] = new IntendedPurpose($this->_propDict["intendedPurpose"]);
                return $this->_propDict["intendedPurpose"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intendedPurpose
    *
    * @param IntendedPurpose $val The intendedPurpose
    *
    * @return AndroidForWorkImportedPFXCertificateProfile
    */
    public function setIntendedPurpose($val)
    {
        $this->_propDict["intendedPurpose"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceCertificateStates
     *
     * @return array The managedDeviceCertificateStates
     */
    public function getManagedDeviceCertificateStates()
    {
        if (array_key_exists("managedDeviceCertificateStates", $this->_propDict)) {
           return $this->_propDict["managedDeviceCertificateStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDeviceCertificateStates
    *
    * @param ManagedDeviceCertificateState $val The managedDeviceCertificateStates
    *
    * @return AndroidForWorkImportedPFXCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
		$this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }
    
}