<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostSslCertificatePort File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* HostSslCertificatePort class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostSslCertificatePort extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the firstSeenDateTime
    *
    * @return \DateTime|null The firstSeenDateTime
    */
    public function getFirstSeenDateTime()
    {
        if (array_key_exists("firstSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["firstSeenDateTime"], "\DateTime") || is_null($this->_propDict["firstSeenDateTime"])) {
                return $this->_propDict["firstSeenDateTime"];
            } else {
                $this->_propDict["firstSeenDateTime"] = new \DateTime($this->_propDict["firstSeenDateTime"]);
                return $this->_propDict["firstSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the firstSeenDateTime
    *
    * @param \DateTime $val The value to assign to the firstSeenDateTime
    *
    * @return HostSslCertificatePort The HostSslCertificatePort
    */
    public function setFirstSeenDateTime($val)
    {
        $this->_propDict["firstSeenDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastSeenDateTime
    *
    * @return \DateTime|null The lastSeenDateTime
    */
    public function getLastSeenDateTime()
    {
        if (array_key_exists("lastSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSeenDateTime"], "\DateTime") || is_null($this->_propDict["lastSeenDateTime"])) {
                return $this->_propDict["lastSeenDateTime"];
            } else {
                $this->_propDict["lastSeenDateTime"] = new \DateTime($this->_propDict["lastSeenDateTime"]);
                return $this->_propDict["lastSeenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSeenDateTime
    *
    * @param \DateTime $val The value to assign to the lastSeenDateTime
    *
    * @return HostSslCertificatePort The HostSslCertificatePort
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the port
    *
    * @return int|null The port
    */
    public function getPort()
    {
        if (array_key_exists("port", $this->_propDict)) {
            return $this->_propDict["port"];
        } else {
            return null;
        }
    }

    /**
    * Sets the port
    *
    * @param int $val The value of the port
    *
    * @return HostSslCertificatePort
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = $val;
        return $this;
    }
}
