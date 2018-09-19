<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10VpnConfiguration File
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
* Windows10VpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Windows10VpnConfiguration extends WindowsVpnConfiguration
{
    /**
    * Gets the profileTarget
    *
    * @return Windows10VpnProfileTarget The profileTarget
    */
    public function getProfileTarget()
    {
        if (array_key_exists("profileTarget", $this->_propDict)) {
            if (is_a($this->_propDict["profileTarget"], "Microsoft\Graph\Beta\Model\Windows10VpnProfileTarget")) {
                return $this->_propDict["profileTarget"];
            } else {
                $this->_propDict["profileTarget"] = new Windows10VpnProfileTarget($this->_propDict["profileTarget"]);
                return $this->_propDict["profileTarget"];
            }
        }
        return null;
    }
    
    /**
    * Sets the profileTarget
    *
    * @param Windows10VpnProfileTarget $val The profileTarget
    *
    * @return Windows10VpnConfiguration
    */
    public function setProfileTarget($val)
    {
        $this->_propDict["profileTarget"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionType
    *
    * @return Windows10VpnConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "Microsoft\Graph\Beta\Model\Windows10VpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new Windows10VpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    *
    * @param Windows10VpnConnectionType $val The connectionType
    *
    * @return Windows10VpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableSplitTunneling
    *
    * @return bool The enableSplitTunneling
    */
    public function getEnableSplitTunneling()
    {
        if (array_key_exists("enableSplitTunneling", $this->_propDict)) {
            return $this->_propDict["enableSplitTunneling"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSplitTunneling
    *
    * @param bool $val The enableSplitTunneling
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableSplitTunneling($val)
    {
        $this->_propDict["enableSplitTunneling"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableAlwaysOn
    *
    * @return bool The enableAlwaysOn
    */
    public function getEnableAlwaysOn()
    {
        if (array_key_exists("enableAlwaysOn", $this->_propDict)) {
            return $this->_propDict["enableAlwaysOn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableAlwaysOn
    *
    * @param bool $val The enableAlwaysOn
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableAlwaysOn($val)
    {
        $this->_propDict["enableAlwaysOn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableDeviceTunnel
    *
    * @return bool The enableDeviceTunnel
    */
    public function getEnableDeviceTunnel()
    {
        if (array_key_exists("enableDeviceTunnel", $this->_propDict)) {
            return $this->_propDict["enableDeviceTunnel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableDeviceTunnel
    *
    * @param bool $val The enableDeviceTunnel
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableDeviceTunnel($val)
    {
        $this->_propDict["enableDeviceTunnel"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableDnsRegistration
    *
    * @return bool The enableDnsRegistration
    */
    public function getEnableDnsRegistration()
    {
        if (array_key_exists("enableDnsRegistration", $this->_propDict)) {
            return $this->_propDict["enableDnsRegistration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableDnsRegistration
    *
    * @param bool $val The enableDnsRegistration
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableDnsRegistration($val)
    {
        $this->_propDict["enableDnsRegistration"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the dnsSuffixes
    *
    * @return string The dnsSuffixes
    */
    public function getDnsSuffixes()
    {
        if (array_key_exists("dnsSuffixes", $this->_propDict)) {
            return $this->_propDict["dnsSuffixes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dnsSuffixes
    *
    * @param string $val The dnsSuffixes
    *
    * @return Windows10VpnConfiguration
    */
    public function setDnsSuffixes($val)
    {
        $this->_propDict["dnsSuffixes"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    *
    * @return Windows10VpnAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "Microsoft\Graph\Beta\Model\Windows10VpnAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new Windows10VpnAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    *
    * @param Windows10VpnAuthenticationMethod $val The authenticationMethod
    *
    * @return Windows10VpnConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the rememberUserCredentials
    *
    * @return bool The rememberUserCredentials
    */
    public function getRememberUserCredentials()
    {
        if (array_key_exists("rememberUserCredentials", $this->_propDict)) {
            return $this->_propDict["rememberUserCredentials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rememberUserCredentials
    *
    * @param bool $val The rememberUserCredentials
    *
    * @return Windows10VpnConfiguration
    */
    public function setRememberUserCredentials($val)
    {
        $this->_propDict["rememberUserCredentials"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableConditionalAccess
    *
    * @return bool The enableConditionalAccess
    */
    public function getEnableConditionalAccess()
    {
        if (array_key_exists("enableConditionalAccess", $this->_propDict)) {
            return $this->_propDict["enableConditionalAccess"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableConditionalAccess
    *
    * @param bool $val The enableConditionalAccess
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableConditionalAccess($val)
    {
        $this->_propDict["enableConditionalAccess"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableSingleSignOnWithAlternateCertificate
    *
    * @return bool The enableSingleSignOnWithAlternateCertificate
    */
    public function getEnableSingleSignOnWithAlternateCertificate()
    {
        if (array_key_exists("enableSingleSignOnWithAlternateCertificate", $this->_propDict)) {
            return $this->_propDict["enableSingleSignOnWithAlternateCertificate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSingleSignOnWithAlternateCertificate
    *
    * @param bool $val The enableSingleSignOnWithAlternateCertificate
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableSingleSignOnWithAlternateCertificate($val)
    {
        $this->_propDict["enableSingleSignOnWithAlternateCertificate"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the singleSignOnEku
    *
    * @return ExtendedKeyUsage The singleSignOnEku
    */
    public function getSingleSignOnEku()
    {
        if (array_key_exists("singleSignOnEku", $this->_propDict)) {
            if (is_a($this->_propDict["singleSignOnEku"], "Microsoft\Graph\Beta\Model\ExtendedKeyUsage")) {
                return $this->_propDict["singleSignOnEku"];
            } else {
                $this->_propDict["singleSignOnEku"] = new ExtendedKeyUsage($this->_propDict["singleSignOnEku"]);
                return $this->_propDict["singleSignOnEku"];
            }
        }
        return null;
    }
    
    /**
    * Sets the singleSignOnEku
    *
    * @param ExtendedKeyUsage $val The singleSignOnEku
    *
    * @return Windows10VpnConfiguration
    */
    public function setSingleSignOnEku($val)
    {
        $this->_propDict["singleSignOnEku"] = $val;
        return $this;
    }
    
    /**
    * Gets the singleSignOnIssuerHash
    *
    * @return string The singleSignOnIssuerHash
    */
    public function getSingleSignOnIssuerHash()
    {
        if (array_key_exists("singleSignOnIssuerHash", $this->_propDict)) {
            return $this->_propDict["singleSignOnIssuerHash"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the singleSignOnIssuerHash
    *
    * @param string $val The singleSignOnIssuerHash
    *
    * @return Windows10VpnConfiguration
    */
    public function setSingleSignOnIssuerHash($val)
    {
        $this->_propDict["singleSignOnIssuerHash"] = $val;
        return $this;
    }
    
    /**
    * Gets the eapXml
    *
    * @return \GuzzleHttp\Psr7\Stream The eapXml
    */
    public function getEapXml()
    {
        if (array_key_exists("eapXml", $this->_propDict)) {
            if (is_a($this->_propDict["eapXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["eapXml"];
            } else {
                $this->_propDict["eapXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["eapXml"]);
                return $this->_propDict["eapXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eapXml
    *
    * @param \GuzzleHttp\Psr7\Stream $val The eapXml
    *
    * @return Windows10VpnConfiguration
    */
    public function setEapXml($val)
    {
        $this->_propDict["eapXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyServer
    *
    * @return Windows10VpnProxyServer The proxyServer
    */
    public function getProxyServer()
    {
        if (array_key_exists("proxyServer", $this->_propDict)) {
            if (is_a($this->_propDict["proxyServer"], "Microsoft\Graph\Beta\Model\Windows10VpnProxyServer")) {
                return $this->_propDict["proxyServer"];
            } else {
                $this->_propDict["proxyServer"] = new Windows10VpnProxyServer($this->_propDict["proxyServer"]);
                return $this->_propDict["proxyServer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxyServer
    *
    * @param Windows10VpnProxyServer $val The proxyServer
    *
    * @return Windows10VpnConfiguration
    */
    public function setProxyServer($val)
    {
        $this->_propDict["proxyServer"] = $val;
        return $this;
    }
    

     /** 
     * Gets the associatedApps
     *
     * @return array The associatedApps
     */
    public function getAssociatedApps()
    {
        if (array_key_exists("associatedApps", $this->_propDict)) {
           return $this->_propDict["associatedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the associatedApps
    *
    * @param Windows10AssociatedApps $val The associatedApps
    *
    * @return Windows10VpnConfiguration
    */
    public function setAssociatedApps($val)
    {
		$this->_propDict["associatedApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the onlyAssociatedAppsCanUseConnection
    *
    * @return bool The onlyAssociatedAppsCanUseConnection
    */
    public function getOnlyAssociatedAppsCanUseConnection()
    {
        if (array_key_exists("onlyAssociatedAppsCanUseConnection", $this->_propDict)) {
            return $this->_propDict["onlyAssociatedAppsCanUseConnection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onlyAssociatedAppsCanUseConnection
    *
    * @param bool $val The onlyAssociatedAppsCanUseConnection
    *
    * @return Windows10VpnConfiguration
    */
    public function setOnlyAssociatedAppsCanUseConnection($val)
    {
        $this->_propDict["onlyAssociatedAppsCanUseConnection"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsInformationProtectionDomain
    *
    * @return string The windowsInformationProtectionDomain
    */
    public function getWindowsInformationProtectionDomain()
    {
        if (array_key_exists("windowsInformationProtectionDomain", $this->_propDict)) {
            return $this->_propDict["windowsInformationProtectionDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsInformationProtectionDomain
    *
    * @param string $val The windowsInformationProtectionDomain
    *
    * @return Windows10VpnConfiguration
    */
    public function setWindowsInformationProtectionDomain($val)
    {
        $this->_propDict["windowsInformationProtectionDomain"] = $val;
        return $this;
    }
    

     /** 
     * Gets the trafficRules
     *
     * @return array The trafficRules
     */
    public function getTrafficRules()
    {
        if (array_key_exists("trafficRules", $this->_propDict)) {
           return $this->_propDict["trafficRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the trafficRules
    *
    * @param VpnTrafficRule $val The trafficRules
    *
    * @return Windows10VpnConfiguration
    */
    public function setTrafficRules($val)
    {
		$this->_propDict["trafficRules"] = $val;
        return $this;
    }
    

     /** 
     * Gets the routes
     *
     * @return array The routes
     */
    public function getRoutes()
    {
        if (array_key_exists("routes", $this->_propDict)) {
           return $this->_propDict["routes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the routes
    *
    * @param VpnRoute $val The routes
    *
    * @return Windows10VpnConfiguration
    */
    public function setRoutes($val)
    {
		$this->_propDict["routes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dnsRules
     *
     * @return array The dnsRules
     */
    public function getDnsRules()
    {
        if (array_key_exists("dnsRules", $this->_propDict)) {
           return $this->_propDict["dnsRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dnsRules
    *
    * @param VpnDnsRule $val The dnsRules
    *
    * @return Windows10VpnConfiguration
    */
    public function setDnsRules($val)
    {
		$this->_propDict["dnsRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    *
    * @return WindowsCertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "Microsoft\Graph\Beta\Model\WindowsCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new WindowsCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    *
    * @param WindowsCertificateProfileBase $val The identityCertificate
    *
    * @return Windows10VpnConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}