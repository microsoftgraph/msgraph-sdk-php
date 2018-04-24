<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Process File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* Process class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Process extends Entity
{
    /**
    * Gets the authenticodeHash256
    *
    * @return string The authenticodeHash256
    */
    public function getAuthenticodeHash256()
    {
        if (array_key_exists("authenticodeHash256", $this->_propDict)) {
            return $this->_propDict["authenticodeHash256"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticodeHash256
    *
    * @param string $val The value of the authenticodeHash256
    *
    * @return Process
    */
    public function setAuthenticodeHash256($val)
    {
        $this->_propDict["authenticodeHash256"] = $val;
        return $this;
    }
    /**
    * Gets the commandLine
    *
    * @return string The commandLine
    */
    public function getCommandLine()
    {
        if (array_key_exists("commandLine", $this->_propDict)) {
            return $this->_propDict["commandLine"];
        } else {
            return null;
        }
    }

    /**
    * Sets the commandLine
    *
    * @param string $val The value of the commandLine
    *
    * @return Process
    */
    public function setCommandLine($val)
    {
        $this->_propDict["commandLine"] = $val;
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
    * @return Process The Process
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the integrityLevel
    *
    * @return ProcessIntegrityLevel The integrityLevel
    */
    public function getIntegrityLevel()
    {
        if (array_key_exists("integrityLevel", $this->_propDict)) {
            if (is_a($this->_propDict["integrityLevel"], "Microsoft\Graph\Beta\Model\ProcessIntegrityLevel")) {
                return $this->_propDict["integrityLevel"];
            } else {
                $this->_propDict["integrityLevel"] = new ProcessIntegrityLevel($this->_propDict["integrityLevel"]);
                return $this->_propDict["integrityLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the integrityLevel
    *
    * @param ProcessIntegrityLevel $val The value to assign to the integrityLevel
    *
    * @return Process The Process
    */
    public function setIntegrityLevel($val)
    {
        $this->_propDict["integrityLevel"] = $val;
         return $this;
    }
    /**
    * Gets the isElevated
    *
    * @return bool The isElevated
    */
    public function getIsElevated()
    {
        if (array_key_exists("isElevated", $this->_propDict)) {
            return $this->_propDict["isElevated"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isElevated
    *
    * @param bool $val The value of the isElevated
    *
    * @return Process
    */
    public function setIsElevated($val)
    {
        $this->_propDict["isElevated"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
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
    * @return Process
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the parentProcessCreatedDateTime
    *
    * @return \DateTime The parentProcessCreatedDateTime
    */
    public function getParentProcessCreatedDateTime()
    {
        if (array_key_exists("parentProcessCreatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["parentProcessCreatedDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["parentProcessCreatedDateTime"];
            } else {
                $this->_propDict["parentProcessCreatedDateTime"] = new \DateTime($this->_propDict["parentProcessCreatedDateTime"]);
                return $this->_propDict["parentProcessCreatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the parentProcessCreatedDateTime
    *
    * @param \DateTime $val The value to assign to the parentProcessCreatedDateTime
    *
    * @return Process The Process
    */
    public function setParentProcessCreatedDateTime($val)
    {
        $this->_propDict["parentProcessCreatedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the parentProcessId
    *
    * @return int The parentProcessId
    */
    public function getParentProcessId()
    {
        if (array_key_exists("parentProcessId", $this->_propDict)) {
            return $this->_propDict["parentProcessId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentProcessId
    *
    * @param int $val The value of the parentProcessId
    *
    * @return Process
    */
    public function setParentProcessId($val)
    {
        $this->_propDict["parentProcessId"] = $val;
        return $this;
    }
    /**
    * Gets the parentProcessName
    *
    * @return string The parentProcessName
    */
    public function getParentProcessName()
    {
        if (array_key_exists("parentProcessName", $this->_propDict)) {
            return $this->_propDict["parentProcessName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parentProcessName
    *
    * @param string $val The value of the parentProcessName
    *
    * @return Process
    */
    public function setParentProcessName($val)
    {
        $this->_propDict["parentProcessName"] = $val;
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
    * @return Process
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
    /**
    * Gets the processId
    *
    * @return int The processId
    */
    public function getProcessId()
    {
        if (array_key_exists("processId", $this->_propDict)) {
            return $this->_propDict["processId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processId
    *
    * @param int $val The value of the processId
    *
    * @return Process
    */
    public function setProcessId($val)
    {
        $this->_propDict["processId"] = $val;
        return $this;
    }
    /**
    * Gets the sha256
    *
    * @return string The sha256
    */
    public function getSha256()
    {
        if (array_key_exists("sha256", $this->_propDict)) {
            return $this->_propDict["sha256"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sha256
    *
    * @param string $val The value of the sha256
    *
    * @return Process
    */
    public function setSha256($val)
    {
        $this->_propDict["sha256"] = $val;
        return $this;
    }
    /**
    * Gets the accountName
    *
    * @return string The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountName
    *
    * @param string $val The value of the accountName
    *
    * @return Process
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
}
