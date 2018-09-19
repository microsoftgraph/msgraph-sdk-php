<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceComplianceLocalActionLockDeviceWithPasscode File
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
* AndroidDeviceComplianceLocalActionLockDeviceWithPasscode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidDeviceComplianceLocalActionLockDeviceWithPasscode extends AndroidDeviceComplianceLocalActionBase
{
    /**
    * Gets the passcode
    *
    * @return string The passcode
    */
    public function getPasscode()
    {
        if (array_key_exists("passcode", $this->_propDict)) {
            return $this->_propDict["passcode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcode
    *
    * @param string $val The passcode
    *
    * @return AndroidDeviceComplianceLocalActionLockDeviceWithPasscode
    */
    public function setPasscode($val)
    {
        $this->_propDict["passcode"] = $val;
        return $this;
    }
    
    /**
    * Gets the passcodeSignInFailureCountBeforeWipe
    *
    * @return int The passcodeSignInFailureCountBeforeWipe
    */
    public function getPasscodeSignInFailureCountBeforeWipe()
    {
        if (array_key_exists("passcodeSignInFailureCountBeforeWipe", $this->_propDict)) {
            return $this->_propDict["passcodeSignInFailureCountBeforeWipe"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeSignInFailureCountBeforeWipe
    *
    * @param int $val The passcodeSignInFailureCountBeforeWipe
    *
    * @return AndroidDeviceComplianceLocalActionLockDeviceWithPasscode
    */
    public function setPasscodeSignInFailureCountBeforeWipe($val)
    {
        $this->_propDict["passcodeSignInFailureCountBeforeWipe"] = intval($val);
        return $this;
    }
    
}