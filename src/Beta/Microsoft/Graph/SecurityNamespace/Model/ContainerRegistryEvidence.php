<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContainerRegistryEvidence File
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
* ContainerRegistryEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContainerRegistryEvidence extends AlertEvidence
{
    /**
    * Gets the registry
    *
    * @return string|null The registry
    */
    public function getRegistry()
    {
        if (array_key_exists("registry", $this->_propDict)) {
            return $this->_propDict["registry"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registry
    *
    * @param string $val The value of the registry
    *
    * @return ContainerRegistryEvidence
    */
    public function setRegistry($val)
    {
        $this->_propDict["registry"] = $val;
        return $this;
    }
}
