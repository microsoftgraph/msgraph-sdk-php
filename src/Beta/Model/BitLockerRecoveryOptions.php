<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerRecoveryOptions File
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
* BitLockerRecoveryOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class BitLockerRecoveryOptions extends Entity
{
    /**
    * Gets the blockDataRecoveryAgent
    *
    * @return bool The blockDataRecoveryAgent
    */
    public function getBlockDataRecoveryAgent()
    {
        if (array_key_exists("blockDataRecoveryAgent", $this->_propDict)) {
            return $this->_propDict["blockDataRecoveryAgent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockDataRecoveryAgent
    *
    * @param bool $val The value of the blockDataRecoveryAgent
    *
    * @return BitLockerRecoveryOptions
    */
    public function setBlockDataRecoveryAgent($val)
    {
        $this->_propDict["blockDataRecoveryAgent"] = $val;
        return $this;
    }

    /**
    * Gets the recoveryPasswordUsage
    *
    * @return ConfigurationUsage The recoveryPasswordUsage
    */
    public function getRecoveryPasswordUsage()
    {
        if (array_key_exists("recoveryPasswordUsage", $this->_propDict)) {
            if (is_a($this->_propDict["recoveryPasswordUsage"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["recoveryPasswordUsage"];
            } else {
                $this->_propDict["recoveryPasswordUsage"] = new ConfigurationUsage($this->_propDict["recoveryPasswordUsage"]);
                return $this->_propDict["recoveryPasswordUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the recoveryPasswordUsage
    *
    * @param ConfigurationUsage $val The value to assign to the recoveryPasswordUsage
    *
    * @return BitLockerRecoveryOptions The BitLockerRecoveryOptions
    */
    public function setRecoveryPasswordUsage($val)
    {
        $this->_propDict["recoveryPasswordUsage"] = $val;
         return $this;
    }

    /**
    * Gets the recoveryKeyUsage
    *
    * @return ConfigurationUsage The recoveryKeyUsage
    */
    public function getRecoveryKeyUsage()
    {
        if (array_key_exists("recoveryKeyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["recoveryKeyUsage"], "Microsoft\Graph\Beta\Model\ConfigurationUsage")) {
                return $this->_propDict["recoveryKeyUsage"];
            } else {
                $this->_propDict["recoveryKeyUsage"] = new ConfigurationUsage($this->_propDict["recoveryKeyUsage"]);
                return $this->_propDict["recoveryKeyUsage"];
            }
        }
        return null;
    }

    /**
    * Sets the recoveryKeyUsage
    *
    * @param ConfigurationUsage $val The value to assign to the recoveryKeyUsage
    *
    * @return BitLockerRecoveryOptions The BitLockerRecoveryOptions
    */
    public function setRecoveryKeyUsage($val)
    {
        $this->_propDict["recoveryKeyUsage"] = $val;
         return $this;
    }
    /**
    * Gets the hideRecoveryOptions
    *
    * @return bool The hideRecoveryOptions
    */
    public function getHideRecoveryOptions()
    {
        if (array_key_exists("hideRecoveryOptions", $this->_propDict)) {
            return $this->_propDict["hideRecoveryOptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideRecoveryOptions
    *
    * @param bool $val The value of the hideRecoveryOptions
    *
    * @return BitLockerRecoveryOptions
    */
    public function setHideRecoveryOptions($val)
    {
        $this->_propDict["hideRecoveryOptions"] = $val;
        return $this;
    }
    /**
    * Gets the enableRecoveryInformationSaveToStore
    *
    * @return bool The enableRecoveryInformationSaveToStore
    */
    public function getEnableRecoveryInformationSaveToStore()
    {
        if (array_key_exists("enableRecoveryInformationSaveToStore", $this->_propDict)) {
            return $this->_propDict["enableRecoveryInformationSaveToStore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableRecoveryInformationSaveToStore
    *
    * @param bool $val The value of the enableRecoveryInformationSaveToStore
    *
    * @return BitLockerRecoveryOptions
    */
    public function setEnableRecoveryInformationSaveToStore($val)
    {
        $this->_propDict["enableRecoveryInformationSaveToStore"] = $val;
        return $this;
    }

    /**
    * Gets the recoveryInformationToStore
    *
    * @return BitLockerRecoveryinformationType The recoveryInformationToStore
    */
    public function getRecoveryInformationToStore()
    {
        if (array_key_exists("recoveryInformationToStore", $this->_propDict)) {
            if (is_a($this->_propDict["recoveryInformationToStore"], "Microsoft\Graph\Beta\Model\BitLockerRecoveryinformationType")) {
                return $this->_propDict["recoveryInformationToStore"];
            } else {
                $this->_propDict["recoveryInformationToStore"] = new BitLockerRecoveryinformationType($this->_propDict["recoveryInformationToStore"]);
                return $this->_propDict["recoveryInformationToStore"];
            }
        }
        return null;
    }

    /**
    * Sets the recoveryInformationToStore
    *
    * @param BitLockerRecoveryinformationType $val The value to assign to the recoveryInformationToStore
    *
    * @return BitLockerRecoveryOptions The BitLockerRecoveryOptions
    */
    public function setRecoveryInformationToStore($val)
    {
        $this->_propDict["recoveryInformationToStore"] = $val;
         return $this;
    }
    /**
    * Gets the enableBitLockerAfterRecoveryInformationToStore
    *
    * @return bool The enableBitLockerAfterRecoveryInformationToStore
    */
    public function getEnableBitLockerAfterRecoveryInformationToStore()
    {
        if (array_key_exists("enableBitLockerAfterRecoveryInformationToStore", $this->_propDict)) {
            return $this->_propDict["enableBitLockerAfterRecoveryInformationToStore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableBitLockerAfterRecoveryInformationToStore
    *
    * @param bool $val The value of the enableBitLockerAfterRecoveryInformationToStore
    *
    * @return BitLockerRecoveryOptions
    */
    public function setEnableBitLockerAfterRecoveryInformationToStore($val)
    {
        $this->_propDict["enableBitLockerAfterRecoveryInformationToStore"] = $val;
        return $this;
    }
}
