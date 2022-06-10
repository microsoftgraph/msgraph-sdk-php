<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InternalDomainFederation extends SamlOrWsFedProvider implements Parsable 
{
    /**
     * @var string|null $activeSignInUri URL of the endpoint used by active clients when authenticating with federated domains set up for single sign-on in Azure Active Directory (Azure AD). Corresponds to the ActiveLogOnUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
    */
    private ?string $activeSignInUri = null;
    
    /**
     * @var FederatedIdpMfaBehavior|null $federatedIdpMfaBehavior Determines whether Azure AD accepts the MFA performed by the federated IdP when a federated user accesses an application that is governed by a conditional access policy that requires MFA. The possible values are: acceptIfMfaDoneByFederatedIdp, enforceMfaByFederatedIdp, rejectMfaByFederatedIdp, unknownFutureValue. For more information, see federatedIdpMfaBehavior values.
    */
    private ?FederatedIdpMfaBehavior $federatedIdpMfaBehavior = null;
    
    /**
     * @var bool|null $isSignedAuthenticationRequestRequired If true, when SAML authentication requests are sent to the federated SAML IdP, Azure AD will sign those requests using the OrgID signing key. If false (default), the SAML authentication requests sent to the federated IdP are not signed.
    */
    private ?bool $isSignedAuthenticationRequestRequired = null;
    
    /**
     * @var string|null $nextSigningCertificate Fallback token signing certificate that is used to sign tokens when the primary signing certificate expires. Formatted as Base64 encoded strings of the public portion of the federated IdP's token signing certificate. Needs to be compatible with the X509Certificate2 class. Much like the signingCertificate, the nextSigningCertificate property is used if a rollover is required outside of the auto-rollover update, a new federation service is being set up, or if the new token signing certificate is not present in the federation properties after the federation service certificate has been updated.
    */
    private ?string $nextSigningCertificate = null;
    
    /**
     * @var PromptLoginBehavior|null $promptLoginBehavior Sets the preferred behavior for the sign-in prompt. The possible values are: translateToFreshPasswordAuthentication, nativeSupport, disabled, unknownFutureValue.
    */
    private ?PromptLoginBehavior $promptLoginBehavior = null;
    
    /**
     * @var SigningCertificateUpdateStatus|null $signingCertificateUpdateStatus Provides status and timestamp of the last update of the signing certificate.
    */
    private ?SigningCertificateUpdateStatus $signingCertificateUpdateStatus = null;
    
    /**
     * @var string|null $signOutUri URI that clients are redirected to when they sign out of Azure AD services. Corresponds to the LogOffUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
    */
    private ?string $signOutUri = null;
    
    /**
     * Instantiates a new internalDomainFederation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->activeSignInUri;
    }

    /**
     * Gets the federatedIdpMfaBehavior property value. Determines whether Azure AD accepts the MFA performed by the federated IdP when a federated user accesses an application that is governed by a conditional access policy that requires MFA. The possible values are: acceptIfMfaDoneByFederatedIdp, enforceMfaByFederatedIdp, rejectMfaByFederatedIdp, unknownFutureValue. For more information, see federatedIdpMfaBehavior values.
     * @return FederatedIdpMfaBehavior|null
    */
    public function getFederatedIdpMfaBehavior(): ?FederatedIdpMfaBehavior {
        return $this->federatedIdpMfaBehavior;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeSignInUri' => function (ParseNode $n) use ($o) { $o->setActiveSignInUri($n->getStringValue()); },
            'federatedIdpMfaBehavior' => function (ParseNode $n) use ($o) { $o->setFederatedIdpMfaBehavior($n->getEnumValue(FederatedIdpMfaBehavior::class)); },
            'isSignedAuthenticationRequestRequired' => function (ParseNode $n) use ($o) { $o->setIsSignedAuthenticationRequestRequired($n->getBooleanValue()); },
            'nextSigningCertificate' => function (ParseNode $n) use ($o) { $o->setNextSigningCertificate($n->getStringValue()); },
            'promptLoginBehavior' => function (ParseNode $n) use ($o) { $o->setPromptLoginBehavior($n->getEnumValue(PromptLoginBehavior::class)); },
            'signingCertificateUpdateStatus' => function (ParseNode $n) use ($o) { $o->setSigningCertificateUpdateStatus($n->getObjectValue(array(SigningCertificateUpdateStatus::class, 'createFromDiscriminatorValue'))); },
            'signOutUri' => function (ParseNode $n) use ($o) { $o->setSignOutUri($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isSignedAuthenticationRequestRequired property value. If true, when SAML authentication requests are sent to the federated SAML IdP, Azure AD will sign those requests using the OrgID signing key. If false (default), the SAML authentication requests sent to the federated IdP are not signed.
     * @return bool|null
    */
    public function getIsSignedAuthenticationRequestRequired(): ?bool {
        return $this->isSignedAuthenticationRequestRequired;
    }

    /**
     * Gets the nextSigningCertificate property value. Fallback token signing certificate that is used to sign tokens when the primary signing certificate expires. Formatted as Base64 encoded strings of the public portion of the federated IdP's token signing certificate. Needs to be compatible with the X509Certificate2 class. Much like the signingCertificate, the nextSigningCertificate property is used if a rollover is required outside of the auto-rollover update, a new federation service is being set up, or if the new token signing certificate is not present in the federation properties after the federation service certificate has been updated.
     * @return string|null
    */
    public function getNextSigningCertificate(): ?string {
        return $this->nextSigningCertificate;
    }

    /**
     * Gets the promptLoginBehavior property value. Sets the preferred behavior for the sign-in prompt. The possible values are: translateToFreshPasswordAuthentication, nativeSupport, disabled, unknownFutureValue.
     * @return PromptLoginBehavior|null
    */
    public function getPromptLoginBehavior(): ?PromptLoginBehavior {
        return $this->promptLoginBehavior;
    }

    /**
     * Gets the signingCertificateUpdateStatus property value. Provides status and timestamp of the last update of the signing certificate.
     * @return SigningCertificateUpdateStatus|null
    */
    public function getSigningCertificateUpdateStatus(): ?SigningCertificateUpdateStatus {
        return $this->signingCertificateUpdateStatus;
    }

    /**
     * Gets the signOutUri property value. URI that clients are redirected to when they sign out of Azure AD services. Corresponds to the LogOffUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
     * @return string|null
    */
    public function getSignOutUri(): ?string {
        return $this->signOutUri;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activeSignInUri', $this->activeSignInUri);
        $writer->writeEnumValue('federatedIdpMfaBehavior', $this->federatedIdpMfaBehavior);
        $writer->writeBooleanValue('isSignedAuthenticationRequestRequired', $this->isSignedAuthenticationRequestRequired);
        $writer->writeStringValue('nextSigningCertificate', $this->nextSigningCertificate);
        $writer->writeEnumValue('promptLoginBehavior', $this->promptLoginBehavior);
        $writer->writeObjectValue('signingCertificateUpdateStatus', $this->signingCertificateUpdateStatus);
        $writer->writeStringValue('signOutUri', $this->signOutUri);
    }

    /**
     * Sets the activeSignInUri property value. URL of the endpoint used by active clients when authenticating with federated domains set up for single sign-on in Azure Active Directory (Azure AD). Corresponds to the ActiveLogOnUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
     *  @param string|null $value Value to set for the activeSignInUri property.
    */
    public function setActiveSignInUri(?string $value ): void {
        $this->activeSignInUri = $value;
    }

    /**
     * Sets the federatedIdpMfaBehavior property value. Determines whether Azure AD accepts the MFA performed by the federated IdP when a federated user accesses an application that is governed by a conditional access policy that requires MFA. The possible values are: acceptIfMfaDoneByFederatedIdp, enforceMfaByFederatedIdp, rejectMfaByFederatedIdp, unknownFutureValue. For more information, see federatedIdpMfaBehavior values.
     *  @param FederatedIdpMfaBehavior|null $value Value to set for the federatedIdpMfaBehavior property.
    */
    public function setFederatedIdpMfaBehavior(?FederatedIdpMfaBehavior $value ): void {
        $this->federatedIdpMfaBehavior = $value;
    }

    /**
     * Sets the isSignedAuthenticationRequestRequired property value. If true, when SAML authentication requests are sent to the federated SAML IdP, Azure AD will sign those requests using the OrgID signing key. If false (default), the SAML authentication requests sent to the federated IdP are not signed.
     *  @param bool|null $value Value to set for the isSignedAuthenticationRequestRequired property.
    */
    public function setIsSignedAuthenticationRequestRequired(?bool $value ): void {
        $this->isSignedAuthenticationRequestRequired = $value;
    }

    /**
     * Sets the nextSigningCertificate property value. Fallback token signing certificate that is used to sign tokens when the primary signing certificate expires. Formatted as Base64 encoded strings of the public portion of the federated IdP's token signing certificate. Needs to be compatible with the X509Certificate2 class. Much like the signingCertificate, the nextSigningCertificate property is used if a rollover is required outside of the auto-rollover update, a new federation service is being set up, or if the new token signing certificate is not present in the federation properties after the federation service certificate has been updated.
     *  @param string|null $value Value to set for the nextSigningCertificate property.
    */
    public function setNextSigningCertificate(?string $value ): void {
        $this->nextSigningCertificate = $value;
    }

    /**
     * Sets the promptLoginBehavior property value. Sets the preferred behavior for the sign-in prompt. The possible values are: translateToFreshPasswordAuthentication, nativeSupport, disabled, unknownFutureValue.
     *  @param PromptLoginBehavior|null $value Value to set for the promptLoginBehavior property.
    */
    public function setPromptLoginBehavior(?PromptLoginBehavior $value ): void {
        $this->promptLoginBehavior = $value;
    }

    /**
     * Sets the signingCertificateUpdateStatus property value. Provides status and timestamp of the last update of the signing certificate.
     *  @param SigningCertificateUpdateStatus|null $value Value to set for the signingCertificateUpdateStatus property.
    */
    public function setSigningCertificateUpdateStatus(?SigningCertificateUpdateStatus $value ): void {
        $this->signingCertificateUpdateStatus = $value;
    }

    /**
     * Sets the signOutUri property value. URI that clients are redirected to when they sign out of Azure AD services. Corresponds to the LogOffUri property of the Set-MsolDomainFederationSettings MSOnline v1 PowerShell cmdlet.
     *  @param string|null $value Value to set for the signOutUri property.
    */
    public function setSignOutUri(?string $value ): void {
        $this->signOutUri = $value;
    }

}
