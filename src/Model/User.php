<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* User File
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
* User class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class User extends DirectoryObject
{
    /**
    * Gets the aboutMe
    * A freeform text entry field for the user to describe themselves.
    *
    * @return string The aboutMe
    */
    public function getAboutMe()
    {
        if (array_key_exists("aboutMe", $this->_propDict)) {
            return $this->_propDict["aboutMe"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the aboutMe
    * A freeform text entry field for the user to describe themselves.
    *
    * @param string $val The aboutMe
    *
    * @return User
    */
    public function setAboutMe($val)
    {
        $this->_propDict["aboutMe"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountEnabled
    * true if the account is enabled; otherwise, false. This property is required when a user is created. Supports $filter.
    *
    * @return bool The accountEnabled
    */
    public function getAccountEnabled()
    {
        if (array_key_exists("accountEnabled", $this->_propDict)) {
            return $this->_propDict["accountEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountEnabled
    * true if the account is enabled; otherwise, false. This property is required when a user is created. Supports $filter.
    *
    * @param bool $val The accountEnabled
    *
    * @return User
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the assignedLicenses
    * The licenses that are assigned to the user. Not nullable.
     *
     * @return array The assignedLicenses
     */
    public function getAssignedLicenses()
    {
        if (array_key_exists("assignedLicenses", $this->_propDict)) {
           return $this->_propDict["assignedLicenses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedLicenses
    * The licenses that are assigned to the user. Not nullable.
    *
    * @param string $val The assignedLicenses
    *
    * @return User
    */
    public function setAssignedLicenses($val)
    {
		$this->_propDict["assignedLicenses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignedPlans
    * The plans that are assigned to the user. Read-only. Not nullable.
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
    * The plans that are assigned to the user. Read-only. Not nullable.
    *
    * @param string $val The assignedPlans
    *
    * @return User
    */
    public function setAssignedPlans($val)
    {
		$this->_propDict["assignedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the birthday
    * The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
    *
    * @return \DateTime The birthday
    */
    public function getBirthday()
    {
        if (array_key_exists("birthday", $this->_propDict)) {
            if (is_a($this->_propDict["birthday"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["birthday"];
            } else {
                $this->_propDict["birthday"] = new \DateTime($this->_propDict["birthday"]);
                return $this->_propDict["birthday"];
            }
        }
        return null;
    }
    
    /**
    * Sets the birthday
    * The birthday of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
    *
    * @param string $val The birthday
    *
    * @return User
    */
    public function setBirthday($val)
    {
        $this->_propDict["birthday"] = $val;
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
    * @return User
    */
    public function setBusinessPhones($val)
    {
        $this->_propDict["businessPhones"] = $val;
        return $this;
    }
    
    /**
    * Gets the city
    * The city in which the user is located. Supports $filter.
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
    * The city in which the user is located. Supports $filter.
    *
    * @param string $val The city
    *
    * @return User
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    
    /**
    * Gets the companyName
    *
    * @return string The companyName
    */
    public function getCompanyName()
    {
        if (array_key_exists("companyName", $this->_propDict)) {
            return $this->_propDict["companyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the companyName
    *
    * @param string $val The companyName
    *
    * @return User
    */
    public function setCompanyName($val)
    {
        $this->_propDict["companyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the country
    * The country/region in which the user is located; for example, “US” or “UK”. Supports $filter.
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
    * The country/region in which the user is located; for example, “US” or “UK”. Supports $filter.
    *
    * @param string $val The country
    *
    * @return User
    */
    public function setCountry($val)
    {
        $this->_propDict["country"] = $val;
        return $this;
    }
    
    /**
    * Gets the department
    * The name for the department in which the user works. Supports $filter.
    *
    * @return string The department
    */
    public function getDepartment()
    {
        if (array_key_exists("department", $this->_propDict)) {
            return $this->_propDict["department"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the department
    * The name for the department in which the user works. Supports $filter.
    *
    * @param string $val The department
    *
    * @return User
    */
    public function setDepartment($val)
    {
        $this->_propDict["department"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby.
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
    * The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby.
    *
    * @param string $val The displayName
    *
    * @return User
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the givenName
    * The given name (first name) of the user. Supports $filter.
    *
    * @return string The givenName
    */
    public function getGivenName()
    {
        if (array_key_exists("givenName", $this->_propDict)) {
            return $this->_propDict["givenName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the givenName
    * The given name (first name) of the user. Supports $filter.
    *
    * @param string $val The givenName
    *
    * @return User
    */
    public function setGivenName($val)
    {
        $this->_propDict["givenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the hireDate
    * The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
    *
    * @return \DateTime The hireDate
    */
    public function getHireDate()
    {
        if (array_key_exists("hireDate", $this->_propDict)) {
            if (is_a($this->_propDict["hireDate"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["hireDate"];
            } else {
                $this->_propDict["hireDate"] = new \DateTime($this->_propDict["hireDate"]);
                return $this->_propDict["hireDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hireDate
    * The hire date of the user. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
    *
    * @param string $val The hireDate
    *
    * @return User
    */
    public function setHireDate($val)
    {
        $this->_propDict["hireDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the interests
    * A list for the user to describe their interests.
    *
    * @return string The interests
    */
    public function getInterests()
    {
        if (array_key_exists("interests", $this->_propDict)) {
            return $this->_propDict["interests"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the interests
    * A list for the user to describe their interests.
    *
    * @param string $val The interests
    *
    * @return User
    */
    public function setInterests($val)
    {
        $this->_propDict["interests"] = $val;
        return $this;
    }
    
    /**
    * Gets the jobTitle
    * The user’s job title. Supports $filter.
    *
    * @return string The jobTitle
    */
    public function getJobTitle()
    {
        if (array_key_exists("jobTitle", $this->_propDict)) {
            return $this->_propDict["jobTitle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the jobTitle
    * The user’s job title. Supports $filter.
    *
    * @param string $val The jobTitle
    *
    * @return User
    */
    public function setJobTitle($val)
    {
        $this->_propDict["jobTitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the mail
    * The SMTP address for the user, for example, "jeff@contoso.onmicrosoft.com". Read-Only. Supports $filter.
    *
    * @return string The mail
    */
    public function getMail()
    {
        if (array_key_exists("mail", $this->_propDict)) {
            return $this->_propDict["mail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mail
    * The SMTP address for the user, for example, "jeff@contoso.onmicrosoft.com". Read-Only. Supports $filter.
    *
    * @param string $val The mail
    *
    * @return User
    */
    public function setMail($val)
    {
        $this->_propDict["mail"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailboxSettings
    * Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale and time zone.
    *
    * @return MailboxSettings The mailboxSettings
    */
    public function getMailboxSettings()
    {
        if (array_key_exists("mailboxSettings", $this->_propDict)) {
            if (is_a($this->_propDict["mailboxSettings"], "Microsoft\Graph\Model\MailboxSettings")) {
                return $this->_propDict["mailboxSettings"];
            } else {
                $this->_propDict["mailboxSettings"] = new MailboxSettings($this->_propDict["mailboxSettings"]);
                return $this->_propDict["mailboxSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mailboxSettings
    * Settings for the primary mailbox of the signed-in user. You can get or update settings for sending automatic replies to incoming messages, locale and time zone.
    *
    * @param string $val The mailboxSettings
    *
    * @return User
    */
    public function setMailboxSettings($val)
    {
        $this->_propDict["mailboxSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the mailNickname
    * The mail alias for the user. This property must be specified when a user is created. Supports $filter.
    *
    * @return string The mailNickname
    */
    public function getMailNickname()
    {
        if (array_key_exists("mailNickname", $this->_propDict)) {
            return $this->_propDict["mailNickname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailNickname
    * The mail alias for the user. This property must be specified when a user is created. Supports $filter.
    *
    * @param string $val The mailNickname
    *
    * @return User
    */
    public function setMailNickname($val)
    {
        $this->_propDict["mailNickname"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobilePhone
    * The primary cellular telephone number for the user.
    *
    * @return string The mobilePhone
    */
    public function getMobilePhone()
    {
        if (array_key_exists("mobilePhone", $this->_propDict)) {
            return $this->_propDict["mobilePhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mobilePhone
    * The primary cellular telephone number for the user.
    *
    * @param string $val The mobilePhone
    *
    * @return User
    */
    public function setMobilePhone($val)
    {
        $this->_propDict["mobilePhone"] = $val;
        return $this;
    }
    
    /**
    * Gets the mySite
    * The URL for the user's personal site.
    *
    * @return string The mySite
    */
    public function getMySite()
    {
        if (array_key_exists("mySite", $this->_propDict)) {
            return $this->_propDict["mySite"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mySite
    * The URL for the user's personal site.
    *
    * @param string $val The mySite
    *
    * @return User
    */
    public function setMySite($val)
    {
        $this->_propDict["mySite"] = $val;
        return $this;
    }
    
    /**
    * Gets the officeLocation
    * The office location in the user's place of business.
    *
    * @return string The officeLocation
    */
    public function getOfficeLocation()
    {
        if (array_key_exists("officeLocation", $this->_propDict)) {
            return $this->_propDict["officeLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the officeLocation
    * The office location in the user's place of business.
    *
    * @param string $val The officeLocation
    *
    * @return User
    */
    public function setOfficeLocation($val)
    {
        $this->_propDict["officeLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesImmutableId
    * This property is used to associate an on-premises Active Directory user account to their Azure AD user object. This property must be specified when creating a new user account in the Graph if you are using a federated domain for the user’s userPrincipalName (UPN) property. Important: The $ and  characters cannot be used when specifying this property. Supports $filter.
    *
    * @return string The onPremisesImmutableId
    */
    public function getOnPremisesImmutableId()
    {
        if (array_key_exists("onPremisesImmutableId", $this->_propDict)) {
            return $this->_propDict["onPremisesImmutableId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesImmutableId
    * This property is used to associate an on-premises Active Directory user account to their Azure AD user object. This property must be specified when creating a new user account in the Graph if you are using a federated domain for the user’s userPrincipalName (UPN) property. Important: The $ and  characters cannot be used when specifying this property. Supports $filter.
    *
    * @param string $val The onPremisesImmutableId
    *
    * @return User
    */
    public function setOnPremisesImmutableId($val)
    {
        $this->_propDict["onPremisesImmutableId"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesLastSyncDateTime
    * Indicates the last time at which the object was synced with the on-premises directory; for example: "2013-02-16T03:04:54Z". The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only.
    *
    * @return \DateTime The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "Microsoft\Graph\Model\\DateTime")) {
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
    * Indicates the last time at which the object was synced with the on-premises directory; for example: "2013-02-16T03:04:54Z". The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only.
    *
    * @param string $val The onPremisesLastSyncDateTime
    *
    * @return User
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSecurityIdentifier
    * Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only.
    *
    * @return string The onPremisesSecurityIdentifier
    */
    public function getOnPremisesSecurityIdentifier()
    {
        if (array_key_exists("onPremisesSecurityIdentifier", $this->_propDict)) {
            return $this->_propDict["onPremisesSecurityIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSecurityIdentifier
    * Contains the on-premises security identifier (SID) for the user that was synchronized from on-premises to the cloud. Read-only.
    *
    * @param string $val The onPremisesSecurityIdentifier
    *
    * @return User
    */
    public function setOnPremisesSecurityIdentifier($val)
    {
        $this->_propDict["onPremisesSecurityIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only
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
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return User
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passwordPolicies
    * Specifies password policies for the user. This value is an enumeration with one possible value being “DisableStrongPassword”, which allows weaker passwords than the default policy to be specified. “DisablePasswordExpiration” can also be specified. The two may be specified together; for example: "DisablePasswordExpiration, DisableStrongPassword".
    *
    * @return string The passwordPolicies
    */
    public function getPasswordPolicies()
    {
        if (array_key_exists("passwordPolicies", $this->_propDict)) {
            return $this->_propDict["passwordPolicies"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passwordPolicies
    * Specifies password policies for the user. This value is an enumeration with one possible value being “DisableStrongPassword”, which allows weaker passwords than the default policy to be specified. “DisablePasswordExpiration” can also be specified. The two may be specified together; for example: "DisablePasswordExpiration, DisableStrongPassword".
    *
    * @param string $val The passwordPolicies
    *
    * @return User
    */
    public function setPasswordPolicies($val)
    {
        $this->_propDict["passwordPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the passwordProfile
    * Specifies the password profile for the user. The profile contains the user’s password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required.
    *
    * @return PasswordProfile The passwordProfile
    */
    public function getPasswordProfile()
    {
        if (array_key_exists("passwordProfile", $this->_propDict)) {
            if (is_a($this->_propDict["passwordProfile"], "Microsoft\Graph\Model\PasswordProfile")) {
                return $this->_propDict["passwordProfile"];
            } else {
                $this->_propDict["passwordProfile"] = new PasswordProfile($this->_propDict["passwordProfile"]);
                return $this->_propDict["passwordProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the passwordProfile
    * Specifies the password profile for the user. The profile contains the user’s password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the passwordPolicies property. By default, a strong password is required.
    *
    * @param string $val The passwordProfile
    *
    * @return User
    */
    public function setPasswordProfile($val)
    {
        $this->_propDict["passwordProfile"] = $val;
        return $this;
    }
    
    /**
    * Gets the pastProjects
    * A list for the user to enumerate their past projects.
    *
    * @return string The pastProjects
    */
    public function getPastProjects()
    {
        if (array_key_exists("pastProjects", $this->_propDict)) {
            return $this->_propDict["pastProjects"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pastProjects
    * A list for the user to enumerate their past projects.
    *
    * @param string $val The pastProjects
    *
    * @return User
    */
    public function setPastProjects($val)
    {
        $this->_propDict["pastProjects"] = $val;
        return $this;
    }
    
    /**
    * Gets the postalCode
    * The postal code for the user's postal address. The postal code is specific to the user's country/region. In the United States of America, this attribute contains the ZIP code.
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
    * The postal code for the user's postal address. The postal code is specific to the user's country/region. In the United States of America, this attribute contains the ZIP code.
    *
    * @param string $val The postalCode
    *
    * @return User
    */
    public function setPostalCode($val)
    {
        $this->_propDict["postalCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredLanguage
    * The preferred language for the user. Should follow ISO 639-1 Code; for example "en-US".
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
    * The preferred language for the user. Should follow ISO 639-1 Code; for example "en-US".
    *
    * @param string $val The preferredLanguage
    *
    * @return User
    */
    public function setPreferredLanguage($val)
    {
        $this->_propDict["preferredLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferredName
    * The preferred name for the user.
    *
    * @return string The preferredName
    */
    public function getPreferredName()
    {
        if (array_key_exists("preferredName", $this->_propDict)) {
            return $this->_propDict["preferredName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preferredName
    * The preferred name for the user.
    *
    * @param string $val The preferredName
    *
    * @return User
    */
    public function setPreferredName($val)
    {
        $this->_propDict["preferredName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisionedPlans
    * The plans that are provisioned for the user. Read-only. Not nullable.
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
    * The plans that are provisioned for the user. Read-only. Not nullable.
    *
    * @param string $val The provisionedPlans
    *
    * @return User
    */
    public function setProvisionedPlans($val)
    {
		$this->_propDict["provisionedPlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyAddresses
    * For example: ["SMTP: bob@contoso.com", "smtp: bob@sales.contoso.com"] The any operator is required for filter expressions on multi-valued properties. Read-only, Not nullable. Supports $filter.
    *
    * @return string The proxyAddresses
    */
    public function getProxyAddresses()
    {
        if (array_key_exists("proxyAddresses", $this->_propDict)) {
            return $this->_propDict["proxyAddresses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyAddresses
    * For example: ["SMTP: bob@contoso.com", "smtp: bob@sales.contoso.com"] The any operator is required for filter expressions on multi-valued properties. Read-only, Not nullable. Supports $filter.
    *
    * @param string $val The proxyAddresses
    *
    * @return User
    */
    public function setProxyAddresses($val)
    {
        $this->_propDict["proxyAddresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the responsibilities
    * A list for the user to enumerate their responsibilities.
    *
    * @return string The responsibilities
    */
    public function getResponsibilities()
    {
        if (array_key_exists("responsibilities", $this->_propDict)) {
            return $this->_propDict["responsibilities"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the responsibilities
    * A list for the user to enumerate their responsibilities.
    *
    * @param string $val The responsibilities
    *
    * @return User
    */
    public function setResponsibilities($val)
    {
        $this->_propDict["responsibilities"] = $val;
        return $this;
    }
    
    /**
    * Gets the schools
    * A list for the user to enumerate the schools they have attended.
    *
    * @return string The schools
    */
    public function getSchools()
    {
        if (array_key_exists("schools", $this->_propDict)) {
            return $this->_propDict["schools"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the schools
    * A list for the user to enumerate the schools they have attended.
    *
    * @param string $val The schools
    *
    * @return User
    */
    public function setSchools($val)
    {
        $this->_propDict["schools"] = $val;
        return $this;
    }
    
    /**
    * Gets the skills
    * A list for the user to enumerate their skills.
    *
    * @return string The skills
    */
    public function getSkills()
    {
        if (array_key_exists("skills", $this->_propDict)) {
            return $this->_propDict["skills"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skills
    * A list for the user to enumerate their skills.
    *
    * @param string $val The skills
    *
    * @return User
    */
    public function setSkills($val)
    {
        $this->_propDict["skills"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The state or province in the user's address. Supports $filter.
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
    * The state or province in the user's address. Supports $filter.
    *
    * @param string $val The state
    *
    * @return User
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the streetAddress
    * The street address of the user's place of business.
    *
    * @return string The streetAddress
    */
    public function getStreetAddress()
    {
        if (array_key_exists("streetAddress", $this->_propDict)) {
            return $this->_propDict["streetAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the streetAddress
    * The street address of the user's place of business.
    *
    * @param string $val The streetAddress
    *
    * @return User
    */
    public function setStreetAddress($val)
    {
        $this->_propDict["streetAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the surname
    * The user's surname (family name or last name). Supports $filter.
    *
    * @return string The surname
    */
    public function getSurname()
    {
        if (array_key_exists("surname", $this->_propDict)) {
            return $this->_propDict["surname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the surname
    * The user's surname (family name or last name). Supports $filter.
    *
    * @param string $val The surname
    *
    * @return User
    */
    public function setSurname($val)
    {
        $this->_propDict["surname"] = $val;
        return $this;
    }
    
    /**
    * Gets the usageLocation
    * A two letter country code (ISO standard 3166). Required for users that will be assigned licenses due to legal requirement to check for availability of services in countries.  Examples include: "US", "JP", and "GB". Not nullable. Supports $filter.
    *
    * @return string The usageLocation
    */
    public function getUsageLocation()
    {
        if (array_key_exists("usageLocation", $this->_propDict)) {
            return $this->_propDict["usageLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usageLocation
    * A two letter country code (ISO standard 3166). Required for users that will be assigned licenses due to legal requirement to check for availability of services in countries.  Examples include: "US", "JP", and "GB". Not nullable. Supports $filter.
    *
    * @param string $val The usageLocation
    *
    * @return User
    */
    public function setUsageLocation($val)
    {
        $this->_propDict["usageLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization. Supports $filter and $orderby.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the verifiedDomains property of organization. Supports $filter and $orderby.
    *
    * @param string $val The userPrincipalName
    *
    * @return User
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userType
    * A string value that can be used to classify user types in your directory, such as “Member” and “Guest”. Supports $filter.
    *
    * @return string The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            return $this->_propDict["userType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userType
    * A string value that can be used to classify user types in your directory, such as “Member” and “Guest”. Supports $filter.
    *
    * @param string $val The userType
    *
    * @return User
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
        return $this;
    }
    
    /**
    * Gets the calendar
    * The user's primary calendar. Read-only.
    *
    * @return Calendar The calendar
    */
    public function getCalendar()
    {
        if (array_key_exists("calendar", $this->_propDict)) {
            if (is_a($this->_propDict["calendar"], "Microsoft\Graph\Model\Calendar")) {
                return $this->_propDict["calendar"];
            } else {
                $this->_propDict["calendar"] = new Calendar($this->_propDict["calendar"]);
                return $this->_propDict["calendar"];
            }
        }
        return null;
    }
    
    /**
    * Sets the calendar
    * The user's primary calendar. Read-only.
    *
    * @param string $val The calendar
    *
    * @return User
    */
    public function setCalendar($val)
    {
        $this->_propDict["calendar"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendarGroups
    * The user's calendar groups. Read-only. Nullable.
     *
     * @return array The calendarGroups
     */
    public function getCalendarGroups()
    {
        if (array_key_exists("calendarGroups", $this->_propDict)) {
           return $this->_propDict["calendarGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendarGroups
    * The user's calendar groups. Read-only. Nullable.
    *
    * @param string $val The calendarGroups
    *
    * @return User
    */
    public function setCalendarGroups($val)
    {
		$this->_propDict["calendarGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendars
    * The user's calendars. Read-only. Nullable.
     *
     * @return array The calendars
     */
    public function getCalendars()
    {
        if (array_key_exists("calendars", $this->_propDict)) {
           return $this->_propDict["calendars"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendars
    * The user's calendars. Read-only. Nullable.
    *
    * @param string $val The calendars
    *
    * @return User
    */
    public function setCalendars($val)
    {
		$this->_propDict["calendars"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendarView
    * The calendar view for the calendar. Read-only. Nullable.
     *
     * @return array The calendarView
     */
    public function getCalendarView()
    {
        if (array_key_exists("calendarView", $this->_propDict)) {
           return $this->_propDict["calendarView"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendarView
    * The calendar view for the calendar. Read-only. Nullable.
    *
    * @param string $val The calendarView
    *
    * @return User
    */
    public function setCalendarView($val)
    {
		$this->_propDict["calendarView"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contactFolders
    * The user's contacts folders. Read-only. Nullable.
     *
     * @return array The contactFolders
     */
    public function getContactFolders()
    {
        if (array_key_exists("contactFolders", $this->_propDict)) {
           return $this->_propDict["contactFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contactFolders
    * The user's contacts folders. Read-only. Nullable.
    *
    * @param string $val The contactFolders
    *
    * @return User
    */
    public function setContactFolders($val)
    {
		$this->_propDict["contactFolders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contacts
    * The user's contacts. Read-only. Nullable.
     *
     * @return array The contacts
     */
    public function getContacts()
    {
        if (array_key_exists("contacts", $this->_propDict)) {
           return $this->_propDict["contacts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contacts
    * The user's contacts. Read-only. Nullable.
    *
    * @param string $val The contacts
    *
    * @return User
    */
    public function setContacts($val)
    {
		$this->_propDict["contacts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the createdObjects
    * Directory objects that were created by the user. Read-only. Nullable.
     *
     * @return array The createdObjects
     */
    public function getCreatedObjects()
    {
        if (array_key_exists("createdObjects", $this->_propDict)) {
           return $this->_propDict["createdObjects"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the createdObjects
    * Directory objects that were created by the user. Read-only. Nullable.
    *
    * @param string $val The createdObjects
    *
    * @return User
    */
    public function setCreatedObjects($val)
    {
		$this->_propDict["createdObjects"] = $val;
        return $this;
    }
    

     /** 
     * Gets the directReports
    * The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable.
     *
     * @return array The directReports
     */
    public function getDirectReports()
    {
        if (array_key_exists("directReports", $this->_propDict)) {
           return $this->_propDict["directReports"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the directReports
    * The users and contacts that report to the user. (The users and contacts that have their manager property set to this user.) Read-only. Nullable.
    *
    * @param string $val The directReports
    *
    * @return User
    */
    public function setDirectReports($val)
    {
		$this->_propDict["directReports"] = $val;
        return $this;
    }
    
    /**
    * Gets the drive
    * The user's OneDrive. Read-only.
    *
    * @return Drive The drive
    */
    public function getDrive()
    {
        if (array_key_exists("drive", $this->_propDict)) {
            if (is_a($this->_propDict["drive"], "Microsoft\Graph\Model\Drive")) {
                return $this->_propDict["drive"];
            } else {
                $this->_propDict["drive"] = new Drive($this->_propDict["drive"]);
                return $this->_propDict["drive"];
            }
        }
        return null;
    }
    
    /**
    * Sets the drive
    * The user's OneDrive. Read-only.
    *
    * @param string $val The drive
    *
    * @return User
    */
    public function setDrive($val)
    {
        $this->_propDict["drive"] = $val;
        return $this;
    }
    

     /** 
     * Gets the drives
     *
     * @return array The drives
     */
    public function getDrives()
    {
        if (array_key_exists("drives", $this->_propDict)) {
           return $this->_propDict["drives"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the drives
    *
    * @param string $val The drives
    *
    * @return User
    */
    public function setDrives($val)
    {
		$this->_propDict["drives"] = $val;
        return $this;
    }
    

     /** 
     * Gets the events
    * The user's events. Default is to show Events under the Default Calendar. Read-only. Nullable.
     *
     * @return array The events
     */
    public function getEvents()
    {
        if (array_key_exists("events", $this->_propDict)) {
           return $this->_propDict["events"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the events
    * The user's events. Default is to show Events under the Default Calendar. Read-only. Nullable.
    *
    * @param string $val The events
    *
    * @return User
    */
    public function setEvents($val)
    {
		$this->_propDict["events"] = $val;
        return $this;
    }
    
    /**
    * Gets the inferenceClassification
    * Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
    *
    * @return InferenceClassification The inferenceClassification
    */
    public function getInferenceClassification()
    {
        if (array_key_exists("inferenceClassification", $this->_propDict)) {
            if (is_a($this->_propDict["inferenceClassification"], "Microsoft\Graph\Model\InferenceClassification")) {
                return $this->_propDict["inferenceClassification"];
            } else {
                $this->_propDict["inferenceClassification"] = new InferenceClassification($this->_propDict["inferenceClassification"]);
                return $this->_propDict["inferenceClassification"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inferenceClassification
    * Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
    *
    * @param string $val The inferenceClassification
    *
    * @return User
    */
    public function setInferenceClassification($val)
    {
        $this->_propDict["inferenceClassification"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mailFolders
    * The user's mail folders. Read-only. Nullable.
     *
     * @return array The mailFolders
     */
    public function getMailFolders()
    {
        if (array_key_exists("mailFolders", $this->_propDict)) {
           return $this->_propDict["mailFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mailFolders
    * The user's mail folders. Read-only. Nullable.
    *
    * @param string $val The mailFolders
    *
    * @return User
    */
    public function setMailFolders($val)
    {
		$this->_propDict["mailFolders"] = $val;
        return $this;
    }
    
    /**
    * Gets the manager
    * The user or contact that is this user’s manager. Read-only. (HTTP Methods: GET, PUT, DELETE.)
    *
    * @return DirectoryObject The manager
    */
    public function getManager()
    {
        if (array_key_exists("manager", $this->_propDict)) {
            if (is_a($this->_propDict["manager"], "Microsoft\Graph\Model\DirectoryObject")) {
                return $this->_propDict["manager"];
            } else {
                $this->_propDict["manager"] = new DirectoryObject($this->_propDict["manager"]);
                return $this->_propDict["manager"];
            }
        }
        return null;
    }
    
    /**
    * Sets the manager
    * The user or contact that is this user’s manager. Read-only. (HTTP Methods: GET, PUT, DELETE.)
    *
    * @param string $val The manager
    *
    * @return User
    */
    public function setManager($val)
    {
        $this->_propDict["manager"] = $val;
        return $this;
    }
    

     /** 
     * Gets the memberOf
    * The groups and directory roles that the user is a member of. Read-only. Nullable.
     *
     * @return array The memberOf
     */
    public function getMemberOf()
    {
        if (array_key_exists("memberOf", $this->_propDict)) {
           return $this->_propDict["memberOf"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the memberOf
    * The groups and directory roles that the user is a member of. Read-only. Nullable.
    *
    * @param string $val The memberOf
    *
    * @return User
    */
    public function setMemberOf($val)
    {
		$this->_propDict["memberOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the messages
    * The messages in a mailbox or folder. Read-only. Nullable.
     *
     * @return array The messages
     */
    public function getMessages()
    {
        if (array_key_exists("messages", $this->_propDict)) {
           return $this->_propDict["messages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the messages
    * The messages in a mailbox or folder. Read-only. Nullable.
    *
    * @param string $val The messages
    *
    * @return User
    */
    public function setMessages($val)
    {
		$this->_propDict["messages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ownedDevices
    * Devices that are owned by the user. Read-only. Nullable.
     *
     * @return array The ownedDevices
     */
    public function getOwnedDevices()
    {
        if (array_key_exists("ownedDevices", $this->_propDict)) {
           return $this->_propDict["ownedDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ownedDevices
    * Devices that are owned by the user. Read-only. Nullable.
    *
    * @param string $val The ownedDevices
    *
    * @return User
    */
    public function setOwnedDevices($val)
    {
		$this->_propDict["ownedDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ownedObjects
    * Directory objects that are owned by the user. Read-only. Nullable.
     *
     * @return array The ownedObjects
     */
    public function getOwnedObjects()
    {
        if (array_key_exists("ownedObjects", $this->_propDict)) {
           return $this->_propDict["ownedObjects"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ownedObjects
    * Directory objects that are owned by the user. Read-only. Nullable.
    *
    * @param string $val The ownedObjects
    *
    * @return User
    */
    public function setOwnedObjects($val)
    {
		$this->_propDict["ownedObjects"] = $val;
        return $this;
    }
    
    /**
    * Gets the photo
    * The user's profile photo. Read-only.
    *
    * @return ProfilePhoto The photo
    */
    public function getPhoto()
    {
        if (array_key_exists("photo", $this->_propDict)) {
            if (is_a($this->_propDict["photo"], "Microsoft\Graph\Model\ProfilePhoto")) {
                return $this->_propDict["photo"];
            } else {
                $this->_propDict["photo"] = new ProfilePhoto($this->_propDict["photo"]);
                return $this->_propDict["photo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the photo
    * The user's profile photo. Read-only.
    *
    * @param string $val The photo
    *
    * @return User
    */
    public function setPhoto($val)
    {
        $this->_propDict["photo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the registeredDevices
    * Devices that are registered for the user. Read-only. Nullable.
     *
     * @return array The registeredDevices
     */
    public function getRegisteredDevices()
    {
        if (array_key_exists("registeredDevices", $this->_propDict)) {
           return $this->_propDict["registeredDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the registeredDevices
    * Devices that are registered for the user. Read-only. Nullable.
    *
    * @param string $val The registeredDevices
    *
    * @return User
    */
    public function setRegisteredDevices($val)
    {
		$this->_propDict["registeredDevices"] = $val;
        return $this;
    }
    
}