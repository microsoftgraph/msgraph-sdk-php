<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSPkgApp File
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
* MacOSPkgApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSPkgApp extends MobileLobApp
{
    /**
    * Gets the ignoreVersionDetection
    * A value indicating whether the app's version will be used to detect the app after it is installed on a device. Set this to true for apps that use a self-update feature. Set this to false to install the app when it is not already installed on the device, or if the deploying app's version number does not match the version that's already installed on the device. The default value is false.
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
    * A value indicating whether the app's version will be used to detect the app after it is installed on a device. Set this to true for apps that use a self-update feature. Set this to false to install the app when it is not already installed on the device, or if the deploying app's version number does not match the version that's already installed on the device. The default value is false.
    *
    * @param bool $val The ignoreVersionDetection
    *
    * @return MacOSPkgApp
    */
    public function setIgnoreVersionDetection($val)
    {
        $this->_propDict["ignoreVersionDetection"] = boolval($val);
        return $this;
    }


     /**
     * Gets the includedApps
    * The list of apps expected to be installed by the .pkg.
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
    * The list of apps expected to be installed by the .pkg.
    *
    * @param MacOSIncludedApp[] $val The includedApps
    *
    * @return MacOSPkgApp
    */
    public function setIncludedApps($val)
    {
        $this->_propDict["includedApps"] = $val;
        return $this;
    }

    /**
    * Gets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
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
    * The value for the minimum applicable operating system.
    *
    * @param MacOSMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return MacOSPkgApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }

    /**
    * Gets the postInstallScript
    * ComplexType macOSAppScript the contains the post-install script for the app. This will execute on the macOS device after the app is installed.
    *
    * @return MacOSAppScript|null The postInstallScript
    */
    public function getPostInstallScript()
    {
        if (array_key_exists("postInstallScript", $this->_propDict)) {
            if (is_a($this->_propDict["postInstallScript"], "\Beta\Microsoft\Graph\Model\MacOSAppScript") || is_null($this->_propDict["postInstallScript"])) {
                return $this->_propDict["postInstallScript"];
            } else {
                $this->_propDict["postInstallScript"] = new MacOSAppScript($this->_propDict["postInstallScript"]);
                return $this->_propDict["postInstallScript"];
            }
        }
        return null;
    }

    /**
    * Sets the postInstallScript
    * ComplexType macOSAppScript the contains the post-install script for the app. This will execute on the macOS device after the app is installed.
    *
    * @param MacOSAppScript $val The postInstallScript
    *
    * @return MacOSPkgApp
    */
    public function setPostInstallScript($val)
    {
        $this->_propDict["postInstallScript"] = $val;
        return $this;
    }

    /**
    * Gets the preInstallScript
    * ComplexType macOSAppScript the contains the post-install script for the app. This will execute on the macOS device after the app is installed.
    *
    * @return MacOSAppScript|null The preInstallScript
    */
    public function getPreInstallScript()
    {
        if (array_key_exists("preInstallScript", $this->_propDict)) {
            if (is_a($this->_propDict["preInstallScript"], "\Beta\Microsoft\Graph\Model\MacOSAppScript") || is_null($this->_propDict["preInstallScript"])) {
                return $this->_propDict["preInstallScript"];
            } else {
                $this->_propDict["preInstallScript"] = new MacOSAppScript($this->_propDict["preInstallScript"]);
                return $this->_propDict["preInstallScript"];
            }
        }
        return null;
    }

    /**
    * Sets the preInstallScript
    * ComplexType macOSAppScript the contains the post-install script for the app. This will execute on the macOS device after the app is installed.
    *
    * @param MacOSAppScript $val The preInstallScript
    *
    * @return MacOSPkgApp
    */
    public function setPreInstallScript($val)
    {
        $this->_propDict["preInstallScript"] = $val;
        return $this;
    }

    /**
    * Gets the primaryBundleId
    * The primary CFBundleIdentifier of the .pkg.
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
    * The primary CFBundleIdentifier of the .pkg.
    *
    * @param string $val The primaryBundleId
    *
    * @return MacOSPkgApp
    */
    public function setPrimaryBundleId($val)
    {
        $this->_propDict["primaryBundleId"] = $val;
        return $this;
    }

    /**
    * Gets the primaryBundleVersion
    * The primary CFBundleVersion of the .pkg.
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
    * The primary CFBundleVersion of the .pkg.
    *
    * @param string $val The primaryBundleVersion
    *
    * @return MacOSPkgApp
    */
    public function setPrimaryBundleVersion($val)
    {
        $this->_propDict["primaryBundleVersion"] = $val;
        return $this;
    }

}
