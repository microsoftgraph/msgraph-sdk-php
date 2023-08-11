<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesControllerEvidence File
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
* KubernetesControllerEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesControllerEvidence extends AlertEvidence
{

    /**
    * Gets the labels
    * The labels for the Kubernetes pod.
    *
    * @return Dictionary|null The labels
    */
    public function getLabels()
    {
        if (array_key_exists("labels", $this->_propDict)) {
            if (is_a($this->_propDict["labels"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\Dictionary") || is_null($this->_propDict["labels"])) {
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
    * The labels for the Kubernetes pod.
    *
    * @param Dictionary $val The value to assign to the labels
    *
    * @return KubernetesControllerEvidence The KubernetesControllerEvidence
    */
    public function setLabels($val)
    {
        $this->_propDict["labels"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * The controller name.
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
    * The controller name.
    *
    * @param string $val The value of the name
    *
    * @return KubernetesControllerEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the namespace
    * The service account namespace.
    *
    * @return KubernetesNamespaceEvidence|null The namespace
    */
    public function getNamespace()
    {
        if (array_key_exists("namespace", $this->_propDict)) {
            if (is_a($this->_propDict["namespace"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\KubernetesNamespaceEvidence") || is_null($this->_propDict["namespace"])) {
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
    * The service account namespace.
    *
    * @param KubernetesNamespaceEvidence $val The value to assign to the namespace
    *
    * @return KubernetesControllerEvidence The KubernetesControllerEvidence
    */
    public function setNamespace($val)
    {
        $this->_propDict["namespace"] = $val;
         return $this;
    }
    /**
    * Gets the type
    * The controller type.
    *
    * @return string|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * The controller type.
    *
    * @param string $val The value of the type
    *
    * @return KubernetesControllerEvidence
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
