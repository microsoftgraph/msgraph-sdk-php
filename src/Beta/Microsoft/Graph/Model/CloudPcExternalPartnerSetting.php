<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcExternalPartnerSetting File
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
* CloudPcExternalPartnerSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcExternalPartnerSetting extends Entity
{
    /**
    * Gets the enableConnection
    *
    * @return bool|null The enableConnection
    */
    public function getEnableConnection()
    {
        if (array_key_exists("enableConnection", $this->_propDict)) {
            return $this->_propDict["enableConnection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableConnection
    *
    * @param bool $val The enableConnection
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setEnableConnection($val)
    {
        $this->_propDict["enableConnection"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastSyncDateTime
    *
    * @return \DateTime|null The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime") || is_null($this->_propDict["lastSyncDateTime"])) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSyncDateTime
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the partnerId
    *
    * @return string|null The partnerId
    */
    public function getPartnerId()
    {
        if (array_key_exists("partnerId", $this->_propDict)) {
            return $this->_propDict["partnerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the partnerId
    *
    * @param string $val The partnerId
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setPartnerId($val)
    {
        $this->_propDict["partnerId"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return CloudPcExternalPartnerStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CloudPcExternalPartnerStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcExternalPartnerStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param CloudPcExternalPartnerStatus $val The status
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the statusDetails
    *
    * @return string|null The statusDetails
    */
    public function getStatusDetails()
    {
        if (array_key_exists("statusDetails", $this->_propDict)) {
            return $this->_propDict["statusDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statusDetails
    *
    * @param string $val The statusDetails
    *
    * @return CloudPcExternalPartnerSetting
    */
    public function setStatusDetails($val)
    {
        $this->_propDict["statusDetails"] = $val;
        return $this;
    }

}
