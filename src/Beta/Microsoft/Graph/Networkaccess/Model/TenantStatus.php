<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

/**
* TenantStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantStatus extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the onboardingErrorMessage
    *
    * @return string|null The onboardingErrorMessage
    */
    public function getOnboardingErrorMessage()
    {
        if (array_key_exists("onboardingErrorMessage", $this->_propDict)) {
            return $this->_propDict["onboardingErrorMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onboardingErrorMessage
    *
    * @param string $val The onboardingErrorMessage
    *
    * @return TenantStatus
    */
    public function setOnboardingErrorMessage($val)
    {
        $this->_propDict["onboardingErrorMessage"] = $val;
        return $this;
    }

    /**
    * Gets the onboardingStatus
    *
    * @return OnboardingStatus|null The onboardingStatus
    */
    public function getOnboardingStatus()
    {
        if (array_key_exists("onboardingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["onboardingStatus"], "\Beta\Microsoft\Graph\Networkaccess\Model\OnboardingStatus") || is_null($this->_propDict["onboardingStatus"])) {
                return $this->_propDict["onboardingStatus"];
            } else {
                $this->_propDict["onboardingStatus"] = new OnboardingStatus($this->_propDict["onboardingStatus"]);
                return $this->_propDict["onboardingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the onboardingStatus
    *
    * @param OnboardingStatus $val The onboardingStatus
    *
    * @return TenantStatus
    */
    public function setOnboardingStatus($val)
    {
        $this->_propDict["onboardingStatus"] = $val;
        return $this;
    }

}
