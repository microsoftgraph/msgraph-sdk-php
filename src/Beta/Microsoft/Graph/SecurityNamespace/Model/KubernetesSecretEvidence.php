<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesSecretEvidence File
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
* KubernetesSecretEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesSecretEvidence extends AlertEvidence
{
    /**
    * Gets the name
    * The secret name.
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
    * The secret name.
    *
    * @param string $val The value of the name
    *
    * @return KubernetesSecretEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the namespace
    * The secret namespace.
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
    * The secret namespace.
    *
    * @param KubernetesNamespaceEvidence $val The value to assign to the namespace
    *
    * @return KubernetesSecretEvidence The KubernetesSecretEvidence
    */
    public function setNamespace($val)
    {
        $this->_propDict["namespace"] = $val;
         return $this;
    }
    /**
    * Gets the secretType
    * The secret type can include both built-in types and custom ones. Examples of built-in types are: Opaque, kubernetes.io/service-account-token, kubernetes.io/dockercfg, kubernetes.io/dockerconfigjson, kubernetes.io/basic-auth, kubernetes.io/ssh-auth, kubernetes.io/tls, bootstrap.kubernetes.io/token.
    *
    * @return string|null The secretType
    */
    public function getSecretType()
    {
        if (array_key_exists("secretType", $this->_propDict)) {
            return $this->_propDict["secretType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secretType
    * The secret type can include both built-in types and custom ones. Examples of built-in types are: Opaque, kubernetes.io/service-account-token, kubernetes.io/dockercfg, kubernetes.io/dockerconfigjson, kubernetes.io/basic-auth, kubernetes.io/ssh-auth, kubernetes.io/tls, bootstrap.kubernetes.io/token.
    *
    * @param string $val The value of the secretType
    *
    * @return KubernetesSecretEvidence
    */
    public function setSecretType($val)
    {
        $this->_propDict["secretType"] = $val;
        return $this;
    }
}
