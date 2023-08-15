<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSDmgApp File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* MacOSDmgApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSDmgApp extends MobileLobApp
{
    /**
    * Gets the ignoreVersionDetection
    * When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. The default value is FALSE.
    *
    * @return bool|null The ignoreVersionDetection
    */
    public function getIgnoreVersionDetection()
    {
        if (array_key_exists("ignoreVersionDetection", $this->_propDict)) {
            return $this->_propDict["ignoreVersionDetection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ignoreVersionDetection
    * When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. The default value is FALSE.
    *
    * @param bool $val The ignoreVersionDetection
    *
    * @return MacOSDmgApp
    */
    public function setIgnoreVersionDetection($val)
    {
        $this->_propDict["ignoreVersionDetection"] = boolval($val);
        return $this;
    }


     /**
     * Gets the includedApps
    * The list of .apps expected to be installed by the DMG (Apple Disk Image)
     *
     * @return array|null The includedApps
     */
    public function getIncludedApps()
    {
        if (array_key_exists("includedApps", $this->_propDict)) {
           return $this->_propDict["includedApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includedApps
    * The list of .apps expected to be installed by the DMG (Apple Disk Image)
    *
    * @param MacOSIncludedApp[] $val The includedApps
    *
    * @return MacOSDmgApp
    */
    public function setIncludedApps($val)
    {
        $this->_propDict["includedApps"] = $val;
        return $this;
    }

    /**
    * Gets the minimumSupportedOperatingSystem
    * ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
    *
    * @return MacOSMinimumOperatingSystem|null The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "\Beta\Microsoft\Graph\Model\MacOSMinimumOperatingSystem") || is_null($this->_propDict["minimumSupportedOperatingSystem"])) {
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
    * ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
    *
    * @param MacOSMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return MacOSDmgApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }

    /**
    * Gets the primaryBundleId
    * The bundleId of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleIdentifier in the app's bundle configuration.
    *
    * @return string|null The primaryBundleId
    */
    public function getPrimaryBundleId()
    {
        if (array_key_exists("primaryBundleId", $this->_propDict)) {
            return $this->_propDict["primaryBundleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryBundleId
    * The bundleId of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleIdentifier in the app's bundle configuration.
    *
    * @param string $val The primaryBundleId
    *
    * @return MacOSDmgApp
    */
    public function setPrimaryBundleId($val)
    {
        $this->_propDict["primaryBundleId"] = $val;
        return $this;
    }

    /**
    * Gets the primaryBundleVersion
    * The version of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleShortVersion in the app's bundle configuration.
    *
    * @return string|null The primaryBundleVersion
    */
    public function getPrimaryBundleVersion()
    {
        if (array_key_exists("primaryBundleVersion", $this->_propDict)) {
            return $this->_propDict["primaryBundleVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryBundleVersion
    * The version of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleShortVersion in the app's bundle configuration.
    *
    * @param string $val The primaryBundleVersion
    *
    * @return MacOSDmgApp
    */
    public function setPrimaryBundleVersion($val)
    {
        $this->_propDict["primaryBundleVersion"] = $val;
        return $this;
    }

}
