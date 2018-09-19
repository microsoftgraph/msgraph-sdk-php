<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAppConfigurationSchemaItem File
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
* AndroidManagedStoreAppConfigurationSchemaItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidManagedStoreAppConfigurationSchemaItem extends Entity
{
    /**
    * Gets the schemaItemKey
    *
    * @return string The schemaItemKey
    */
    public function getSchemaItemKey()
    {
        if (array_key_exists("schemaItemKey", $this->_propDict)) {
            return $this->_propDict["schemaItemKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the schemaItemKey
    *
    * @param string $val The value of the schemaItemKey
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setSchemaItemKey($val)
    {
        $this->_propDict["schemaItemKey"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The value of the description
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the defaultBoolValue
    *
    * @return bool The defaultBoolValue
    */
    public function getDefaultBoolValue()
    {
        if (array_key_exists("defaultBoolValue", $this->_propDict)) {
            return $this->_propDict["defaultBoolValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultBoolValue
    *
    * @param bool $val The value of the defaultBoolValue
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDefaultBoolValue($val)
    {
        $this->_propDict["defaultBoolValue"] = $val;
        return $this;
    }
    /**
    * Gets the defaultIntValue
    *
    * @return int The defaultIntValue
    */
    public function getDefaultIntValue()
    {
        if (array_key_exists("defaultIntValue", $this->_propDict)) {
            return $this->_propDict["defaultIntValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultIntValue
    *
    * @param int $val The value of the defaultIntValue
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDefaultIntValue($val)
    {
        $this->_propDict["defaultIntValue"] = $val;
        return $this;
    }
    /**
    * Gets the defaultStringValue
    *
    * @return string The defaultStringValue
    */
    public function getDefaultStringValue()
    {
        if (array_key_exists("defaultStringValue", $this->_propDict)) {
            return $this->_propDict["defaultStringValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultStringValue
    *
    * @param string $val The value of the defaultStringValue
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDefaultStringValue($val)
    {
        $this->_propDict["defaultStringValue"] = $val;
        return $this;
    }
    /**
    * Gets the defaultStringArrayValue
    *
    * @return string The defaultStringArrayValue
    */
    public function getDefaultStringArrayValue()
    {
        if (array_key_exists("defaultStringArrayValue", $this->_propDict)) {
            return $this->_propDict["defaultStringArrayValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultStringArrayValue
    *
    * @param string $val The value of the defaultStringArrayValue
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDefaultStringArrayValue($val)
    {
        $this->_propDict["defaultStringArrayValue"] = $val;
        return $this;
    }

    /**
    * Gets the dataType
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItemDataType The dataType
    */
    public function getDataType()
    {
        if (array_key_exists("dataType", $this->_propDict)) {
            if (is_a($this->_propDict["dataType"], "Microsoft\Graph\Beta\Model\AndroidManagedStoreAppConfigurationSchemaItemDataType")) {
                return $this->_propDict["dataType"];
            } else {
                $this->_propDict["dataType"] = new AndroidManagedStoreAppConfigurationSchemaItemDataType($this->_propDict["dataType"]);
                return $this->_propDict["dataType"];
            }
        }
        return null;
    }

    /**
    * Sets the dataType
    *
    * @param AndroidManagedStoreAppConfigurationSchemaItemDataType $val The value to assign to the dataType
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem The AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setDataType($val)
    {
        $this->_propDict["dataType"] = $val;
         return $this;
    }

    /**
    * Gets the selections
    *
    * @return KeyValuePair The selections
    */
    public function getSelections()
    {
        if (array_key_exists("selections", $this->_propDict)) {
            if (is_a($this->_propDict["selections"], "Microsoft\Graph\Beta\Model\KeyValuePair")) {
                return $this->_propDict["selections"];
            } else {
                $this->_propDict["selections"] = new KeyValuePair($this->_propDict["selections"]);
                return $this->_propDict["selections"];
            }
        }
        return null;
    }

    /**
    * Sets the selections
    *
    * @param KeyValuePair $val The value to assign to the selections
    *
    * @return AndroidManagedStoreAppConfigurationSchemaItem The AndroidManagedStoreAppConfigurationSchemaItem
    */
    public function setSelections($val)
    {
        $this->_propDict["selections"] = $val;
         return $this;
    }
}
