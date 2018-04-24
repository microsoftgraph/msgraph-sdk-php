<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileSecurityState File
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
* FileSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class FileSecurityState extends Entity
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
    * @return FileSecurityState
    */
    public function setAuthenticodeHash256($val)
    {
        $this->_propDict["authenticodeHash256"] = $val;
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
    * @return FileSecurityState
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
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
    * @return FileSecurityState
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
    /**
    * Gets the riskScore
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskScore
    *
    * @param string $val The value of the riskScore
    *
    * @return FileSecurityState
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
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
    * @return FileSecurityState
    */
    public function setSha256($val)
    {
        $this->_propDict["sha256"] = $val;
        return $this;
    }
}
