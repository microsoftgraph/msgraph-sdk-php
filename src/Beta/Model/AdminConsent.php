<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdminConsent File
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
* AdminConsent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AdminConsent extends Entity
{

    /**
    * Gets the shareAPNSData
    * The admin consent state of sharing user and device data to Apple.
    *
    * @return AdminConsentState The shareAPNSData
    */
    public function getShareAPNSData()
    {
        if (array_key_exists("shareAPNSData", $this->_propDict)) {
            if (is_a($this->_propDict["shareAPNSData"], "Microsoft\Graph\Beta\Model\AdminConsentState")) {
                return $this->_propDict["shareAPNSData"];
            } else {
                $this->_propDict["shareAPNSData"] = new AdminConsentState($this->_propDict["shareAPNSData"]);
                return $this->_propDict["shareAPNSData"];
            }
        }
        return null;
    }

    /**
    * Sets the shareAPNSData
    * The admin consent state of sharing user and device data to Apple.
    *
    * @param AdminConsentState $val The value to assign to the shareAPNSData
    *
    * @return AdminConsent The AdminConsent
    */
    public function setShareAPNSData($val)
    {
        $this->_propDict["shareAPNSData"] = $val;
         return $this;
    }

    /**
    * Gets the shareUserExperienceAnalyticsData
    * Gets or sets the admin consent for sharing User experience analytics data.
    *
    * @return AdminConsentState The shareUserExperienceAnalyticsData
    */
    public function getShareUserExperienceAnalyticsData()
    {
        if (array_key_exists("shareUserExperienceAnalyticsData", $this->_propDict)) {
            if (is_a($this->_propDict["shareUserExperienceAnalyticsData"], "Microsoft\Graph\Beta\Model\AdminConsentState")) {
                return $this->_propDict["shareUserExperienceAnalyticsData"];
            } else {
                $this->_propDict["shareUserExperienceAnalyticsData"] = new AdminConsentState($this->_propDict["shareUserExperienceAnalyticsData"]);
                return $this->_propDict["shareUserExperienceAnalyticsData"];
            }
        }
        return null;
    }

    /**
    * Sets the shareUserExperienceAnalyticsData
    * Gets or sets the admin consent for sharing User experience analytics data.
    *
    * @param AdminConsentState $val The value to assign to the shareUserExperienceAnalyticsData
    *
    * @return AdminConsent The AdminConsent
    */
    public function setShareUserExperienceAnalyticsData($val)
    {
        $this->_propDict["shareUserExperienceAnalyticsData"] = $val;
         return $this;
    }
}
