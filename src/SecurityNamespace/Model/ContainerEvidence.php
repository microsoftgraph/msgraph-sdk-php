<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContainerEvidence File
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
* ContainerEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContainerEvidence extends AlertEvidence
{
    /**
    * Gets the args
    * The list of arguments.
    *
    * @return string|null The args
    */
    public function getArgs()
    {
        if (array_key_exists("args", $this->_propDict)) {
            return $this->_propDict["args"];
        } else {
            return null;
        }
    }

    /**
    * Sets the args
    * The list of arguments.
    *
    * @param string $val The value of the args
    *
    * @return ContainerEvidence
    */
    public function setArgs($val)
    {
        $this->_propDict["args"] = $val;
        return $this;
    }
    /**
    * Gets the command
    * The list of commands.
    *
    * @return string|null The command
    */
    public function getCommand()
    {
        if (array_key_exists("command", $this->_propDict)) {
            return $this->_propDict["command"];
        } else {
            return null;
        }
    }

    /**
    * Sets the command
    * The list of commands.
    *
    * @param string $val The value of the command
    *
    * @return ContainerEvidence
    */
    public function setCommand($val)
    {
        $this->_propDict["command"] = $val;
        return $this;
    }
    /**
    * Gets the containerId
    * The container ID.
    *
    * @return string|null The containerId
    */
    public function getContainerId()
    {
        if (array_key_exists("containerId", $this->_propDict)) {
            return $this->_propDict["containerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the containerId
    * The container ID.
    *
    * @param string $val The value of the containerId
    *
    * @return ContainerEvidence
    */
    public function setContainerId($val)
    {
        $this->_propDict["containerId"] = $val;
        return $this;
    }

    /**
    * Gets the image
    * The image used to run the container.
    *
    * @return ContainerImageEvidence|null The image
    */
    public function getImage()
    {
        if (array_key_exists("image", $this->_propDict)) {
            if (is_a($this->_propDict["image"], "\Microsoft\Graph\SecurityNamespace\Model\ContainerImageEvidence") || is_null($this->_propDict["image"])) {
                return $this->_propDict["image"];
            } else {
                $this->_propDict["image"] = new ContainerImageEvidence($this->_propDict["image"]);
                return $this->_propDict["image"];
            }
        }
        return null;
    }

    /**
    * Sets the image
    * The image used to run the container.
    *
    * @param ContainerImageEvidence $val The value to assign to the image
    *
    * @return ContainerEvidence The ContainerEvidence
    */
    public function setImage($val)
    {
        $this->_propDict["image"] = $val;
         return $this;
    }
    /**
    * Gets the isPrivileged
    * The privileged status.
    *
    * @return bool|null The isPrivileged
    */
    public function getIsPrivileged()
    {
        if (array_key_exists("isPrivileged", $this->_propDict)) {
            return $this->_propDict["isPrivileged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPrivileged
    * The privileged status.
    *
    * @param bool $val The value of the isPrivileged
    *
    * @return ContainerEvidence
    */
    public function setIsPrivileged($val)
    {
        $this->_propDict["isPrivileged"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The container name.
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
    * The container name.
    *
    * @param string $val The value of the name
    *
    * @return ContainerEvidence
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the pod
    * The pod this container belongs to.
    *
    * @return KubernetesPodEvidence|null The pod
    */
    public function getPod()
    {
        if (array_key_exists("pod", $this->_propDict)) {
            if (is_a($this->_propDict["pod"], "\Microsoft\Graph\SecurityNamespace\Model\KubernetesPodEvidence") || is_null($this->_propDict["pod"])) {
                return $this->_propDict["pod"];
            } else {
                $this->_propDict["pod"] = new KubernetesPodEvidence($this->_propDict["pod"]);
                return $this->_propDict["pod"];
            }
        }
        return null;
    }

    /**
    * Sets the pod
    * The pod this container belongs to.
    *
    * @param KubernetesPodEvidence $val The value to assign to the pod
    *
    * @return ContainerEvidence The ContainerEvidence
    */
    public function setPod($val)
    {
        $this->_propDict["pod"] = $val;
         return $this;
    }
}
