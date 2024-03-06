<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SamlOrWsFedProvider extends IdentityProviderBase implements Parsable 
{
    /**
     * Instantiates a new SamlOrWsFedProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.samlOrWsFedProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SamlOrWsFedProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SamlOrWsFedProvider {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.internalDomainFederation': return new InternalDomainFederation();
                case '#microsoft.graph.samlOrWsFedExternalDomainFederation': return new SamlOrWsFedExternalDomainFederation();
            }
        }
        return new SamlOrWsFedProvider();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'issuerUri' => fn(ParseNode $n) => $o->setIssuerUri($n->getStringValue()),
            'metadataExchangeUri' => fn(ParseNode $n) => $o->setMetadataExchangeUri($n->getStringValue()),
            'passiveSignInUri' => fn(ParseNode $n) => $o->setPassiveSignInUri($n->getStringValue()),
            'preferredAuthenticationProtocol' => fn(ParseNode $n) => $o->setPreferredAuthenticationProtocol($n->getEnumValue(AuthenticationProtocol::class)),
            'signingCertificate' => fn(ParseNode $n) => $o->setSigningCertificate($n->getStringValue()),
        ]);
    }

    /**
     * Gets the issuerUri property value. Issuer URI of the federation server.
     * @return string|null
    */
    public function getIssuerUri(): ?string {
        $val = $this->getBackingStore()->get('issuerUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuerUri'");
    }

    /**
     * Gets the metadataExchangeUri property value. URI of the metadata exchange endpoint used for authentication from rich client applications.
     * @return string|null
    */
    public function getMetadataExchangeUri(): ?string {
        $val = $this->getBackingStore()->get('metadataExchangeUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadataExchangeUri'");
    }

    /**
     * Gets the passiveSignInUri property value. URI that web-based clients are directed to when signing in to Microsoft Entra services.
     * @return string|null
    */
    public function getPassiveSignInUri(): ?string {
        $val = $this->getBackingStore()->get('passiveSignInUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passiveSignInUri'");
    }

    /**
     * Gets the preferredAuthenticationProtocol property value. Preferred authentication protocol. The possible values are: wsFed, saml, unknownFutureValue.
     * @return AuthenticationProtocol|null
    */
    public function getPreferredAuthenticationProtocol(): ?AuthenticationProtocol {
        $val = $this->getBackingStore()->get('preferredAuthenticationProtocol');
        if (is_null($val) || $val instanceof AuthenticationProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredAuthenticationProtocol'");
    }

    /**
     * Gets the signingCertificate property value. Current certificate used to sign tokens passed to the Microsoft identity platform. The certificate is formatted as a Base64 encoded string of the public portion of the federated IdP's token signing certificate and must be compatible with the X509Certificate2 class.   This property is used in the following scenarios:  if a rollover is required outside of the autorollover update a new federation service is being set up  if the new token signing certificate isn't present in the federation properties after the federation service certificate has been updated.   Microsoft Entra ID updates certificates via an autorollover process in which it attempts to retrieve a new certificate from the federation service metadata, 30 days before expiry of the current certificate. If a new certificate isn't available, Microsoft Entra ID monitors the metadata daily and will update the federation settings for the domain when a new certificate is available.
     * @return string|null
    */
    public function getSigningCertificate(): ?string {
        $val = $this->getBackingStore()->get('signingCertificate');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signingCertificate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('issuerUri', $this->getIssuerUri());
        $writer->writeStringValue('metadataExchangeUri', $this->getMetadataExchangeUri());
        $writer->writeStringValue('passiveSignInUri', $this->getPassiveSignInUri());
        $writer->writeEnumValue('preferredAuthenticationProtocol', $this->getPreferredAuthenticationProtocol());
        $writer->writeStringValue('signingCertificate', $this->getSigningCertificate());
    }

    /**
     * Sets the issuerUri property value. Issuer URI of the federation server.
     * @param string|null $value Value to set for the issuerUri property.
    */
    public function setIssuerUri(?string $value): void {
        $this->getBackingStore()->set('issuerUri', $value);
    }

    /**
     * Sets the metadataExchangeUri property value. URI of the metadata exchange endpoint used for authentication from rich client applications.
     * @param string|null $value Value to set for the metadataExchangeUri property.
    */
    public function setMetadataExchangeUri(?string $value): void {
        $this->getBackingStore()->set('metadataExchangeUri', $value);
    }

    /**
     * Sets the passiveSignInUri property value. URI that web-based clients are directed to when signing in to Microsoft Entra services.
     * @param string|null $value Value to set for the passiveSignInUri property.
    */
    public function setPassiveSignInUri(?string $value): void {
        $this->getBackingStore()->set('passiveSignInUri', $value);
    }

    /**
     * Sets the preferredAuthenticationProtocol property value. Preferred authentication protocol. The possible values are: wsFed, saml, unknownFutureValue.
     * @param AuthenticationProtocol|null $value Value to set for the preferredAuthenticationProtocol property.
    */
    public function setPreferredAuthenticationProtocol(?AuthenticationProtocol $value): void {
        $this->getBackingStore()->set('preferredAuthenticationProtocol', $value);
    }

    /**
     * Sets the signingCertificate property value. Current certificate used to sign tokens passed to the Microsoft identity platform. The certificate is formatted as a Base64 encoded string of the public portion of the federated IdP's token signing certificate and must be compatible with the X509Certificate2 class.   This property is used in the following scenarios:  if a rollover is required outside of the autorollover update a new federation service is being set up  if the new token signing certificate isn't present in the federation properties after the federation service certificate has been updated.   Microsoft Entra ID updates certificates via an autorollover process in which it attempts to retrieve a new certificate from the federation service metadata, 30 days before expiry of the current certificate. If a new certificate isn't available, Microsoft Entra ID monitors the metadata daily and will update the federation settings for the domain when a new certificate is available.
     * @param string|null $value Value to set for the signingCertificate property.
    */
    public function setSigningCertificate(?string $value): void {
        $this->getBackingStore()->set('signingCertificate', $value);
    }

}
