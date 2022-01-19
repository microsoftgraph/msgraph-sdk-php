<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InternalDomainFederation File
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
* InternalDomainFederation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InternalDomainFederation extends SamlOrWsFedProvider
{
    /**
    * Gets the activeSignInUri
    *
    * @return string|null The activeSignInUri
    */
    public function getActiveSignInUri()
    {
        if (array_key_exists("activeSignInUri", $this->_propDict)) {
            return $this->_propDict["activeSignInUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeSignInUri
    *
    * @param string $val The activeSignInUri
    *
    * @return InternalDomainFederation
    */
    public function setActiveSignInUri($val)
    {
        $this->_propDict["activeSignInUri"] = $val;
        return $this;
    }

    /**
    * Gets the federatedIdpMfaBehavior
    *
    * @return FederatedIdpMfaBehavior|null The federatedIdpMfaBehavior
    */
    public function getFederatedIdpMfaBehavior()
    {
        if (array_key_exists("federatedIdpMfaBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["federatedIdpMfaBehavior"], "\Beta\Microsoft\Graph\Model\FederatedIdpMfaBehavior") || is_null($this->_propDict["federatedIdpMfaBehavior"])) {
                return $this->_propDict["federatedIdpMfaBehavior"];
            } else {
                $this->_propDict["federatedIdpMfaBehavior"] = new FederatedIdpMfaBehavior($this->_propDict["federatedIdpMfaBehavior"]);
                return $this->_propDict["federatedIdpMfaBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the federatedIdpMfaBehavior
    *
    * @param FederatedIdpMfaBehavior $val The federatedIdpMfaBehavior
    *
    * @return InternalDomainFederation
    */
    public function setFederatedIdpMfaBehavior($val)
    {
        $this->_propDict["federatedIdpMfaBehavior"] = $val;
        return $this;
    }

    /**
    * Gets the isSignedAuthenticationRequestRequired
    *
    * @return bool|null The isSignedAuthenticationRequestRequired
    */
    public function getIsSignedAuthenticationRequestRequired()
    {
        if (array_key_exists("isSignedAuthenticationRequestRequired", $this->_propDict)) {
            return $this->_propDict["isSignedAuthenticationRequestRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSignedAuthenticationRequestRequired
    *
    * @param bool $val The isSignedAuthenticationRequestRequired
    *
    * @return InternalDomainFederation
    */
    public function setIsSignedAuthenticationRequestRequired($val)
    {
        $this->_propDict["isSignedAuthenticationRequestRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the nextSigningCertificate
    *
    * @return string|null The nextSigningCertificate
    */
    public function getNextSigningCertificate()
    {
        if (array_key_exists("nextSigningCertificate", $this->_propDict)) {
            return $this->_propDict["nextSigningCertificate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nextSigningCertificate
    *
    * @param string $val The nextSigningCertificate
    *
    * @return InternalDomainFederation
    */
    public function setNextSigningCertificate($val)
    {
        $this->_propDict["nextSigningCertificate"] = $val;
        return $this;
    }

    /**
    * Gets the promptLoginBehavior
    *
    * @return PromptLoginBehavior|null The promptLoginBehavior
    */
    public function getPromptLoginBehavior()
    {
        if (array_key_exists("promptLoginBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["promptLoginBehavior"], "\Beta\Microsoft\Graph\Model\PromptLoginBehavior") || is_null($this->_propDict["promptLoginBehavior"])) {
                return $this->_propDict["promptLoginBehavior"];
            } else {
                $this->_propDict["promptLoginBehavior"] = new PromptLoginBehavior($this->_propDict["promptLoginBehavior"]);
                return $this->_propDict["promptLoginBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the promptLoginBehavior
    *
    * @param PromptLoginBehavior $val The promptLoginBehavior
    *
    * @return InternalDomainFederation
    */
    public function setPromptLoginBehavior($val)
    {
        $this->_propDict["promptLoginBehavior"] = $val;
        return $this;
    }

    /**
    * Gets the signingCertificateUpdateStatus
    *
    * @return SigningCertificateUpdateStatus|null The signingCertificateUpdateStatus
    */
    public function getSigningCertificateUpdateStatus()
    {
        if (array_key_exists("signingCertificateUpdateStatus", $this->_propDict)) {
            if (is_a($this->_propDict["signingCertificateUpdateStatus"], "\Beta\Microsoft\Graph\Model\SigningCertificateUpdateStatus") || is_null($this->_propDict["signingCertificateUpdateStatus"])) {
                return $this->_propDict["signingCertificateUpdateStatus"];
            } else {
                $this->_propDict["signingCertificateUpdateStatus"] = new SigningCertificateUpdateStatus($this->_propDict["signingCertificateUpdateStatus"]);
                return $this->_propDict["signingCertificateUpdateStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the signingCertificateUpdateStatus
    *
    * @param SigningCertificateUpdateStatus $val The signingCertificateUpdateStatus
    *
    * @return InternalDomainFederation
    */
    public function setSigningCertificateUpdateStatus($val)
    {
        $this->_propDict["signingCertificateUpdateStatus"] = $val;
        return $this;
    }

    /**
    * Gets the signOutUri
    *
    * @return string|null The signOutUri
    */
    public function getSignOutUri()
    {
        if (array_key_exists("signOutUri", $this->_propDict)) {
            return $this->_propDict["signOutUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signOutUri
    *
    * @param string $val The signOutUri
    *
    * @return InternalDomainFederation
    */
    public function setSignOutUri($val)
    {
        $this->_propDict["signOutUri"] = $val;
        return $this;
    }

}
