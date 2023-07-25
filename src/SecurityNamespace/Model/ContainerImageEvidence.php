<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContainerImageEvidence File
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
* ContainerImageEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContainerImageEvidence extends AlertEvidence
{

    /**
    * Gets the digestImage
    *
    * @return ContainerImageEvidence|null The digestImage
    */
    public function getDigestImage()
    {
        if (array_key_exists("digestImage", $this->_propDict)) {
            if (is_a($this->_propDict["digestImage"], "\Microsoft\Graph\SecurityNamespace\Model\ContainerImageEvidence") || is_null($this->_propDict["digestImage"])) {
                return $this->_propDict["digestImage"];
            } else {
                $this->_propDict["digestImage"] = new ContainerImageEvidence($this->_propDict["digestImage"]);
                return $this->_propDict["digestImage"];
            }
        }
        return null;
    }

    /**
    * Sets the digestImage
    *
    * @param ContainerImageEvidence $val The value to assign to the digestImage
    *
    * @return ContainerImageEvidence The ContainerImageEvidence
    */
    public function setDigestImage($val)
    {
        $this->_propDict["digestImage"] = $val;
         return $this;
    }
    /**
    * Gets the imageId
    *
    * @return string|null The imageId
    */
    public function getImageId()
    {
        if (array_key_exists("imageId", $this->_propDict)) {
            return $this->_propDict["imageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the imageId
    *
    * @param string $val The value of the imageId
    *
    * @return ContainerImageEvidence
    */
    public function setImageId($val)
    {
        $this->_propDict["imageId"] = $val;
        return $this;
    }

    /**
    * Gets the registry
    *
    * @return ContainerRegistryEvidence|null The registry
    */
    public function getRegistry()
    {
        if (array_key_exists("registry", $this->_propDict)) {
            if (is_a($this->_propDict["registry"], "\Microsoft\Graph\SecurityNamespace\Model\ContainerRegistryEvidence") || is_null($this->_propDict["registry"])) {
                return $this->_propDict["registry"];
            } else {
                $this->_propDict["registry"] = new ContainerRegistryEvidence($this->_propDict["registry"]);
                return $this->_propDict["registry"];
            }
        }
        return null;
    }

    /**
    * Sets the registry
    *
    * @param ContainerRegistryEvidence $val The value to assign to the registry
    *
    * @return ContainerImageEvidence The ContainerImageEvidence
    */
    public function setRegistry($val)
    {
        $this->_propDict["registry"] = $val;
         return $this;
    }
}
