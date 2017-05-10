<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Organization File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Organization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Organization extends DirectoryObject
{

     /** 
     * Gets the assignedPlans
     *
     * @return array The assignedPlans
     */
    public function getAssignedPlans()
    {
        if (array_key_exists("assignedPlans", $this->_propDict)) {
           return $this->_propDict["assignedPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedPlans
    *
    * @param AssignedPlan $val The assignedPlans
    *
    * @return Organization
    */
    public function setAssignedPlans($val)
    {
		$this->_propDict["assignedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessPhones
    *
    * @return string The businessPhones
    */
    public function getBusinessPhones()
    {
        if (array_key_exists("businessPhones", $this->_propDict)) {
            return $this->_propDict["businessPhones"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessPhones
    *
    * @param string $val The businessPhones
    *
    * @return Organization
    */
    public function setBusinessPhones($val)
    {
        $this->_propDict["businessPhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the city
    *
    * @return string The city
    */
    public function getCity()
    {
        if (array_key_exists("city", $this->_propDict)) {
            return $this->_propDict["city"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the city
    *
    * @param string $val The city
    *
    * @return Organization
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    
    /**
    * Gets the country
    *
    * @return string The country
    */
    public function getCountry()
    {
        if (array_key_exists("country", $this->_propDict)) {
            return $this->_propDict["country"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the country
    *
    * @param string $val The country
    *
    * @return Organization
    */
    public function setCountry($val)
    {
        $this->_propDict["country"] = $val;
        return $this;
    }
    
    /**
    * Gets the countryLetterCode
    *
    * @return string The countryLetterCode
    */
    public function getCountryLetterCode()
    {
        if (array_key_exists("countryLetterCode", $this->_propDict)) {
            return $this->_propDict["countryLetterCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countryLetterCode
    *
    * @param string $val The countryLetterCode
    *
    * @return Organization
    */
    public function setCountryLetterCode($val)
    {
        $this->_propDict["countryLetterCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return Organization
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the marketingNotificationEmails
    *
    * @return string The marketingNotificationEmails
    */
    public function getMarketingNotificationEmails()
    {
        if (array_key_exists("marketingNotificationEmails", $this->_propDict)) {
            return $this->_propDict["marketingNotificationEmails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the marketingNotificationEmails
    *
    * @param string $val The marketingNotificationEmails
    *
    * @return Organization
    */
    public function setMarketingNotificationEmails($val)
    {
        $this->_propDict["marketingNotificationEmails"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesLastSyncDateTime
    *
    * @return \DateTime The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["onPremisesLastSyncDateTime"];
            } else {
                $this->_propDict["onPremisesLastSyncDateTime"] = new \DateTime($this->_propDict["onPremisesLastSyncDateTime"]);
                return $this->_propDict["onPremisesLastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onPremisesLastSyncDateTime
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return Organization
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSyncEnabled
    *
    * @return bool The onPremisesSyncEnabled
    */
    public function getOnPremisesSyncEnabled()
    {
        if (array_key_exists("onPremisesSyncEnabled", $this->_propDict)) {
            return $this->_propDict["onPremisesSyncEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSyncEnabled
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return Organization
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the postalCode
    *
    * @return string The postalCode
    */
    public function getPostalCode()
    {
        if (array_key_exists("postalCode", $this->_propDict)) {
            return $this->_propDict["postalCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the postalCode
    *
    * @param string $val The postalCode
    *
    * @return Organization
    */
    public function setPostalCode($val)
    {
        $this->_propDict["postalCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredLanguage
    *
    * @return string The preferredLanguage
    */
    public function getPreferredLanguage()
    {
        if (array_key_exists("preferredLanguage", $this->_propDict)) {
            return $this->_propDict["preferredLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredLanguage
    *
    * @param string $val The preferredLanguage
    *
    * @return Organization
    */
    public function setPreferredLanguage($val)
    {
        $this->_propDict["preferredLanguage"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisionedPlans
     *
     * @return array The provisionedPlans
     */
    public function getProvisionedPlans()
    {
        if (array_key_exists("provisionedPlans", $this->_propDict)) {
           return $this->_propDict["provisionedPlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the provisionedPlans
    *
    * @param ProvisionedPlan $val The provisionedPlans
    *
    * @return Organization
    */
    public function setProvisionedPlans($val)
    {
		$this->_propDict["provisionedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityComplianceNotificationMails
    *
    * @return string The securityComplianceNotificationMails
    */
    public function getSecurityComplianceNotificationMails()
    {
        if (array_key_exists("securityComplianceNotificationMails", $this->_propDict)) {
            return $this->_propDict["securityComplianceNotificationMails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityComplianceNotificationMails
    *
    * @param string $val The securityComplianceNotificationMails
    *
    * @return Organization
    */
    public function setSecurityComplianceNotificationMails($val)
    {
        $this->_propDict["securityComplianceNotificationMails"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityComplianceNotificationPhones
    *
    * @return string The securityComplianceNotificationPhones
    */
    public function getSecurityComplianceNotificationPhones()
    {
        if (array_key_exists("securityComplianceNotificationPhones", $this->_propDict)) {
            return $this->_propDict["securityComplianceNotificationPhones"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the securityComplianceNotificationPhones
    *
    * @param string $val The securityComplianceNotificationPhones
    *
    * @return Organization
    */
    public function setSecurityComplianceNotificationPhones($val)
    {
        $this->_propDict["securityComplianceNotificationPhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the state
    *
    * @param string $val The state
    *
    * @return Organization
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the street
    *
    * @return string The street
    */
    public function getStreet()
    {
        if (array_key_exists("street", $this->_propDict)) {
            return $this->_propDict["street"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the street
    *
    * @param string $val The street
    *
    * @return Organization
    */
    public function setStreet($val)
    {
        $this->_propDict["street"] = $val;
        return $this;
    }
    
    /**
    * Gets the technicalNotificationMails
    *
    * @return string The technicalNotificationMails
    */
    public function getTechnicalNotificationMails()
    {
        if (array_key_exists("technicalNotificationMails", $this->_propDict)) {
            return $this->_propDict["technicalNotificationMails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the technicalNotificationMails
    *
    * @param string $val The technicalNotificationMails
    *
    * @return Organization
    */
    public function setTechnicalNotificationMails($val)
    {
        $this->_propDict["technicalNotificationMails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the verifiedDomains
     *
     * @return array The verifiedDomains
     */
    public function getVerifiedDomains()
    {
        if (array_key_exists("verifiedDomains", $this->_propDict)) {
           return $this->_propDict["verifiedDomains"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the verifiedDomains
    *
    * @param VerifiedDomain $val The verifiedDomains
    *
    * @return Organization
    */
    public function setVerifiedDomains($val)
    {
		$this->_propDict["verifiedDomains"] = $val;
        return $this;
    }
    
}