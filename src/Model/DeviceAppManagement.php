<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAppManagement File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* DeviceAppManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAppManagement extends Entity
{
    /**
    * Gets the isEnabledForMicrosoftStoreForBusiness
    * Whether the account is enabled for syncing applications from the Microsoft Store for Business.
    *
    * @return bool|null The isEnabledForMicrosoftStoreForBusiness
    */
    public function getIsEnabledForMicrosoftStoreForBusiness()
    {
        if (array_key_exists("isEnabledForMicrosoftStoreForBusiness", $this->_propDict)) {
            return $this->_propDict["isEnabledForMicrosoftStoreForBusiness"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabledForMicrosoftStoreForBusiness
    * Whether the account is enabled for syncing applications from the Microsoft Store for Business.
    *
    * @param bool $val The isEnabledForMicrosoftStoreForBusiness
    *
    * @return DeviceAppManagement
    */
    public function setIsEnabledForMicrosoftStoreForBusiness($val)
    {
        $this->_propDict["isEnabledForMicrosoftStoreForBusiness"] = boolval($val);
        return $this;
    }

    /**
    * Gets the microsoftStoreForBusinessLanguage
    * The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -&amp;lt;country/regioncode2&amp;gt;, where  is a lowercase two-letter code derived from ISO 639-1 and &amp;lt;country/regioncode2&amp;gt; is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
    *
    * @return string|null The microsoftStoreForBusinessLanguage
    */
    public function getMicrosoftStoreForBusinessLanguage()
    {
        if (array_key_exists("microsoftStoreForBusinessLanguage", $this->_propDict)) {
            return $this->_propDict["microsoftStoreForBusinessLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoftStoreForBusinessLanguage
    * The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -&amp;lt;country/regioncode2&amp;gt;, where  is a lowercase two-letter code derived from ISO 639-1 and &amp;lt;country/regioncode2&amp;gt; is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
    *
    * @param string $val The microsoftStoreForBusinessLanguage
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLanguage($val)
    {
        $this->_propDict["microsoftStoreForBusinessLanguage"] = $val;
        return $this;
    }

    /**
    * Gets the microsoftStoreForBusinessLastCompletedApplicationSyncTime
    * The last time an application sync from the Microsoft Store for Business was completed.
    *
    * @return \DateTime|null The microsoftStoreForBusinessLastCompletedApplicationSyncTime
    */
    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime()
    {
        if (array_key_exists("microsoftStoreForBusinessLastCompletedApplicationSyncTime", $this->_propDict) && !is_null($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"])) {
            if (is_a($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"], "\DateTime")) {
                return $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"];
            } else {
                $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"] = new \DateTime($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"]);
                return $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"];
            }
        }
        return null;
    }

    /**
    * Sets the microsoftStoreForBusinessLastCompletedApplicationSyncTime
    * The last time an application sync from the Microsoft Store for Business was completed.
    *
    * @param \DateTime $val The microsoftStoreForBusinessLastCompletedApplicationSyncTime
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime($val)
    {
        $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"] = $val;
        return $this;
    }

    /**
    * Gets the microsoftStoreForBusinessLastSuccessfulSyncDateTime
    * The last time the apps from the Microsoft Store for Business were synced successfully for the account.
    *
    * @return \DateTime|null The microsoftStoreForBusinessLastSuccessfulSyncDateTime
    */
    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("microsoftStoreForBusinessLastSuccessfulSyncDateTime", $this->_propDict) && !is_null($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"])) {
            if (is_a($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"], "\DateTime")) {
                return $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"];
            } else {
                $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"] = new \DateTime($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"]);
                return $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the microsoftStoreForBusinessLastSuccessfulSyncDateTime
    * The last time the apps from the Microsoft Store for Business were synced successfully for the account.
    *
    * @param \DateTime $val The microsoftStoreForBusinessLastSuccessfulSyncDateTime
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime($val)
    {
        $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the managedEBooks
    * The Managed eBook.
     *
     * @return ManagedEBook[]|null The managedEBooks
     */
    public function getManagedEBooks()
    {
        if (array_key_exists('managedEBooks', $this->_propDict) && !is_null($this->_propDict['managedEBooks'])) {
            $managedEBooks = [];
            if (count($this->_propDict['managedEBooks']) > 0 && is_a($this->_propDict['managedEBooks'][0], 'ManagedEBook')) {
                return $this->_propDict['managedEBooks'];
            }
            foreach ($this->_propDict['managedEBooks'] as $singleValue) {
                $managedEBooks []= new ManagedEBook($singleValue);
            }
            $this->_propDict['managedEBooks'] = $managedEBooks;
            return $this->_propDict['managedEBooks'];
        }
        return null;
    }

    /**
    * Sets the managedEBooks
    * The Managed eBook.
    *
    * @param ManagedEBook[] $val The managedEBooks
    *
    * @return DeviceAppManagement
    */
    public function setManagedEBooks($val)
    {
        $this->_propDict["managedEBooks"] = $val;
        return $this;
    }


     /**
     * Gets the mobileAppCategories
    * The mobile app categories.
     *
     * @return MobileAppCategory[]|null The mobileAppCategories
     */
    public function getMobileAppCategories()
    {
        if (array_key_exists('mobileAppCategories', $this->_propDict) && !is_null($this->_propDict['mobileAppCategories'])) {
            $mobileAppCategories = [];
            if (count($this->_propDict['mobileAppCategories']) > 0 && is_a($this->_propDict['mobileAppCategories'][0], 'MobileAppCategory')) {
                return $this->_propDict['mobileAppCategories'];
            }
            foreach ($this->_propDict['mobileAppCategories'] as $singleValue) {
                $mobileAppCategories []= new MobileAppCategory($singleValue);
            }
            $this->_propDict['mobileAppCategories'] = $mobileAppCategories;
            return $this->_propDict['mobileAppCategories'];
        }
        return null;
    }

    /**
    * Sets the mobileAppCategories
    * The mobile app categories.
    *
    * @param MobileAppCategory[] $val The mobileAppCategories
    *
    * @return DeviceAppManagement
    */
    public function setMobileAppCategories($val)
    {
        $this->_propDict["mobileAppCategories"] = $val;
        return $this;
    }


     /**
     * Gets the mobileAppConfigurations
    * The Managed Device Mobile Application Configurations.
     *
     * @return ManagedDeviceMobileAppConfiguration[]|null The mobileAppConfigurations
     */
    public function getMobileAppConfigurations()
    {
        if (array_key_exists('mobileAppConfigurations', $this->_propDict) && !is_null($this->_propDict['mobileAppConfigurations'])) {
            $mobileAppConfigurations = [];
            if (count($this->_propDict['mobileAppConfigurations']) > 0 && is_a($this->_propDict['mobileAppConfigurations'][0], 'ManagedDeviceMobileAppConfiguration')) {
                return $this->_propDict['mobileAppConfigurations'];
            }
            foreach ($this->_propDict['mobileAppConfigurations'] as $singleValue) {
                $mobileAppConfigurations []= new ManagedDeviceMobileAppConfiguration($singleValue);
            }
            $this->_propDict['mobileAppConfigurations'] = $mobileAppConfigurations;
            return $this->_propDict['mobileAppConfigurations'];
        }
        return null;
    }

    /**
    * Sets the mobileAppConfigurations
    * The Managed Device Mobile Application Configurations.
    *
    * @param ManagedDeviceMobileAppConfiguration[] $val The mobileAppConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setMobileAppConfigurations($val)
    {
        $this->_propDict["mobileAppConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the mobileApps
    * The mobile apps.
     *
     * @return MobileApp[]|null The mobileApps
     */
    public function getMobileApps()
    {
        if (array_key_exists('mobileApps', $this->_propDict) && !is_null($this->_propDict['mobileApps'])) {
            $mobileApps = [];
            if (count($this->_propDict['mobileApps']) > 0 && is_a($this->_propDict['mobileApps'][0], 'MobileApp')) {
                return $this->_propDict['mobileApps'];
            }
            foreach ($this->_propDict['mobileApps'] as $singleValue) {
                $mobileApps []= new MobileApp($singleValue);
            }
            $this->_propDict['mobileApps'] = $mobileApps;
            return $this->_propDict['mobileApps'];
        }
        return null;
    }

    /**
    * Sets the mobileApps
    * The mobile apps.
    *
    * @param MobileApp[] $val The mobileApps
    *
    * @return DeviceAppManagement
    */
    public function setMobileApps($val)
    {
        $this->_propDict["mobileApps"] = $val;
        return $this;
    }


     /**
     * Gets the vppTokens
    * List of Vpp tokens for this organization.
     *
     * @return VppToken[]|null The vppTokens
     */
    public function getVppTokens()
    {
        if (array_key_exists('vppTokens', $this->_propDict) && !is_null($this->_propDict['vppTokens'])) {
            $vppTokens = [];
            if (count($this->_propDict['vppTokens']) > 0 && is_a($this->_propDict['vppTokens'][0], 'VppToken')) {
                return $this->_propDict['vppTokens'];
            }
            foreach ($this->_propDict['vppTokens'] as $singleValue) {
                $vppTokens []= new VppToken($singleValue);
            }
            $this->_propDict['vppTokens'] = $vppTokens;
            return $this->_propDict['vppTokens'];
        }
        return null;
    }

    /**
    * Sets the vppTokens
    * List of Vpp tokens for this organization.
    *
    * @param VppToken[] $val The vppTokens
    *
    * @return DeviceAppManagement
    */
    public function setVppTokens($val)
    {
        $this->_propDict["vppTokens"] = $val;
        return $this;
    }


     /**
     * Gets the androidManagedAppProtections
    * Android managed app policies.
     *
     * @return AndroidManagedAppProtection[]|null The androidManagedAppProtections
     */
    public function getAndroidManagedAppProtections()
    {
        if (array_key_exists('androidManagedAppProtections', $this->_propDict) && !is_null($this->_propDict['androidManagedAppProtections'])) {
            $androidManagedAppProtections = [];
            if (count($this->_propDict['androidManagedAppProtections']) > 0 && is_a($this->_propDict['androidManagedAppProtections'][0], 'AndroidManagedAppProtection')) {
                return $this->_propDict['androidManagedAppProtections'];
            }
            foreach ($this->_propDict['androidManagedAppProtections'] as $singleValue) {
                $androidManagedAppProtections []= new AndroidManagedAppProtection($singleValue);
            }
            $this->_propDict['androidManagedAppProtections'] = $androidManagedAppProtections;
            return $this->_propDict['androidManagedAppProtections'];
        }
        return null;
    }

    /**
    * Sets the androidManagedAppProtections
    * Android managed app policies.
    *
    * @param AndroidManagedAppProtection[] $val The androidManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setAndroidManagedAppProtections($val)
    {
        $this->_propDict["androidManagedAppProtections"] = $val;
        return $this;
    }


     /**
     * Gets the defaultManagedAppProtections
    * Default managed app policies.
     *
     * @return DefaultManagedAppProtection[]|null The defaultManagedAppProtections
     */
    public function getDefaultManagedAppProtections()
    {
        if (array_key_exists('defaultManagedAppProtections', $this->_propDict) && !is_null($this->_propDict['defaultManagedAppProtections'])) {
            $defaultManagedAppProtections = [];
            if (count($this->_propDict['defaultManagedAppProtections']) > 0 && is_a($this->_propDict['defaultManagedAppProtections'][0], 'DefaultManagedAppProtection')) {
                return $this->_propDict['defaultManagedAppProtections'];
            }
            foreach ($this->_propDict['defaultManagedAppProtections'] as $singleValue) {
                $defaultManagedAppProtections []= new DefaultManagedAppProtection($singleValue);
            }
            $this->_propDict['defaultManagedAppProtections'] = $defaultManagedAppProtections;
            return $this->_propDict['defaultManagedAppProtections'];
        }
        return null;
    }

    /**
    * Sets the defaultManagedAppProtections
    * Default managed app policies.
    *
    * @param DefaultManagedAppProtection[] $val The defaultManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setDefaultManagedAppProtections($val)
    {
        $this->_propDict["defaultManagedAppProtections"] = $val;
        return $this;
    }


     /**
     * Gets the iosManagedAppProtections
    * iOS managed app policies.
     *
     * @return IosManagedAppProtection[]|null The iosManagedAppProtections
     */
    public function getIosManagedAppProtections()
    {
        if (array_key_exists('iosManagedAppProtections', $this->_propDict) && !is_null($this->_propDict['iosManagedAppProtections'])) {
            $iosManagedAppProtections = [];
            if (count($this->_propDict['iosManagedAppProtections']) > 0 && is_a($this->_propDict['iosManagedAppProtections'][0], 'IosManagedAppProtection')) {
                return $this->_propDict['iosManagedAppProtections'];
            }
            foreach ($this->_propDict['iosManagedAppProtections'] as $singleValue) {
                $iosManagedAppProtections []= new IosManagedAppProtection($singleValue);
            }
            $this->_propDict['iosManagedAppProtections'] = $iosManagedAppProtections;
            return $this->_propDict['iosManagedAppProtections'];
        }
        return null;
    }

    /**
    * Sets the iosManagedAppProtections
    * iOS managed app policies.
    *
    * @param IosManagedAppProtection[] $val The iosManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setIosManagedAppProtections($val)
    {
        $this->_propDict["iosManagedAppProtections"] = $val;
        return $this;
    }


     /**
     * Gets the managedAppPolicies
    * Managed app policies.
     *
     * @return ManagedAppPolicy[]|null The managedAppPolicies
     */
    public function getManagedAppPolicies()
    {
        if (array_key_exists('managedAppPolicies', $this->_propDict) && !is_null($this->_propDict['managedAppPolicies'])) {
            $managedAppPolicies = [];
            if (count($this->_propDict['managedAppPolicies']) > 0 && is_a($this->_propDict['managedAppPolicies'][0], 'ManagedAppPolicy')) {
                return $this->_propDict['managedAppPolicies'];
            }
            foreach ($this->_propDict['managedAppPolicies'] as $singleValue) {
                $managedAppPolicies []= new ManagedAppPolicy($singleValue);
            }
            $this->_propDict['managedAppPolicies'] = $managedAppPolicies;
            return $this->_propDict['managedAppPolicies'];
        }
        return null;
    }

    /**
    * Sets the managedAppPolicies
    * Managed app policies.
    *
    * @param ManagedAppPolicy[] $val The managedAppPolicies
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppPolicies($val)
    {
        $this->_propDict["managedAppPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the managedAppRegistrations
    * The managed app registrations.
     *
     * @return ManagedAppRegistration[]|null The managedAppRegistrations
     */
    public function getManagedAppRegistrations()
    {
        if (array_key_exists('managedAppRegistrations', $this->_propDict) && !is_null($this->_propDict['managedAppRegistrations'])) {
            $managedAppRegistrations = [];
            if (count($this->_propDict['managedAppRegistrations']) > 0 && is_a($this->_propDict['managedAppRegistrations'][0], 'ManagedAppRegistration')) {
                return $this->_propDict['managedAppRegistrations'];
            }
            foreach ($this->_propDict['managedAppRegistrations'] as $singleValue) {
                $managedAppRegistrations []= new ManagedAppRegistration($singleValue);
            }
            $this->_propDict['managedAppRegistrations'] = $managedAppRegistrations;
            return $this->_propDict['managedAppRegistrations'];
        }
        return null;
    }

    /**
    * Sets the managedAppRegistrations
    * The managed app registrations.
    *
    * @param ManagedAppRegistration[] $val The managedAppRegistrations
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppRegistrations($val)
    {
        $this->_propDict["managedAppRegistrations"] = $val;
        return $this;
    }


     /**
     * Gets the managedAppStatuses
    * The managed app statuses.
     *
     * @return ManagedAppStatus[]|null The managedAppStatuses
     */
    public function getManagedAppStatuses()
    {
        if (array_key_exists('managedAppStatuses', $this->_propDict) && !is_null($this->_propDict['managedAppStatuses'])) {
            $managedAppStatuses = [];
            if (count($this->_propDict['managedAppStatuses']) > 0 && is_a($this->_propDict['managedAppStatuses'][0], 'ManagedAppStatus')) {
                return $this->_propDict['managedAppStatuses'];
            }
            foreach ($this->_propDict['managedAppStatuses'] as $singleValue) {
                $managedAppStatuses []= new ManagedAppStatus($singleValue);
            }
            $this->_propDict['managedAppStatuses'] = $managedAppStatuses;
            return $this->_propDict['managedAppStatuses'];
        }
        return null;
    }

    /**
    * Sets the managedAppStatuses
    * The managed app statuses.
    *
    * @param ManagedAppStatus[] $val The managedAppStatuses
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppStatuses($val)
    {
        $this->_propDict["managedAppStatuses"] = $val;
        return $this;
    }


     /**
     * Gets the mdmWindowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are MDM enrolled.
     *
     * @return MdmWindowsInformationProtectionPolicy[]|null The mdmWindowsInformationProtectionPolicies
     */
    public function getMdmWindowsInformationProtectionPolicies()
    {
        if (array_key_exists('mdmWindowsInformationProtectionPolicies', $this->_propDict) && !is_null($this->_propDict['mdmWindowsInformationProtectionPolicies'])) {
            $mdmWindowsInformationProtectionPolicies = [];
            if (count($this->_propDict['mdmWindowsInformationProtectionPolicies']) > 0 && is_a($this->_propDict['mdmWindowsInformationProtectionPolicies'][0], 'MdmWindowsInformationProtectionPolicy')) {
                return $this->_propDict['mdmWindowsInformationProtectionPolicies'];
            }
            foreach ($this->_propDict['mdmWindowsInformationProtectionPolicies'] as $singleValue) {
                $mdmWindowsInformationProtectionPolicies []= new MdmWindowsInformationProtectionPolicy($singleValue);
            }
            $this->_propDict['mdmWindowsInformationProtectionPolicies'] = $mdmWindowsInformationProtectionPolicies;
            return $this->_propDict['mdmWindowsInformationProtectionPolicies'];
        }
        return null;
    }

    /**
    * Sets the mdmWindowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are MDM enrolled.
    *
    * @param MdmWindowsInformationProtectionPolicy[] $val The mdmWindowsInformationProtectionPolicies
    *
    * @return DeviceAppManagement
    */
    public function setMdmWindowsInformationProtectionPolicies($val)
    {
        $this->_propDict["mdmWindowsInformationProtectionPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the targetedManagedAppConfigurations
    * Targeted managed app configurations.
     *
     * @return TargetedManagedAppConfiguration[]|null The targetedManagedAppConfigurations
     */
    public function getTargetedManagedAppConfigurations()
    {
        if (array_key_exists('targetedManagedAppConfigurations', $this->_propDict) && !is_null($this->_propDict['targetedManagedAppConfigurations'])) {
            $targetedManagedAppConfigurations = [];
            if (count($this->_propDict['targetedManagedAppConfigurations']) > 0 && is_a($this->_propDict['targetedManagedAppConfigurations'][0], 'TargetedManagedAppConfiguration')) {
                return $this->_propDict['targetedManagedAppConfigurations'];
            }
            foreach ($this->_propDict['targetedManagedAppConfigurations'] as $singleValue) {
                $targetedManagedAppConfigurations []= new TargetedManagedAppConfiguration($singleValue);
            }
            $this->_propDict['targetedManagedAppConfigurations'] = $targetedManagedAppConfigurations;
            return $this->_propDict['targetedManagedAppConfigurations'];
        }
        return null;
    }

    /**
    * Sets the targetedManagedAppConfigurations
    * Targeted managed app configurations.
    *
    * @param TargetedManagedAppConfiguration[] $val The targetedManagedAppConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setTargetedManagedAppConfigurations($val)
    {
        $this->_propDict["targetedManagedAppConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the windowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are not MDM enrolled.
     *
     * @return WindowsInformationProtectionPolicy[]|null The windowsInformationProtectionPolicies
     */
    public function getWindowsInformationProtectionPolicies()
    {
        if (array_key_exists('windowsInformationProtectionPolicies', $this->_propDict) && !is_null($this->_propDict['windowsInformationProtectionPolicies'])) {
            $windowsInformationProtectionPolicies = [];
            if (count($this->_propDict['windowsInformationProtectionPolicies']) > 0 && is_a($this->_propDict['windowsInformationProtectionPolicies'][0], 'WindowsInformationProtectionPolicy')) {
                return $this->_propDict['windowsInformationProtectionPolicies'];
            }
            foreach ($this->_propDict['windowsInformationProtectionPolicies'] as $singleValue) {
                $windowsInformationProtectionPolicies []= new WindowsInformationProtectionPolicy($singleValue);
            }
            $this->_propDict['windowsInformationProtectionPolicies'] = $windowsInformationProtectionPolicies;
            return $this->_propDict['windowsInformationProtectionPolicies'];
        }
        return null;
    }

    /**
    * Sets the windowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are not MDM enrolled.
    *
    * @param WindowsInformationProtectionPolicy[] $val The windowsInformationProtectionPolicies
    *
    * @return DeviceAppManagement
    */
    public function setWindowsInformationProtectionPolicies($val)
    {
        $this->_propDict["windowsInformationProtectionPolicies"] = $val;
        return $this;
    }

}
