<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSEndpointProtectionConfiguration File
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
* MacOSEndpointProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MacOSEndpointProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the gatekeeperAllowedAppSource
    * System and Privacy setting that determines which download locations apps can be run from on a macOS device.
    *
    * @return MacOSGatekeeperAppSources The gatekeeperAllowedAppSource
    */
    public function getGatekeeperAllowedAppSource()
    {
        if (array_key_exists("gatekeeperAllowedAppSource", $this->_propDict)) {
            if (is_a($this->_propDict["gatekeeperAllowedAppSource"], "Microsoft\Graph\Beta\Model\MacOSGatekeeperAppSources")) {
                return $this->_propDict["gatekeeperAllowedAppSource"];
            } else {
                $this->_propDict["gatekeeperAllowedAppSource"] = new MacOSGatekeeperAppSources($this->_propDict["gatekeeperAllowedAppSource"]);
                return $this->_propDict["gatekeeperAllowedAppSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the gatekeeperAllowedAppSource
    * System and Privacy setting that determines which download locations apps can be run from on a macOS device.
    *
    * @param MacOSGatekeeperAppSources $val The gatekeeperAllowedAppSource
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setGatekeeperAllowedAppSource($val)
    {
        $this->_propDict["gatekeeperAllowedAppSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the gatekeeperBlockOverride
    * If set to true, the user override for Gatekeeper will be disabled.
    *
    * @return bool The gatekeeperBlockOverride
    */
    public function getGatekeeperBlockOverride()
    {
        if (array_key_exists("gatekeeperBlockOverride", $this->_propDict)) {
            return $this->_propDict["gatekeeperBlockOverride"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gatekeeperBlockOverride
    * If set to true, the user override for Gatekeeper will be disabled.
    *
    * @param bool $val The gatekeeperBlockOverride
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setGatekeeperBlockOverride($val)
    {
        $this->_propDict["gatekeeperBlockOverride"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnabled
    * Whether the firewall should be enabled or not.
    *
    * @return bool The firewallEnabled
    */
    public function getFirewallEnabled()
    {
        if (array_key_exists("firewallEnabled", $this->_propDict)) {
            return $this->_propDict["firewallEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnabled
    * Whether the firewall should be enabled or not.
    *
    * @param bool $val The firewallEnabled
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallEnabled($val)
    {
        $this->_propDict["firewallEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallBlockAllIncoming
    * Corresponds to the â€œBlock all incoming connectionsâ€ option.
    *
    * @return bool The firewallBlockAllIncoming
    */
    public function getFirewallBlockAllIncoming()
    {
        if (array_key_exists("firewallBlockAllIncoming", $this->_propDict)) {
            return $this->_propDict["firewallBlockAllIncoming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallBlockAllIncoming
    * Corresponds to the â€œBlock all incoming connectionsâ€ option.
    *
    * @param bool $val The firewallBlockAllIncoming
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallBlockAllIncoming($val)
    {
        $this->_propDict["firewallBlockAllIncoming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnableStealthMode
    * Corresponds to â€œEnable stealth mode.â€
    *
    * @return bool The firewallEnableStealthMode
    */
    public function getFirewallEnableStealthMode()
    {
        if (array_key_exists("firewallEnableStealthMode", $this->_propDict)) {
            return $this->_propDict["firewallEnableStealthMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnableStealthMode
    * Corresponds to â€œEnable stealth mode.â€
    *
    * @param bool $val The firewallEnableStealthMode
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallEnableStealthMode($val)
    {
        $this->_propDict["firewallEnableStealthMode"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the firewallApplications
    * List of applications with firewall settings. Firewall settings for applications not on this list are determined by the user. This collection can contain a maximum of 500 elements.
     *
     * @return array The firewallApplications
     */
    public function getFirewallApplications()
    {
        if (array_key_exists("firewallApplications", $this->_propDict)) {
           return $this->_propDict["firewallApplications"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the firewallApplications
    * List of applications with firewall settings. Firewall settings for applications not on this list are determined by the user. This collection can contain a maximum of 500 elements.
    *
    * @param MacOSFirewallApplication $val The firewallApplications
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallApplications($val)
    {
		$this->_propDict["firewallApplications"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultEnabled
    * Whether FileVault should be enabled or not.
    *
    * @return bool The fileVaultEnabled
    */
    public function getFileVaultEnabled()
    {
        if (array_key_exists("fileVaultEnabled", $this->_propDict)) {
            return $this->_propDict["fileVaultEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultEnabled
    * Whether FileVault should be enabled or not.
    *
    * @param bool $val The fileVaultEnabled
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultEnabled($val)
    {
        $this->_propDict["fileVaultEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultSelectedRecoveryKeyTypes
    * Required if FileVault is enabled, determines the type(s) of recovery key to use. 
    *
    * @return MacOSFileVaultRecoveryKeyTypes The fileVaultSelectedRecoveryKeyTypes
    */
    public function getFileVaultSelectedRecoveryKeyTypes()
    {
        if (array_key_exists("fileVaultSelectedRecoveryKeyTypes", $this->_propDict)) {
            if (is_a($this->_propDict["fileVaultSelectedRecoveryKeyTypes"], "Microsoft\Graph\Beta\Model\MacOSFileVaultRecoveryKeyTypes")) {
                return $this->_propDict["fileVaultSelectedRecoveryKeyTypes"];
            } else {
                $this->_propDict["fileVaultSelectedRecoveryKeyTypes"] = new MacOSFileVaultRecoveryKeyTypes($this->_propDict["fileVaultSelectedRecoveryKeyTypes"]);
                return $this->_propDict["fileVaultSelectedRecoveryKeyTypes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileVaultSelectedRecoveryKeyTypes
    * Required if FileVault is enabled, determines the type(s) of recovery key to use. 
    *
    * @param MacOSFileVaultRecoveryKeyTypes $val The fileVaultSelectedRecoveryKeyTypes
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultSelectedRecoveryKeyTypes($val)
    {
        $this->_propDict["fileVaultSelectedRecoveryKeyTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultInstitutionalRecoveryKeyCertificate
    * Required if selected recovery key type(s) include InstitutionalRecoveryKey. The DER Encoded certificate file used to set an institutional recovery key.
    *
    * @return \GuzzleHttp\Psr7\Stream The fileVaultInstitutionalRecoveryKeyCertificate
    */
    public function getFileVaultInstitutionalRecoveryKeyCertificate()
    {
        if (array_key_exists("fileVaultInstitutionalRecoveryKeyCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"];
            } else {
                $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"]);
                return $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileVaultInstitutionalRecoveryKeyCertificate
    * Required if selected recovery key type(s) include InstitutionalRecoveryKey. The DER Encoded certificate file used to set an institutional recovery key.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The fileVaultInstitutionalRecoveryKeyCertificate
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultInstitutionalRecoveryKeyCertificate($val)
    {
        $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultInstitutionalRecoveryKeyCertificateFileName
    * File name of the institutional recovery key certificate to display in UI. (*.der).
    *
    * @return string The fileVaultInstitutionalRecoveryKeyCertificateFileName
    */
    public function getFileVaultInstitutionalRecoveryKeyCertificateFileName()
    {
        if (array_key_exists("fileVaultInstitutionalRecoveryKeyCertificateFileName", $this->_propDict)) {
            return $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificateFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultInstitutionalRecoveryKeyCertificateFileName
    * File name of the institutional recovery key certificate to display in UI. (*.der).
    *
    * @param string $val The fileVaultInstitutionalRecoveryKeyCertificateFileName
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultInstitutionalRecoveryKeyCertificateFileName($val)
    {
        $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificateFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultPersonalRecoveryKeyHelpMessage
    * Required if selected recovery key type(s) include PersonalRecoveryKey. A short message displayed to the user that explains how they can retrieve their personal recovery key.
    *
    * @return string The fileVaultPersonalRecoveryKeyHelpMessage
    */
    public function getFileVaultPersonalRecoveryKeyHelpMessage()
    {
        if (array_key_exists("fileVaultPersonalRecoveryKeyHelpMessage", $this->_propDict)) {
            return $this->_propDict["fileVaultPersonalRecoveryKeyHelpMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultPersonalRecoveryKeyHelpMessage
    * Required if selected recovery key type(s) include PersonalRecoveryKey. A short message displayed to the user that explains how they can retrieve their personal recovery key.
    *
    * @param string $val The fileVaultPersonalRecoveryKeyHelpMessage
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultPersonalRecoveryKeyHelpMessage($val)
    {
        $this->_propDict["fileVaultPersonalRecoveryKeyHelpMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultAllowDeferralUntilSignOut
    * Optional. If set to true, the user can defer the enabling of FileVault until they sign out.
    *
    * @return bool The fileVaultAllowDeferralUntilSignOut
    */
    public function getFileVaultAllowDeferralUntilSignOut()
    {
        if (array_key_exists("fileVaultAllowDeferralUntilSignOut", $this->_propDict)) {
            return $this->_propDict["fileVaultAllowDeferralUntilSignOut"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultAllowDeferralUntilSignOut
    * Optional. If set to true, the user can defer the enabling of FileVault until they sign out.
    *
    * @param bool $val The fileVaultAllowDeferralUntilSignOut
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultAllowDeferralUntilSignOut($val)
    {
        $this->_propDict["fileVaultAllowDeferralUntilSignOut"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultNumberOfTimesUserCanIgnore
    * Optional. When using the Defer option, this is the maximum number of times the user can ignore prompts to enable FileVault before FileVault will be required for the user to sign in. If set to -1, it will always prompt to enable FileVault until FileVault is enabled, though it will allow the user to bypass enabling FileVault. Setting this to 0 will disable the feature.
    *
    * @return int The fileVaultNumberOfTimesUserCanIgnore
    */
    public function getFileVaultNumberOfTimesUserCanIgnore()
    {
        if (array_key_exists("fileVaultNumberOfTimesUserCanIgnore", $this->_propDict)) {
            return $this->_propDict["fileVaultNumberOfTimesUserCanIgnore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultNumberOfTimesUserCanIgnore
    * Optional. When using the Defer option, this is the maximum number of times the user can ignore prompts to enable FileVault before FileVault will be required for the user to sign in. If set to -1, it will always prompt to enable FileVault until FileVault is enabled, though it will allow the user to bypass enabling FileVault. Setting this to 0 will disable the feature.
    *
    * @param int $val The fileVaultNumberOfTimesUserCanIgnore
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultNumberOfTimesUserCanIgnore($val)
    {
        $this->_propDict["fileVaultNumberOfTimesUserCanIgnore"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultDisablePromptAtSignOut
    * Optional. When using the Defer option, if set to true, the user is not prompted to enable FileVault at sign-out.
    *
    * @return bool The fileVaultDisablePromptAtSignOut
    */
    public function getFileVaultDisablePromptAtSignOut()
    {
        if (array_key_exists("fileVaultDisablePromptAtSignOut", $this->_propDict)) {
            return $this->_propDict["fileVaultDisablePromptAtSignOut"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultDisablePromptAtSignOut
    * Optional. When using the Defer option, if set to true, the user is not prompted to enable FileVault at sign-out.
    *
    * @param bool $val The fileVaultDisablePromptAtSignOut
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultDisablePromptAtSignOut($val)
    {
        $this->_propDict["fileVaultDisablePromptAtSignOut"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultPersonalRecoveryKeyRotationInMonths
    * Optional. If selected recovery key type(s) include PersonalRecoveryKey, the frequency to rotate that key, in months.
    *
    * @return int The fileVaultPersonalRecoveryKeyRotationInMonths
    */
    public function getFileVaultPersonalRecoveryKeyRotationInMonths()
    {
        if (array_key_exists("fileVaultPersonalRecoveryKeyRotationInMonths", $this->_propDict)) {
            return $this->_propDict["fileVaultPersonalRecoveryKeyRotationInMonths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultPersonalRecoveryKeyRotationInMonths
    * Optional. If selected recovery key type(s) include PersonalRecoveryKey, the frequency to rotate that key, in months.
    *
    * @param int $val The fileVaultPersonalRecoveryKeyRotationInMonths
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultPersonalRecoveryKeyRotationInMonths($val)
    {
        $this->_propDict["fileVaultPersonalRecoveryKeyRotationInMonths"] = intval($val);
        return $this;
    }
    
}