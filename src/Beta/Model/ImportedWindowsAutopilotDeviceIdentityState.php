<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedWindowsAutopilotDeviceIdentityState File
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
* ImportedWindowsAutopilotDeviceIdentityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ImportedWindowsAutopilotDeviceIdentityState extends Entity
{

    /**
    * Gets the deviceImportStatus
    *
    * @return ImportedWindowsAutopilotDeviceIdentityImportStatus The deviceImportStatus
    */
    public function getDeviceImportStatus()
    {
        if (array_key_exists("deviceImportStatus", $this->_propDict)) {
            if (is_a($this->_propDict["deviceImportStatus"], "Microsoft\Graph\Beta\Model\ImportedWindowsAutopilotDeviceIdentityImportStatus")) {
                return $this->_propDict["deviceImportStatus"];
            } else {
                $this->_propDict["deviceImportStatus"] = new ImportedWindowsAutopilotDeviceIdentityImportStatus($this->_propDict["deviceImportStatus"]);
                return $this->_propDict["deviceImportStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceImportStatus
    *
    * @param ImportedWindowsAutopilotDeviceIdentityImportStatus $val The value to assign to the deviceImportStatus
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState The ImportedWindowsAutopilotDeviceIdentityState
    */
    public function setDeviceImportStatus($val)
    {
        $this->_propDict["deviceImportStatus"] = $val;
         return $this;
    }
    /**
    * Gets the deviceRegistrationId
    *
    * @return string The deviceRegistrationId
    */
    public function getDeviceRegistrationId()
    {
        if (array_key_exists("deviceRegistrationId", $this->_propDict)) {
            return $this->_propDict["deviceRegistrationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceRegistrationId
    *
    * @param string $val The value of the deviceRegistrationId
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState
    */
    public function setDeviceRegistrationId($val)
    {
        $this->_propDict["deviceRegistrationId"] = $val;
        return $this;
    }
    /**
    * Gets the deviceErrorCode
    *
    * @return int The deviceErrorCode
    */
    public function getDeviceErrorCode()
    {
        if (array_key_exists("deviceErrorCode", $this->_propDict)) {
            return $this->_propDict["deviceErrorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceErrorCode
    *
    * @param int $val The value of the deviceErrorCode
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState
    */
    public function setDeviceErrorCode($val)
    {
        $this->_propDict["deviceErrorCode"] = $val;
        return $this;
    }
    /**
    * Gets the deviceErrorName
    *
    * @return string The deviceErrorName
    */
    public function getDeviceErrorName()
    {
        if (array_key_exists("deviceErrorName", $this->_propDict)) {
            return $this->_propDict["deviceErrorName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceErrorName
    *
    * @param string $val The value of the deviceErrorName
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState
    */
    public function setDeviceErrorName($val)
    {
        $this->_propDict["deviceErrorName"] = $val;
        return $this;
    }
}
