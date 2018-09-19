<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistryKeyState File
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
* RegistryKeyState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RegistryKeyState extends Entity
{

    /**
    * Gets the hive
    *
    * @return RegistryHive The hive
    */
    public function getHive()
    {
        if (array_key_exists("hive", $this->_propDict)) {
            if (is_a($this->_propDict["hive"], "Microsoft\Graph\Model\RegistryHive")) {
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
    *
    * @return string The key
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
    *
    * @return string The oldKey
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
    *
    * @return string The oldValueData
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
    *
    * @return string The oldValueName
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
    *
    * @return RegistryOperation The operation
    */
    public function getOperation()
    {
        if (array_key_exists("operation", $this->_propDict)) {
            if (is_a($this->_propDict["operation"], "Microsoft\Graph\Model\RegistryOperation")) {
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
    *
    * @return int The processId
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
    *
    * @return string The valueData
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
    *
    * @return string The valueName
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
    *
    * @return RegistryValueType The valueType
    */
    public function getValueType()
    {
        if (array_key_exists("valueType", $this->_propDict)) {
            if (is_a($this->_propDict["valueType"], "Microsoft\Graph\Model\RegistryValueType")) {
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
