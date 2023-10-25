<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServicePrincipal File
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
* ServicePrincipal class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServicePrincipal extends DirectoryObject
{
    /**
    * Gets the passwordSingleSignOnSettings
    * The collection for settings related to password single sign-on. Use $select=passwordSingleSignOnSettings to read the property. Read-only for applicationTemplates except for custom applicationTemplates.
    *
    * @return PasswordSingleSignOnSettings|null The passwordSingleSignOnSettings
    */
    public function getPasswordSingleSignOnSettings()
    {
        if (array_key_exists("passwordSingleSignOnSettings", $this->_propDict)) {
            if (is_a($this->_propDict["passwordSingleSignOnSettings"], "\Beta\Microsoft\Graph\Model\PasswordSingleSignOnSettings") || is_null($this->_propDict["passwordSingleSignOnSettings"])) {
                return $this->_propDict["passwordSingleSignOnSettings"];
            } else {
                $this->_propDict["passwordSingleSignOnSettings"] = new PasswordSingleSignOnSettings($this->_propDict["passwordSingleSignOnSettings"]);
                return $this->_propDict["passwordSingleSignOnSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the passwordSingleSignOnSettings
    * The collection for settings related to password single sign-on. Use $select=passwordSingleSignOnSettings to read the property. Read-only for applicationTemplates except for custom applicationTemplates.
    *
    * @param PasswordSingleSignOnSettings $val The passwordSingleSignOnSettings
    *
    * @return ServicePrincipal
    */
    public function setPasswordSingleSignOnSettings($val)
    {
        $this->_propDict["passwordSingleSignOnSettings"] = $val;
        return $this;
    }

    /**
    * Gets the accountEnabled
    * true if the service principal account is enabled; otherwise, false. If set to false, then no users will be able to sign in to this app, even if they are assigned to it. Supports $filter (eq, ne, not, in).
    *
    * @return bool|null The accountEnabled
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
    * true if the service principal account is enabled; otherwise, false. If set to false, then no users will be able to sign in to this app, even if they are assigned to it. Supports $filter (eq, ne, not, in).
    *
    * @param bool $val The accountEnabled
    *
    * @return ServicePrincipal
    */
    public function setAccountEnabled($val)
    {
        $this->_propDict["accountEnabled"] = boolval($val);
        return $this;
    }


     /**
     * Gets the addIns
    * Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Microsoft 365 call the application in the context of a document the user is working on.
     *
     * @return array|null The addIns
     */
    public function getAddIns()
    {
        if (array_key_exists("addIns", $this->_propDict)) {
           return $this->_propDict["addIns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the addIns
    * Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Microsoft 365 call the application in the context of a document the user is working on.
    *
    * @param AddIn[] $val The addIns
    *
    * @return ServicePrincipal
    */
    public function setAddIns($val)
    {
        $this->_propDict["addIns"] = $val;
        return $this;
    }

    /**
    * Gets the alternativeNames
    * Used to retrieve service principals by subscription, identify resource group and full resource ids for managed identities. Supports $filter (eq, not, ge, le, startsWith).
    *
    * @return array|null The alternativeNames
    */
    public function getAlternativeNames()
    {
        if (array_key_exists("alternativeNames", $this->_propDict)) {
            return $this->_propDict["alternativeNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternativeNames
    * Used to retrieve service principals by subscription, identify resource group and full resource ids for managed identities. Supports $filter (eq, not, ge, le, startsWith).
    *
    * @param string[] $val The alternativeNames
    *
    * @return ServicePrincipal
    */
    public function setAlternativeNames($val)
    {
        $this->_propDict["alternativeNames"] = $val;
        return $this;
    }

    /**
    * Gets the appDescription
    * The description exposed by the associated application.
    *
    * @return string|null The appDescription
    */
    public function getAppDescription()
    {
        if (array_key_exists("appDescription", $this->_propDict)) {
            return $this->_propDict["appDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appDescription
    * The description exposed by the associated application.
    *
    * @param string $val The appDescription
    *
    * @return ServicePrincipal
    */
    public function setAppDescription($val)
    {
        $this->_propDict["appDescription"] = $val;
        return $this;
    }

    /**
    * Gets the appDisplayName
    * The display name exposed by the associated application.
    *
    * @return string|null The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appDisplayName
    * The display name exposed by the associated application.
    *
    * @param string $val The appDisplayName
    *
    * @return ServicePrincipal
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the appId
    * The unique identifier for the associated application (its appId property). Alternate key. Supports $filter (eq, ne, not, in, startsWith).
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * The unique identifier for the associated application (its appId property). Alternate key. Supports $filter (eq, ne, not, in, startsWith).
    *
    * @param string $val The appId
    *
    * @return ServicePrincipal
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the applicationTemplateId
    * Unique identifier of the applicationTemplate that the servicePrincipal was created from. Read-only. Supports $filter (eq, ne, NOT, startsWith).
    *
    * @return string|null The applicationTemplateId
    */
    public function getApplicationTemplateId()
    {
        if (array_key_exists("applicationTemplateId", $this->_propDict)) {
            return $this->_propDict["applicationTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationTemplateId
    * Unique identifier of the applicationTemplate that the servicePrincipal was created from. Read-only. Supports $filter (eq, ne, NOT, startsWith).
    *
    * @param string $val The applicationTemplateId
    *
    * @return ServicePrincipal
    */
    public function setApplicationTemplateId($val)
    {
        $this->_propDict["applicationTemplateId"] = $val;
        return $this;
    }

    /**
    * Gets the appOwnerOrganizationId
    * Contains the tenant id where the application is registered. This is applicable only to service principals backed by applications. Supports $filter (eq, ne, NOT, ge, le).
    *
    * @return string|null The appOwnerOrganizationId
    */
    public function getAppOwnerOrganizationId()
    {
        if (array_key_exists("appOwnerOrganizationId", $this->_propDict)) {
            return $this->_propDict["appOwnerOrganizationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appOwnerOrganizationId
    * Contains the tenant id where the application is registered. This is applicable only to service principals backed by applications. Supports $filter (eq, ne, NOT, ge, le).
    *
    * @param string $val The appOwnerOrganizationId
    *
    * @return ServicePrincipal
    */
    public function setAppOwnerOrganizationId($val)
    {
        $this->_propDict["appOwnerOrganizationId"] = $val;
        return $this;
    }

    /**
    * Gets the appRoleAssignmentRequired
    * Specifies whether users or other service principals need to be granted an app role assignment for this service principal before users can sign in or apps can get tokens. The default value is false. Not nullable. Supports $filter (eq, ne, NOT).
    *
    * @return bool|null The appRoleAssignmentRequired
    */
    public function getAppRoleAssignmentRequired()
    {
        if (array_key_exists("appRoleAssignmentRequired", $this->_propDict)) {
            return $this->_propDict["appRoleAssignmentRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appRoleAssignmentRequired
    * Specifies whether users or other service principals need to be granted an app role assignment for this service principal before users can sign in or apps can get tokens. The default value is false. Not nullable. Supports $filter (eq, ne, NOT).
    *
    * @param bool $val The appRoleAssignmentRequired
    *
    * @return ServicePrincipal
    */
    public function setAppRoleAssignmentRequired($val)
    {
        $this->_propDict["appRoleAssignmentRequired"] = boolval($val);
        return $this;
    }


     /**
     * Gets the appRoles
    * The roles exposed by the application, which this service principal represents. For more information see the appRoles property definition on the application entity. Not nullable.
     *
     * @return array|null The appRoles
     */
    public function getAppRoles()
    {
        if (array_key_exists("appRoles", $this->_propDict)) {
           return $this->_propDict["appRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appRoles
    * The roles exposed by the application, which this service principal represents. For more information see the appRoles property definition on the application entity. Not nullable.
    *
    * @param AppRole[] $val The appRoles
    *
    * @return ServicePrincipal
    */
    public function setAppRoles($val)
    {
        $this->_propDict["appRoles"] = $val;
        return $this;
    }

    /**
    * Gets the customSecurityAttributes
    * An open complex type that holds the value of a custom security attribute that is assigned to a directory object. Nullable. Returned only on $select. Supports $filter (eq, ne, not, startsWith). Filter value is case sensitive.
    *
    * @return CustomSecurityAttributeValue|null The customSecurityAttributes
    */
    public function getCustomSecurityAttributes()
    {
        if (array_key_exists("customSecurityAttributes", $this->_propDict)) {
            if (is_a($this->_propDict["customSecurityAttributes"], "\Beta\Microsoft\Graph\Model\CustomSecurityAttributeValue") || is_null($this->_propDict["customSecurityAttributes"])) {
                return $this->_propDict["customSecurityAttributes"];
            } else {
                $this->_propDict["customSecurityAttributes"] = new CustomSecurityAttributeValue($this->_propDict["customSecurityAttributes"]);
                return $this->_propDict["customSecurityAttributes"];
            }
        }
        return null;
    }

    /**
    * Sets the customSecurityAttributes
    * An open complex type that holds the value of a custom security attribute that is assigned to a directory object. Nullable. Returned only on $select. Supports $filter (eq, ne, not, startsWith). Filter value is case sensitive.
    *
    * @param CustomSecurityAttributeValue $val The customSecurityAttributes
    *
    * @return ServicePrincipal
    */
    public function setCustomSecurityAttributes($val)
    {
        $this->_propDict["customSecurityAttributes"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * Free text field to provide an internal end-user facing description of the service principal. End-user portals such MyApps will display the application description in this field. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Free text field to provide an internal end-user facing description of the service principal. End-user portals such MyApps will display the application description in this field. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
    *
    * @param string $val The description
    *
    * @return ServicePrincipal
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the disabledByMicrosoftStatus
    * Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
    *
    * @return string|null The disabledByMicrosoftStatus
    */
    public function getDisabledByMicrosoftStatus()
    {
        if (array_key_exists("disabledByMicrosoftStatus", $this->_propDict)) {
            return $this->_propDict["disabledByMicrosoftStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disabledByMicrosoftStatus
    * Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
    *
    * @param string $val The disabledByMicrosoftStatus
    *
    * @return ServicePrincipal
    */
    public function setDisabledByMicrosoftStatus($val)
    {
        $this->_propDict["disabledByMicrosoftStatus"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the service principal. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
    *
    * @return string|null The displayName
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
    * The display name for the service principal. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
    *
    * @param string $val The displayName
    *
    * @return ServicePrincipal
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the errorUrl
    * Deprecated. Don't use.
    *
    * @return string|null The errorUrl
    */
    public function getErrorUrl()
    {
        if (array_key_exists("errorUrl", $this->_propDict)) {
            return $this->_propDict["errorUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorUrl
    * Deprecated. Don't use.
    *
    * @param string $val The errorUrl
    *
    * @return ServicePrincipal
    */
    public function setErrorUrl($val)
    {
        $this->_propDict["errorUrl"] = $val;
        return $this;
    }

    /**
    * Gets the homepage
    * Home page or landing page of the application.
    *
    * @return string|null The homepage
    */
    public function getHomepage()
    {
        if (array_key_exists("homepage", $this->_propDict)) {
            return $this->_propDict["homepage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homepage
    * Home page or landing page of the application.
    *
    * @param string $val The homepage
    *
    * @return ServicePrincipal
    */
    public function setHomepage($val)
    {
        $this->_propDict["homepage"] = $val;
        return $this;
    }

    /**
    * Gets the info
    * Basic profile information of the acquired application such as app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Microsoft Entra apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
    *
    * @return InformationalUrl|null The info
    */
    public function getInfo()
    {
        if (array_key_exists("info", $this->_propDict)) {
            if (is_a($this->_propDict["info"], "\Beta\Microsoft\Graph\Model\InformationalUrl") || is_null($this->_propDict["info"])) {
                return $this->_propDict["info"];
            } else {
                $this->_propDict["info"] = new InformationalUrl($this->_propDict["info"]);
                return $this->_propDict["info"];
            }
        }
        return null;
    }

    /**
    * Sets the info
    * Basic profile information of the acquired application such as app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Microsoft Entra apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
    *
    * @param InformationalUrl $val The info
    *
    * @return ServicePrincipal
    */
    public function setInfo($val)
    {
        $this->_propDict["info"] = $val;
        return $this;
    }


     /**
     * Gets the keyCredentials
    * The collection of key credentials associated with the service principal. Not nullable. Supports $filter (eq, not, ge, le).
     *
     * @return array|null The keyCredentials
     */
    public function getKeyCredentials()
    {
        if (array_key_exists("keyCredentials", $this->_propDict)) {
           return $this->_propDict["keyCredentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keyCredentials
    * The collection of key credentials associated with the service principal. Not nullable. Supports $filter (eq, not, ge, le).
    *
    * @param KeyCredential[] $val The keyCredentials
    *
    * @return ServicePrincipal
    */
    public function setKeyCredentials($val)
    {
        $this->_propDict["keyCredentials"] = $val;
        return $this;
    }

    /**
    * Gets the loginUrl
    * Specifies the URL where the service provider redirects the user to Microsoft Entra ID to authenticate. Microsoft Entra ID uses the URL to launch the application from Microsoft 365 or the Microsoft Entra My Apps. When blank, Microsoft Entra ID performs IdP-initiated sign-on for applications configured with SAML-based single sign-on. The user launches the application from Microsoft 365, the Microsoft Entra My Apps, or the Microsoft Entra SSO URL.
    *
    * @return string|null The loginUrl
    */
    public function getLoginUrl()
    {
        if (array_key_exists("loginUrl", $this->_propDict)) {
            return $this->_propDict["loginUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the loginUrl
    * Specifies the URL where the service provider redirects the user to Microsoft Entra ID to authenticate. Microsoft Entra ID uses the URL to launch the application from Microsoft 365 or the Microsoft Entra My Apps. When blank, Microsoft Entra ID performs IdP-initiated sign-on for applications configured with SAML-based single sign-on. The user launches the application from Microsoft 365, the Microsoft Entra My Apps, or the Microsoft Entra SSO URL.
    *
    * @param string $val The loginUrl
    *
    * @return ServicePrincipal
    */
    public function setLoginUrl($val)
    {
        $this->_propDict["loginUrl"] = $val;
        return $this;
    }

    /**
    * Gets the logoutUrl
    * Specifies the URL that will be used by Microsoft's authorization service to logout an user using OpenId Connect front-channel, back-channel or SAML logout protocols.
    *
    * @return string|null The logoutUrl
    */
    public function getLogoutUrl()
    {
        if (array_key_exists("logoutUrl", $this->_propDict)) {
            return $this->_propDict["logoutUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logoutUrl
    * Specifies the URL that will be used by Microsoft's authorization service to logout an user using OpenId Connect front-channel, back-channel or SAML logout protocols.
    *
    * @param string $val The logoutUrl
    *
    * @return ServicePrincipal
    */
    public function setLogoutUrl($val)
    {
        $this->_propDict["logoutUrl"] = $val;
        return $this;
    }

    /**
    * Gets the notes
    * Free text field to capture information about the service principal, typically used for operational purposes. Maximum allowed size is 1024 characters.
    *
    * @return string|null The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    * Free text field to capture information about the service principal, typically used for operational purposes. Maximum allowed size is 1024 characters.
    *
    * @param string $val The notes
    *
    * @return ServicePrincipal
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }

    /**
    * Gets the notificationEmailAddresses
    * Specifies the list of email addresses where Microsoft Entra ID sends a notification when the active certificate is near the expiration date. This is only for the certificates used to sign the SAML token issued for Microsoft Entra Gallery applications.
    *
    * @return array|null The notificationEmailAddresses
    */
    public function getNotificationEmailAddresses()
    {
        if (array_key_exists("notificationEmailAddresses", $this->_propDict)) {
            return $this->_propDict["notificationEmailAddresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notificationEmailAddresses
    * Specifies the list of email addresses where Microsoft Entra ID sends a notification when the active certificate is near the expiration date. This is only for the certificates used to sign the SAML token issued for Microsoft Entra Gallery applications.
    *
    * @param string[] $val The notificationEmailAddresses
    *
    * @return ServicePrincipal
    */
    public function setNotificationEmailAddresses($val)
    {
        $this->_propDict["notificationEmailAddresses"] = $val;
        return $this;
    }


     /**
     * Gets the passwordCredentials
    * The collection of password credentials associated with the service principal. Not nullable.
     *
     * @return array|null The passwordCredentials
     */
    public function getPasswordCredentials()
    {
        if (array_key_exists("passwordCredentials", $this->_propDict)) {
           return $this->_propDict["passwordCredentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordCredentials
    * The collection of password credentials associated with the service principal. Not nullable.
    *
    * @param PasswordCredential[] $val The passwordCredentials
    *
    * @return ServicePrincipal
    */
    public function setPasswordCredentials($val)
    {
        $this->_propDict["passwordCredentials"] = $val;
        return $this;
    }

    /**
    * Gets the preferredSingleSignOnMode
    * Specifies the single sign-on mode configured for this application. Microsoft Entra ID uses the preferred single sign-on mode to launch the application from Microsoft 365 or the Microsoft Entra My Apps. The supported values are password, saml, notSupported, and oidc.
    *
    * @return string|null The preferredSingleSignOnMode
    */
    public function getPreferredSingleSignOnMode()
    {
        if (array_key_exists("preferredSingleSignOnMode", $this->_propDict)) {
            return $this->_propDict["preferredSingleSignOnMode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preferredSingleSignOnMode
    * Specifies the single sign-on mode configured for this application. Microsoft Entra ID uses the preferred single sign-on mode to launch the application from Microsoft 365 or the Microsoft Entra My Apps. The supported values are password, saml, notSupported, and oidc.
    *
    * @param string $val The preferredSingleSignOnMode
    *
    * @return ServicePrincipal
    */
    public function setPreferredSingleSignOnMode($val)
    {
        $this->_propDict["preferredSingleSignOnMode"] = $val;
        return $this;
    }

    /**
    * Gets the preferredTokenSigningKeyEndDateTime
    * Specifies the expiration date of the keyCredential used for token signing, marked by preferredTokenSigningKeyThumbprint. Updating this attribute is not currentlysupported. For details, see ServicePrincipal property differences.
    *
    * @return \DateTime|null The preferredTokenSigningKeyEndDateTime
    */
    public function getPreferredTokenSigningKeyEndDateTime()
    {
        if (array_key_exists("preferredTokenSigningKeyEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["preferredTokenSigningKeyEndDateTime"], "\DateTime") || is_null($this->_propDict["preferredTokenSigningKeyEndDateTime"])) {
                return $this->_propDict["preferredTokenSigningKeyEndDateTime"];
            } else {
                $this->_propDict["preferredTokenSigningKeyEndDateTime"] = new \DateTime($this->_propDict["preferredTokenSigningKeyEndDateTime"]);
                return $this->_propDict["preferredTokenSigningKeyEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the preferredTokenSigningKeyEndDateTime
    * Specifies the expiration date of the keyCredential used for token signing, marked by preferredTokenSigningKeyThumbprint. Updating this attribute is not currentlysupported. For details, see ServicePrincipal property differences.
    *
    * @param \DateTime $val The preferredTokenSigningKeyEndDateTime
    *
    * @return ServicePrincipal
    */
    public function setPreferredTokenSigningKeyEndDateTime($val)
    {
        $this->_propDict["preferredTokenSigningKeyEndDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the preferredTokenSigningKeyThumbprint
    * This property can be used on SAML applications (apps that have preferredSingleSignOnMode set to saml) to control which certificate is used to sign the SAML responses. For applications that are not SAML, do not write or otherwise rely on this property.
    *
    * @return string|null The preferredTokenSigningKeyThumbprint
    */
    public function getPreferredTokenSigningKeyThumbprint()
    {
        if (array_key_exists("preferredTokenSigningKeyThumbprint", $this->_propDict)) {
            return $this->_propDict["preferredTokenSigningKeyThumbprint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preferredTokenSigningKeyThumbprint
    * This property can be used on SAML applications (apps that have preferredSingleSignOnMode set to saml) to control which certificate is used to sign the SAML responses. For applications that are not SAML, do not write or otherwise rely on this property.
    *
    * @param string $val The preferredTokenSigningKeyThumbprint
    *
    * @return ServicePrincipal
    */
    public function setPreferredTokenSigningKeyThumbprint($val)
    {
        $this->_propDict["preferredTokenSigningKeyThumbprint"] = $val;
        return $this;
    }


     /**
     * Gets the publishedPermissionScopes
    * The delegated permissions exposed by the application. For more information see the oauth2PermissionScopes property on the application entity's api property. Not nullable. Note: This property is named oauth2PermissionScopes in v1.0.
     *
     * @return array|null The publishedPermissionScopes
     */
    public function getPublishedPermissionScopes()
    {
        if (array_key_exists("publishedPermissionScopes", $this->_propDict)) {
           return $this->_propDict["publishedPermissionScopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publishedPermissionScopes
    * The delegated permissions exposed by the application. For more information see the oauth2PermissionScopes property on the application entity's api property. Not nullable. Note: This property is named oauth2PermissionScopes in v1.0.
    *
    * @param PermissionScope[] $val The publishedPermissionScopes
    *
    * @return ServicePrincipal
    */
    public function setPublishedPermissionScopes($val)
    {
        $this->_propDict["publishedPermissionScopes"] = $val;
        return $this;
    }

    /**
    * Gets the publisherName
    * The name of the Microsoft Entra tenant that published the application.
    *
    * @return string|null The publisherName
    */
    public function getPublisherName()
    {
        if (array_key_exists("publisherName", $this->_propDict)) {
            return $this->_propDict["publisherName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisherName
    * The name of the Microsoft Entra tenant that published the application.
    *
    * @param string $val The publisherName
    *
    * @return ServicePrincipal
    */
    public function setPublisherName($val)
    {
        $this->_propDict["publisherName"] = $val;
        return $this;
    }

    /**
    * Gets the replyUrls
    * The URLs that user tokens are sent to for sign in with the associated application, or the redirect URIs that OAuth 2.0 authorization codes and access tokens are sent to for the associated application. Not nullable.
    *
    * @return array|null The replyUrls
    */
    public function getReplyUrls()
    {
        if (array_key_exists("replyUrls", $this->_propDict)) {
            return $this->_propDict["replyUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the replyUrls
    * The URLs that user tokens are sent to for sign in with the associated application, or the redirect URIs that OAuth 2.0 authorization codes and access tokens are sent to for the associated application. Not nullable.
    *
    * @param string[] $val The replyUrls
    *
    * @return ServicePrincipal
    */
    public function setReplyUrls($val)
    {
        $this->_propDict["replyUrls"] = $val;
        return $this;
    }

    /**
    * Gets the samlMetadataUrl
    * The url where the service exposes SAML metadata for federation.
    *
    * @return string|null The samlMetadataUrl
    */
    public function getSamlMetadataUrl()
    {
        if (array_key_exists("samlMetadataUrl", $this->_propDict)) {
            return $this->_propDict["samlMetadataUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the samlMetadataUrl
    * The url where the service exposes SAML metadata for federation.
    *
    * @param string $val The samlMetadataUrl
    *
    * @return ServicePrincipal
    */
    public function setSamlMetadataUrl($val)
    {
        $this->_propDict["samlMetadataUrl"] = $val;
        return $this;
    }

    /**
    * Gets the samlSingleSignOnSettings
    * The collection for settings related to saml single sign-on.
    *
    * @return SamlSingleSignOnSettings|null The samlSingleSignOnSettings
    */
    public function getSamlSingleSignOnSettings()
    {
        if (array_key_exists("samlSingleSignOnSettings", $this->_propDict)) {
            if (is_a($this->_propDict["samlSingleSignOnSettings"], "\Beta\Microsoft\Graph\Model\SamlSingleSignOnSettings") || is_null($this->_propDict["samlSingleSignOnSettings"])) {
                return $this->_propDict["samlSingleSignOnSettings"];
            } else {
                $this->_propDict["samlSingleSignOnSettings"] = new SamlSingleSignOnSettings($this->_propDict["samlSingleSignOnSettings"]);
                return $this->_propDict["samlSingleSignOnSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the samlSingleSignOnSettings
    * The collection for settings related to saml single sign-on.
    *
    * @param SamlSingleSignOnSettings $val The samlSingleSignOnSettings
    *
    * @return ServicePrincipal
    */
    public function setSamlSingleSignOnSettings($val)
    {
        $this->_propDict["samlSingleSignOnSettings"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalNames
    * Contains the list of identifiersUris, copied over from the associated application. Additional values can be added to hybrid applications. These values can be used to identify the permissions exposed by this app within Microsoft Entra ID. For example,Client apps can specify a resource URI which is based on the values of this property to acquire an access token, which is the URI returned in the 'aud' claim.The any operator is required for filter expressions on multi-valued properties. Not nullable.  Supports $filter (eq, not, ge, le, startsWith).
    *
    * @return array|null The servicePrincipalNames
    */
    public function getServicePrincipalNames()
    {
        if (array_key_exists("servicePrincipalNames", $this->_propDict)) {
            return $this->_propDict["servicePrincipalNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalNames
    * Contains the list of identifiersUris, copied over from the associated application. Additional values can be added to hybrid applications. These values can be used to identify the permissions exposed by this app within Microsoft Entra ID. For example,Client apps can specify a resource URI which is based on the values of this property to acquire an access token, which is the URI returned in the 'aud' claim.The any operator is required for filter expressions on multi-valued properties. Not nullable.  Supports $filter (eq, not, ge, le, startsWith).
    *
    * @param string[] $val The servicePrincipalNames
    *
    * @return ServicePrincipal
    */
    public function setServicePrincipalNames($val)
    {
        $this->_propDict["servicePrincipalNames"] = $val;
        return $this;
    }

    /**
    * Gets the servicePrincipalType
    * Identifies if the service principal represents an application or a managed identity. This is set by Microsoft Entra ID internally. For a service principal that represents an application this is set as Application. For a service principal that represent a managed identity this is set as ManagedIdentity. The SocialIdp type is for internal use.
    *
    * @return string|null The servicePrincipalType
    */
    public function getServicePrincipalType()
    {
        if (array_key_exists("servicePrincipalType", $this->_propDict)) {
            return $this->_propDict["servicePrincipalType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalType
    * Identifies if the service principal represents an application or a managed identity. This is set by Microsoft Entra ID internally. For a service principal that represents an application this is set as Application. For a service principal that represent a managed identity this is set as ManagedIdentity. The SocialIdp type is for internal use.
    *
    * @param string $val The servicePrincipalType
    *
    * @return ServicePrincipal
    */
    public function setServicePrincipalType($val)
    {
        $this->_propDict["servicePrincipalType"] = $val;
        return $this;
    }

    /**
    * Gets the signInAudience
    * Specifies the Microsoft accounts that are supported for the current application. Read-only. Supported values are:AzureADMyOrg: Users with a Microsoft work or school account in my organization's Microsoft Entra tenant (single-tenant).AzureADMultipleOrgs: Users with a Microsoft work or school account in any organization's Microsoft Entra tenant (multi-tenant).AzureADandPersonalMicrosoftAccount: Users with a personal Microsoft account, or a work or school account in any organization's Microsoft Entra tenant.PersonalMicrosoftAccount: Users with a personal Microsoft account only.
    *
    * @return string|null The signInAudience
    */
    public function getSignInAudience()
    {
        if (array_key_exists("signInAudience", $this->_propDict)) {
            return $this->_propDict["signInAudience"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signInAudience
    * Specifies the Microsoft accounts that are supported for the current application. Read-only. Supported values are:AzureADMyOrg: Users with a Microsoft work or school account in my organization's Microsoft Entra tenant (single-tenant).AzureADMultipleOrgs: Users with a Microsoft work or school account in any organization's Microsoft Entra tenant (multi-tenant).AzureADandPersonalMicrosoftAccount: Users with a personal Microsoft account, or a work or school account in any organization's Microsoft Entra tenant.PersonalMicrosoftAccount: Users with a personal Microsoft account only.
    *
    * @param string $val The signInAudience
    *
    * @return ServicePrincipal
    */
    public function setSignInAudience($val)
    {
        $this->_propDict["signInAudience"] = $val;
        return $this;
    }

    /**
    * Gets the tags
    * Custom strings that can be used to categorize and identify the service principal. Not nullable. The value is the union of strings set here and on the associated application entity's tags property.Supports $filter (eq, not, ge, le, startsWith).
    *
    * @return array|null The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tags
    * Custom strings that can be used to categorize and identify the service principal. Not nullable. The value is the union of strings set here and on the associated application entity's tags property.Supports $filter (eq, not, ge, le, startsWith).
    *
    * @param string[] $val The tags
    *
    * @return ServicePrincipal
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }

    /**
    * Gets the tokenEncryptionKeyId
    * Specifies the keyId of a public key from the keyCredentials collection. When configured, Microsoft Entra ID issues tokens for this application encrypted using the key specified by this property. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
    *
    * @return string|null The tokenEncryptionKeyId
    */
    public function getTokenEncryptionKeyId()
    {
        if (array_key_exists("tokenEncryptionKeyId", $this->_propDict)) {
            return $this->_propDict["tokenEncryptionKeyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenEncryptionKeyId
    * Specifies the keyId of a public key from the keyCredentials collection. When configured, Microsoft Entra ID issues tokens for this application encrypted using the key specified by this property. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
    *
    * @param string $val The tokenEncryptionKeyId
    *
    * @return ServicePrincipal
    */
    public function setTokenEncryptionKeyId($val)
    {
        $this->_propDict["tokenEncryptionKeyId"] = $val;
        return $this;
    }

    /**
    * Gets the verifiedPublisher
    * Specifies the verified publisher of the application which this service principal represents.
    *
    * @return VerifiedPublisher|null The verifiedPublisher
    */
    public function getVerifiedPublisher()
    {
        if (array_key_exists("verifiedPublisher", $this->_propDict)) {
            if (is_a($this->_propDict["verifiedPublisher"], "\Beta\Microsoft\Graph\Model\VerifiedPublisher") || is_null($this->_propDict["verifiedPublisher"])) {
                return $this->_propDict["verifiedPublisher"];
            } else {
                $this->_propDict["verifiedPublisher"] = new VerifiedPublisher($this->_propDict["verifiedPublisher"]);
                return $this->_propDict["verifiedPublisher"];
            }
        }
        return null;
    }

    /**
    * Sets the verifiedPublisher
    * Specifies the verified publisher of the application which this service principal represents.
    *
    * @param VerifiedPublisher $val The verifiedPublisher
    *
    * @return ServicePrincipal
    */
    public function setVerifiedPublisher($val)
    {
        $this->_propDict["verifiedPublisher"] = $val;
        return $this;
    }


     /**
     * Gets the appManagementPolicies
    * The appManagementPolicy applied to this service principal.
     *
     * @return array|null The appManagementPolicies
     */
    public function getAppManagementPolicies()
    {
        if (array_key_exists("appManagementPolicies", $this->_propDict)) {
           return $this->_propDict["appManagementPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appManagementPolicies
    * The appManagementPolicy applied to this service principal.
    *
    * @param AppManagementPolicy[] $val The appManagementPolicies
    *
    * @return ServicePrincipal
    */
    public function setAppManagementPolicies($val)
    {
        $this->_propDict["appManagementPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the appRoleAssignedTo
    * App role assignments for this app or service, granted to users, groups, and other service principals.Supports $expand.
     *
     * @return array|null The appRoleAssignedTo
     */
    public function getAppRoleAssignedTo()
    {
        if (array_key_exists("appRoleAssignedTo", $this->_propDict)) {
           return $this->_propDict["appRoleAssignedTo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appRoleAssignedTo
    * App role assignments for this app or service, granted to users, groups, and other service principals.Supports $expand.
    *
    * @param AppRoleAssignment[] $val The appRoleAssignedTo
    *
    * @return ServicePrincipal
    */
    public function setAppRoleAssignedTo($val)
    {
        $this->_propDict["appRoleAssignedTo"] = $val;
        return $this;
    }


     /**
     * Gets the appRoleAssignments
    * App role assignment for another app or service, granted to this service principal. Supports $expand.
     *
     * @return array|null The appRoleAssignments
     */
    public function getAppRoleAssignments()
    {
        if (array_key_exists("appRoleAssignments", $this->_propDict)) {
           return $this->_propDict["appRoleAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appRoleAssignments
    * App role assignment for another app or service, granted to this service principal. Supports $expand.
    *
    * @param AppRoleAssignment[] $val The appRoleAssignments
    *
    * @return ServicePrincipal
    */
    public function setAppRoleAssignments($val)
    {
        $this->_propDict["appRoleAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the claimsMappingPolicies
    * The claimsMappingPolicies assigned to this service principal. Supports $expand.
     *
     * @return array|null The claimsMappingPolicies
     */
    public function getClaimsMappingPolicies()
    {
        if (array_key_exists("claimsMappingPolicies", $this->_propDict)) {
           return $this->_propDict["claimsMappingPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the claimsMappingPolicies
    * The claimsMappingPolicies assigned to this service principal. Supports $expand.
    *
    * @param ClaimsMappingPolicy[] $val The claimsMappingPolicies
    *
    * @return ServicePrincipal
    */
    public function setClaimsMappingPolicies($val)
    {
        $this->_propDict["claimsMappingPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the createdObjects
    * Directory objects created by this service principal. Read-only. Nullable.
     *
     * @return array|null The createdObjects
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
    * Directory objects created by this service principal. Read-only. Nullable.
    *
    * @param DirectoryObject[] $val The createdObjects
    *
    * @return ServicePrincipal
    */
    public function setCreatedObjects($val)
    {
        $this->_propDict["createdObjects"] = $val;
        return $this;
    }


     /**
     * Gets the delegatedPermissionClassifications
    * The permission classifications for delegated permissions exposed by the app that this service principal represents. Supports $expand.
     *
     * @return array|null The delegatedPermissionClassifications
     */
    public function getDelegatedPermissionClassifications()
    {
        if (array_key_exists("delegatedPermissionClassifications", $this->_propDict)) {
           return $this->_propDict["delegatedPermissionClassifications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the delegatedPermissionClassifications
    * The permission classifications for delegated permissions exposed by the app that this service principal represents. Supports $expand.
    *
    * @param DelegatedPermissionClassification[] $val The delegatedPermissionClassifications
    *
    * @return ServicePrincipal
    */
    public function setDelegatedPermissionClassifications($val)
    {
        $this->_propDict["delegatedPermissionClassifications"] = $val;
        return $this;
    }


     /**
     * Gets the endpoints
    * Endpoints available for discovery. Services like Sharepoint populate this property with a tenant specific SharePoint endpoints that other applications can discover and use in their experiences.
     *
     * @return array|null The endpoints
     */
    public function getEndpoints()
    {
        if (array_key_exists("endpoints", $this->_propDict)) {
           return $this->_propDict["endpoints"];
        } else {
            return null;
        }
    }

    /**
    * Sets the endpoints
    * Endpoints available for discovery. Services like Sharepoint populate this property with a tenant specific SharePoint endpoints that other applications can discover and use in their experiences.
    *
    * @param Endpoint[] $val The endpoints
    *
    * @return ServicePrincipal
    */
    public function setEndpoints($val)
    {
        $this->_propDict["endpoints"] = $val;
        return $this;
    }


     /**
     * Gets the federatedIdentityCredentials
     *
     * @return array|null The federatedIdentityCredentials
     */
    public function getFederatedIdentityCredentials()
    {
        if (array_key_exists("federatedIdentityCredentials", $this->_propDict)) {
           return $this->_propDict["federatedIdentityCredentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the federatedIdentityCredentials
    *
    * @param FederatedIdentityCredential[] $val The federatedIdentityCredentials
    *
    * @return ServicePrincipal
    */
    public function setFederatedIdentityCredentials($val)
    {
        $this->_propDict["federatedIdentityCredentials"] = $val;
        return $this;
    }


     /**
     * Gets the homeRealmDiscoveryPolicies
    * The homeRealmDiscoveryPolicies assigned to this service principal. Supports $expand.
     *
     * @return array|null The homeRealmDiscoveryPolicies
     */
    public function getHomeRealmDiscoveryPolicies()
    {
        if (array_key_exists("homeRealmDiscoveryPolicies", $this->_propDict)) {
           return $this->_propDict["homeRealmDiscoveryPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homeRealmDiscoveryPolicies
    * The homeRealmDiscoveryPolicies assigned to this service principal. Supports $expand.
    *
    * @param HomeRealmDiscoveryPolicy[] $val The homeRealmDiscoveryPolicies
    *
    * @return ServicePrincipal
    */
    public function setHomeRealmDiscoveryPolicies($val)
    {
        $this->_propDict["homeRealmDiscoveryPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the licenseDetails
     *
     * @return array|null The licenseDetails
     */
    public function getLicenseDetails()
    {
        if (array_key_exists("licenseDetails", $this->_propDict)) {
           return $this->_propDict["licenseDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the licenseDetails
    *
    * @param LicenseDetails[] $val The licenseDetails
    *
    * @return ServicePrincipal
    */
    public function setLicenseDetails($val)
    {
        $this->_propDict["licenseDetails"] = $val;
        return $this;
    }


     /**
     * Gets the memberOf
    * Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand.
     *
     * @return array|null The memberOf
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
    * Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand.
    *
    * @param DirectoryObject[] $val The memberOf
    *
    * @return ServicePrincipal
    */
    public function setMemberOf($val)
    {
        $this->_propDict["memberOf"] = $val;
        return $this;
    }


     /**
     * Gets the oauth2PermissionGrants
    * Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable.
     *
     * @return array|null The oauth2PermissionGrants
     */
    public function getOauth2PermissionGrants()
    {
        if (array_key_exists("oauth2PermissionGrants", $this->_propDict)) {
           return $this->_propDict["oauth2PermissionGrants"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oauth2PermissionGrants
    * Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable.
    *
    * @param OAuth2PermissionGrant[] $val The oauth2PermissionGrants
    *
    * @return ServicePrincipal
    */
    public function setOauth2PermissionGrants($val)
    {
        $this->_propDict["oauth2PermissionGrants"] = $val;
        return $this;
    }


     /**
     * Gets the ownedObjects
    * Directory objects that are owned by this service principal. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     *
     * @return array|null The ownedObjects
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
    * Directory objects that are owned by this service principal. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
    *
    * @param DirectoryObject[] $val The ownedObjects
    *
    * @return ServicePrincipal
    */
    public function setOwnedObjects($val)
    {
        $this->_propDict["ownedObjects"] = $val;
        return $this;
    }


     /**
     * Gets the owners
    * Directory objects that are owners of this servicePrincipal. The owners are a set of non-admin users or servicePrincipals who are allowed to modify this object. Read-only. Nullable.  Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     *
     * @return array|null The owners
     */
    public function getOwners()
    {
        if (array_key_exists("owners", $this->_propDict)) {
           return $this->_propDict["owners"];
        } else {
            return null;
        }
    }

    /**
    * Sets the owners
    * Directory objects that are owners of this servicePrincipal. The owners are a set of non-admin users or servicePrincipals who are allowed to modify this object. Read-only. Nullable.  Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
    *
    * @param DirectoryObject[] $val The owners
    *
    * @return ServicePrincipal
    */
    public function setOwners($val)
    {
        $this->_propDict["owners"] = $val;
        return $this;
    }

    /**
    * Gets the remoteDesktopSecurityConfiguration
    * The remoteDesktopSecurityConfiguration object applied to this service principal. Supports $filter (eq) for isRemoteDesktopProtocolEnabled property.
    *
    * @return RemoteDesktopSecurityConfiguration|null The remoteDesktopSecurityConfiguration
    */
    public function getRemoteDesktopSecurityConfiguration()
    {
        if (array_key_exists("remoteDesktopSecurityConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["remoteDesktopSecurityConfiguration"], "\Beta\Microsoft\Graph\Model\RemoteDesktopSecurityConfiguration") || is_null($this->_propDict["remoteDesktopSecurityConfiguration"])) {
                return $this->_propDict["remoteDesktopSecurityConfiguration"];
            } else {
                $this->_propDict["remoteDesktopSecurityConfiguration"] = new RemoteDesktopSecurityConfiguration($this->_propDict["remoteDesktopSecurityConfiguration"]);
                return $this->_propDict["remoteDesktopSecurityConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the remoteDesktopSecurityConfiguration
    * The remoteDesktopSecurityConfiguration object applied to this service principal. Supports $filter (eq) for isRemoteDesktopProtocolEnabled property.
    *
    * @param RemoteDesktopSecurityConfiguration $val The remoteDesktopSecurityConfiguration
    *
    * @return ServicePrincipal
    */
    public function setRemoteDesktopSecurityConfiguration($val)
    {
        $this->_propDict["remoteDesktopSecurityConfiguration"] = $val;
        return $this;
    }


     /**
     * Gets the tokenIssuancePolicies
    * The tokenIssuancePolicies assigned to this service principal. Supports $expand.
     *
     * @return array|null The tokenIssuancePolicies
     */
    public function getTokenIssuancePolicies()
    {
        if (array_key_exists("tokenIssuancePolicies", $this->_propDict)) {
           return $this->_propDict["tokenIssuancePolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenIssuancePolicies
    * The tokenIssuancePolicies assigned to this service principal. Supports $expand.
    *
    * @param TokenIssuancePolicy[] $val The tokenIssuancePolicies
    *
    * @return ServicePrincipal
    */
    public function setTokenIssuancePolicies($val)
    {
        $this->_propDict["tokenIssuancePolicies"] = $val;
        return $this;
    }


     /**
     * Gets the tokenLifetimePolicies
    * The tokenLifetimePolicies assigned to this service principal. Supports $expand.
     *
     * @return array|null The tokenLifetimePolicies
     */
    public function getTokenLifetimePolicies()
    {
        if (array_key_exists("tokenLifetimePolicies", $this->_propDict)) {
           return $this->_propDict["tokenLifetimePolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenLifetimePolicies
    * The tokenLifetimePolicies assigned to this service principal. Supports $expand.
    *
    * @param TokenLifetimePolicy[] $val The tokenLifetimePolicies
    *
    * @return ServicePrincipal
    */
    public function setTokenLifetimePolicies($val)
    {
        $this->_propDict["tokenLifetimePolicies"] = $val;
        return $this;
    }


     /**
     * Gets the transitiveMemberOf
     *
     * @return array|null The transitiveMemberOf
     */
    public function getTransitiveMemberOf()
    {
        if (array_key_exists("transitiveMemberOf", $this->_propDict)) {
           return $this->_propDict["transitiveMemberOf"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transitiveMemberOf
    *
    * @param DirectoryObject[] $val The transitiveMemberOf
    *
    * @return ServicePrincipal
    */
    public function setTransitiveMemberOf($val)
    {
        $this->_propDict["transitiveMemberOf"] = $val;
        return $this;
    }

    /**
    * Gets the synchronization
    * Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API.
    *
    * @return Synchronization|null The synchronization
    */
    public function getSynchronization()
    {
        if (array_key_exists("synchronization", $this->_propDict)) {
            if (is_a($this->_propDict["synchronization"], "\Beta\Microsoft\Graph\Model\Synchronization") || is_null($this->_propDict["synchronization"])) {
                return $this->_propDict["synchronization"];
            } else {
                $this->_propDict["synchronization"] = new Synchronization($this->_propDict["synchronization"]);
                return $this->_propDict["synchronization"];
            }
        }
        return null;
    }

    /**
    * Sets the synchronization
    * Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API.
    *
    * @param Synchronization $val The synchronization
    *
    * @return ServicePrincipal
    */
    public function setSynchronization($val)
    {
        $this->_propDict["synchronization"] = $val;
        return $this;
    }

}
