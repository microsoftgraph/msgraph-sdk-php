<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistryKeyState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* RegistryKeyState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegistryKeyState extends Entity
{

    /**
    * Gets the hive
    * A Windows registry hive : HKEYCURRENTCONFIG HKEYCURRENTUSER HKEYLOCALMACHINE/SAM HKEYLOCALMACHINE/Security HKEYLOCALMACHINE/Software HKEYLOCALMACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault.
    *
    * @return RegistryHive|null The hive
    */
    public function getHive()
    {
        if (array_key_exists("hive", $this->_propDict)) {
            if (is_a($this->_propDict["hive"], "\Microsoft\Graph\Model\RegistryHive") || is_null($this->_propDict["hive"])) {
                return $this->_propDict["hive"];
            } else {
                $this->_propDict["hive"] = new RegistryHive($this->_propDict["hive"]);
                return $this->_propDict["hive"];
            }
        }
        return null;
    }

    /**
    * Sets the hive
    * A Windows registry hive : HKEYCURRENTCONFIG HKEYCURRENTUSER HKEYLOCALMACHINE/SAM HKEYLOCALMACHINE/Security HKEYLOCALMACHINE/Software HKEYLOCALMACHINE/System HKEY_USERS/.Default. Possible values are: unknown, currentConfig, currentUser, localMachineSam, localMachineSecurity, localMachineSoftware, localMachineSystem, usersDefault.
    *
    * @param RegistryHive $val The value to assign to the hive
    *
    * @return RegistryKeyState The RegistryKeyState
    */
    public function setHive($val)
    {
        $this->_propDict["hive"] = $val;
         return $this;
    }
    /**
    * Gets the key
    * Current (i.e. changed) registry key (excludes HIVE).
    *
    * @return string|null The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    * Current (i.e. changed) registry key (excludes HIVE).
    *
    * @param string $val The value of the key
    *
    * @return RegistryKeyState
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }
    /**
    * Gets the oldKey
    * Previous (i.e. before changed) registry key (excludes HIVE).
    *
    * @return string|null The oldKey
    */
    public function getOldKey()
    {
        if (array_key_exists("oldKey", $this->_propDict)) {
            return $this->_propDict["oldKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oldKey
    * Previous (i.e. before changed) registry key (excludes HIVE).
    *
    * @param string $val The value of the oldKey
    *
    * @return RegistryKeyState
    */
    public function setOldKey($val)
    {
        $this->_propDict["oldKey"] = $val;
        return $this;
    }
    /**
    * Gets the oldValueData
    * Previous (i.e. before changed) registry key value data (contents).
    *
    * @return string|null The oldValueData
    */
    public function getOldValueData()
    {
        if (array_key_exists("oldValueData", $this->_propDict)) {
            return $this->_propDict["oldValueData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oldValueData
    * Previous (i.e. before changed) registry key value data (contents).
    *
    * @param string $val The value of the oldValueData
    *
    * @return RegistryKeyState
    */
    public function setOldValueData($val)
    {
        $this->_propDict["oldValueData"] = $val;
        return $this;
    }
    /**
    * Gets the oldValueName
    * Previous (i.e. before changed) registry key value name.
    *
    * @return string|null The oldValueName
    */
    public function getOldValueName()
    {
        if (array_key_exists("oldValueName", $this->_propDict)) {
            return $this->_propDict["oldValueName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oldValueName
    * Previous (i.e. before changed) registry key value name.
    *
    * @param string $val The value of the oldValueName
    *
    * @return RegistryKeyState
    */
    public function setOldValueName($val)
    {
        $this->_propDict["oldValueName"] = $val;
        return $this;
    }

    /**
    * Gets the operation
    * Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete.
    *
    * @return RegistryOperation|null The operation
    */
    public function getOperation()
    {
        if (array_key_exists("operation", $this->_propDict)) {
            if (is_a($this->_propDict["operation"], "\Microsoft\Graph\Model\RegistryOperation") || is_null($this->_propDict["operation"])) {
                return $this->_propDict["operation"];
            } else {
                $this->_propDict["operation"] = new RegistryOperation($this->_propDict["operation"]);
                return $this->_propDict["operation"];
            }
        }
        return null;
    }

    /**
    * Sets the operation
    * Operation that changed the registry key name and/or value. Possible values are: unknown, create, modify, delete.
    *
    * @param RegistryOperation $val The value to assign to the operation
    *
    * @return RegistryKeyState The RegistryKeyState
    */
    public function setOperation($val)
    {
        $this->_propDict["operation"] = $val;
         return $this;
    }
    /**
    * Gets the processId
    * Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection).
    *
    * @return int|null The processId
    */
    public function getProcessId()
    {
        if (array_key_exists("processId", $this->_propDict)) {
            return $this->_propDict["processId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processId
    * Process ID (PID) of the process that modified the registry key (process details will appear in the alert 'processes' collection).
    *
    * @param int $val The value of the processId
    *
    * @return RegistryKeyState
    */
    public function setProcessId($val)
    {
        $this->_propDict["processId"] = $val;
        return $this;
    }
    /**
    * Gets the valueData
    * Current (i.e. changed) registry key value data (contents).
    *
    * @return string|null The valueData
    */
    public function getValueData()
    {
        if (array_key_exists("valueData", $this->_propDict)) {
            return $this->_propDict["valueData"];
        } else {
            return null;
        }
    }

    /**
    * Sets the valueData
    * Current (i.e. changed) registry key value data (contents).
    *
    * @param string $val The value of the valueData
    *
    * @return RegistryKeyState
    */
    public function setValueData($val)
    {
        $this->_propDict["valueData"] = $val;
        return $this;
    }
    /**
    * Gets the valueName
    * Current (i.e. changed) registry key value name
    *
    * @return string|null The valueName
    */
    public function getValueName()
    {
        if (array_key_exists("valueName", $this->_propDict)) {
            return $this->_propDict["valueName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the valueName
    * Current (i.e. changed) registry key value name
    *
    * @param string $val The value of the valueName
    *
    * @return RegistryKeyState
    */
    public function setValueName($val)
    {
        $this->_propDict["valueName"] = $val;
        return $this;
    }

    /**
    * Gets the valueType
    * Registry key value type REGBINARY REGDWORD REGDWORDLITTLEENDIAN REGDWORDBIGENDIANREGEXPANDSZ REGLINK REGMULTISZ REGNONE REGQWORD REGQWORDLITTLEENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz.
    *
    * @return RegistryValueType|null The valueType
    */
    public function getValueType()
    {
        if (array_key_exists("valueType", $this->_propDict)) {
            if (is_a($this->_propDict["valueType"], "\Microsoft\Graph\Model\RegistryValueType") || is_null($this->_propDict["valueType"])) {
                return $this->_propDict["valueType"];
            } else {
                $this->_propDict["valueType"] = new RegistryValueType($this->_propDict["valueType"]);
                return $this->_propDict["valueType"];
            }
        }
        return null;
    }

    /**
    * Sets the valueType
    * Registry key value type REGBINARY REGDWORD REGDWORDLITTLEENDIAN REGDWORDBIGENDIANREGEXPANDSZ REGLINK REGMULTISZ REGNONE REGQWORD REGQWORDLITTLEENDIAN REG_SZ Possible values are: unknown, binary, dword, dwordLittleEndian, dwordBigEndian, expandSz, link, multiSz, none, qword, qwordlittleEndian, sz.
    *
    * @param RegistryValueType $val The value to assign to the valueType
    *
    * @return RegistryKeyState The RegistryKeyState
    */
    public function setValueType($val)
    {
        $this->_propDict["valueType"] = $val;
         return $this;
    }
}
