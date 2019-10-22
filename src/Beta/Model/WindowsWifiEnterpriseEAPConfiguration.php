<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsWifiEnterpriseEAPConfiguration File
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
* WindowsWifiEnterpriseEAPConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsWifiEnterpriseEAPConfiguration extends WindowsWifiConfiguration
{
    /**
    * Gets the networkSingleSignOn
    * Specify the network single sign on type.
    *
    * @return NetworkSingleSignOnType The networkSingleSignOn
    */
    public function getNetworkSingleSignOn()
    {
        if (array_key_exists("networkSingleSignOn", $this->_propDict)) {
            if (is_a($this->_propDict["networkSingleSignOn"], "Microsoft\Graph\Beta\Model\NetworkSingleSignOnType")) {
                return $this->_propDict["networkSingleSignOn"];
            } else {
                $this->_propDict["networkSingleSignOn"] = new NetworkSingleSignOnType($this->_propDict["networkSingleSignOn"]);
                return $this->_propDict["networkSingleSignOn"];
            }
        }
        return null;
    }
    
    /**
    * Sets the networkSingleSignOn
    * Specify the network single sign on type.
    *
    * @param NetworkSingleSignOnType $val The networkSingleSignOn
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setNetworkSingleSignOn($val)
    {
        $this->_propDict["networkSingleSignOn"] = $val;
        return $this;
    }
    
    /**
    * Gets the maximumAuthenticationTimeoutInSeconds
    * Specify maximum authentication timeout (in seconds).  Valid range: 1-120
    *
    * @return int The maximumAuthenticationTimeoutInSeconds
    */
    public function getMaximumAuthenticationTimeoutInSeconds()
    {
        if (array_key_exists("maximumAuthenticationTimeoutInSeconds", $this->_propDict)) {
            return $this->_propDict["maximumAuthenticationTimeoutInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumAuthenticationTimeoutInSeconds
    * Specify maximum authentication timeout (in seconds).  Valid range: 1-120
    *
    * @param int $val The maximumAuthenticationTimeoutInSeconds
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumAuthenticationTimeoutInSeconds($val)
    {
        $this->_propDict["maximumAuthenticationTimeoutInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the promptForAdditionalAuthenticationCredentials
    * Specify whether the wifi connection should prompt for additional authentication credentials.
    *
    * @return bool The promptForAdditionalAuthenticationCredentials
    */
    public function getPromptForAdditionalAuthenticationCredentials()
    {
        if (array_key_exists("promptForAdditionalAuthenticationCredentials", $this->_propDict)) {
            return $this->_propDict["promptForAdditionalAuthenticationCredentials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the promptForAdditionalAuthenticationCredentials
    * Specify whether the wifi connection should prompt for additional authentication credentials.
    *
    * @param bool $val The promptForAdditionalAuthenticationCredentials
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setPromptForAdditionalAuthenticationCredentials($val)
    {
        $this->_propDict["promptForAdditionalAuthenticationCredentials"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enablePairwiseMasterKeyCaching
    * Specify whether the wifi connection should enable pairwise master key caching.
    *
    * @return bool The enablePairwiseMasterKeyCaching
    */
    public function getEnablePairwiseMasterKeyCaching()
    {
        if (array_key_exists("enablePairwiseMasterKeyCaching", $this->_propDict)) {
            return $this->_propDict["enablePairwiseMasterKeyCaching"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enablePairwiseMasterKeyCaching
    * Specify whether the wifi connection should enable pairwise master key caching.
    *
    * @param bool $val The enablePairwiseMasterKeyCaching
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setEnablePairwiseMasterKeyCaching($val)
    {
        $this->_propDict["enablePairwiseMasterKeyCaching"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the maximumPairwiseMasterKeyCacheTimeInMinutes
    * Specify maximum pairwise master key cache time (in minutes).  Valid range: 5-1440
    *
    * @return int The maximumPairwiseMasterKeyCacheTimeInMinutes
    */
    public function getMaximumPairwiseMasterKeyCacheTimeInMinutes()
    {
        if (array_key_exists("maximumPairwiseMasterKeyCacheTimeInMinutes", $this->_propDict)) {
            return $this->_propDict["maximumPairwiseMasterKeyCacheTimeInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumPairwiseMasterKeyCacheTimeInMinutes
    * Specify maximum pairwise master key cache time (in minutes).  Valid range: 5-1440
    *
    * @param int $val The maximumPairwiseMasterKeyCacheTimeInMinutes
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumPairwiseMasterKeyCacheTimeInMinutes($val)
    {
        $this->_propDict["maximumPairwiseMasterKeyCacheTimeInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maximumNumberOfPairwiseMasterKeysInCache
    * Specify maximum number of pairwise master keys in cache.  Valid range: 1-255
    *
    * @return int The maximumNumberOfPairwiseMasterKeysInCache
    */
    public function getMaximumNumberOfPairwiseMasterKeysInCache()
    {
        if (array_key_exists("maximumNumberOfPairwiseMasterKeysInCache", $this->_propDict)) {
            return $this->_propDict["maximumNumberOfPairwiseMasterKeysInCache"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumNumberOfPairwiseMasterKeysInCache
    * Specify maximum number of pairwise master keys in cache.  Valid range: 1-255
    *
    * @param int $val The maximumNumberOfPairwiseMasterKeysInCache
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumNumberOfPairwiseMasterKeysInCache($val)
    {
        $this->_propDict["maximumNumberOfPairwiseMasterKeysInCache"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the enablePreAuthentication
    * Specify whether pre-authentication should be enabled.
    *
    * @return bool The enablePreAuthentication
    */
    public function getEnablePreAuthentication()
    {
        if (array_key_exists("enablePreAuthentication", $this->_propDict)) {
            return $this->_propDict["enablePreAuthentication"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enablePreAuthentication
    * Specify whether pre-authentication should be enabled.
    *
    * @param bool $val The enablePreAuthentication
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setEnablePreAuthentication($val)
    {
        $this->_propDict["enablePreAuthentication"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the maximumPreAuthenticationAttempts
    * Specify maximum pre-authentication attempts.  Valid range: 1-16
    *
    * @return int The maximumPreAuthenticationAttempts
    */
    public function getMaximumPreAuthenticationAttempts()
    {
        if (array_key_exists("maximumPreAuthenticationAttempts", $this->_propDict)) {
            return $this->_propDict["maximumPreAuthenticationAttempts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumPreAuthenticationAttempts
    * Specify maximum pre-authentication attempts.  Valid range: 1-16
    *
    * @param int $val The maximumPreAuthenticationAttempts
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumPreAuthenticationAttempts($val)
    {
        $this->_propDict["maximumPreAuthenticationAttempts"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the eapType
    * Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router).
    *
    * @return EapType The eapType
    */
    public function getEapType()
    {
        if (array_key_exists("eapType", $this->_propDict)) {
            if (is_a($this->_propDict["eapType"], "Microsoft\Graph\Beta\Model\EapType")) {
                return $this->_propDict["eapType"];
            } else {
                $this->_propDict["eapType"] = new EapType($this->_propDict["eapType"]);
                return $this->_propDict["eapType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eapType
    * Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router).
    *
    * @param EapType $val The eapType
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setEapType($val)
    {
        $this->_propDict["eapType"] = $val;
        return $this;
    }
    
    /**
    * Gets the trustedServerCertificateNames
    * Specify trusted server certificate names.
    *
    * @return string The trustedServerCertificateNames
    */
    public function getTrustedServerCertificateNames()
    {
        if (array_key_exists("trustedServerCertificateNames", $this->_propDict)) {
            return $this->_propDict["trustedServerCertificateNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the trustedServerCertificateNames
    * Specify trusted server certificate names.
    *
    * @param string $val The trustedServerCertificateNames
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setTrustedServerCertificateNames($val)
    {
        $this->_propDict["trustedServerCertificateNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    * Specify the authentication method.
    *
    * @return WiFiAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "Microsoft\Graph\Beta\Model\WiFiAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new WiFiAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    * Specify the authentication method.
    *
    * @param WiFiAuthenticationMethod $val The authenticationMethod
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the innerAuthenticationProtocolForEAPTTLS
    * Specify inner authentication protocol for EAP TTLS.
    *
    * @return NonEapAuthenticationMethodForEapTtlsType The innerAuthenticationProtocolForEAPTTLS
    */
    public function getInnerAuthenticationProtocolForEAPTTLS()
    {
        if (array_key_exists("innerAuthenticationProtocolForEAPTTLS", $this->_propDict)) {
            if (is_a($this->_propDict["innerAuthenticationProtocolForEAPTTLS"], "Microsoft\Graph\Beta\Model\NonEapAuthenticationMethodForEapTtlsType")) {
                return $this->_propDict["innerAuthenticationProtocolForEAPTTLS"];
            } else {
                $this->_propDict["innerAuthenticationProtocolForEAPTTLS"] = new NonEapAuthenticationMethodForEapTtlsType($this->_propDict["innerAuthenticationProtocolForEAPTTLS"]);
                return $this->_propDict["innerAuthenticationProtocolForEAPTTLS"];
            }
        }
        return null;
    }
    
    /**
    * Sets the innerAuthenticationProtocolForEAPTTLS
    * Specify inner authentication protocol for EAP TTLS.
    *
    * @param NonEapAuthenticationMethodForEapTtlsType $val The innerAuthenticationProtocolForEAPTTLS
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setInnerAuthenticationProtocolForEAPTTLS($val)
    {
        $this->_propDict["innerAuthenticationProtocolForEAPTTLS"] = $val;
        return $this;
    }
    
    /**
    * Gets the outerIdentityPrivacyTemporaryValue
    * Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
    *
    * @return string The outerIdentityPrivacyTemporaryValue
    */
    public function getOuterIdentityPrivacyTemporaryValue()
    {
        if (array_key_exists("outerIdentityPrivacyTemporaryValue", $this->_propDict)) {
            return $this->_propDict["outerIdentityPrivacyTemporaryValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outerIdentityPrivacyTemporaryValue
    * Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
    *
    * @param string $val The outerIdentityPrivacyTemporaryValue
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setOuterIdentityPrivacyTemporaryValue($val)
    {
        $this->_propDict["outerIdentityPrivacyTemporaryValue"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rootCertificatesForServerValidation
    * Specify root certificate for server validation.
     *
     * @return array The rootCertificatesForServerValidation
     */
    public function getRootCertificatesForServerValidation()
    {
        if (array_key_exists("rootCertificatesForServerValidation", $this->_propDict)) {
           return $this->_propDict["rootCertificatesForServerValidation"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rootCertificatesForServerValidation
    * Specify root certificate for server validation.
    *
    * @param Windows81TrustedRootCertificate $val The rootCertificatesForServerValidation
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setRootCertificatesForServerValidation($val)
    {
		$this->_propDict["rootCertificatesForServerValidation"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificateForClientAuthentication
    * Specify identity certificate for client authentication.
    *
    * @return WindowsCertificateProfileBase The identityCertificateForClientAuthentication
    */
    public function getIdentityCertificateForClientAuthentication()
    {
        if (array_key_exists("identityCertificateForClientAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificateForClientAuthentication"], "Microsoft\Graph\Beta\Model\WindowsCertificateProfileBase")) {
                return $this->_propDict["identityCertificateForClientAuthentication"];
            } else {
                $this->_propDict["identityCertificateForClientAuthentication"] = new WindowsCertificateProfileBase($this->_propDict["identityCertificateForClientAuthentication"]);
                return $this->_propDict["identityCertificateForClientAuthentication"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificateForClientAuthentication
    * Specify identity certificate for client authentication.
    *
    * @param WindowsCertificateProfileBase $val The identityCertificateForClientAuthentication
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setIdentityCertificateForClientAuthentication($val)
    {
        $this->_propDict["identityCertificateForClientAuthentication"] = $val;
        return $this;
    }
    
}