<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerSystemDrivePolicy File
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
* BitLockerSystemDrivePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class BitLockerSystemDrivePolicy extends Entity
{

    /**
    * Gets the encryptionMethod
    *
    * @return BitLockerEncryptionMethod The encryptionMethod
    */
    public function getEncryptionMethod()
    {
        if (array_key_exists("encryptionMethod", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionMethod"], "Microsoft\Graph\Beta\Model\BitLockerEncryptionMethod")) {
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
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setEncryptionMethod($val)
    {
        $this->_propDict["encryptionMethod"] = $val;
         return $this;
    }
    /**
    * Gets the startupAuthenticationRequired
    *
    * @return bool The startupAuthenticationRequired
    */
    public function getStartupAuthenticationRequired()
    {
        if (array_key_exists("startupAuthenticationRequired", $this->_propDict)) {
            return $this->_propDict["startupAuthenticationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startupAuthenticationRequired
    *
    * @param bool $val The value of the startupAuthenticationRequired
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationRequired($val)
    {
        $this->_propDict["startupAuthenticationRequired"] = $val;
        return $this;
    }
    /**
    * Gets the startupAuthenticationBlockWithoutTpmChip
    *
    * @return bool The startupAuthenticationBlockWithoutTpmChip
    */
    public function getStartupAuthenticationBlockWithoutTpmChip()
    {
        if (array_key_exists("startupAuthenticationBlockWithoutTpmChip", $this->_propDict)) {
            return $this->_propDict["startupAuthenticationBlockWithoutTpmChip"];
        } else {
            return null;
        }
    }

    /**
    * Sets the startupAuthenticationBlockWithoutTpmChip
    *
    * @param bool $val The value of the startupAuthenticationBlockWithoutTpmChip
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationBlockWithoutTpmChip($val)
    {
        $this->_propDict["startupAuthenticationBlockWithoutTpmChip"] = $val;
        return $this;
    }

    /**
    * Gets the startupAuthenticationTpmUsage
    *
    * @return ConfigurationUsage The startupAuthenticationTpmUsage
    */
    public function getStartupAuthenticationTpmUsage()
    {
        if (array_key_exists("startupAuthenticationTpmUsage", $this->_propDict)) {
            if (is_a($this->_propDict["startupAuthenticationTpmUsage"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["startupAuthenticationTpmUsage"];
            } else {
                $this->_propDict["startupAuthenticationTpmUsage"] = new ConfigurationUsage($this->_propDict["startupAuthenticationTpmUsage"]);
                return $this->_propDict["startupAuthenticationTpmUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the startupAuthenticationTpmUsage
    *
    * @param ConfigurationUsage $val The value to assign to the startupAuthenticationTpmUsage
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationTpmUsage($val)
    {
        $this->_propDict["startupAuthenticationTpmUsage"] = $val;
         return $this;
    }

    /**
    * Gets the startupAuthenticationTpmPinUsage
    *
    * @return ConfigurationUsage The startupAuthenticationTpmPinUsage
    */
    public function getStartupAuthenticationTpmPinUsage()
    {
        if (array_key_exists("startupAuthenticationTpmPinUsage", $this->_propDict)) {
            if (is_a($this->_propDict["startupAuthenticationTpmPinUsage"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["startupAuthenticationTpmPinUsage"];
            } else {
                $this->_propDict["startupAuthenticationTpmPinUsage"] = new ConfigurationUsage($this->_propDict["startupAuthenticationTpmPinUsage"]);
                return $this->_propDict["startupAuthenticationTpmPinUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the startupAuthenticationTpmPinUsage
    *
    * @param ConfigurationUsage $val The value to assign to the startupAuthenticationTpmPinUsage
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationTpmPinUsage($val)
    {
        $this->_propDict["startupAuthenticationTpmPinUsage"] = $val;
         return $this;
    }

    /**
    * Gets the startupAuthenticationTpmKeyUsage
    *
    * @return ConfigurationUsage The startupAuthenticationTpmKeyUsage
    */
    public function getStartupAuthenticationTpmKeyUsage()
    {
        if (array_key_exists("startupAuthenticationTpmKeyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["startupAuthenticationTpmKeyUsage"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["startupAuthenticationTpmKeyUsage"];
            } else {
                $this->_propDict["startupAuthenticationTpmKeyUsage"] = new ConfigurationUsage($this->_propDict["startupAuthenticationTpmKeyUsage"]);
                return $this->_propDict["startupAuthenticationTpmKeyUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the startupAuthenticationTpmKeyUsage
    *
    * @param ConfigurationUsage $val The value to assign to the startupAuthenticationTpmKeyUsage
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationTpmKeyUsage($val)
    {
        $this->_propDict["startupAuthenticationTpmKeyUsage"] = $val;
         return $this;
    }

    /**
    * Gets the startupAuthenticationTpmPinAndKeyUsage
    *
    * @return ConfigurationUsage The startupAuthenticationTpmPinAndKeyUsage
    */
    public function getStartupAuthenticationTpmPinAndKeyUsage()
    {
        if (array_key_exists("startupAuthenticationTpmPinAndKeyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["startupAuthenticationTpmPinAndKeyUsage"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["startupAuthenticationTpmPinAndKeyUsage"];
            } else {
                $this->_propDict["startupAuthenticationTpmPinAndKeyUsage"] = new ConfigurationUsage($this->_propDict["startupAuthenticationTpmPinAndKeyUsage"]);
                return $this->_propDict["startupAuthenticationTpmPinAndKeyUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the startupAuthenticationTpmPinAndKeyUsage
    *
    * @param ConfigurationUsage $val The value to assign to the startupAuthenticationTpmPinAndKeyUsage
    *
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setStartupAuthenticationTpmPinAndKeyUsage($val)
    {
        $this->_propDict["startupAuthenticationTpmPinAndKeyUsage"] = $val;
         return $this;
    }
    /**
    * Gets the minimumPinLength
    *
    * @return int The minimumPinLength
    */
    public function getMinimumPinLength()
    {
        if (array_key_exists("minimumPinLength", $this->_propDict)) {
            return $this->_propDict["minimumPinLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumPinLength
    *
    * @param int $val The value of the minimumPinLength
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setMinimumPinLength($val)
    {
        $this->_propDict["minimumPinLength"] = $val;
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
            if (is_a($this->_propDict["recoveryOptions"], "Microsoft\Graph\Beta\Model\BitLockerRecoveryOptions")) {
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
    * @return BitLockerSystemDrivePolicy The BitLockerSystemDrivePolicy
    */
    public function setRecoveryOptions($val)
    {
        $this->_propDict["recoveryOptions"] = $val;
         return $this;
    }
    /**
    * Gets the prebootRecoveryEnableMessageAndUrl
    *
    * @return bool The prebootRecoveryEnableMessageAndUrl
    */
    public function getPrebootRecoveryEnableMessageAndUrl()
    {
        if (array_key_exists("prebootRecoveryEnableMessageAndUrl", $this->_propDict)) {
            return $this->_propDict["prebootRecoveryEnableMessageAndUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the prebootRecoveryEnableMessageAndUrl
    *
    * @param bool $val The value of the prebootRecoveryEnableMessageAndUrl
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setPrebootRecoveryEnableMessageAndUrl($val)
    {
        $this->_propDict["prebootRecoveryEnableMessageAndUrl"] = $val;
        return $this;
    }
    /**
    * Gets the prebootRecoveryMessage
    *
    * @return string The prebootRecoveryMessage
    */
    public function getPrebootRecoveryMessage()
    {
        if (array_key_exists("prebootRecoveryMessage", $this->_propDict)) {
            return $this->_propDict["prebootRecoveryMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the prebootRecoveryMessage
    *
    * @param string $val The value of the prebootRecoveryMessage
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setPrebootRecoveryMessage($val)
    {
        $this->_propDict["prebootRecoveryMessage"] = $val;
        return $this;
    }
    /**
    * Gets the prebootRecoveryUrl
    *
    * @return string The prebootRecoveryUrl
    */
    public function getPrebootRecoveryUrl()
    {
        if (array_key_exists("prebootRecoveryUrl", $this->_propDict)) {
            return $this->_propDict["prebootRecoveryUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the prebootRecoveryUrl
    *
    * @param string $val The value of the prebootRecoveryUrl
    *
    * @return BitLockerSystemDrivePolicy
    */
    public function setPrebootRecoveryUrl($val)
    {
        $this->_propDict["prebootRecoveryUrl"] = $val;
        return $this;
    }
}
