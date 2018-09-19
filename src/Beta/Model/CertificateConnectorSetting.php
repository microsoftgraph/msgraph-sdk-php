<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateConnectorSetting File
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
* CertificateConnectorSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CertificateConnectorSetting extends Entity
{
    /**
    * Gets the status
    *
    * @return int The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    *
    * @param int $val The value of the status
    *
    * @return CertificateConnectorSetting
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the certExpiryTime
    *
    * @return \DateTime The certExpiryTime
    */
    public function getCertExpiryTime()
    {
        if (array_key_exists("certExpiryTime", $this->_propDict)) {
            if (is_a($this->_propDict["certExpiryTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["certExpiryTime"];
            } else {
                $this->_propDict["certExpiryTime"] = new \DateTime($this->_propDict["certExpiryTime"]);
                return $this->_propDict["certExpiryTime"];
            }
        }
        return null;
    }

    /**
    * Sets the certExpiryTime
    *
    * @param \DateTime $val The value to assign to the certExpiryTime
    *
    * @return CertificateConnectorSetting The CertificateConnectorSetting
    */
    public function setCertExpiryTime($val)
    {
        $this->_propDict["certExpiryTime"] = $val;
         return $this;
    }
    /**
    * Gets the enrollmentError
    *
    * @return string The enrollmentError
    */
    public function getEnrollmentError()
    {
        if (array_key_exists("enrollmentError", $this->_propDict)) {
            return $this->_propDict["enrollmentError"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enrollmentError
    *
    * @param string $val The value of the enrollmentError
    *
    * @return CertificateConnectorSetting
    */
    public function setEnrollmentError($val)
    {
        $this->_propDict["enrollmentError"] = $val;
        return $this;
    }

    /**
    * Gets the lastConnectorConnectionTime
    *
    * @return \DateTime The lastConnectorConnectionTime
    */
    public function getLastConnectorConnectionTime()
    {
        if (array_key_exists("lastConnectorConnectionTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastConnectorConnectionTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["lastConnectorConnectionTime"];
            } else {
                $this->_propDict["lastConnectorConnectionTime"] = new \DateTime($this->_propDict["lastConnectorConnectionTime"]);
                return $this->_propDict["lastConnectorConnectionTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastConnectorConnectionTime
    *
    * @param \DateTime $val The value to assign to the lastConnectorConnectionTime
    *
    * @return CertificateConnectorSetting The CertificateConnectorSetting
    */
    public function setLastConnectorConnectionTime($val)
    {
        $this->_propDict["lastConnectorConnectionTime"] = $val;
         return $this;
    }
    /**
    * Gets the connectorVersion
    *
    * @return string The connectorVersion
    */
    public function getConnectorVersion()
    {
        if (array_key_exists("connectorVersion", $this->_propDict)) {
            return $this->_propDict["connectorVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectorVersion
    *
    * @param string $val The value of the connectorVersion
    *
    * @return CertificateConnectorSetting
    */
    public function setConnectorVersion($val)
    {
        $this->_propDict["connectorVersion"] = $val;
        return $this;
    }
    /**
    * Gets the lastUploadVersion
    *
    * @return int The lastUploadVersion
    */
    public function getLastUploadVersion()
    {
        if (array_key_exists("lastUploadVersion", $this->_propDict)) {
            return $this->_propDict["lastUploadVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastUploadVersion
    *
    * @param int $val The value of the lastUploadVersion
    *
    * @return CertificateConnectorSetting
    */
    public function setLastUploadVersion($val)
    {
        $this->_propDict["lastUploadVersion"] = $val;
        return $this;
    }
}
