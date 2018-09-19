<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsEnrollmentStatusScreenSettings File
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
* WindowsEnrollmentStatusScreenSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsEnrollmentStatusScreenSettings extends Entity
{
    /**
    * Gets the hideInstallationProgress
    *
    * @return bool The hideInstallationProgress
    */
    public function getHideInstallationProgress()
    {
        if (array_key_exists("hideInstallationProgress", $this->_propDict)) {
            return $this->_propDict["hideInstallationProgress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideInstallationProgress
    *
    * @param bool $val The value of the hideInstallationProgress
    *
    * @return WindowsEnrollmentStatusScreenSettings
    */
    public function setHideInstallationProgress($val)
    {
        $this->_propDict["hideInstallationProgress"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeviceUseBeforeProfileAndAppInstallComplete
    *
    * @return bool The allowDeviceUseBeforeProfileAndAppInstallComplete
    */
    public function getAllowDeviceUseBeforeProfileAndAppInstallComplete()
    {
        if (array_key_exists("allowDeviceUseBeforeProfileAndAppInstallComplete", $this->_propDict)) {
            return $this->_propDict["allowDeviceUseBeforeProfileAndAppInstallComplete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeviceUseBeforeProfileAndAppInstallComplete
    *
    * @param bool $val The value of the allowDeviceUseBeforeProfileAndAppInstallComplete
    *
    * @return WindowsEnrollmentStatusScreenSettings
    */
    public function setAllowDeviceUseBeforeProfileAndAppInstallComplete($val)
    {
        $this->_propDict["allowDeviceUseBeforeProfileAndAppInstallComplete"] = $val;
        return $this;
    }
    /**
    * Gets the blockDeviceSetupRetryByUser
    *
    * @return bool The blockDeviceSetupRetryByUser
    */
    public function getBlockDeviceSetupRetryByUser()
    {
        if (array_key_exists("blockDeviceSetupRetryByUser", $this->_propDict)) {
            return $this->_propDict["blockDeviceSetupRetryByUser"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockDeviceSetupRetryByUser
    *
    * @param bool $val The value of the blockDeviceSetupRetryByUser
    *
    * @return WindowsEnrollmentStatusScreenSettings
    */
    public function setBlockDeviceSetupRetryByUser($val)
    {
        $this->_propDict["blockDeviceSetupRetryByUser"] = $val;
        return $this;
    }
    /**
    * Gets the allowLogCollectionOnInstallFailure
    *
    * @return bool The allowLogCollectionOnInstallFailure
    */
    public function getAllowLogCollectionOnInstallFailure()
    {
        if (array_key_exists("allowLogCollectionOnInstallFailure", $this->_propDict)) {
            return $this->_propDict["allowLogCollectionOnInstallFailure"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowLogCollectionOnInstallFailure
    *
    * @param bool $val The value of the allowLogCollectionOnInstallFailure
    *
    * @return WindowsEnrollmentStatusScreenSettings
    */
    public function setAllowLogCollectionOnInstallFailure($val)
    {
        $this->_propDict["allowLogCollectionOnInstallFailure"] = $val;
        return $this;
    }
    /**
    * Gets the customErrorMessage
    *
    * @return string The customErrorMessage
    */
    public function getCustomErrorMessage()
    {
        if (array_key_exists("customErrorMessage", $this->_propDict)) {
            return $this->_propDict["customErrorMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customErrorMessage
    *
    * @param string $val The value of the customErrorMessage
    *
    * @return WindowsEnrollmentStatusScreenSettings
    */
    public function setCustomErrorMessage($val)
    {
        $this->_propDict["customErrorMessage"] = $val;
        return $this;
    }
    /**
    * Gets the installProgressTimeoutInMinutes
    *
    * @return int The installProgressTimeoutInMinutes
    */
    public function getInstallProgressTimeoutInMinutes()
    {
        if (array_key_exists("installProgressTimeoutInMinutes", $this->_propDict)) {
            return $this->_propDict["installProgressTimeoutInMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the installProgressTimeoutInMinutes
    *
    * @param int $val The value of the installProgressTimeoutInMinutes
    *
    * @return WindowsEnrollmentStatusScreenSettings
    */
    public function setInstallProgressTimeoutInMinutes($val)
    {
        $this->_propDict["installProgressTimeoutInMinutes"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeviceUseOnInstallFailure
    *
    * @return bool The allowDeviceUseOnInstallFailure
    */
    public function getAllowDeviceUseOnInstallFailure()
    {
        if (array_key_exists("allowDeviceUseOnInstallFailure", $this->_propDict)) {
            return $this->_propDict["allowDeviceUseOnInstallFailure"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeviceUseOnInstallFailure
    *
    * @param bool $val The value of the allowDeviceUseOnInstallFailure
    *
    * @return WindowsEnrollmentStatusScreenSettings
    */
    public function setAllowDeviceUseOnInstallFailure($val)
    {
        $this->_propDict["allowDeviceUseOnInstallFailure"] = $val;
        return $this;
    }
}
