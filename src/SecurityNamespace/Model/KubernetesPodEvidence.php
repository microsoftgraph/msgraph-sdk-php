<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesPodEvidence File
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
* KubernetesPodEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesPodEvidence extends AlertEvidence
{

    /**
    * Gets the containers
    * The list of pod containers which are not init or ephemeral containers.
    *
    * @return ContainerEvidence|null The containers
    */
    public function getContainers()
    {
        if (array_key_exists("containers", $this->_propDict)) {
            if (is_a($this->_propDict["containers"], "\Microsoft\Graph\SecurityNamespace\Model\ContainerEvidence") || is_null($this->_propDict["containers"])) {
                return $this->_propDict["containers"];
            } else {
                $this->_propDict["containers"] = new ContainerEvidence($this->_propDict["containers"]);
                return $this->_propDict["containers"];
            }
        }
        return null;
    }

    /**
    * Sets the containers
    * The list of pod containers which are not init or ephemeral containers.
    *
    * @param ContainerEvidence $val The value to assign to the containers
    *
    * @return KubernetesPodEvidence The KubernetesPodEvidence
    */
    public function setContainers($val)
    {
        $this->_propDict["containers"] = $val;
         return $this;
    }

    /**
    * Gets the controller
    * The pod controller.
    *
    * @return KubernetesControllerEvidence|null The controller
    */
    public function getController()
    {
        if (array_key_exists("controller", $this->_propDict)) {
            if (is_a($this->_propDict["controller"], "\Microsoft\Graph\SecurityNamespace\Model\KubernetesControllerEvidence") || is_null($this->_propDict["controller"])) {
                return $this->_propDict["controller"];
            } else {
                $this->_propDict["controller"] = new KubernetesControllerEvidence($this->_propDict["controller"]);
                return $this->_propDict["controller"];
            }
        }
        return null;
    }

    /**
    * Sets the controller
    * The pod controller.
    *
    * @param KubernetesControllerEvidence $val The value to assign to the controller
    *
    * @return KubernetesPodEvidence The KubernetesPodEvidence
    */
    public function setController($val)
    {
        $this->_propDict["controller"] = $val;
         return $this;
    }

    /**
    * Gets the ephemeralContainers
    * The list of pod ephemeral containers.
    *
    * @return ContainerEvidence|null The ephemeralContainers
    */
    public function getEphemeralContainers()
    {
        if (array_key_exists("ephemeralContainers", $this->_propDict)) {
            if (is_a($this->_propDict["ephemeralContainers"], "\Microsoft\Graph\SecurityNamespace\Model\ContainerEvidence") || is_null($this->_propDict["ephemeralContainers"])) {
                return $this->_propDict["ephemeralContainers"];
            } else {
                $this->_propDict["ephemeralContainers"] = new ContainerEvidence($this->_propDict["ephemeralContainers"]);
                return $this->_propDict["ephemeralContainers"];
            }
        }
        return null;
    }

    /**
    * Sets the ephemeralContainers
    * The list of pod ephemeral containers.
    *
    * @param ContainerEvidence $val The value to assign to the ephemeralContainers
    *
    * @return KubernetesPodEvidence The KubernetesPodEvidence
    */
    public function setEphemeralContainers($val)
    {
        $this->_propDict["ephemeralContainers"] = $val;
         return $this;
    }

    /**
    * Gets the initContainers
    * The list of pod init containers.
    *
    * @return ContainerEvidence|null The initContainers
    */
    public function getInitContainers()
    {
        if (array_key_exists("initContainers", $this->_propDict)) {
            if (is_a($this->_propDict["initContainers"], "\Microsoft\Graph\SecurityNamespace\Model\ContainerEvidence") || is_null($this->_propDict["initContainers"])) {
                return $this->_propDict["initContainers"];
            } else {
                $this->_propDict["initContainers"] = new ContainerEvidence($this->_propDict["initContainers"]);
                return $this->_propDict["initContainers"];
            }
        }
        return null;
    }

    /**
    * Sets the initContainers
    * The list of pod init containers.
    *
    * @param ContainerEvidence $val The value to assign to the initContainers
    *
    * @return KubernetesPodEvidence The KubernetesPodEvidence
    */
    public function setInitContainers($val)
    {
        $this->_propDict["initContainers"] = $val;
         return $this;
    }

    /**
    * Gets the labels
    * The pod labels.
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
    * The pod labels.
    *
    * @param Dictionary $val The value to assign to the labels
    *
    * @return KubernetesPodEvidence The KubernetesPodEvidence
    */
    public function setLabels($val)
    {
        $this->_propDict["labels"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * The pod name.
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
    * The pod name.
    *
    * @param string $val The value of the name
    *
    * @return KubernetesPodEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the namespace
    * The pod namespace.
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
    * The pod namespace.
    *
    * @param KubernetesNamespaceEvidence $val The value to assign to the namespace
    *
    * @return KubernetesPodEvidence The KubernetesPodEvidence
    */
    public function setNamespace($val)
    {
        $this->_propDict["namespace"] = $val;
         return $this;
    }

    /**
    * Gets the podIp
    * The pod IP.
    *
    * @return IpEvidence|null The podIp
    */
    public function getPodIp()
    {
        if (array_key_exists("podIp", $this->_propDict)) {
            if (is_a($this->_propDict["podIp"], "\Microsoft\Graph\SecurityNamespace\Model\IpEvidence") || is_null($this->_propDict["podIp"])) {
                return $this->_propDict["podIp"];
            } else {
                $this->_propDict["podIp"] = new IpEvidence($this->_propDict["podIp"]);
                return $this->_propDict["podIp"];
            }
        }
        return null;
    }

    /**
    * Sets the podIp
    * The pod IP.
    *
    * @param IpEvidence $val The value to assign to the podIp
    *
    * @return KubernetesPodEvidence The KubernetesPodEvidence
    */
    public function setPodIp($val)
    {
        $this->_propDict["podIp"] = $val;
         return $this;
    }

    /**
    * Gets the serviceAccount
    * The pod service account.
    *
    * @return KubernetesServiceAccountEvidence|null The serviceAccount
    */
    public function getServiceAccount()
    {
        if (array_key_exists("serviceAccount", $this->_propDict)) {
            if (is_a($this->_propDict["serviceAccount"], "\Microsoft\Graph\SecurityNamespace\Model\KubernetesServiceAccountEvidence") || is_null($this->_propDict["serviceAccount"])) {
                return $this->_propDict["serviceAccount"];
            } else {
                $this->_propDict["serviceAccount"] = new KubernetesServiceAccountEvidence($this->_propDict["serviceAccount"]);
                return $this->_propDict["serviceAccount"];
            }
        }
        return null;
    }

    /**
    * Sets the serviceAccount
    * The pod service account.
    *
    * @param KubernetesServiceAccountEvidence $val The value to assign to the serviceAccount
    *
    * @return KubernetesPodEvidence The KubernetesPodEvidence
    */
    public function setServiceAccount($val)
    {
        $this->_propDict["serviceAccount"] = $val;
         return $this;
    }
}
