<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WebApplicationFirewallVerificationModel extends Entity implements Parsable 
{
    /**
     * Instantiates a new WebApplicationFirewallVerificationModel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebApplicationFirewallVerificationModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebApplicationFirewallVerificationModel {
        return new WebApplicationFirewallVerificationModel();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getObjectValue([WebApplicationFirewallProvider::class, 'createFromDiscriminatorValue'])),
            'providerType' => fn(ParseNode $n) => $o->setProviderType($n->getEnumValue(WebApplicationFirewallProviderType::class)),
            'verificationResult' => fn(ParseNode $n) => $o->setVerificationResult($n->getObjectValue([WebApplicationFirewallVerificationResult::class, 'createFromDiscriminatorValue'])),
            'verifiedDetails' => fn(ParseNode $n) => $o->setVerifiedDetails($n->getObjectValue([WebApplicationFirewallVerifiedDetails::class, 'createFromDiscriminatorValue'])),
            'verifiedHost' => fn(ParseNode $n) => $o->setVerifiedHost($n->getStringValue()),
        ]);
    }

    /**
     * Gets the provider property value. The provider property
     * @return WebApplicationFirewallProvider|null
    */
    public function getProvider(): ?WebApplicationFirewallProvider {
        $val = $this->getBackingStore()->get('provider');
        if (is_null($val) || $val instanceof WebApplicationFirewallProvider) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provider'");
    }

    /**
     * Gets the providerType property value. The providerType property
     * @return WebApplicationFirewallProviderType|null
    */
    public function getProviderType(): ?WebApplicationFirewallProviderType {
        $val = $this->getBackingStore()->get('providerType');
        if (is_null($val) || $val instanceof WebApplicationFirewallProviderType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerType'");
    }

    /**
     * Gets the verificationResult property value. The verificationResult property
     * @return WebApplicationFirewallVerificationResult|null
    */
    public function getVerificationResult(): ?WebApplicationFirewallVerificationResult {
        $val = $this->getBackingStore()->get('verificationResult');
        if (is_null($val) || $val instanceof WebApplicationFirewallVerificationResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verificationResult'");
    }

    /**
     * Gets the verifiedDetails property value. The verifiedDetails property
     * @return WebApplicationFirewallVerifiedDetails|null
    */
    public function getVerifiedDetails(): ?WebApplicationFirewallVerifiedDetails {
        $val = $this->getBackingStore()->get('verifiedDetails');
        if (is_null($val) || $val instanceof WebApplicationFirewallVerifiedDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedDetails'");
    }

    /**
     * Gets the verifiedHost property value. The verifiedHost property
     * @return string|null
    */
    public function getVerifiedHost(): ?string {
        $val = $this->getBackingStore()->get('verifiedHost');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedHost'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('provider', $this->getProvider());
        $writer->writeEnumValue('providerType', $this->getProviderType());
        $writer->writeObjectValue('verificationResult', $this->getVerificationResult());
        $writer->writeObjectValue('verifiedDetails', $this->getVerifiedDetails());
        $writer->writeStringValue('verifiedHost', $this->getVerifiedHost());
    }

    /**
     * Sets the provider property value. The provider property
     * @param WebApplicationFirewallProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?WebApplicationFirewallProvider $value): void {
        $this->getBackingStore()->set('provider', $value);
    }

    /**
     * Sets the providerType property value. The providerType property
     * @param WebApplicationFirewallProviderType|null $value Value to set for the providerType property.
    */
    public function setProviderType(?WebApplicationFirewallProviderType $value): void {
        $this->getBackingStore()->set('providerType', $value);
    }

    /**
     * Sets the verificationResult property value. The verificationResult property
     * @param WebApplicationFirewallVerificationResult|null $value Value to set for the verificationResult property.
    */
    public function setVerificationResult(?WebApplicationFirewallVerificationResult $value): void {
        $this->getBackingStore()->set('verificationResult', $value);
    }

    /**
     * Sets the verifiedDetails property value. The verifiedDetails property
     * @param WebApplicationFirewallVerifiedDetails|null $value Value to set for the verifiedDetails property.
    */
    public function setVerifiedDetails(?WebApplicationFirewallVerifiedDetails $value): void {
        $this->getBackingStore()->set('verifiedDetails', $value);
    }

    /**
     * Sets the verifiedHost property value. The verifiedHost property
     * @param string|null $value Value to set for the verifiedHost property.
    */
    public function setVerifiedHost(?string $value): void {
        $this->getBackingStore()->set('verifiedHost', $value);
    }

}
