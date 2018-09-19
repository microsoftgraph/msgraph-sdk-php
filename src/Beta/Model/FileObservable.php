<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileObservable File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* FileObservable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class FileObservable extends Entity
{

    /**
    * Gets the compileDateTime
    *
    * @return \DateTime The compileDateTime
    */
    public function getCompileDateTime()
    {
        if (array_key_exists("compileDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["compileDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["compileDateTime"];
            } else {
                $this->_propDict["compileDateTime"] = new \DateTime($this->_propDict["compileDateTime"]);
                return $this->_propDict["compileDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the compileDateTime
    *
    * @param \DateTime $val The value to assign to the compileDateTime
    *
    * @return FileObservable The FileObservable
    */
    public function setCompileDateTime($val)
    {
        $this->_propDict["compileDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return FileObservable The FileObservable
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the hash
    *
    * @return FileHash The hash
    */
    public function getHash()
    {
        if (array_key_exists("hash", $this->_propDict)) {
            if (is_a($this->_propDict["hash"], "Microsoft\Graph\Beta\Model\FileHash")) {
                return $this->_propDict["hash"];
            } else {
                $this->_propDict["hash"] = new FileHash($this->_propDict["hash"]);
                return $this->_propDict["hash"];
            }
        }
        return null;
    }

    /**
    * Sets the hash
    *
    * @param FileHash $val The value to assign to the hash
    *
    * @return FileObservable The FileObservable
    */
    public function setHash($val)
    {
        $this->_propDict["hash"] = $val;
         return $this;
    }
    /**
    * Gets the mutexName
    *
    * @return string The mutexName
    */
    public function getMutexName()
    {
        if (array_key_exists("mutexName", $this->_propDict)) {
            return $this->_propDict["mutexName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mutexName
    *
    * @param string $val The value of the mutexName
    *
    * @return FileObservable
    */
    public function setMutexName($val)
    {
        $this->_propDict["mutexName"] = $val;
        return $this;
    }
    /**
    * Gets the packer
    *
    * @return string The packer
    */
    public function getPacker()
    {
        if (array_key_exists("packer", $this->_propDict)) {
            return $this->_propDict["packer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the packer
    *
    * @param string $val The value of the packer
    *
    * @return FileObservable
    */
    public function setPacker($val)
    {
        $this->_propDict["packer"] = $val;
        return $this;
    }
    /**
    * Gets the path
    *
    * @return string The path
    */
    public function getPath()
    {
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }

    /**
    * Sets the path
    *
    * @param string $val The value of the path
    *
    * @return FileObservable
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
    /**
    * Gets the size
    *
    * @return int The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }

    /**
    * Sets the size
    *
    * @param int $val The value of the size
    *
    * @return FileObservable
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }
    /**
    * Gets the type
    *
    * @return string The type
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
    *
    * @param string $val The value of the type
    *
    * @return FileObservable
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
