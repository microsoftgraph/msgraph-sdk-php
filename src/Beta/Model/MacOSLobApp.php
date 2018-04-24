<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSLobApp File
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
* MacOSLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MacOSLobApp extends MobileLobApp
{
    /**
    * Gets the bundleId
    *
    * @return string The bundleId
    */
    public function getBundleId()
    {
        if (array_key_exists("bundleId", $this->_propDict)) {
            return $this->_propDict["bundleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bundleId
    *
    * @param string $val The bundleId
    *
    * @return MacOSLobApp
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumSupportedOperatingSystem
    *
    * @return MacOSMinimumOperatingSystem The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "Microsoft\Graph\Beta\Model\MacOSMinimumOperatingSystem")) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new MacOSMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the minimumSupportedOperatingSystem
    *
    * @param MacOSMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return MacOSLobApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the buildNumber
    *
    * @return string The buildNumber
    */
    public function getBuildNumber()
    {
        if (array_key_exists("buildNumber", $this->_propDict)) {
            return $this->_propDict["buildNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the buildNumber
    *
    * @param string $val The buildNumber
    *
    * @return MacOSLobApp
    */
    public function setBuildNumber($val)
    {
        $this->_propDict["buildNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the versionNumber
    *
    * @return string The versionNumber
    */
    public function getVersionNumber()
    {
        if (array_key_exists("versionNumber", $this->_propDict)) {
            return $this->_propDict["versionNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the versionNumber
    *
    * @param string $val The versionNumber
    *
    * @return MacOSLobApp
    */
    public function setVersionNumber($val)
    {
        $this->_propDict["versionNumber"] = $val;
        return $this;
    }
    

     /** 
     * Gets the childApps
     *
     * @return array The childApps
     */
    public function getChildApps()
    {
        if (array_key_exists("childApps", $this->_propDict)) {
           return $this->_propDict["childApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the childApps
    *
    * @param MacOSLobChildApp $val The childApps
    *
    * @return MacOSLobApp
    */
    public function setChildApps($val)
    {
		$this->_propDict["childApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityVersion
    *
    * @return string The identityVersion
    */
    public function getIdentityVersion()
    {
        if (array_key_exists("identityVersion", $this->_propDict)) {
            return $this->_propDict["identityVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityVersion
    *
    * @param string $val The identityVersion
    *
    * @return MacOSLobApp
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the md5HashChunkSize
    *
    * @return int The md5HashChunkSize
    */
    public function getMd5HashChunkSize()
    {
        if (array_key_exists("md5HashChunkSize", $this->_propDict)) {
            return $this->_propDict["md5HashChunkSize"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the md5HashChunkSize
    *
    * @param int $val The md5HashChunkSize
    *
    * @return MacOSLobApp
    */
    public function setMd5HashChunkSize($val)
    {
        $this->_propDict["md5HashChunkSize"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the md5Hash
    *
    * @return string The md5Hash
    */
    public function getMd5Hash()
    {
        if (array_key_exists("md5Hash", $this->_propDict)) {
            return $this->_propDict["md5Hash"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the md5Hash
    *
    * @param string $val The md5Hash
    *
    * @return MacOSLobApp
    */
    public function setMd5Hash($val)
    {
        $this->_propDict["md5Hash"] = $val;
        return $this;
    }
    
}