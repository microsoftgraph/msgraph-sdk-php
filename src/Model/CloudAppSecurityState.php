<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudAppSecurityState File
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
* CloudAppSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CloudAppSecurityState extends Entity
{
    /**
    * Gets the destinationServiceIp
    *
    * @return string The destinationServiceIp
    */
    public function getDestinationServiceIp()
    {
        if (array_key_exists("destinationServiceIp", $this->_propDict)) {
            return $this->_propDict["destinationServiceIp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationServiceIp
    *
    * @param string $val The value of the destinationServiceIp
    *
    * @return CloudAppSecurityState
    */
    public function setDestinationServiceIp($val)
    {
        $this->_propDict["destinationServiceIp"] = $val;
        return $this;
    }
    /**
    * Gets the destinationServiceName
    *
    * @return string The destinationServiceName
    */
    public function getDestinationServiceName()
    {
        if (array_key_exists("destinationServiceName", $this->_propDict)) {
            return $this->_propDict["destinationServiceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationServiceName
    *
    * @param string $val The value of the destinationServiceName
    *
    * @return CloudAppSecurityState
    */
    public function setDestinationServiceName($val)
    {
        $this->_propDict["destinationServiceName"] = $val;
        return $this;
    }
    /**
    * Gets the riskScore
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskScore
    *
    * @param string $val The value of the riskScore
    *
    * @return CloudAppSecurityState
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
}
