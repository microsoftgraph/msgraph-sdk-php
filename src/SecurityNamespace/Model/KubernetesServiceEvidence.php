<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesServiceEvidence File
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
* KubernetesServiceEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesServiceEvidence extends AlertEvidence
{

    /**
    * Gets the clusterIP
    * The service cluster IP.
    *
    * @return IpEvidence|null The clusterIP
    */
    public function getClusterIP()
    {
        if (array_key_exists("clusterIP", $this->_propDict)) {
            if (is_a($this->_propDict["clusterIP"], "\Microsoft\Graph\SecurityNamespace\Model\IpEvidence") || is_null($this->_propDict["clusterIP"])) {
                return $this->_propDict["clusterIP"];
            } else {
                $this->_propDict["clusterIP"] = new IpEvidence($this->_propDict["clusterIP"]);
                return $this->_propDict["clusterIP"];
            }
        }
        return null;
    }

    /**
    * Sets the clusterIP
    * The service cluster IP.
    *
    * @param IpEvidence $val The value to assign to the clusterIP
    *
    * @return KubernetesServiceEvidence The KubernetesServiceEvidence
    */
    public function setClusterIP($val)
    {
        $this->_propDict["clusterIP"] = $val;
         return $this;
    }

    /**
    * Gets the externalIPs
    * The service external IPs.
    *
    * @return IpEvidence|null The externalIPs
    */
    public function getExternalIPs()
    {
        if (array_key_exists("externalIPs", $this->_propDict)) {
            if (is_a($this->_propDict["externalIPs"], "\Microsoft\Graph\SecurityNamespace\Model\IpEvidence") || is_null($this->_propDict["externalIPs"])) {
                return $this->_propDict["externalIPs"];
            } else {
                $this->_propDict["externalIPs"] = new IpEvidence($this->_propDict["externalIPs"]);
                return $this->_propDict["externalIPs"];
            }
        }
        return null;
    }

    /**
    * Sets the externalIPs
    * The service external IPs.
    *
    * @param IpEvidence $val The value to assign to the externalIPs
    *
    * @return KubernetesServiceEvidence The KubernetesServiceEvidence
    */
    public function setExternalIPs($val)
    {
        $this->_propDict["externalIPs"] = $val;
         return $this;
    }

    /**
    * Gets the labels
    * The service labels.
    *
    * @return Dictionary|null The labels
    */
    public function getLabels()
    {
        if (array_key_exists("labels", $this->_propDict)) {
            if (is_a($this->_propDict["labels"], "\Microsoft\Graph\SecurityNamespace\Model\Dictionary") || is_null($this->_propDict["labels"])) {
                return $this->_propDict["labels"];
            } else {
                $this->_propDict["labels"] = new Dictionary($this->_propDict["labels"]);
                return $this->_propDict["labels"];
            }
        }
        return null;
    }

    /**
    * Sets the labels
    * The service labels.
    *
    * @param Dictionary $val The value to assign to the labels
    *
    * @return KubernetesServiceEvidence The KubernetesServiceEvidence
    */
    public function setLabels($val)
    {
        $this->_propDict["labels"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * The service name.
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
    * The service name.
    *
    * @param string $val The value of the name
    *
    * @return KubernetesServiceEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the namespace
    * The service namespace.
    *
    * @return KubernetesNamespaceEvidence|null The namespace
    */
    public function getNamespace()
    {
        if (array_key_exists("namespace", $this->_propDict)) {
            if (is_a($this->_propDict["namespace"], "\Microsoft\Graph\SecurityNamespace\Model\KubernetesNamespaceEvidence") || is_null($this->_propDict["namespace"])) {
                return $this->_propDict["namespace"];
            } else {
                $this->_propDict["namespace"] = new KubernetesNamespaceEvidence($this->_propDict["namespace"]);
                return $this->_propDict["namespace"];
            }
        }
        return null;
    }

    /**
    * Sets the namespace
    * The service namespace.
    *
    * @param KubernetesNamespaceEvidence $val The value to assign to the namespace
    *
    * @return KubernetesServiceEvidence The KubernetesServiceEvidence
    */
    public function setNamespace($val)
    {
        $this->_propDict["namespace"] = $val;
         return $this;
    }

    /**
    * Gets the selector
    * The service selector.
    *
    * @return Dictionary|null The selector
    */
    public function getSelector()
    {
        if (array_key_exists("selector", $this->_propDict)) {
            if (is_a($this->_propDict["selector"], "\Microsoft\Graph\SecurityNamespace\Model\Dictionary") || is_null($this->_propDict["selector"])) {
                return $this->_propDict["selector"];
            } else {
                $this->_propDict["selector"] = new Dictionary($this->_propDict["selector"]);
                return $this->_propDict["selector"];
            }
        }
        return null;
    }

    /**
    * Sets the selector
    * The service selector.
    *
    * @param Dictionary $val The value to assign to the selector
    *
    * @return KubernetesServiceEvidence The KubernetesServiceEvidence
    */
    public function setSelector($val)
    {
        $this->_propDict["selector"] = $val;
         return $this;
    }

    /**
    * Gets the servicePorts
    * The list of service ports.
    *
    * @return KubernetesServicePort|null The servicePorts
    */
    public function getServicePorts()
    {
        if (array_key_exists("servicePorts", $this->_propDict)) {
            if (is_a($this->_propDict["servicePorts"], "\Microsoft\Graph\SecurityNamespace\Model\KubernetesServicePort") || is_null($this->_propDict["servicePorts"])) {
                return $this->_propDict["servicePorts"];
            } else {
                $this->_propDict["servicePorts"] = new KubernetesServicePort($this->_propDict["servicePorts"]);
                return $this->_propDict["servicePorts"];
            }
        }
        return null;
    }

    /**
    * Sets the servicePorts
    * The list of service ports.
    *
    * @param KubernetesServicePort $val The value to assign to the servicePorts
    *
    * @return KubernetesServiceEvidence The KubernetesServiceEvidence
    */
    public function setServicePorts($val)
    {
        $this->_propDict["servicePorts"] = $val;
         return $this;
    }

    /**
    * Gets the serviceType
    * The service type. Possible values are: unknown, clusterIP, externalName, nodePort, loadBalancer, unknownFutureValue.
    *
    * @return KubernetesServiceType|null The serviceType
    */
    public function getServiceType()
    {
        if (array_key_exists("serviceType", $this->_propDict)) {
            if (is_a($this->_propDict["serviceType"], "\Microsoft\Graph\SecurityNamespace\Model\KubernetesServiceType") || is_null($this->_propDict["serviceType"])) {
                return $this->_propDict["serviceType"];
            } else {
                $this->_propDict["serviceType"] = new KubernetesServiceType($this->_propDict["serviceType"]);
                return $this->_propDict["serviceType"];
            }
        }
        return null;
    }

    /**
    * Sets the serviceType
    * The service type. Possible values are: unknown, clusterIP, externalName, nodePort, loadBalancer, unknownFutureValue.
    *
    * @param KubernetesServiceType $val The value to assign to the serviceType
    *
    * @return KubernetesServiceEvidence The KubernetesServiceEvidence
    */
    public function setServiceType($val)
    {
        $this->_propDict["serviceType"] = $val;
         return $this;
    }
}
