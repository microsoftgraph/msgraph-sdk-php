<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserRegistrationDetails File
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
* UserRegistrationDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserRegistrationDetails extends Entity
{
    /**
    * Gets the defaultMfaMethod
    * The method the user or admin selected as default for performing multifactor authentication for the user. The possible values are: none, mobilePhone, alternateMobilePhone, officePhone, microsoftAuthenticatorPush, softwareOneTimePasscode, unknownFutureValue.
    *
    * @return DefaultMfaMethodType|null The defaultMfaMethod
    */
    public function getDefaultMfaMethod()
    {
        if (array_key_exists("defaultMfaMethod", $this->_propDict)) {
            if (is_a($this->_propDict["defaultMfaMethod"], "\Beta\Microsoft\Graph\Model\DefaultMfaMethodType") || is_null($this->_propDict["defaultMfaMethod"])) {
                return $this->_propDict["defaultMfaMethod"];
            } else {
                $this->_propDict["defaultMfaMethod"] = new DefaultMfaMethodType($this->_propDict["defaultMfaMethod"]);
                return $this->_propDict["defaultMfaMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultMfaMethod
    * The method the user or admin selected as default for performing multifactor authentication for the user. The possible values are: none, mobilePhone, alternateMobilePhone, officePhone, microsoftAuthenticatorPush, softwareOneTimePasscode, unknownFutureValue.
    *
    * @param DefaultMfaMethodType $val The defaultMfaMethod
    *
    * @return UserRegistrationDetails
    */
    public function setDefaultMfaMethod($val)
    {
        $this->_propDict["defaultMfaMethod"] = $val;
        return $this;
    }

    /**
    * Gets the isAdmin
    * Indicates whether the user has an admin role in the tenant. This value can be used to check the authentication methods that privileged accounts are registered for and capable of.
    *
    * @return bool|null The isAdmin
    */
    public function getIsAdmin()
    {
        if (array_key_exists("isAdmin", $this->_propDict)) {
            return $this->_propDict["isAdmin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAdmin
    * Indicates whether the user has an admin role in the tenant. This value can be used to check the authentication methods that privileged accounts are registered for and capable of.
    *
    * @param bool $val The isAdmin
    *
    * @return UserRegistrationDetails
    */
    public function setIsAdmin($val)
    {
        $this->_propDict["isAdmin"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMfaCapable
    * Indicates whether the user has registered a strong authentication method for multifactor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @return bool|null The isMfaCapable
    */
    public function getIsMfaCapable()
    {
        if (array_key_exists("isMfaCapable", $this->_propDict)) {
            return $this->_propDict["isMfaCapable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMfaCapable
    * Indicates whether the user has registered a strong authentication method for multifactor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @param bool $val The isMfaCapable
    *
    * @return UserRegistrationDetails
    */
    public function setIsMfaCapable($val)
    {
        $this->_propDict["isMfaCapable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMfaRegistered
    * Indicates whether the user has registered a strong authentication method for multifactor authentication. The method may not necessarily be allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @return bool|null The isMfaRegistered
    */
    public function getIsMfaRegistered()
    {
        if (array_key_exists("isMfaRegistered", $this->_propDict)) {
            return $this->_propDict["isMfaRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMfaRegistered
    * Indicates whether the user has registered a strong authentication method for multifactor authentication. The method may not necessarily be allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @param bool $val The isMfaRegistered
    *
    * @return UserRegistrationDetails
    */
    public function setIsMfaRegistered($val)
    {
        $this->_propDict["isMfaRegistered"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isPasswordlessCapable
    * Indicates whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @return bool|null The isPasswordlessCapable
    */
    public function getIsPasswordlessCapable()
    {
        if (array_key_exists("isPasswordlessCapable", $this->_propDict)) {
            return $this->_propDict["isPasswordlessCapable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPasswordlessCapable
    * Indicates whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
    *
    * @param bool $val The isPasswordlessCapable
    *
    * @return UserRegistrationDetails
    */
    public function setIsPasswordlessCapable($val)
    {
        $this->_propDict["isPasswordlessCapable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSsprCapable
    * Indicates whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
    *
    * @return bool|null The isSsprCapable
    */
    public function getIsSsprCapable()
    {
        if (array_key_exists("isSsprCapable", $this->_propDict)) {
            return $this->_propDict["isSsprCapable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSsprCapable
    * Indicates whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
    *
    * @param bool $val The isSsprCapable
    *
    * @return UserRegistrationDetails
    */
    public function setIsSsprCapable($val)
    {
        $this->_propDict["isSsprCapable"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSsprEnabled
    * Indicates whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
    *
    * @return bool|null The isSsprEnabled
    */
    public function getIsSsprEnabled()
    {
        if (array_key_exists("isSsprEnabled", $this->_propDict)) {
            return $this->_propDict["isSsprEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSsprEnabled
    * Indicates whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
    *
    * @param bool $val The isSsprEnabled
    *
    * @return UserRegistrationDetails
    */
    public function setIsSsprEnabled($val)
    {
        $this->_propDict["isSsprEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSsprRegistered
    * Indicates whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
    *
    * @return bool|null The isSsprRegistered
    */
    public function getIsSsprRegistered()
    {
        if (array_key_exists("isSsprRegistered", $this->_propDict)) {
            return $this->_propDict["isSsprRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSsprRegistered
    * Indicates whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
    *
    * @param bool $val The isSsprRegistered
    *
    * @return UserRegistrationDetails
    */
    public function setIsSsprRegistered($val)
    {
        $this->_propDict["isSsprRegistered"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSystemPreferredAuthenticationMethodEnabled
    * Indicates whether system preferred authentication method is enabled. If enabled, the system dynamically determines the most secure authentication method among the methods registered by the user. Supports $filter (eq).
    *
    * @return bool|null The isSystemPreferredAuthenticationMethodEnabled
    */
    public function getIsSystemPreferredAuthenticationMethodEnabled()
    {
        if (array_key_exists("isSystemPreferredAuthenticationMethodEnabled", $this->_propDict)) {
            return $this->_propDict["isSystemPreferredAuthenticationMethodEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSystemPreferredAuthenticationMethodEnabled
    * Indicates whether system preferred authentication method is enabled. If enabled, the system dynamically determines the most secure authentication method among the methods registered by the user. Supports $filter (eq).
    *
    * @param bool $val The isSystemPreferredAuthenticationMethodEnabled
    *
    * @return UserRegistrationDetails
    */
    public function setIsSystemPreferredAuthenticationMethodEnabled($val)
    {
        $this->_propDict["isSystemPreferredAuthenticationMethodEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    * The date and time (UTC) when the record was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdatedDateTime"])) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    * The date and time (UTC) when the record was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return UserRegistrationDetails
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the methodsRegistered
    * Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
    *
    * @return array|null The methodsRegistered
    */
    public function getMethodsRegistered()
    {
        if (array_key_exists("methodsRegistered", $this->_propDict)) {
            return $this->_propDict["methodsRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the methodsRegistered
    * Collection of authentication methods registered, such as mobilePhone, email, fido2. Supports $filter (any with eq).
    *
    * @param string[] $val The methodsRegistered
    *
    * @return UserRegistrationDetails
    */
    public function setMethodsRegistered($val)
    {
        $this->_propDict["methodsRegistered"] = $val;
        return $this;
    }

    /**
    * Gets the systemPreferredAuthenticationMethods
    * Collection of authentication methods that the system determined to be the most secure authentication methods among the registered methods for second factor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. Supports $filter (any with eq).
    *
    * @return array|null The systemPreferredAuthenticationMethods
    */
    public function getSystemPreferredAuthenticationMethods()
    {
        if (array_key_exists("systemPreferredAuthenticationMethods", $this->_propDict)) {
            return $this->_propDict["systemPreferredAuthenticationMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemPreferredAuthenticationMethods
    * Collection of authentication methods that the system determined to be the most secure authentication methods among the registered methods for second factor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. Supports $filter (any with eq).
    *
    * @param string[] $val The systemPreferredAuthenticationMethods
    *
    * @return UserRegistrationDetails
    */
    public function setSystemPreferredAuthenticationMethods($val)
    {
        $this->_propDict["systemPreferredAuthenticationMethods"] = $val;
        return $this;
    }

    /**
    * Gets the userDisplayName
    * The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderby.
    *
    * @return string|null The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDisplayName
    * The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderby.
    *
    * @param string $val The userDisplayName
    *
    * @return UserRegistrationDetails
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the userPreferredMethodForSecondaryAuthentication
    * The method the user selected as the default second-factor for performing multifactor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue.
    *
    * @return UserDefaultAuthenticationMethod|null The userPreferredMethodForSecondaryAuthentication
    */
    public function getUserPreferredMethodForSecondaryAuthentication()
    {
        if (array_key_exists("userPreferredMethodForSecondaryAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["userPreferredMethodForSecondaryAuthentication"], "\Beta\Microsoft\Graph\Model\UserDefaultAuthenticationMethod") || is_null($this->_propDict["userPreferredMethodForSecondaryAuthentication"])) {
                return $this->_propDict["userPreferredMethodForSecondaryAuthentication"];
            } else {
                $this->_propDict["userPreferredMethodForSecondaryAuthentication"] = new UserDefaultAuthenticationMethod($this->_propDict["userPreferredMethodForSecondaryAuthentication"]);
                return $this->_propDict["userPreferredMethodForSecondaryAuthentication"];
            }
        }
        return null;
    }

    /**
    * Sets the userPreferredMethodForSecondaryAuthentication
    * The method the user selected as the default second-factor for performing multifactor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue.
    *
    * @param UserDefaultAuthenticationMethod $val The userPreferredMethodForSecondaryAuthentication
    *
    * @return UserRegistrationDetails
    */
    public function setUserPreferredMethodForSecondaryAuthentication($val)
    {
        $this->_propDict["userPreferredMethodForSecondaryAuthentication"] = $val;
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderby.
    *
    * @return string|null The userPrincipalName
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
    * The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderby.
    *
    * @param string $val The userPrincipalName
    *
    * @return UserRegistrationDetails
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the userType
    * Identifies whether the user is a member or guest in the tenant. The possible values are: member, guest, unknownFutureValue.
    *
    * @return SignInUserType|null The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            if (is_a($this->_propDict["userType"], "\Beta\Microsoft\Graph\Model\SignInUserType") || is_null($this->_propDict["userType"])) {
                return $this->_propDict["userType"];
            } else {
                $this->_propDict["userType"] = new SignInUserType($this->_propDict["userType"]);
                return $this->_propDict["userType"];
            }
        }
        return null;
    }

    /**
    * Sets the userType
    * Identifies whether the user is a member or guest in the tenant. The possible values are: member, guest, unknownFutureValue.
    *
    * @param SignInUserType $val The userType
    *
    * @return UserRegistrationDetails
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
        return $this;
    }

}
