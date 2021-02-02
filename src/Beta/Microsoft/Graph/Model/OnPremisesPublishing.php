<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesPublishing File
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
* OnPremisesPublishing class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesPublishing extends Entity
{
    /**
    * Gets the alternateUrl
    *
    * @return string The alternateUrl
    */
    public function getAlternateUrl()
    {
        if (array_key_exists("alternateUrl", $this->_propDict)) {
            return $this->_propDict["alternateUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alternateUrl
    *
    * @param string $val The value of the alternateUrl
    *
    * @return OnPremisesPublishing
    */
    public function setAlternateUrl($val)
    {
        $this->_propDict["alternateUrl"] = $val;
        return $this;
    }
    /**
    * Gets the applicationServerTimeout
    *
    * @return string The applicationServerTimeout
    */
    public function getApplicationServerTimeout()
    {
        if (array_key_exists("applicationServerTimeout", $this->_propDict)) {
            return $this->_propDict["applicationServerTimeout"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationServerTimeout
    *
    * @param string $val The value of the applicationServerTimeout
    *
    * @return OnPremisesPublishing
    */
    public function setApplicationServerTimeout($val)
    {
        $this->_propDict["applicationServerTimeout"] = $val;
        return $this;
    }
    /**
    * Gets the applicationType
    *
    * @return string The applicationType
    */
    public function getApplicationType()
    {
        if (array_key_exists("applicationType", $this->_propDict)) {
            return $this->_propDict["applicationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationType
    *
    * @param string $val The value of the applicationType
    *
    * @return OnPremisesPublishing
    */
    public function setApplicationType($val)
    {
        $this->_propDict["applicationType"] = $val;
        return $this;
    }

    /**
    * Gets the externalAuthenticationType
    *
    * @return ExternalAuthenticationType The externalAuthenticationType
    */
    public function getExternalAuthenticationType()
    {
        if (array_key_exists("externalAuthenticationType", $this->_propDict)) {
            if (is_a($this->_propDict["externalAuthenticationType"], "Beta\Microsoft\Graph\Model\ExternalAuthenticationType")) {
                return $this->_propDict["externalAuthenticationType"];
            } else {
                $this->_propDict["externalAuthenticationType"] = new ExternalAuthenticationType($this->_propDict["externalAuthenticationType"]);
                return $this->_propDict["externalAuthenticationType"];
            }
        }
        return null;
    }

    /**
    * Sets the externalAuthenticationType
    *
    * @param ExternalAuthenticationType $val The value to assign to the externalAuthenticationType
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setExternalAuthenticationType($val)
    {
        $this->_propDict["externalAuthenticationType"] = $val;
         return $this;
    }
    /**
    * Gets the externalUrl
    *
    * @return string The externalUrl
    */
    public function getExternalUrl()
    {
        if (array_key_exists("externalUrl", $this->_propDict)) {
            return $this->_propDict["externalUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalUrl
    *
    * @param string $val The value of the externalUrl
    *
    * @return OnPremisesPublishing
    */
    public function setExternalUrl($val)
    {
        $this->_propDict["externalUrl"] = $val;
        return $this;
    }
    /**
    * Gets the internalUrl
    *
    * @return string The internalUrl
    */
    public function getInternalUrl()
    {
        if (array_key_exists("internalUrl", $this->_propDict)) {
            return $this->_propDict["internalUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalUrl
    *
    * @param string $val The value of the internalUrl
    *
    * @return OnPremisesPublishing
    */
    public function setInternalUrl($val)
    {
        $this->_propDict["internalUrl"] = $val;
        return $this;
    }
    /**
    * Gets the isHttpOnlyCookieEnabled
    *
    * @return bool The isHttpOnlyCookieEnabled
    */
    public function getIsHttpOnlyCookieEnabled()
    {
        if (array_key_exists("isHttpOnlyCookieEnabled", $this->_propDict)) {
            return $this->_propDict["isHttpOnlyCookieEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHttpOnlyCookieEnabled
    *
    * @param bool $val The value of the isHttpOnlyCookieEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsHttpOnlyCookieEnabled($val)
    {
        $this->_propDict["isHttpOnlyCookieEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isOnPremPublishingEnabled
    *
    * @return bool The isOnPremPublishingEnabled
    */
    public function getIsOnPremPublishingEnabled()
    {
        if (array_key_exists("isOnPremPublishingEnabled", $this->_propDict)) {
            return $this->_propDict["isOnPremPublishingEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isOnPremPublishingEnabled
    *
    * @param bool $val The value of the isOnPremPublishingEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsOnPremPublishingEnabled($val)
    {
        $this->_propDict["isOnPremPublishingEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isPersistentCookieEnabled
    *
    * @return bool The isPersistentCookieEnabled
    */
    public function getIsPersistentCookieEnabled()
    {
        if (array_key_exists("isPersistentCookieEnabled", $this->_propDict)) {
            return $this->_propDict["isPersistentCookieEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPersistentCookieEnabled
    *
    * @param bool $val The value of the isPersistentCookieEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsPersistentCookieEnabled($val)
    {
        $this->_propDict["isPersistentCookieEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isSecureCookieEnabled
    *
    * @return bool The isSecureCookieEnabled
    */
    public function getIsSecureCookieEnabled()
    {
        if (array_key_exists("isSecureCookieEnabled", $this->_propDict)) {
            return $this->_propDict["isSecureCookieEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSecureCookieEnabled
    *
    * @param bool $val The value of the isSecureCookieEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsSecureCookieEnabled($val)
    {
        $this->_propDict["isSecureCookieEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isTranslateHostHeaderEnabled
    *
    * @return bool The isTranslateHostHeaderEnabled
    */
    public function getIsTranslateHostHeaderEnabled()
    {
        if (array_key_exists("isTranslateHostHeaderEnabled", $this->_propDict)) {
            return $this->_propDict["isTranslateHostHeaderEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isTranslateHostHeaderEnabled
    *
    * @param bool $val The value of the isTranslateHostHeaderEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsTranslateHostHeaderEnabled($val)
    {
        $this->_propDict["isTranslateHostHeaderEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isTranslateLinksInBodyEnabled
    *
    * @return bool The isTranslateLinksInBodyEnabled
    */
    public function getIsTranslateLinksInBodyEnabled()
    {
        if (array_key_exists("isTranslateLinksInBodyEnabled", $this->_propDict)) {
            return $this->_propDict["isTranslateLinksInBodyEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isTranslateLinksInBodyEnabled
    *
    * @param bool $val The value of the isTranslateLinksInBodyEnabled
    *
    * @return OnPremisesPublishing
    */
    public function setIsTranslateLinksInBodyEnabled($val)
    {
        $this->_propDict["isTranslateLinksInBodyEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the singleSignOnSettings
    *
    * @return OnPremisesPublishingSingleSignOn The singleSignOnSettings
    */
    public function getSingleSignOnSettings()
    {
        if (array_key_exists("singleSignOnSettings", $this->_propDict)) {
            if (is_a($this->_propDict["singleSignOnSettings"], "Beta\Microsoft\Graph\Model\OnPremisesPublishingSingleSignOn")) {
                return $this->_propDict["singleSignOnSettings"];
            } else {
                $this->_propDict["singleSignOnSettings"] = new OnPremisesPublishingSingleSignOn($this->_propDict["singleSignOnSettings"]);
                return $this->_propDict["singleSignOnSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the singleSignOnSettings
    *
    * @param OnPremisesPublishingSingleSignOn $val The value to assign to the singleSignOnSettings
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setSingleSignOnSettings($val)
    {
        $this->_propDict["singleSignOnSettings"] = $val;
         return $this;
    }
    /**
    * Gets the useAlternateUrlForTranslationAndRedirect
    *
    * @return bool The useAlternateUrlForTranslationAndRedirect
    */
    public function getUseAlternateUrlForTranslationAndRedirect()
    {
        if (array_key_exists("useAlternateUrlForTranslationAndRedirect", $this->_propDict)) {
            return $this->_propDict["useAlternateUrlForTranslationAndRedirect"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useAlternateUrlForTranslationAndRedirect
    *
    * @param bool $val The value of the useAlternateUrlForTranslationAndRedirect
    *
    * @return OnPremisesPublishing
    */
    public function setUseAlternateUrlForTranslationAndRedirect($val)
    {
        $this->_propDict["useAlternateUrlForTranslationAndRedirect"] = $val;
        return $this;
    }

    /**
    * Gets the verifiedCustomDomainCertificatesMetadata
    *
    * @return VerifiedCustomDomainCertificatesMetadata The verifiedCustomDomainCertificatesMetadata
    */
    public function getVerifiedCustomDomainCertificatesMetadata()
    {
        if (array_key_exists("verifiedCustomDomainCertificatesMetadata", $this->_propDict)) {
            if (is_a($this->_propDict["verifiedCustomDomainCertificatesMetadata"], "Beta\Microsoft\Graph\Model\VerifiedCustomDomainCertificatesMetadata")) {
                return $this->_propDict["verifiedCustomDomainCertificatesMetadata"];
            } else {
                $this->_propDict["verifiedCustomDomainCertificatesMetadata"] = new VerifiedCustomDomainCertificatesMetadata($this->_propDict["verifiedCustomDomainCertificatesMetadata"]);
                return $this->_propDict["verifiedCustomDomainCertificatesMetadata"];
            }
        }
        return null;
    }

    /**
    * Sets the verifiedCustomDomainCertificatesMetadata
    *
    * @param VerifiedCustomDomainCertificatesMetadata $val The value to assign to the verifiedCustomDomainCertificatesMetadata
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setVerifiedCustomDomainCertificatesMetadata($val)
    {
        $this->_propDict["verifiedCustomDomainCertificatesMetadata"] = $val;
         return $this;
    }

    /**
    * Gets the verifiedCustomDomainKeyCredential
    *
    * @return KeyCredential The verifiedCustomDomainKeyCredential
    */
    public function getVerifiedCustomDomainKeyCredential()
    {
        if (array_key_exists("verifiedCustomDomainKeyCredential", $this->_propDict)) {
            if (is_a($this->_propDict["verifiedCustomDomainKeyCredential"], "Beta\Microsoft\Graph\Model\KeyCredential")) {
                return $this->_propDict["verifiedCustomDomainKeyCredential"];
            } else {
                $this->_propDict["verifiedCustomDomainKeyCredential"] = new KeyCredential($this->_propDict["verifiedCustomDomainKeyCredential"]);
                return $this->_propDict["verifiedCustomDomainKeyCredential"];
            }
        }
        return null;
    }

    /**
    * Sets the verifiedCustomDomainKeyCredential
    *
    * @param KeyCredential $val The value to assign to the verifiedCustomDomainKeyCredential
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setVerifiedCustomDomainKeyCredential($val)
    {
        $this->_propDict["verifiedCustomDomainKeyCredential"] = $val;
         return $this;
    }

    /**
    * Gets the verifiedCustomDomainPasswordCredential
    *
    * @return PasswordCredential The verifiedCustomDomainPasswordCredential
    */
    public function getVerifiedCustomDomainPasswordCredential()
    {
        if (array_key_exists("verifiedCustomDomainPasswordCredential", $this->_propDict)) {
            if (is_a($this->_propDict["verifiedCustomDomainPasswordCredential"], "Beta\Microsoft\Graph\Model\PasswordCredential")) {
                return $this->_propDict["verifiedCustomDomainPasswordCredential"];
            } else {
                $this->_propDict["verifiedCustomDomainPasswordCredential"] = new PasswordCredential($this->_propDict["verifiedCustomDomainPasswordCredential"]);
                return $this->_propDict["verifiedCustomDomainPasswordCredential"];
            }
        }
        return null;
    }

    /**
    * Sets the verifiedCustomDomainPasswordCredential
    *
    * @param PasswordCredential $val The value to assign to the verifiedCustomDomainPasswordCredential
    *
    * @return OnPremisesPublishing The OnPremisesPublishing
    */
    public function setVerifiedCustomDomainPasswordCredential($val)
    {
        $this->_propDict["verifiedCustomDomainPasswordCredential"] = $val;
         return $this;
    }
}
