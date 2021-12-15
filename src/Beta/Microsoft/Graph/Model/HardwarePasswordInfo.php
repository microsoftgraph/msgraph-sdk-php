<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HardwarePasswordInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* HardwarePasswordInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HardwarePasswordInfo extends Entity
{
    /**
    * Gets the currentPassword
    * Current device password
    *
    * @return string|null The currentPassword
    */
    public function getCurrentPassword()
    {
        if (array_key_exists("currentPassword", $this->_propDict)) {
            return $this->_propDict["currentPassword"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currentPassword
    * Current device password
    *
    * @param string $val The currentPassword
    *
    * @return HardwarePasswordInfo
    */
    public function setCurrentPassword($val)
    {
        $this->_propDict["currentPassword"] = $val;
        return $this;
    }

    /**
    * Gets the previousPasswords
    * List of previous device passwords
    *
    * @return string|null The previousPasswords
    */
    public function getPreviousPasswords()
    {
        if (array_key_exists("previousPasswords", $this->_propDict)) {
            return $this->_propDict["previousPasswords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the previousPasswords
    * List of previous device passwords
    *
    * @param string $val The previousPasswords
    *
    * @return HardwarePasswordInfo
    */
    public function setPreviousPasswords($val)
    {
        $this->_propDict["previousPasswords"] = $val;
        return $this;
    }

    /**
    * Gets the serialNumber
    * Device serial number
    *
    * @return string|null The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serialNumber
    * Device serial number
    *
    * @param string $val The serialNumber
    *
    * @return HardwarePasswordInfo
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }

}
