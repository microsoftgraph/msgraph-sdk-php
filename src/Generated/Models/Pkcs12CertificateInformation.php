<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Pkcs12CertificateInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new pkcs12CertificateInformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Pkcs12CertificateInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Pkcs12CertificateInformation {
        return new Pkcs12CertificateInformation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'notAfter' => fn(ParseNode $n) => $o->setNotAfter($n->getIntegerValue()),
            'notBefore' => fn(ParseNode $n) => $o->setNotBefore($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'thumbprint' => fn(ParseNode $n) => $o->setThumbprint($n->getStringValue()),
        ];
    }

    /**
     * Gets the isActive property value. Represents whether the certificate is the active certificate to be used for calling the API connector. The active certificate is the most recently uploaded certificate that isn't yet expired but whose notBefore time is in the past.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        $val = $this->getBackingStore()->get('isActive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isActive'");
    }

    /**
     * Gets the notAfter property value. The certificate's expiry. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @return int|null
    */
    public function getNotAfter(): ?int {
        $val = $this->getBackingStore()->get('notAfter');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notAfter'");
    }

    /**
     * Gets the notBefore property value. The certificate's issue time (not before). This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @return int|null
    */
    public function getNotBefore(): ?int {
        $val = $this->getBackingStore()->get('notBefore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notBefore'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the thumbprint property value. The certificate thumbprint.
     * @return string|null
    */
    public function getThumbprint(): ?string {
        $val = $this->getBackingStore()->get('thumbprint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thumbprint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeIntegerValue('notAfter', $this->getNotAfter());
        $writer->writeIntegerValue('notBefore', $this->getNotBefore());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('thumbprint', $this->getThumbprint());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isActive property value. Represents whether the certificate is the active certificate to be used for calling the API connector. The active certificate is the most recently uploaded certificate that isn't yet expired but whose notBefore time is in the past.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the notAfter property value. The certificate's expiry. This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @param int|null $value Value to set for the notAfter property.
    */
    public function setNotAfter(?int $value): void {
        $this->getBackingStore()->set('notAfter', $value);
    }

    /**
     * Sets the notBefore property value. The certificate's issue time (not before). This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
     * @param int|null $value Value to set for the notBefore property.
    */
    public function setNotBefore(?int $value): void {
        $this->getBackingStore()->set('notBefore', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the thumbprint property value. The certificate thumbprint.
     * @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value): void {
        $this->getBackingStore()->set('thumbprint', $value);
    }

}
