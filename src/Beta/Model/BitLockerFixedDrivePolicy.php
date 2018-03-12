<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerFixedDrivePolicy File
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
* BitLockerFixedDrivePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class BitLockerFixedDrivePolicy extends Entity
{

    /**
    * Gets the encryptionMethod
    *
    * @return BitLockerEncryptionMethod The encryptionMethod
    */
    public function getEncryptionMethod()
    {
        if (array_key_exists("encryptionMethod", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionMethod"], "Microsoft\Graph\Model\BitLockerEncryptionMethod")) {
                return $this->_propDict["encryptionMethod"];
            } else {
                $this->_propDict["encryptionMethod"] = new BitLockerEncryptionMethod($this->_propDict["encryptionMethod"]);
                return $this->_propDict["encryptionMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the encryptionMethod
    *
    * @param BitLockerEncryptionMethod $val The value to assign to the encryptionMethod
    *
    * @return BitLockerFixedDrivePolicy The BitLockerFixedDrivePolicy
    */
    public function setEncryptionMethod($val)
    {
        $this->_propDict["encryptionMethod"] = $val;
         return $this;
    }
    /**
    * Gets the requireEncryptionForWriteAccess
    *
    * @return bool The requireEncryptionForWriteAccess
    */
    public function getRequireEncryptionForWriteAccess()
    {
        if (array_key_exists("requireEncryptionForWriteAccess", $this->_propDict)) {
            return $this->_propDict["requireEncryptionForWriteAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requireEncryptionForWriteAccess
    *
    * @param bool $val The value of the requireEncryptionForWriteAccess
    *
    * @return BitLockerFixedDrivePolicy
    */
    public function setRequireEncryptionForWriteAccess($val)
    {
        $this->_propDict["requireEncryptionForWriteAccess"] = $val;
        return $this;
    }

    /**
    * Gets the recoveryOptions
    *
    * @return BitLockerRecoveryOptions The recoveryOptions
    */
    public function getRecoveryOptions()
    {
        if (array_key_exists("recoveryOptions", $this->_propDict)) {
            if (is_a($this->_propDict["recoveryOptions"], "Microsoft\Graph\Model\BitLockerRecoveryOptions")) {
                return $this->_propDict["recoveryOptions"];
            } else {
                $this->_propDict["recoveryOptions"] = new BitLockerRecoveryOptions($this->_propDict["recoveryOptions"]);
                return $this->_propDict["recoveryOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the recoveryOptions
    *
    * @param BitLockerRecoveryOptions $val The value to assign to the recoveryOptions
    *
    * @return BitLockerFixedDrivePolicy The BitLockerFixedDrivePolicy
    */
    public function setRecoveryOptions($val)
    {
        $this->_propDict["recoveryOptions"] = $val;
         return $this;
    }
}
