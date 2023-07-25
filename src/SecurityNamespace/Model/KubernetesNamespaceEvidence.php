<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesNamespaceEvidence File
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
* KubernetesNamespaceEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesNamespaceEvidence extends AlertEvidence
{

    /**
    * Gets the cluster
    *
    * @return KubernetesClusterEvidence|null The cluster
    */
    public function getCluster()
    {
        if (array_key_exists("cluster", $this->_propDict)) {
            if (is_a($this->_propDict["cluster"], "\Microsoft\Graph\SecurityNamespace\Model\KubernetesClusterEvidence") || is_null($this->_propDict["cluster"])) {
                return $this->_propDict["cluster"];
            } else {
                $this->_propDict["cluster"] = new KubernetesClusterEvidence($this->_propDict["cluster"]);
                return $this->_propDict["cluster"];
            }
        }
        return null;
    }

    /**
    * Sets the cluster
    *
    * @param KubernetesClusterEvidence $val The value to assign to the cluster
    *
    * @return KubernetesNamespaceEvidence The KubernetesNamespaceEvidence
    */
    public function setCluster($val)
    {
        $this->_propDict["cluster"] = $val;
         return $this;
    }

    /**
    * Gets the labels
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
    *
    * @param Dictionary $val The value to assign to the labels
    *
    * @return KubernetesNamespaceEvidence The KubernetesNamespaceEvidence
    */
    public function setLabels($val)
    {
        $this->_propDict["labels"] = $val;
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
    * @return KubernetesNamespaceEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
