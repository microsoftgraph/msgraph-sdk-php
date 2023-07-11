<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InternalDomainFederation extends SamlOrWsFedProvider implements Parsable 
{
    /**
     * Instantiates a new internalDomainFederation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.internalDomainFederation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InternalDomainFederation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InternalDomainFederation {
        return new InternalDomainFederation();
    }

    /**
     * Gets the activeSignInUri property value. URL of the endpoint used by active clients when authenticating with federated domains set up for single sign-on in Azure Active Directory (Azure AD). Corresponds to the ActiveLogOnUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
     * @return string|null
    */
    public function getActiveSignInUri(): ?string {
        $val = $this->getBackingStore()->get('activeSignInUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeSignInUri'");
    }

    /**
     * Gets the federatedIdpMfaBehavior property value. Determines whether Azure AD accepts the MFA performed by the federated IdP when a federated user accesses an application that is governed by a conditional access policy that requires MFA. The possible values are: acceptIfMfaDoneByFederatedIdp, enforceMfaByFederatedIdp, rejectMfaByFederatedIdp, unknownFutureValue. For more information, see federatedIdpMfaBehavior values.
     * @return FederatedIdpMfaBehavior|null
    */
    public function getFederatedIdpMfaBehavior(): ?FederatedIdpMfaBehavior {
        $val = $this->getBackingStore()->get('federatedIdpMfaBehavior');
        if (is_null($val) || $val instanceof FederatedIdpMfaBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'federatedIdpMfaBehavior'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeSignInUri' => fn(ParseNode $n) => $o->setActiveSignInUri($n->getStringValue()),
            'federatedIdpMfaBehavior' => fn(ParseNode $n) => $o->setFederatedIdpMfaBehavior($n->getEnumValue(FederatedIdpMfaBehavior::class)),
            'isSignedAuthenticationRequestRequired' => fn(ParseNode $n) => $o->setIsSignedAuthenticationRequestRequired($n->getBooleanValue()),
            'nextSigningCertificate' => fn(ParseNode $n) => $o->setNextSigningCertificate($n->getStringValue()),
            'promptLoginBehavior' => fn(ParseNode $n) => $o->setPromptLoginBehavior($n->getEnumValue(PromptLoginBehavior::class)),
            'signingCertificateUpdateStatus' => fn(ParseNode $n) => $o->setSigningCertificateUpdateStatus($n->getObjectValue([SigningCertificateUpdateStatus::class, 'createFromDiscriminatorValue'])),
            'signOutUri' => fn(ParseNode $n) => $o->setSignOutUri($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isSignedAuthenticationRequestRequired property value. If true, when SAML authentication requests are sent to the federated SAML IdP, Azure AD will sign those requests using the OrgID signing key. If false (default), the SAML authentication requests sent to the federated IdP are not signed.
     * @return bool|null
    */
    public function getIsSignedAuthenticationRequestRequired(): ?bool {
        $val = $this->getBackingStore()->get('isSignedAuthenticationRequestRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSignedAuthenticationRequestRequired'");
    }

    /**
     * Gets the nextSigningCertificate property value. Fallback token signing certificate that is used to sign tokens when the primary signing certificate expires. Formatted as Base64 encoded strings of the public portion of the federated IdP's token signing certificate. Needs to be compatible with the X509Certificate2 class. Much like the signingCertificate, the nextSigningCertificate property is used if a rollover is required outside of the auto-rollover update, a new federation service is being set up, or if the new token signing certificate is not present in the federation properties after the federation service certificate has been updated.
     * @return string|null
    */
    public function getNextSigningCertificate(): ?string {
        $val = $this->getBackingStore()->get('nextSigningCertificate');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextSigningCertificate'");
    }

    /**
     * Gets the promptLoginBehavior property value. Sets the preferred behavior for the sign-in prompt. The possible values are: translateToFreshPasswordAuthentication, nativeSupport, disabled, unknownFutureValue.
     * @return PromptLoginBehavior|null
    */
    public function getPromptLoginBehavior(): ?PromptLoginBehavior {
        $val = $this->getBackingStore()->get('promptLoginBehavior');
        if (is_null($val) || $val instanceof PromptLoginBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'promptLoginBehavior'");
    }

    /**
     * Gets the signingCertificateUpdateStatus property value. Provides status and timestamp of the last update of the signing certificate.
     * @return SigningCertificateUpdateStatus|null
    */
    public function getSigningCertificateUpdateStatus(): ?SigningCertificateUpdateStatus {
        $val = $this->getBackingStore()->get('signingCertificateUpdateStatus');
        if (is_null($val) || $val instanceof SigningCertificateUpdateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signingCertificateUpdateStatus'");
    }

    /**
     * Gets the signOutUri property value. URI that clients are redirected to when they sign out of Azure AD services. Corresponds to the LogOffUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
     * @return string|null
    */
    public function getSignOutUri(): ?string {
        $val = $this->getBackingStore()->get('signOutUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signOutUri'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activeSignInUri', $this->getActiveSignInUri());
        $writer->writeEnumValue('federatedIdpMfaBehavior', $this->getFederatedIdpMfaBehavior());
        $writer->writeBooleanValue('isSignedAuthenticationRequestRequired', $this->getIsSignedAuthenticationRequestRequired());
        $writer->writeStringValue('nextSigningCertificate', $this->getNextSigningCertificate());
        $writer->writeEnumValue('promptLoginBehavior', $this->getPromptLoginBehavior());
        $writer->writeObjectValue('signingCertificateUpdateStatus', $this->getSigningCertificateUpdateStatus());
        $writer->writeStringValue('signOutUri', $this->getSignOutUri());
    }

    /**
     * Sets the activeSignInUri property value. URL of the endpoint used by active clients when authenticating with federated domains set up for single sign-on in Azure Active Directory (Azure AD). Corresponds to the ActiveLogOnUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
     * @param string|null $value Value to set for the activeSignInUri property.
    */
    public function setActiveSignInUri(?string $value): void {
        $this->getBackingStore()->set('activeSignInUri', $value);
    }

    /**
     * Sets the federatedIdpMfaBehavior property value. Determines whether Azure AD accepts the MFA performed by the federated IdP when a federated user accesses an application that is governed by a conditional access policy that requires MFA. The possible values are: acceptIfMfaDoneByFederatedIdp, enforceMfaByFederatedIdp, rejectMfaByFederatedIdp, unknownFutureValue. For more information, see federatedIdpMfaBehavior values.
     * @param FederatedIdpMfaBehavior|null $value Value to set for the federatedIdpMfaBehavior property.
    */
    public function setFederatedIdpMfaBehavior(?FederatedIdpMfaBehavior $value): void {
        $this->getBackingStore()->set('federatedIdpMfaBehavior', $value);
    }

    /**
     * Sets the isSignedAuthenticationRequestRequired property value. If true, when SAML authentication requests are sent to the federated SAML IdP, Azure AD will sign those requests using the OrgID signing key. If false (default), the SAML authentication requests sent to the federated IdP are not signed.
     * @param bool|null $value Value to set for the isSignedAuthenticationRequestRequired property.
    */
    public function setIsSignedAuthenticationRequestRequired(?bool $value): void {
        $this->getBackingStore()->set('isSignedAuthenticationRequestRequired', $value);
    }

    /**
     * Sets the nextSigningCertificate property value. Fallback token signing certificate that is used to sign tokens when the primary signing certificate expires. Formatted as Base64 encoded strings of the public portion of the federated IdP's token signing certificate. Needs to be compatible with the X509Certificate2 class. Much like the signingCertificate, the nextSigningCertificate property is used if a rollover is required outside of the auto-rollover update, a new federation service is being set up, or if the new token signing certificate is not present in the federation properties after the federation service certificate has been updated.
     * @param string|null $value Value to set for the nextSigningCertificate property.
    */
    public function setNextSigningCertificate(?string $value): void {
        $this->getBackingStore()->set('nextSigningCertificate', $value);
    }

    /**
     * Sets the promptLoginBehavior property value. Sets the preferred behavior for the sign-in prompt. The possible values are: translateToFreshPasswordAuthentication, nativeSupport, disabled, unknownFutureValue.
     * @param PromptLoginBehavior|null $value Value to set for the promptLoginBehavior property.
    */
    public function setPromptLoginBehavior(?PromptLoginBehavior $value): void {
        $this->getBackingStore()->set('promptLoginBehavior', $value);
    }

    /**
     * Sets the signingCertificateUpdateStatus property value. Provides status and timestamp of the last update of the signing certificate.
     * @param SigningCertificateUpdateStatus|null $value Value to set for the signingCertificateUpdateStatus property.
    */
    public function setSigningCertificateUpdateStatus(?SigningCertificateUpdateStatus $value): void {
        $this->getBackingStore()->set('signingCertificateUpdateStatus', $value);
    }

    /**
     * Sets the signOutUri property value. URI that clients are redirected to when they sign out of Azure AD services. Corresponds to the LogOffUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
     * @param string|null $value Value to set for the signOutUri property.
    */
    public function setSignOutUri(?string $value): void {
        $this->getBackingStore()->set('signOutUri', $value);
    }

}
