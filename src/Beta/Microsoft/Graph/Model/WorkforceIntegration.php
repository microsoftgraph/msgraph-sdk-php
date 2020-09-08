<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkforceIntegration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* WorkforceIntegration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkforceIntegration extends ChangeTrackedEntity
{
    /**
    * Gets the apiVersion
    * API version for the call back URL. Start with 1.
    *
    * @return int The apiVersion
    */
    public function getApiVersion()
    {
        if (array_key_exists("apiVersion", $this->_propDict)) {
            return $this->_propDict["apiVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the apiVersion
    * API version for the call back URL. Start with 1.
    *
    * @param int $val The apiVersion
    *
    * @return WorkforceIntegration
    */
    public function setApiVersion($val)
    {
        $this->_propDict["apiVersion"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the workforce integration.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Name of the workforce integration.
    *
    * @param string $val The displayName
    *
    * @return WorkforceIntegration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the eligibilityFilteringEnabledEntities
    *
    * @return EligibilityFilteringEnabledEntities The eligibilityFilteringEnabledEntities
    */
    public function getEligibilityFilteringEnabledEntities()
    {
        if (array_key_exists("eligibilityFilteringEnabledEntities", $this->_propDict)) {
            if (is_a($this->_propDict["eligibilityFilteringEnabledEntities"], "Beta\Microsoft\Graph\Model\EligibilityFilteringEnabledEntities")) {
                return $this->_propDict["eligibilityFilteringEnabledEntities"];
            } else {
                $this->_propDict["eligibilityFilteringEnabledEntities"] = new EligibilityFilteringEnabledEntities($this->_propDict["eligibilityFilteringEnabledEntities"]);
                return $this->_propDict["eligibilityFilteringEnabledEntities"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eligibilityFilteringEnabledEntities
    *
    * @param EligibilityFilteringEnabledEntities $val The eligibilityFilteringEnabledEntities
    *
    * @return WorkforceIntegration
    */
    public function setEligibilityFilteringEnabledEntities($val)
    {
        $this->_propDict["eligibilityFilteringEnabledEntities"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryption
    * The workforce integration encryption resource.
    *
    * @return WorkforceIntegrationEncryption The encryption
    */
    public function getEncryption()
    {
        if (array_key_exists("encryption", $this->_propDict)) {
            if (is_a($this->_propDict["encryption"], "Beta\Microsoft\Graph\Model\WorkforceIntegrationEncryption")) {
                return $this->_propDict["encryption"];
            } else {
                $this->_propDict["encryption"] = new WorkforceIntegrationEncryption($this->_propDict["encryption"]);
                return $this->_propDict["encryption"];
            }
        }
        return null;
    }
    
    /**
    * Sets the encryption
    * The workforce integration encryption resource.
    *
    * @param WorkforceIntegrationEncryption $val The encryption
    *
    * @return WorkforceIntegration
    */
    public function setEncryption($val)
    {
        $this->_propDict["encryption"] = $val;
        return $this;
    }
    
    /**
    * Gets the isActive
    * Indicates whether this workforce integration is currently active and available.
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isActive
    * Indicates whether this workforce integration is currently active and available.
    *
    * @param bool $val The isActive
    *
    * @return WorkforceIntegration
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the supportedEntities
    * The Shifts entities supported for synchronous change notifications. Shifts will make a call back to the url provided on client changes on those entities added here. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, openshift, openShiftRequest, userShiftPreferences
    *
    * @return WorkforceIntegrationSupportedEntities The supportedEntities
    */
    public function getSupportedEntities()
    {
        if (array_key_exists("supportedEntities", $this->_propDict)) {
            if (is_a($this->_propDict["supportedEntities"], "Beta\Microsoft\Graph\Model\WorkforceIntegrationSupportedEntities")) {
                return $this->_propDict["supportedEntities"];
            } else {
                $this->_propDict["supportedEntities"] = new WorkforceIntegrationSupportedEntities($this->_propDict["supportedEntities"]);
                return $this->_propDict["supportedEntities"];
            }
        }
        return null;
    }
    
    /**
    * Sets the supportedEntities
    * The Shifts entities supported for synchronous change notifications. Shifts will make a call back to the url provided on client changes on those entities added here. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, openshift, openShiftRequest, userShiftPreferences
    *
    * @param WorkforceIntegrationSupportedEntities $val The supportedEntities
    *
    * @return WorkforceIntegration
    */
    public function setSupportedEntities($val)
    {
        $this->_propDict["supportedEntities"] = $val;
        return $this;
    }
    
    /**
    * Gets the supports
    *
    * @return WorkforceIntegrationSupportedEntities The supports
    */
    public function getSupports()
    {
        if (array_key_exists("supports", $this->_propDict)) {
            if (is_a($this->_propDict["supports"], "Beta\Microsoft\Graph\Model\WorkforceIntegrationSupportedEntities")) {
                return $this->_propDict["supports"];
            } else {
                $this->_propDict["supports"] = new WorkforceIntegrationSupportedEntities($this->_propDict["supports"]);
                return $this->_propDict["supports"];
            }
        }
        return null;
    }
    
    /**
    * Sets the supports
    *
    * @param WorkforceIntegrationSupportedEntities $val The supports
    *
    * @return WorkforceIntegration
    */
    public function setSupports($val)
    {
        $this->_propDict["supports"] = $val;
        return $this;
    }
    
    /**
    * Gets the url
    * Workforce Integration URL for callbacks from the Shifts service.
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the url
    * Workforce Integration URL for callbacks from the Shifts service.
    *
    * @param string $val The url
    *
    * @return WorkforceIntegration
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
}