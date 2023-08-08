<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesServiceAccountEvidence File
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
* KubernetesServiceAccountEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesServiceAccountEvidence extends AlertEvidence
{
    /**
    * Gets the name
    * The service account name.
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
    * The service account name.
    *
    * @param string $val The value of the name
    *
    * @return KubernetesServiceAccountEvidence
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
    * @return KubernetesServiceAccountEvidence The KubernetesServiceAccountEvidence
    */
    public function setNamespace($val)
    {
        $this->_propDict["namespace"] = $val;
         return $this;
    }
}
