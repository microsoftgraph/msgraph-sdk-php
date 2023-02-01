<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class X509CertificateRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new x509CertificateRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return X509CertificateRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): X509CertificateRule {
        return new X509CertificateRule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'x509CertificateAuthenticationMode' => fn(ParseNode $n) => $o->setX509CertificateAuthenticationMode($n->getEnumValue(X509CertificateAuthenticationMode::class)),
            'x509CertificateRuleType' => fn(ParseNode $n) => $o->setX509CertificateRuleType($n->getEnumValue(X509CertificateRuleType::class)),
        ];
    }

    /**
     * Gets the identifier property value. The identifier of the X.509 certificate. Required.
     * @return string|null
    */
    public function getIdentifier(): ?string {
        return $this->getBackingStore()->get('identifier');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the x509CertificateAuthenticationMode property value. The type of strong authentication mode. The possible values are: x509CertificateSingleFactor, x509CertificateMultiFactor, unknownFutureValue. Required.
     * @return X509CertificateAuthenticationMode|null
    */
    public function getX509CertificateAuthenticationMode(): ?X509CertificateAuthenticationMode {
        return $this->getBackingStore()->get('x509CertificateAuthenticationMode');
    }

    /**
     * Gets the x509CertificateRuleType property value. The type of the X.509 certificate mode configuration rule. The possible values are: issuerSubject, policyOID, unknownFutureValue. Required.
     * @return X509CertificateRuleType|null
    */
    public function getX509CertificateRuleType(): ?X509CertificateRuleType {
        return $this->getBackingStore()->get('x509CertificateRuleType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('identifier', $this->getIdentifier());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('x509CertificateAuthenticationMode', $this->getX509CertificateAuthenticationMode());
        $writer->writeEnumValue('x509CertificateRuleType', $this->getX509CertificateRuleType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the identifier property value. The identifier of the X.509 certificate. Required.
     * @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the x509CertificateAuthenticationMode property value. The type of strong authentication mode. The possible values are: x509CertificateSingleFactor, x509CertificateMultiFactor, unknownFutureValue. Required.
     * @param X509CertificateAuthenticationMode|null $value Value to set for the x509CertificateAuthenticationMode property.
    */
    public function setX509CertificateAuthenticationMode(?X509CertificateAuthenticationMode $value): void {
        $this->getBackingStore()->set('x509CertificateAuthenticationMode', $value);
    }

    /**
     * Sets the x509CertificateRuleType property value. The type of the X.509 certificate mode configuration rule. The possible values are: issuerSubject, policyOID, unknownFutureValue. Required.
     * @param X509CertificateRuleType|null $value Value to set for the x509CertificateRuleType property.
    */
    public function setX509CertificateRuleType(?X509CertificateRuleType $value): void {
        $this->getBackingStore()->set('x509CertificateRuleType', $value);
    }

}
