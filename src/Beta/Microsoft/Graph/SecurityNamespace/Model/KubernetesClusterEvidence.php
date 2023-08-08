<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesClusterEvidence File
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
* KubernetesClusterEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesClusterEvidence extends AlertEvidence
{

    /**
    * Gets the cloudResource
    * The cloud identifier of the cluster. Can be either an amazonResourceEvidence, azureResourceEvidence, or googleCloudResourceEvidence object.
    *
    * @return AlertEvidence|null The cloudResource
    */
    public function getCloudResource()
    {
        if (array_key_exists("cloudResource", $this->_propDict)) {
            if (is_a($this->_propDict["cloudResource"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AlertEvidence") || is_null($this->_propDict["cloudResource"])) {
                return $this->_propDict["cloudResource"];
            } else {
                $this->_propDict["cloudResource"] = new AlertEvidence($this->_propDict["cloudResource"]);
                return $this->_propDict["cloudResource"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudResource
    * The cloud identifier of the cluster. Can be either an amazonResourceEvidence, azureResourceEvidence, or googleCloudResourceEvidence object.
    *
    * @param AlertEvidence $val The value to assign to the cloudResource
    *
    * @return KubernetesClusterEvidence The KubernetesClusterEvidence
    */
    public function setCloudResource($val)
    {
        $this->_propDict["cloudResource"] = $val;
         return $this;
    }
    /**
    * Gets the distribution
    * The distribution type of the cluster.
    *
    * @return string|null The distribution
    */
    public function getDistribution()
    {
        if (array_key_exists("distribution", $this->_propDict)) {
            return $this->_propDict["distribution"];
        } else {
            return null;
        }
    }

    /**
    * Sets the distribution
    * The distribution type of the cluster.
    *
    * @param string $val The value of the distribution
    *
    * @return KubernetesClusterEvidence
    */
    public function setDistribution($val)
    {
        $this->_propDict["distribution"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The cluster name.
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
    * The cluster name.
    *
    * @param string $val The value of the name
    *
    * @return KubernetesClusterEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the platform
    * The platform the cluster runs on. Possible values are: unknown, aks, eks, gke, arc, unknownFutureValue.
    *
    * @return KubernetesPlatform|null The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\KubernetesPlatform") || is_null($this->_propDict["platform"])) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new KubernetesPlatform($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }

    /**
    * Sets the platform
    * The platform the cluster runs on. Possible values are: unknown, aks, eks, gke, arc, unknownFutureValue.
    *
    * @param KubernetesPlatform $val The value to assign to the platform
    *
    * @return KubernetesClusterEvidence The KubernetesClusterEvidence
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
         return $this;
    }
    /**
    * Gets the version
    * The kubernetes version of the cluster.
    *
    * @return string|null The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }

    /**
    * Sets the version
    * The kubernetes version of the cluster.
    *
    * @param string $val The value of the version
    *
    * @return KubernetesClusterEvidence
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
}
