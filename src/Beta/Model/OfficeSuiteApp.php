<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeSuiteApp File
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
* OfficeSuiteApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OfficeSuiteApp extends MobileApp
{
    /**
    * Gets the autoAcceptEula
    *
    * @return bool The autoAcceptEula
    */
    public function getAutoAcceptEula()
    {
        if (array_key_exists("autoAcceptEula", $this->_propDict)) {
            return $this->_propDict["autoAcceptEula"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the autoAcceptEula
    *
    * @param bool $val The autoAcceptEula
    *
    * @return OfficeSuiteApp
    */
    public function setAutoAcceptEula($val)
    {
        $this->_propDict["autoAcceptEula"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the productIds
     *
     * @return array The productIds
     */
    public function getProductIds()
    {
        if (array_key_exists("productIds", $this->_propDict)) {
           return $this->_propDict["productIds"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the productIds
    *
    * @param OfficeProductId $val The productIds
    *
    * @return OfficeSuiteApp
    */
    public function setProductIds($val)
    {
		$this->_propDict["productIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the excludedApps
    *
    * @return ExcludedApps The excludedApps
    */
    public function getExcludedApps()
    {
        if (array_key_exists("excludedApps", $this->_propDict)) {
            if (is_a($this->_propDict["excludedApps"], "Microsoft\Graph\Beta\Model\ExcludedApps")) {
                return $this->_propDict["excludedApps"];
            } else {
                $this->_propDict["excludedApps"] = new ExcludedApps($this->_propDict["excludedApps"]);
                return $this->_propDict["excludedApps"];
            }
        }
        return null;
    }
    
    /**
    * Sets the excludedApps
    *
    * @param ExcludedApps $val The excludedApps
    *
    * @return OfficeSuiteApp
    */
    public function setExcludedApps($val)
    {
        $this->_propDict["excludedApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the useSharedComputerActivation
    *
    * @return bool The useSharedComputerActivation
    */
    public function getUseSharedComputerActivation()
    {
        if (array_key_exists("useSharedComputerActivation", $this->_propDict)) {
            return $this->_propDict["useSharedComputerActivation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the useSharedComputerActivation
    *
    * @param bool $val The useSharedComputerActivation
    *
    * @return OfficeSuiteApp
    */
    public function setUseSharedComputerActivation($val)
    {
        $this->_propDict["useSharedComputerActivation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the updateChannel
    *
    * @return OfficeUpdateChannel The updateChannel
    */
    public function getUpdateChannel()
    {
        if (array_key_exists("updateChannel", $this->_propDict)) {
            if (is_a($this->_propDict["updateChannel"], "Microsoft\Graph\Beta\Model\OfficeUpdateChannel")) {
                return $this->_propDict["updateChannel"];
            } else {
                $this->_propDict["updateChannel"] = new OfficeUpdateChannel($this->_propDict["updateChannel"]);
                return $this->_propDict["updateChannel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the updateChannel
    *
    * @param OfficeUpdateChannel $val The updateChannel
    *
    * @return OfficeSuiteApp
    */
    public function setUpdateChannel($val)
    {
        $this->_propDict["updateChannel"] = $val;
        return $this;
    }
    
    /**
    * Gets the officePlatformArchitecture
    *
    * @return WindowsArchitecture The officePlatformArchitecture
    */
    public function getOfficePlatformArchitecture()
    {
        if (array_key_exists("officePlatformArchitecture", $this->_propDict)) {
            if (is_a($this->_propDict["officePlatformArchitecture"], "Microsoft\Graph\Beta\Model\WindowsArchitecture")) {
                return $this->_propDict["officePlatformArchitecture"];
            } else {
                $this->_propDict["officePlatformArchitecture"] = new WindowsArchitecture($this->_propDict["officePlatformArchitecture"]);
                return $this->_propDict["officePlatformArchitecture"];
            }
        }
        return null;
    }
    
    /**
    * Sets the officePlatformArchitecture
    *
    * @param WindowsArchitecture $val The officePlatformArchitecture
    *
    * @return OfficeSuiteApp
    */
    public function setOfficePlatformArchitecture($val)
    {
        $this->_propDict["officePlatformArchitecture"] = $val;
        return $this;
    }
    
    /**
    * Gets the localesToInstall
    *
    * @return string The localesToInstall
    */
    public function getLocalesToInstall()
    {
        if (array_key_exists("localesToInstall", $this->_propDict)) {
            return $this->_propDict["localesToInstall"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localesToInstall
    *
    * @param string $val The localesToInstall
    *
    * @return OfficeSuiteApp
    */
    public function setLocalesToInstall($val)
    {
        $this->_propDict["localesToInstall"] = $val;
        return $this;
    }
    
    /**
    * Gets the installProgressDisplayLevel
    *
    * @return OfficeSuiteInstallProgressDisplayLevel The installProgressDisplayLevel
    */
    public function getInstallProgressDisplayLevel()
    {
        if (array_key_exists("installProgressDisplayLevel", $this->_propDict)) {
            if (is_a($this->_propDict["installProgressDisplayLevel"], "Microsoft\Graph\Beta\Model\OfficeSuiteInstallProgressDisplayLevel")) {
                return $this->_propDict["installProgressDisplayLevel"];
            } else {
                $this->_propDict["installProgressDisplayLevel"] = new OfficeSuiteInstallProgressDisplayLevel($this->_propDict["installProgressDisplayLevel"]);
                return $this->_propDict["installProgressDisplayLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installProgressDisplayLevel
    *
    * @param OfficeSuiteInstallProgressDisplayLevel $val The installProgressDisplayLevel
    *
    * @return OfficeSuiteApp
    */
    public function setInstallProgressDisplayLevel($val)
    {
        $this->_propDict["installProgressDisplayLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the shouldUninstallOlderVersionsOfOffice
    *
    * @return bool The shouldUninstallOlderVersionsOfOffice
    */
    public function getShouldUninstallOlderVersionsOfOffice()
    {
        if (array_key_exists("shouldUninstallOlderVersionsOfOffice", $this->_propDict)) {
            return $this->_propDict["shouldUninstallOlderVersionsOfOffice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shouldUninstallOlderVersionsOfOffice
    *
    * @param bool $val The shouldUninstallOlderVersionsOfOffice
    *
    * @return OfficeSuiteApp
    */
    public function setShouldUninstallOlderVersionsOfOffice($val)
    {
        $this->_propDict["shouldUninstallOlderVersionsOfOffice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the targetVersion
    *
    * @return string The targetVersion
    */
    public function getTargetVersion()
    {
        if (array_key_exists("targetVersion", $this->_propDict)) {
            return $this->_propDict["targetVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetVersion
    *
    * @param string $val The targetVersion
    *
    * @return OfficeSuiteApp
    */
    public function setTargetVersion($val)
    {
        $this->_propDict["targetVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the updateVersion
    *
    * @return string The updateVersion
    */
    public function getUpdateVersion()
    {
        if (array_key_exists("updateVersion", $this->_propDict)) {
            return $this->_propDict["updateVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the updateVersion
    *
    * @param string $val The updateVersion
    *
    * @return OfficeSuiteApp
    */
    public function setUpdateVersion($val)
    {
        $this->_propDict["updateVersion"] = $val;
        return $this;
    }
    
}