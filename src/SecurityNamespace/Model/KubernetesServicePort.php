<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesServicePort File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* KubernetesServicePort class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesServicePort extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the appProtocol
    *
    * @return string|null The appProtocol
    */
    public function getAppProtocol()
    {
        if (array_key_exists("appProtocol", $this->_propDict)) {
            return $this->_propDict["appProtocol"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appProtocol
    *
    * @param string $val The value of the appProtocol
    *
    * @return KubernetesServicePort
    */
    public function setAppProtocol($val)
    {
        $this->_propDict["appProtocol"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return KubernetesServicePort
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the nodePort
    *
    * @return int|null The nodePort
    */
    public function getNodePort()
    {
        if (array_key_exists("nodePort", $this->_propDict)) {
            return $this->_propDict["nodePort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nodePort
    *
    * @param int $val The value of the nodePort
    *
    * @return KubernetesServicePort
    */
    public function setNodePort($val)
    {
        $this->_propDict["nodePort"] = $val;
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
    * @return KubernetesServicePort
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = $val;
        return $this;
    }

    /**
    * Gets the protocol
    *
    * @return ContainerPortProtocol|null The protocol
    */
    public function getProtocol()
    {
        if (array_key_exists("protocol", $this->_propDict)) {
            if (is_a($this->_propDict["protocol"], "\Microsoft\Graph\SecurityNamespace\Model\ContainerPortProtocol") || is_null($this->_propDict["protocol"])) {
                return $this->_propDict["protocol"];
            } else {
                $this->_propDict["protocol"] = new ContainerPortProtocol($this->_propDict["protocol"]);
                return $this->_propDict["protocol"];
            }
        }
        return null;
    }

    /**
    * Sets the protocol
    *
    * @param ContainerPortProtocol $val The value to assign to the protocol
    *
    * @return KubernetesServicePort The KubernetesServicePort
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
         return $this;
    }
    /**
    * Gets the targetPort
    *
    * @return string|null The targetPort
    */
    public function getTargetPort()
    {
        if (array_key_exists("targetPort", $this->_propDict)) {
            return $this->_propDict["targetPort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetPort
    *
    * @param string $val The value of the targetPort
    *
    * @return KubernetesServicePort
    */
    public function setTargetPort($val)
    {
        $this->_propDict["targetPort"] = $val;
        return $this;
    }
}
