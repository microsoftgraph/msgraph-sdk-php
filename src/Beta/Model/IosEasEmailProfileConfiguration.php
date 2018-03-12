<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosEasEmailProfileConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* IosEasEmailProfileConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosEasEmailProfileConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountName
    *
    * @return string The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountName
    *
    * @param string $val The accountName
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    *
    * @return EasAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "Microsoft\Graph\Model\EasAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new EasAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    *
    * @param EasAuthenticationMethod $val The authenticationMethod
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the blockMovingMessagesToOtherEmailAccounts
    *
    * @return bool The blockMovingMessagesToOtherEmailAccounts
    */
    public function getBlockMovingMessagesToOtherEmailAccounts()
    {
        if (array_key_exists("blockMovingMessagesToOtherEmailAccounts", $this->_propDict)) {
            return $this->_propDict["blockMovingMessagesToOtherEmailAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockMovingMessagesToOtherEmailAccounts
    *
    * @param bool $val The blockMovingMessagesToOtherEmailAccounts
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setBlockMovingMessagesToOtherEmailAccounts($val)
    {
        $this->_propDict["blockMovingMessagesToOtherEmailAccounts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the blockSendingEmailFromThirdPartyApps
    *
    * @return bool The blockSendingEmailFromThirdPartyApps
    */
    public function getBlockSendingEmailFromThirdPartyApps()
    {
        if (array_key_exists("blockSendingEmailFromThirdPartyApps", $this->_propDict)) {
            return $this->_propDict["blockSendingEmailFromThirdPartyApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockSendingEmailFromThirdPartyApps
    *
    * @param bool $val The blockSendingEmailFromThirdPartyApps
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setBlockSendingEmailFromThirdPartyApps($val)
    {
        $this->_propDict["blockSendingEmailFromThirdPartyApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the blockSyncingRecentlyUsedEmailAddresses
    *
    * @return bool The blockSyncingRecentlyUsedEmailAddresses
    */
    public function getBlockSyncingRecentlyUsedEmailAddresses()
    {
        if (array_key_exists("blockSyncingRecentlyUsedEmailAddresses", $this->_propDict)) {
            return $this->_propDict["blockSyncingRecentlyUsedEmailAddresses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the blockSyncingRecentlyUsedEmailAddresses
    *
    * @param bool $val The blockSyncingRecentlyUsedEmailAddresses
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setBlockSyncingRecentlyUsedEmailAddresses($val)
    {
        $this->_propDict["blockSyncingRecentlyUsedEmailAddresses"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the durationOfEmailToSync
    *
    * @return EmailSyncDuration The durationOfEmailToSync
    */
    public function getDurationOfEmailToSync()
    {
        if (array_key_exists("durationOfEmailToSync", $this->_propDict)) {
            if (is_a($this->_propDict["durationOfEmailToSync"], "Microsoft\Graph\Model\EmailSyncDuration")) {
                return $this->_propDict["durationOfEmailToSync"];
            } else {
                $this->_propDict["durationOfEmailToSync"] = new EmailSyncDuration($this->_propDict["durationOfEmailToSync"]);
                return $this->_propDict["durationOfEmailToSync"];
            }
        }
        return null;
    }
    
    /**
    * Sets the durationOfEmailToSync
    *
    * @param EmailSyncDuration $val The durationOfEmailToSync
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setDurationOfEmailToSync($val)
    {
        $this->_propDict["durationOfEmailToSync"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailAddressSource
    *
    * @return UserEmailSource The emailAddressSource
    */
    public function getEmailAddressSource()
    {
        if (array_key_exists("emailAddressSource", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddressSource"], "Microsoft\Graph\Model\UserEmailSource")) {
                return $this->_propDict["emailAddressSource"];
            } else {
                $this->_propDict["emailAddressSource"] = new UserEmailSource($this->_propDict["emailAddressSource"]);
                return $this->_propDict["emailAddressSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailAddressSource
    *
    * @param UserEmailSource $val The emailAddressSource
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setEmailAddressSource($val)
    {
        $this->_propDict["emailAddressSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the hostName
    *
    * @return string The hostName
    */
    public function getHostName()
    {
        if (array_key_exists("hostName", $this->_propDict)) {
            return $this->_propDict["hostName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hostName
    *
    * @param string $val The hostName
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setHostName($val)
    {
        $this->_propDict["hostName"] = $val;
        return $this;
    }
    
    /**
    * Gets the requireSmime
    *
    * @return bool The requireSmime
    */
    public function getRequireSmime()
    {
        if (array_key_exists("requireSmime", $this->_propDict)) {
            return $this->_propDict["requireSmime"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireSmime
    *
    * @param bool $val The requireSmime
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setRequireSmime($val)
    {
        $this->_propDict["requireSmime"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smimeEnablePerMessageSwitch
    *
    * @return bool The smimeEnablePerMessageSwitch
    */
    public function getSmimeEnablePerMessageSwitch()
    {
        if (array_key_exists("smimeEnablePerMessageSwitch", $this->_propDict)) {
            return $this->_propDict["smimeEnablePerMessageSwitch"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smimeEnablePerMessageSwitch
    *
    * @param bool $val The smimeEnablePerMessageSwitch
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeEnablePerMessageSwitch($val)
    {
        $this->_propDict["smimeEnablePerMessageSwitch"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requireSsl
    *
    * @return bool The requireSsl
    */
    public function getRequireSsl()
    {
        if (array_key_exists("requireSsl", $this->_propDict)) {
            return $this->_propDict["requireSsl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireSsl
    *
    * @param bool $val The requireSsl
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setRequireSsl($val)
    {
        $this->_propDict["requireSsl"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usernameSource
    *
    * @return UserEmailSource The usernameSource
    */
    public function getUsernameSource()
    {
        if (array_key_exists("usernameSource", $this->_propDict)) {
            if (is_a($this->_propDict["usernameSource"], "Microsoft\Graph\Model\UserEmailSource")) {
                return $this->_propDict["usernameSource"];
            } else {
                $this->_propDict["usernameSource"] = new UserEmailSource($this->_propDict["usernameSource"]);
                return $this->_propDict["usernameSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the usernameSource
    *
    * @param UserEmailSource $val The usernameSource
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setUsernameSource($val)
    {
        $this->_propDict["usernameSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    *
    * @return IosCertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "Microsoft\Graph\Model\IosCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new IosCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    *
    * @param IosCertificateProfileBase $val The identityCertificate
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the smimeSigningCertificate
    *
    * @return IosCertificateProfile The smimeSigningCertificate
    */
    public function getSmimeSigningCertificate()
    {
        if (array_key_exists("smimeSigningCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["smimeSigningCertificate"], "Microsoft\Graph\Model\IosCertificateProfile")) {
                return $this->_propDict["smimeSigningCertificate"];
            } else {
                $this->_propDict["smimeSigningCertificate"] = new IosCertificateProfile($this->_propDict["smimeSigningCertificate"]);
                return $this->_propDict["smimeSigningCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the smimeSigningCertificate
    *
    * @param IosCertificateProfile $val The smimeSigningCertificate
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeSigningCertificate($val)
    {
        $this->_propDict["smimeSigningCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the smimeEncryptionCertificate
    *
    * @return IosCertificateProfile The smimeEncryptionCertificate
    */
    public function getSmimeEncryptionCertificate()
    {
        if (array_key_exists("smimeEncryptionCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["smimeEncryptionCertificate"], "Microsoft\Graph\Model\IosCertificateProfile")) {
                return $this->_propDict["smimeEncryptionCertificate"];
            } else {
                $this->_propDict["smimeEncryptionCertificate"] = new IosCertificateProfile($this->_propDict["smimeEncryptionCertificate"]);
                return $this->_propDict["smimeEncryptionCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the smimeEncryptionCertificate
    *
    * @param IosCertificateProfile $val The smimeEncryptionCertificate
    *
    * @return IosEasEmailProfileConfiguration
    */
    public function setSmimeEncryptionCertificate($val)
    {
        $this->_propDict["smimeEncryptionCertificate"] = $val;
        return $this;
    }
    
}